function calcular(operation) {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    let result = 0;

    /*if (isNaN(num1) || isNaN(num2)) {
        alert("Por favor, insira números válidos.");
        return;*/
    }

    switch(operation) {
        case '+':
            result = num1 + num2;
            break;
        case '-':
            result = num1 - num2;
            break;
        case '*':
            result = num1 * num2;
            break;
        case '/':
            if (num2 === 0) {
                alert("Divisão por zero não é permitida.");
                return;
            }
            result = num1 / num2;
            break;
        default:
            alert("Operação inválida.");
            return;
    }

    const resultField = document.getElementById('result');
    resultField.value = result;

    // Mudança de cor baseada no valor do resultado
    if (result > 0) {
        resultField.style.backgroundColor = 'green';
    } else if (result < 0) {
        resultField.style.backgroundColor = 'red';
    } else {
        resultField.style.backgroundColor = 'gray';
    }

