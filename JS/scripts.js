// Função para exibir os campos corretos conforme a bebida escolhida
document.getElementById('bebida').addEventListener('change', function() {
    var bebidaSelecionada = this.value;

    // Esconder todos os campos e botões inicialmente
    document.getElementById('camposVinho').style.display = 'none';
    document.getElementById('camposRefrigerante').style.display = 'none';
    document.getElementById('camposSuco').style.display = 'none';
    document.getElementById('btnVinho').style.display = 'none';
    document.getElementById('btnRefrigerante').style.display = 'none';
    document.getElementById('btnSuco').style.display = 'none';

    // Remover o atributo required de todos os campos
    document.getElementById('tipo').removeAttribute('required');
    document.getElementById('safra').removeAttribute('required');
    document.getElementById('retornavel').removeAttribute('required');
    document.getElementById('sabor').removeAttribute('required');

    // Mostrar os campos e botões conforme a bebida selecionada e adicionar o atributo required nos campos necessários
    if (bebidaSelecionada === 'vinho') {
        document.getElementById('camposVinho').style.display = 'block';
        document.getElementById('btnVinho').style.display = 'block';
        document.getElementById('tipo').setAttribute('required', 'required');
        document.getElementById('safra').setAttribute('required', 'required');
    } else if (bebidaSelecionada === 'refrigerante') {
        document.getElementById('camposRefrigerante').style.display = 'block';
        document.getElementById('btnRefrigerante').style.display = 'block';
        document.getElementById('retornavel').setAttribute('required', 'required');
    } else if (bebidaSelecionada === 'suco') {
        document.getElementById('camposSuco').style.display = 'block';
        document.getElementById('btnSuco').style.display = 'block';
        document.getElementById('sabor').setAttribute('required', 'required');
    }
});