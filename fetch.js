const dataLat = document.querySelector(".container");
let marques = [],
    nameArray = [],
    nameDescription = [],
    nameDepartment = [],
    nameRegion = [],
    nameDataLat = [],
    nameDataLng = [];

fetch("./bdd.json")
    .then((response) => response.json())
    .then((data) => {
        for (i = 0; i < data.marque.length; i++) {
            marques.push(data.marque[i]);
        }
        for (i = 0; i < marques.length; i++) {
            nameArray.push(marques[i].name);
            nameDescription.push(marques[i].description);
            nameDepartment.push(marques[i].department);
            nameRegion.push(marques[i].region);
            nameDataLat.push(marques[i].datalat);
            nameDataLng.push(marques[i].datalng);
        }
        console.log(marques.length)
        for (i = 0; i < marques.length; i++) {
            dataLat.innerHTML += `<div class="container__card item js-marker" data-lat="${nameDataLat[i]/1000}" data-lng="${nameDataLng[i]/1000}" data-price="${nameArray[i]}">
            <div class="card__left">
                <img src="https://cdn.discordapp.com/attachments/894915998417838120/902537163630071808/unknown.png" alt="">
            </div>
            <div class="card__right">
                <h3>${nameArray[i]}</h3>
                <p>Description de la localistion</p>
            </div>
        </div>`
        };
    });