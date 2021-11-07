let dataLat = document.querySelector("data-lat");
let dataLng = document.querySelector("data-lng");
let marques = [];
let nameArray = [];
let nameDataLat = [];
let nameDataLng = [];

fetch("./bdd.json")
    .then(response => response.json())
    .then(data => {
        for (i = 0; i < data.marque.length; i++) {
            marques.push(data.marque[i])
        }

    });

for (i = 0; i < marques.length; i++) {
    nameArray.push(marques[i].name)
    console.log(marques[0])
}


for (const property in marques) {
    console.log(`${property}: ${marques[property]}`);
}

console.log(data.marque[i])