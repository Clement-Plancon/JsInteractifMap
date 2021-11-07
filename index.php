<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" href="style.css">

</head>
<?php
function randomName() {
    $names = array(
        'Monsieur Charli',
        'LAuthentique - Cosmétiques naturels',
        'ROMATIC',
        'Flowrette',
        'Sophie Bijoux',
        'La Chanvré CBD-Paris',
        'KANDA',
        'Mainty',
        'Prakriti',
        'Éclat de nature',
        'Fauna',
        'Diaiwaie',
        'Vallicouture',
        'Sept Mai',
        'Le Mousse',
        'F.A.D.A',
        'Kare',
        'ANA MAYA lab.',
        'IZZIBOX',
        'Esprit Loft Recup',
        'Bloom',
        'DUSUD',
        'Etic etic',
        'Woogy',
        'Liya S.',
        'Flopies Illustrations',
        'Maison FK',
        'Mauvaises graines',
        'Tea of the Moon',
        'JeSuisGreen',
        'Arcancil Paris',

    );
    return $names[rand ( 0 , count($names) -1)];
}
?>


<body>
    <main>
        <div class="container">
            <?php
            for ($i = 0; $i < 30; $i++) { ?>

                <div class="container__card item js-marker" data-lat="<?php echo (rand(48817, 48898)/1000); ?>" data-lng="<?php echo (rand(2255, 2413)/1000); ?>" data-price="<?php echo randomName(); ?>">
                    <div class="card__left">
                        <img src="https://cdn.discordapp.com/attachments/894915998417838120/902537163630071808/unknown.png" alt="">
                    </div>
                    <div class="card__right">
                        <h3>Titre de base</h3>
                        <p>Description de la localistion</p>
                    </div>
                </div>


            <?php }; ?>


        </div>

        <div class="map" id="map">



        </div>
    </main>

    <script src="fetch.js"></script>
    <script src="vendor.js"></script>
    <script src="app.js"></script>
</body>

</html>