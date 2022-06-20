<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";
$cep = isset($_POST['cep']) ? $_POST['cep'] : "";
$produto = isset($_POST['produto']) ? $_POST['produto'] : "";
$qnt = isset($_POST['quantidade']) ? $_POST['quantidade'] : "";
$receber = isset($_POST['receber']) ? $_POST['receber'] : "";

echo "<h2>Nome: " . $nome . "</h2>";
echo "<h4>telefone: " . $telefone . "</h4>";
echo "<h4>CEP: " . $cep . "</h4>";
echo "<h4>Produto: " . $produto . "</h4>";
echo "<h4>Quantidade: " . $qnt . "</h4>";

if (isset($_POST['receber'])) {
    echo "<h4>Modo de reber: " . $_POST['receber'] . "</h4>";
} else {
    echo "Você nao escolheu nenhum método de recebimento";
}
echo "<br><br><br><br><hr>";

$valor;
switch ($produto) {
    case 'Pao':
        $valor = 0.80;
        break;
    case 'Sabonete':
        $valor = 5;
        break;
    case 'Costela de porco':
        $valor = 30;
        break;
    default:
        echo "<h3>Você não escolheu um valor válido</h3>";
}


$valorTotal = $valor * $qnt;

echo "<h2>Valor Total: " . $valorTotal . "</h2>";
echo "<h4>Valor Unitário: " . $valor . "</h4>";
