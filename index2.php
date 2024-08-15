<?php 
 const API_URL= "https://whenisthenextmcufilm.com/api";
 #Inicializar una nueva sesión de cURL = cURL handle
$ch = curl_init(API_URL);
//inidicar que queremos recibir el resultado de la petición y no imprimir el resultado en pantalla
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición
y guardar el resultado */

$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);



?>
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="La próxima película de marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>

<main>
    <!-- <pre style="font-size: 8x; overflow:scroll; height: 250px;">
    <?php var_dump($data); ?>
    </pre> -->
    <section>
    <img src="<?= $data["poster_url"]; ?>" width=" 300" alt="Poster de <?= $data["title"]; ?>" 
    style="border-radius: 6px;">
    </section>

    <hgroup>
         <h3> <?= $data["title"]; ?> se strena en <?= $data["days_until"]; ?> días</h3>
         <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
         <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>

    </hgroup>
</main> 


<style>
    /* :root{
        color-scheme: dark;
    } */

    body {
        display: grid;
        place-content: center;
        background-color: beige;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>