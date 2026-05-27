<?php
// cadastro_produtos.php

$produto = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = [
        "Nome do Produto" => $_POST['nome'] ??'',
        "Marca" => $_POST['marca'] ??'',
        "Modelo" => $_POST['modelo'] ??'',
        "Categoria" => $_POST['categoria'] ??'',
        "Preço" => $_POST['preco'] ??'',
        "Quantidade" => $_POST['quantidade'] ??'',
        "Cor" => $_POST['cor'] ??'',
        "Voltagem" => $_POST['voltagem'] ??'',
        "Garantia" => $_POST['garantia'] ??'',
        "Peso" => $_POST['peso'] ??'',
        "Fornecedor" => $_POST['fornecedor'] ??'',
        "Data de Fabricação" => $_POST['data_de_fabricacao'] ??'',
        "Componentes" => $_POST['componentes'] ??'',
        "Local de Exportação" => $_POST['exportacao'] ??'',
        "Estado" => $_POST['estado'] ??'',
        "Materiais" => $_POST['materiais'] ??'',
        "Fabricação" => $_POST['fabrica'] ??'',
        "Versão" => $_POST['versao'] ??'',
        "Modificações" => $_POST['modificacoes'] ??'',
        "Descrição" => $_POST['descricao'] ??''
    ];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos Eletrônicos</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#f4f6f9;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            padding:20px;
            background-color: #92b4f4;
        }

        .container{
            width:100%;
            max-width:800px;
            background:#fff;
            padding:30px;
            border-radius:12px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
            background-color: #a6e1fa;
        }

        h1{
            text-align:center;
            margin-bottom:25px;
            color:#00072d;
        }

        form{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:20px;
        }

        .campo{
            display:flex;
            flex-direction:column;
        }

        .campo-full{
            grid-column:1 / 3;
        }

        label{
            margin-bottom:6px;
            font-weight:bold;
            color:#00072d;
        }

        input, select, textarea{
            padding:12px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:14px;
        }

        textarea{
            resize:none;
            height:100px;
        }

        button{
            grid-column:1 / 3;
            padding:14px;
            border:none;
            border-radius:8px;
            background:#007bff;
            color:#fff;
            font-size:16px;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#0056b3;
        }

        .resultado{
            margin-top:30px;
            background:white;
            padding:20px;
            border-radius:10px;
            border:1px solid #28a745;
        }

        .resultado h2{
            margin-bottom:50px;
            color:#155724;
        }

        .resultado p{
            margin-bottom:8px;
        }

        @media(max-width:700px){
            form{
                grid-template-columns:1fr;
            }

            .campo-full,
            button{
                grid-column:auto;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cadastro de Produtos Eletrônicos</h1>

    <form method="POST">

        <!-- 1 -->
        <div class="campo">
            <label>Nome do Produto</label>
            <input type="text" name="nome" required>
        </div>

        <!-- 2 -->
        <div class="campo">
            <label>Marca</label>
            <input type="text" name="marca" required>
        </div>

        <!-- 3 -->
        <div class="campo">
            <label>Modelo</label>
            <input type="text" name="modelo" required>
        </div>

        <!-- 4 -->
        <div class="campo">
            <label>Categoria</label>
            <select name="categoria" required>
                <option value="">Selecione</option>
                <option>Notebook</option>
                <option>Smartphone</option>
                <option>Monitor</option>
                <option>Tablet</option>
                <option>Periférico</option>
            </select>
        </div>

        <!-- 5 -->
        <div class="campo">
            <label>Preço (R$)</label>
            <input type="number" step="0.01" name="preco" required>
        </div>

        <!-- 6 -->
        <div class="campo">
            <label>Quantidade</label>
            <input type="number" name="quantidade" required>
        </div>

        <!-- 7 -->
        <div class="campo">
            <label>Cor</label>
            <input type="text" name="cor">
        </div>

        <!-- 8 -->
        <div class="campo">
            <label>Voltagem</label>
            <select name="voltagem">
                <option>110V</option>
                <option>220V</option>
                <option>Bivolt</option>
            </select>
        </div>

        <!-- 9 -->
        <div class="campo">
            <label>Garantia</label>
            <input type="text" name="garantia" placeholder="Ex: 12 meses">
        </div>

        <!-- 10 -->
        <div class="campo">
            <label>Peso</label>
            <input type="text" name="peso" placeholder="Ex: 1.5kg">
        </div>

        <!-- 11 -->
        <div class="campo">
            <label>Fornecedor</label>
            <input type="text" name="fornecedor">
        </div>

        <!-- 12 -->
        <div class="campo">
            <label>Data de Fabricação</label>
            <input type="text" name="data_de_fabricacao">
        </div>

        <!-- 13 -->
        <div class="campo">
            <label>Componentes</label>
            <input type="text" name="componentes">
        </div>

        <!-- 14 -->
        <div class="campo">
            <label>Local de Exportação</label>
            <input type="text" name="exportacao">
        </div>

        <!-- 15 -->
        <div class="campo">
            <label>Estado</label>
            <select name="estado">
                <option value="">Selecione</option>
                <option>Preservado</option>
                <option>Ótimo estado</option>
                <option>Funcional</option>
                <option>Danificado</option>
                <option>Péssimo estado</option>
            </select>
        </div>

        <!-- 16 -->
        <div class="campo">
            <label>Materiais</label>
            <input type="text" name="materiais">
        </div>

        <!-- 17 -->
        <div class="campo">
            <label>Fabricação</label>
            <input type="text" name="fabrica" placeholder="Ex: Lazer.Inc">
        </div>

        <!-- 18 -->
        <div class="campo">
            <label>Versão</label>
            <input type="text" name="versao">
        </div>

        <!-- 19 -->
        <div class="campo">
            <label>Modificações</label>
            <select name="modificacoes">
                <option value="">Selecione</option>
                <option>Oficiais (De fábrica)</option>
                <option>Não Oficiais (Modificações de terceiros)</option>
            </select>
        </div>

        <!-- 20 -->
        <div class="campo campo-full">
            <label>Descrição</label>
            <textarea name="descricao"></textarea>
        </div>

        <button type="submit">Cadastrar Produto</button>

    </form>

    <?php if(!empty($produto)): ?>
        <div class="resultado">
            <h2>Produto Cadastrado</h2>

            <?php foreach($produto as $campo => $valor): ?>
                <p><strong><?php echo $campo; ?>:</strong> <?php echo htmlspecialchars($valor); ?></p>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>

</div>

</body>
</html>
