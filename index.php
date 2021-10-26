<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
    <main>
        <div class="container">
            <?php
            for ($i = 0; $i < 60; $i++) { ?>

                <div class="container__card">
                    <img src="https://cdn.discordapp.com/attachments/894915998417838120/902537163630071808/unknown.png" alt="">
                    <h3>Titre de base</h3>
                    <p>Description de la localistion</p>
                </div>


            <?php }; ?>

            
        </div>

        <div class="map" id="map">
           


        </div>
    </main>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
<script src="app.js"></script>
</body>

</html>