<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hola de nuevo!</title>
    <style>
        .col {
            background-color: aqua;
            border: 1px solid white;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php
            for ($i=0; $i < 10; $i++) { 
                ?>
                <div class="col-3">
                <div class="card" style="width: 18rem;">
                <img src="images/card2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <?php
            }
            ?>            
        </div>
    </div>
    <?php
    $num1 = 23;
    $num2 = 33;
    
    echo "Numero 1: $num1 <br />";
    echo "Numero 2: $num2 <br />";

    echo "La suma es: ".((int)$num1+(int)$num2)."<br />";
    echo "La resta es: ".((int)$num1-(int)$num2)."<br />";
    echo "La multiplicacione es: ".$num1*$num2."<br />";
    echo "La división es: ".$num1/$num2."<br />";
    echo "El modulo es: ".$num1%$num2."<br />";
    echo "La Exponencial es: ".$num1**$num2."<br />";

    $estudiantes = ['alan', 'jaime', 'pedro', 'alberto'];
    echo "Imprimiendo Array: <br />";
    for ($i=0; $i < count($estudiantes); $i++) { 
        echo $estudiantes[$i]."<br />";
    }
    ?>

    <?php 
    /**
     * Diccionarios
     */
    $language = [
        "en" => "english",
        "es" => "espanish"
    ];

    foreach ($language as $key => $value) {
        echo "$key => $value <br/>";
    }
    ?>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>