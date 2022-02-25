<?php 
class movies{
    public $title;
    public $description;
    public $duration;
    public $votes;


    public function __construct($_title,$_description){
        $this->title = $_title;
        $this->description = $_description;
    }

    public function getData(){
        return "{$this->title} {$this->description}";
    }
}
?>

