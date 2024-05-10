<?php
class Movie extends Production
{
    public $profits;
    public $time;

    function __construct($_profits, $_time)
    {
        $this->profits = $_profits;
        $this->time = $_time;
    }
}
?>