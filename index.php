<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Bebidas</title>
    <link rel="stylesheet" href="css/styles.css">
    
</head>

<body>



    <form action="index.php" method="POST" id="formBebidas">
        <h1>Cadastro de Bebidas</h1>
        <label for="bebida">Selecione o tipo de bebida:</label>
        <select name="bebida" id="bebida" required>
            <option value="">-- Escolha um tipo de bebida --</option>
            <option value="vinho">Vinho</option>
            <option value="refrigerante">Refrigerante</option>
            <option value="suco">Suco</option>
        </select>

        <!-- Campos gerais (nome e preço) -->
        <div class="campos">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome da bebida" required>

            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" placeholder="Digite o preço" step="0.01" required>
        </div>

        <!-- Campos específicos de cada bebida -->
        <div id="camposVinho" class="campos escondido">
            <label for="tipo">Tipo de Vinho:</label>
            <input type="text" name="tipo" id="tipo" placeholder="Ex: Tinto, Branco">

            <label for="safra">Safra:</label>
            <input type="number" name="safra" id="safra" placeholder="Digite a safra">
        </div>

        <div id="camposRefrigerante" class="campos escondido">
            <label for="retornavel">É retornável?</label>
            <select name="retornavel" id="retornavel">
                <option value="">-- Selecione --</option>
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>
        </div>

        <div id="camposSuco" class="campos escondido">
            <label for="sabor">Sabor do Suco:</label>
            <input type="text" name="sabor" id="sabor" placeholder="Digite o sabor">
        </div>

        <!-- Botões para cada tipo de bebida -->
        <button type="submit" name="btnVinho" id="btnVinho" class="escondido">Cadastrar Vinho</button>
        <button type="submit" name="btnRefrigerante" id="btnRefrigerante" class="escondido">Cadastrar Refrigerante</button>
        <button type="submit" name="btnSuco" id="btnSuco" class="escondido">Cadastrar Suco</button>
        
        <div class='resultado'>
        <?php

        // Chamada das classes
        require_once "Classes/Bebida.php";
        require_once "Classes/Vinho.php";
        require_once "Classes/Refrigerante.php";
        require_once "Classes/Suco.php";

        if (isset($_POST["btnVinho"])) {
            // Classe Vinho
            $vinho = new Vinho();
            $vinho->setNome($_POST["nome"]);
            $vinho->setPreco($_POST["preco"]);
            $vinho->setTipo($_POST["tipo"]);
            $vinho->setSafra($_POST["safra"]);

            echo "{$vinho->mostrarBebida()} </br>";

            if ($vinho->verificaPreco()) {
                echo "Produto em oferta";
            } else {
                echo "Produto em preço normal";
            }
        }

        if (isset($_POST["btnRefrigerante"])) {
            // Classe Refrigerante
            $refrigerante = new Refrigerante();
            $refrigerante->setNome($_POST["nome"]);
            $refrigerante->setPreco($_POST["preco"]);
            $refrigerante->setRetornavel($_POST["retornavel"]);

            echo "{$refrigerante->mostrarBebida()} </br>";
        
            if ($refrigerante->verificaPreco()) {
                echo "Produto em oferta";
            } else {
                echo "Produto em preço normal";
            }
        }

        if (isset($_POST["btnSuco"])) {
            // Classe Suco
            $suco = new Suco();
            $suco->setNome($_POST["nome"]);
            $suco->setPreco($_POST["preco"]);
            $suco->setSabor($_POST["sabor"]);

            echo "{$suco->mostrarBebida()} </br>";

            if ($suco->verificaPreco()) {
                echo "Produto em oferta";
            } else {
                echo "Produto em preço normal";
            }
        }
        ?>
        </div>
    </form>
    <script src="JS/scripts.js"></script>
</body>

</html>