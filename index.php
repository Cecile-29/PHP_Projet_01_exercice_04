<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet01 Exercice04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet01 Exercice04</h1>
            <h3 class="col-12 text-info text-center">Créez une variable age aléatoire. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge obtenu.</h3>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary text-center">
        <?php
            $age = rand(0, 100);
            echo $age;
            if($age >= 18){
                echo ' Vous êtes majeur ! ';
            }else           
                echo ' Vous êtes mineur ! ';  
          
        ?>
        </div>
    </div> 
</body>
</html>