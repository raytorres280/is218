<?php
define("UPLOAD_DIR", "~/public_html/download");
class FileUpload {

  protected $file = array(); //pull in whole $_FILES array instead of just file so I can error check in here.
  protected $fileName;

  public function __construct($file, $fileName)
  {
    if (!empty($file)) {
      $this->file = $file[$fileName];
      $this->fileName = $fileName;

      if ($file[$fileName]['error'] != UPLOAD_ERR_OK) {
        throw new Exception('an error occured.');
      }
      $name = preg_replace("/[^A-Z0-9._-]/i", "_", $file[$fileName]['name']); //match anything not in the regexp, replace with '_', ensures safe file names.

      // don't overwrite an existing file
      $i = 0;
      $parts = pathinfo($name);
      while (file_exists(UPLOAD_DIR . $name)) {
          $i++;
          $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
      }
      // preserve file from temporary directory
    $success = move_uploaded_file($file[$fileName]["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) {
        echo "Unable to save file.";
        exit;
    }

    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);

  }//end of empty file check.

}

  function getFile() {
    return $this->file;
  }

  function saveFile() {

  }
}

//demonstration.
$file = new FileUpload($_FILES, 'myFile');
print_r($file);
echo '<br>';


 ?>
<html>
 <form action="FileUpload.php" method="post" enctype="multipart/form-data">

  <input type="file" name="myFile">
  <br>
  <input type="submit" value="Upload">
 </form>
</html>
