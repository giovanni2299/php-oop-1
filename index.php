<?php
class Production{
    public $title;
    public $language;
    public $vote;

    function __construct($_title, $_language, $_vote)
    {
        $this->title = $_title;
        $this->language =$_language;
        $this->vote = $_vote;
    }
}

$toy_story = new Production('Toy Story','English',8);
$harry_potter = new Production('Harry Potter','English',6);
$goal = new Production('Goal','Spanish',7);
$avatar = new Production('Avatar','English',9);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>