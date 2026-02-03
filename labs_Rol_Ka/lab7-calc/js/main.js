const display = document.getElementById("display"); // Ekrano elementas
let justCalculated = false; // Ar ką tik apskaičiavome rezultatą

// Mygtuko paspaudimo funkcija
function press(value) { // Mygtuko paspaudimo funkcija
    const operators = ['+', '-', '*', '/']; // Operatoriai
    const lastChar = display.value.slice(-1); // Paskutinis simbolis ekrane
    if (justCalculated && !operators.includes(value)) { // Jei ką tik apskaičiavome ir įvedėme skaičių
        display.value = ""; // Išvalome ekraną
        justCalculated = false; // Nustatome, kad nebėra ką tik apskaičiuota
    }
    if (operators.includes(value) && operators.includes(lastChar)) { // Užkirsti kelią dviem operatoriams iš eilės
        return; // Išeiti iš funkcijos be jokių veiksmų
    }
    display.value += value; // Pridėti paspaustą mygtuką prie ekrano
}
// Išvalymo funkcija
function clearAll() { // Išvalymo funkcija
    display.value = ""; // Išvalyti ekraną
}
// Apskaičiavimo funkcija
function calculate() { // Apskaičiavimo funkcija
    const expr = display.value; // Gauti išraišką iš ekrano
    const lastChar = expr.slice(-1); // Paskutinis simbolis išraiškoje
    const operators = ['+', '-', '*', '/']; // Operatoriai

    // Patikrinimas dėl tuščios išraiškos arba pabaigos operatoriumi

    if (!expr || operators.includes(lastChar)) { // Jei išraiška tuščia arba baigiasi operatoriumi
        display.value = "Klaida"; // Rodyti klaidos pranešimą
        return; // Išeiti iš funkcijos
    }
    // Siųsti užklausą į serverį
    fetch("server.php", { // AJAX užklausa
        method: "POST", // Naudojame POST metodą
        headers: { // Nustatome antraštes
            "Content-Type": "application/x-www-form-urlencoded" // Nurodome, kad siunčiame formos duomenis
        },
        body: `expr=${encodeURIComponent(expr)}` // Siunčiame išraišką kaip formos duomenis
    })
        .then(res => res.json()) // Gauname atsakymą ir paverčiame jį į JSON
        .then(data => { // Apdorojame gautus duomenis
            display.value = data.result; // Rodyti rezultatą ekrane
            justCalculated = true; // Nustatome, kad ką tik apskaičiavome

            const history = document.getElementById("history"); // Atnaujinti istoriją
            history.innerHTML = ""; // Išvalyti esamą istoriją

            data.history.forEach(item => { // Pridėti kiekvieną istorijos įrašą
                const li = document.createElement("li"); // Sukurti naują sąrašo elementą
                li.innerText = item; // Nustatyti jo tekstą
                history.appendChild(li); // Pridėti jį į istorijos sąrašą
            });
        });
}