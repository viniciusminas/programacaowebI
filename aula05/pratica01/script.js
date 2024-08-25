function calcular(operation) {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    let resultado = 0;

    switch(operation) {
        case '+':
            resultado = num1 + num2;
            break;
        case '-':
            resultado = num1 - num2;
            break;
        case '*':
            resultado = num1 * num2;
            break;
        case '/':
            if (num2 === 0) {
                alert("Divisão por zero não é permitida.");
                return;
            }
            resultado = num1 / num2;
            break;
        default:
            alert("Operação inválida.");
            return;
    }

    const resultField = document.getElementById('resultado');
    resultField.value = resultado;

    if (resultado > 0) {
        resultField.style.backgroundColor = 'green';
    } else if (resultado < 0) {
        resultField.style.backgroundColor = 'red';
    } else {
        resultField.style.backgroundColor = 'gray';
    }
}
