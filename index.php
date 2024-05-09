<?php

$movies = [];
class Production
{
    public $title;
    public $language;
    public $vote;

    function __construct($_title, $_language, $_vote)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->vote = $_vote;
    }
}

$toy_story = new Production('Toy Story', 'English', 8);

$movies[] = $toy_story;

$harry_potter = new Production('Harry Potter', 'English', 6);

$movies[] = $harry_potter;


$goal = new Production('Goal', 'Spanish', 7);

$movies[] = $goal;


$avatar = new Production('Avatar', 'English', 9);

$movies[] = $avatar;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($movies as $movie) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h2><?php echo $movie->title;?></h2>
                            <p><?php echo $movie->language;?></p>
                            <p><?php echo $movie->vote;?></p>

                        </div>
                    </div>
                    
                </div>
            <?php } ?>


        </div>
    </div>
</body>

</html>