function adcTotalLinha() {
    var tabela = document.querySelector("table");

    if (tabela.rows[tabela.rows.length - 1].cells[0].innerHTML === "Média") {
        alert("A linha já foi adicionada!");
        return;
    }
    
    var novaLinha = tabela.insertRow(-1);

    var celulaNome = novaLinha.insertCell(0);
    celulaNome.innerHTML = "Média";

    var numColunas = tabela.rows[1].cells.length - 1;

    for (var i = 1; i <= numColunas; i++) {
        var soma = 0;
        var count = 0;

        for (var j = 2; j < tabela.rows.length - 1; j++) {
            var valor = tabela.rows[j].cells[i].innerHTML;
            if (valor) {
                soma += parseFloat(valor.replace(",", "."));
                count++;
            }
        }

        var media = (count > 0) ? (soma / count).toFixed(1) : 0;
        var novaCelula = novaLinha.insertCell(i);
        novaCelula.innerHTML = media.toString().replace(".", ",");
    }
}

function adcTotalColuna() {
    var tabela = document.querySelector("table");

    if (tabela.rows[0].cells[tabela.rows[0].cells.length - 1].innerHTML === "Média") {
        alert("A coluna já foi adicionada!");
        return;
    }

    tabela.rows[0].insertCell(-1).innerHTML = "Média";

    tabela.rows[1].insertCell(-1).innerHTML = "";

    for (var i = 2; i < tabela.rows.length; i++) {
        var soma = 0;
        var count = 0;

        for (var j = 1; j < tabela.rows[i].cells.length; j++) {
            var valor = tabela.rows[i].cells[j].innerHTML;
            if (valor) {
                soma += parseFloat(valor.replace(",", "."));
                count++;
            }
        }

        var media = (count > 0) ? (soma / count).toFixed(1) : 0;
        var novaCelula = tabela.rows[i].insertCell(-1);
        novaCelula.innerHTML = media.toString().replace(".", ",");
    }
}
