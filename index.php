<?php

require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/SerieTv.php';




$movies = [
    new Movie('Toy Story', 'English', 8,'https://image.tmdb.org/t/p/w342//uXDfjJbdP4ijW5hWSBrPrlKpxab.jpg', '1M €','90 minuti'),
    new Movie('Harry Potter', 'English', 6,'https://image.tmdb.org/t/p/w342//wuMc08IPKEatf9rnMNXvIDxqP4W.jpg', '10M €','100 minuti'),
    new Movie('Goal', 'Spanish', 7,'https://image.tmdb.org/t/p/w342//9YZhJGoIbJtrjDYbENGhR6f6SZE.jpg', '1M €', '95 minuti'),
    new Movie('Avatar', 'English', 9,'https://image.tmdb.org/t/p/w342//kyeqWdyUXW608qlYkRqosgbbJyK.jpg', '2M €', '120 minuti'),
];

$serisTv = [
    new SerieTv('Lost', 'English', 8,'https://image.tmdb.org/t/p/w342//sgxVVoe2I84pR3AVdfyc1OxvdAJ.jpg', '1 season'),
    new SerieTv('Casa de Papel', 'Spanish', 7,'https://image.tmdb.org/t/p/w342//reEMJA1uzscCbkpeRJeTT2bjqUp.jpg', '2 season '),
    new SerieTv('Breaking Bad', 'English', 8,'https://image.tmdb.org/t/p/w342//ApitDfnYDwFNOPfyVuhW5ElWzhe.jpg', '4 season'),
    new SerieTv('Tom and Gerry', 'English', 9,'https://image.tmdb.org/t/p/w342//8XZI9QZ7Pm3fVkigWJPbrXCMzjq.jpg', '3 season'),


];


// foreach($movies as $obj) {
//     echo $obj->sommario();
//     echo $obj->getType();
// }




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
                            <p><?php echo $movie->profits?></p>
                            <p><?php echo $movie->time?></p>

                        </div>
                    </div>
                    
                </div>
            <?php } ?>

            <?php foreach ($serisTv as $serietv) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <img class="locandina" src="<?php echo $serietv->image;?>" alt="">
                        </div>
                        <div class="card-body">
                            <h2><?php echo $serietv->title;?></h2>
                            <p><?php echo $serietv->language;?></p>
                            <p><?php echo $serietv->vote;?></p>
                            <p><?php echo $serietv->season?></p>
                        </div>
                    </div>
                    
                </div>
            <?php } ?>


        </div>
    </div>
</body>

</html>