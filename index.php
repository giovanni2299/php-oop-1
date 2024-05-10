<?php

require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/SerieTv.php';


$movies = [];
class Production
{
    public $title;
    public $language;
    public $vote;
    public $image;

    function __construct($_title, $_language, $_vote, $_image)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->vote = $_vote;
        $this->image = $_image;
    }
}

$toy_story = new Production('Toy Story', 'English', 8,'https://image.tmdb.org/t/p/w342//uXDfjJbdP4ijW5hWSBrPrlKpxab.jpg');

$movies[] = $toy_story;

$harry_potter = new Production('Harry Potter', 'English', 6,'https://image.tmdb.org/t/p/w342//wuMc08IPKEatf9rnMNXvIDxqP4W.jpg');

$movies[] = $harry_potter;


$goal = new Production('Goal', 'Spanish', 7,'https://image.tmdb.org/t/p/w342//9YZhJGoIbJtrjDYbENGhR6f6SZE.jpg');

$movies[] = $goal;


$avatar = new Production('Avatar', 'English', 9,'https://image.tmdb.org/t/p/w342//kyeqWdyUXW608qlYkRqosgbbJyK.jpg');

$movies[] = $avatar;

$movies = new Movie('1.00000.000','90 minuti');

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
                        <div class="card-header">
                            <img class="locandina" src="<?php echo $movie->image;?>" alt="">
                        </div>
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