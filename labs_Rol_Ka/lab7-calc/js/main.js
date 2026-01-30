const display = document.getElementById("display");
let justCalculated = false;


function press(value) {
    const operators = ['+', '-', '*', '/'];
    const lastChar = display.value.slice(-1);
    if (justCalculated && !operators.includes(value)) {
        display.value = "";
        justCalculated = false;
    }
    if (operators.includes(value) && operators.includes(lastChar)) {
        return;
    }
    display.value += value;
}

function clearAll() {
    display.value = "";
}

function calculate() {
    const expr = display.value;
    const lastChar = expr.slice(-1);
    const operators = ['+', '-', '*', '/'];

    if (!expr || operators.includes(lastChar)) {
        display.value = "Klaida";
        return;
    }

    fetch("server.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `expr=${encodeURIComponent(expr)}`
    })
        .then(res => res.json())
        .then(data => {
            display.value = data.result;
            justCalculated = true;

            const history = document.getElementById("history");
            history.innerHTML = "";

            data.history.forEach(item => {
                const li = document.createElement("li");
                li.innerText = item;
                history.appendChild(li);
            });
        });
}