<?php
class Editor {

    private $name = "";
    public $articleId;

    function __construct($name) {
        $this->name = $name;
    }

    public function setNextArticle($articleId) {
        $this->articleId = $articleId;
    }

    public function publish() {
        echo ("HERE\n");
        return true;
    }

    function getEditorName() {
        return $this->name;
    }


}
//test comment
/*test2*/
?>
