<?php require_once("../../conexao/conexao.php"); ?>
<?php
// Iniciar uma Sessão
session_start();

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
    <header>
        <div id="header_central">
            <img src="assets/logo_andes.gif">
            <img src="assets/text_bnwcoffee.gif">
        </div>
    </header>

    <main>
        <?php
        //Exclui a variavel Sessão setada
        unset($_SESSION["usuario"]);
        //destroi todas as variaveis da sessão
        session_destroy();
        ?>

    </main>

    <footer>
        <div id="footer_central">
            <p>ANDES &eacute; uma empresa fict&iacute;cia, usada para o curso PHP Integra&ccedil;&atilde;o com MySQL.</p>
        </div>
    </footer>
</body>

</html>

<?php
// Fechar conexao
mysqli_close($conecta);
?>