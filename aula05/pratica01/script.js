function somar() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let resultado = num1 + num2;
    mostrarResultado(resultado);
}

function subtrair() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let resultado = num1 - num2;
    mostrarResultado(resultado);
}

function multiplicar() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let resultado = num1 * num2;
    mostrarResultado(resultado);
}

function dividir() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let resultado = num1 / num2;
        mostrarResultado(resultado);
    }


function mostrarResultado(resultado) {
    let resultadoElemento = document.getElementById("resultado");
    resultadoElemento.innerText = "Resultado " + resultado;

    if (resultado > 0) {
        resultadoElemento.className = "resultado-positivo";
    } else if (resultado < 0) {
        resultadoElemento.className = "resultado-negativo";
    }
    else {
        resultadoElemento.className = "resultado-zero";
    }

}
