<?php

$movies = [];
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

$movies[] = $toy_story;

$harry_potter = new Production('Harry Potter','English',6);

$movies[] = $harry_potter;


$goal = new Production('Goal','Spanish',7);

$movies[] = $goal;


$avatar = new Production('Avatar','English',9);

$movies[] = $avatar;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                

            </div>

           

        </div>
    </div>
</body>
</html>