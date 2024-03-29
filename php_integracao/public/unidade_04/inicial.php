<?php require_once("../../conexao/conexao.php"); ?>
<?php
//Consulta ao banco de dados
$produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena FROM produtos";
$resultado = mysqli_query($conecta, $produtos);
if (!$resultado) {
    die("Falha na conexão com o banco de dados");
}
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>

    <!-- estilo -->
    <link href="_css/estilo.css" rel="stylesheet">
    <link href="_css/produtos.css" rel="stylesheet">
</head>

<body>
    <?php include_once("_incluir/topo.php") ?>

    <main>

        <div id="listagem_produtos">

        <?php
        while ($linha = mysqli_fetch_assoc($resultado)) {
            ?>

            <ul>
                <li class="imagem"><img src="<?php  echo $linha["imagempequena"] ?>"> </li>
                <li><h3><?php echo $linha["nomeproduto"] ?> </h3></li>
                <li>Tempo de Entrega: <?php echo $linha["tempoentrega"] ?></li>
                <li>Preco unitario : <?php echo "R$ " , number_format($linha["precounitario"], 2, ',', '.') ?></li>
            </ul>

        

        <?php
        }
        ?>
        </div>
    </main>

    <?php include_once("_incluir/rodape.php") ?>
</body>

</html>

<?php
// Fechar conexao
mysqli_close($conecta);
?>