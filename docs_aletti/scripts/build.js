const fs = require('fs');
const faker = require('faker/locale/it');

let base = { "esito": {"tipo": "OK" }},
    fakerLength = 100,
    jsonName = "customers_search_data.json";

//region Customers
let customersJson = {
    "data": []
};

function randValuta(max,min) {
    if (max == null) max = 1000000;
    if (min == null) min = -max;
    return (Math.random()>0.3)? (Math.random() * max) : (Math.random() * min);

}

function randIndex() {
    let random = Math.random()*10;
    return (random>=6)? 1 : ((random<4)? -1 : 0 );
}

function randArr(arr) {

    let randomIndex = parseInt(Math.random() * arr.length);
    return arr[randomIndex];


}

function randAlpha(size) {
    let value = ""
    for(let x = 1; x <= size; ++x) {
        value +=faker.random.alphaNumeric().toUpperCase();
    }
    return value;
}

for (let i = 1; i <= fakerLength; ++i) {
    const gender = faker.random.number(1);

    customersJson.data.push({
        "id": i,
        "nome": faker.name.firstName(gender),
        "cognome": faker.name.lastName(gender),
        "ndg": randAlpha(12),
        "tipocontr": randArr(["PA","APA"]),
        "ctvptf":faker.random.number(),
        "liq": randValuta(10000000,-10000),
        "rmkt": randIndex(),
        "rmktatt": randValuta(5,-5),
        "rmktamm": randValuta(5,-5),
        "rcr" : randIndex(),
        "rcratt" : randValuta(5,-5),
        "rcramm" : randValuta(5,-5),
        "rliq": randIndex(),
        "rconc": randIndex(),
        "greylist": randIndex(),
        "greylistatt":randValuta(5,-5),
        "greylistamm": randValuta(5,-5),
        "vmkt": randIndex(),
        "vcr": randIndex(),
        "ggdis":parseInt(randValuta(364,0)),
        "titscad": randIndex(),
        "ultcons": Date.parse(faker.date.past()),
        "trend": randIndex(),
        "datanascita": Date.parse(faker.date.past()),
        "alert": randArr([0,1]),
        "mp": randArr([-1,1])
    });
}
const createData = json => Object.assign({}, base, json);

let data = JSON.stringify(createData(customersJson), null, 4);

fs.writeFile('public/json_data/' + jsonName, data, (err) => {
    if (err) throw err;
    console.log('Data written to file');
});
//endregion

console.log('This is after the write call');
