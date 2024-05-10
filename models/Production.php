<?php
class Production
{
    // Variabili di istanza
    public $title;
    public $language;
    public $vote;
    public $image;

    // Metodi
    function __construct($_title, $_language, $_vote, $_image)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->vote = $_vote;
        $this->image = $_image;
    }

    // function getType() {
    //     return 'production';
    // }

    // function sommario() {
    //     return '';
    // }
}