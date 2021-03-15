<?php 
class Movie {
    public $title;
    public $film_director;

    public function __construct($_title,$_film_director){
        $this->title = $_title;
        $this->film_director = $_film_director;
    } 

    public function getTitle(){
        return $this->title;
    }

    public function getDirector(){
        return $this->film_director;
    }

    public function pubblication($yearPublication){
        return date('Y') - $yearPublication;
    }

    public function security($age){
        if($age == 3){
            return 'Film per adulti';
        } else if ($age == 2){
            return 'Bambini accompagnati';
        } else{
            return 'Film per tutti';
        }
    }
}

$fast1 = new Movie('Fast and Furious', 'Rob Cohen');
$fast2 = new Movie('2 Fast 2 Furious', 'John Singleton');

$pub1 = $fast1 -> pubblication(2001);
$pub2 = $fast2 -> pubblication(2003);

$name1 = $fast1 -> getTitle();
$name2 = $fast2 -> getTitle();

$nameDirector1 = $fast1 -> getDirector();
$nameDirector2 = $fast2 -> getDirector();

// var_dump($fast1);
// var_dump(fast2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Programmazione a oggetti PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">

    <h1>Film</h1>

        <div class="general-box">

            <div class="box-left">
                <h2><?php echo $name1 ?></h2>
                <img src="https://upload.wikimedia.org/wikipedia/en/5/54/Fast_and_the_furious_poster.jpg" alt="fast-1">
                <p> <strong>Regista:</strong> <?php echo $nameDirector1?></p>
                <p> <strong>Categoria:</strong> <?php echo  $fast1-> security(3)?> </p>
                <p> <strong>Info:</strong> Sono trascorsi <?php echo $pub1?> anni dall'uscita del film</p>
            </div>
            <div class="box-right">
                <h2><?php echo $name2 ?></h2>
                <img src="https://m.media-amazon.com/images/M/MV5BMzExYjcyYWMtY2JkOC00NDUwLTg2OTgtMDI3MGY2OWQzMDE2XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg" alt="fast-2">
                <p> <strong>Regista:</strong> <?php echo $nameDirector2?></p>
                <p> <strong>Categoria:</strong> <?php echo  $fast1-> security(3)?> </p>
                <p> <strong>Info:</strong> Sono trascorsi <?php echo $pub2?> anni dall'uscita del film</p>

            </div>

        </div>

    </div>

</body>
</html>