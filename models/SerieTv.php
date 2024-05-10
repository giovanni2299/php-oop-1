<?php
require_once __DIR__ . '/Production.php';

class SerieTv extends Production
{
    public $season;

    public function __construct($_title, $_language, $_vote, $_image, $_season) {
        parent:: __construct($_title, $_language, $_vote, $_image);
        $this->season = $_season;
    }

    // function getType() {
    //     return 'tvseries';
    // }

    // function sommario()
    // {
    //     return $this->title . ' ' . $this->season;
    // }
}
?>