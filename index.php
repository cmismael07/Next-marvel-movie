<?php

$name= "Isma";
$isDev= true;
$age = 24;
// $isOld = $age > 40;
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');
$output= "Hola $name, con una edad de $age";
$outputAge = match(true) {
    $age < 2  => "Eres un bebé, $name",
    $age < 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name", 
    $age < 35 => "Eres un adulto joven, $name",
    default   => "Eres un adulto, $name"
};

$bestLanguages = ["javascript", "php", "c++", "python"];
$bestLanguages[] = "Typescript"

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $age = isset($_POST['age'])? htmlspecialchars($_POST['nombre']): 'No proporcionada';
     # code...
// }

    //Ternaria  ?'Ya pongase a chambear'
    //Ternaria  :'Estudia hijo';
?>
<ul>
    <?php foreach ($bestLanguages as $key => $language):  ?>
        <li><?= $key."  ". $language ?> </li>
    <?php endforeach;  ?>   
</ul>

<h3>
El mejor lenguaje es <?= $bestLanguages[2] ?>
</h3>
<!--form method="post">
<label for="edad">Ingrese su edad: </label>
<input type="text" id="edad" name="edad" placeholder="Escribe tu edad" required>
<input type="submit" value="enviar">
</form-->
 <h2> <?= $outputAge?> </h2>

<!-- <?php if ($isOld): ?> -->
    <!-- <h2>Ya pongase  a chambear</h2>
     .....
     ....
     ...
     ..
     .
     <etc>
      -->
<!-- <?php elseif ($isDev): ?> -->
    <!-- <h2>Eres dev, estás jodido</h2>  -->
<!-- <?php else : ?> -->
    <!-- <h2>Eres joven amigo, felicidades</h2> -->
<!-- <?php endif; ?> -->












<img src="<?=LOGO_URL ?>" alt="PHP LOGO" width="200">

<h1>
    <?= $output; ?>
</h1>

<a href="index2.php">VER</a>






















<style>
    :root{
        color-scheme: dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
