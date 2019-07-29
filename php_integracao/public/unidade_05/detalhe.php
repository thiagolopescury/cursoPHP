<?php require_once("../../conexao/conexao.php"); ?>
<?php
if (isset($_GET["codigo"])) {
    $produto_id = $_GET["codigo"];
} else {
    Header("Location: inicial.php");
}

//Consulta ao banco de dados
$consulta = "select * from produtos where produtoID = {$produto_id}";
$detalhe = mysqli_query($conecta, $consulta);

// Testar erro
if (!$detalhe) {
    die("Falha na conexão com o Banco de Dados");
} else {
    $dados_detalhe = mysqli_fetch_assoc($detalhe);
    $produto_id = $dados_detalhe["produtoID"];
    $produto_id = $dados_detalhe["produtoID"];
    $produto_id = $dados_detalhe["produtoID"];
    $produto_id = $dados_detalhe["produtoID"];
    $produto_id = $dados_detalhe["produtoID"];
    $produto_id = $dados_detalhe["produtoID"];
    $produto_id = $dados_detalhe["produtoID"];
    $produto_id = $dados_detalhe["produtoID"];
    $produto_id = $dados_detalhe["produtoID"];
}

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>

    <!-- estilo -->
    <link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
    <?php include_once("_incluir/topo.php"); ?>

    <main>

        <?php print_r($dados_detalhe); ?>

    </main>

    <?php include_once("_incluir/rodape.php"); ?>
</body>

</html>

<?php
// Fechar conexao
mysqli_close($conecta);
?>