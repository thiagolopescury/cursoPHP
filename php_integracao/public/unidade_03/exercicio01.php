<?php
require_once("../../conexao/conexao.php");

?>
<?php
//Passo 2 - testar conexao
if (mysqli_connect_errno()) {
    die("Conexão falhou: " . mysqli_connect_errno());
}
?>

<?php
//Passo 3 - Abri consulta ao banco de dados

$consulta_categorias = "SELECT nomecompleto FROM  clientes";
$categorias =  mysqli_query($conecta, $consulta_categorias);

if (!$categorias) {
    die("Falha na consulta ao banco.");
}



?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
    <ul>
        <?php
        //Passo 4 - Listagem dos dados
        while ($registro = mysqli_fetch_assoc($categorias)) {
        ?>
            <li> <?php echo $registro["nomecompleto"] ?> </li>
        <?php
        }
        ?>
    </ul>
    <?php
        //Passo 5 - Liberar Dados da memoria
        mysqli_free_result($categorias);

    ?>
</body>

</html>

<?php
// Fechar conexão
mysqli_close($conecta);
?>