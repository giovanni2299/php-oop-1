<?php
require_once __DIR__ . '/Production.php';
class Movie extends Production
{
    public $profits;
    public $time;

    function __construct($_title, $_language, $_vote, $_image, $_profits, $_time)
    {
        parent:: __construct($_title, $_language, $_vote, $_image);
        $this->profits = $_profits;
        $this->time = $_time;
    }

    // function getType() {
    //     return 'movie';
    // }

    // function sommario()
    // {
    //     return $this->title . ' ' . $this->profits;
    // }
}
?>