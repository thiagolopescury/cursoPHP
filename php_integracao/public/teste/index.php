<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP INTEGRACAO</title>


</head>

<body>


    <main>
        <?php
        function somar()
        {
            $numeros = func_get_args();
            $qtd_nums = func_num_args();
            $soma = 0;
            for ($i = 0; $i < $qtd_nums; $i++) {
                $soma += $numeros[$i];
            }
            return $soma;
        }
        //testando a função
        echo somar(1, 2, 3, 4, 5);
        ?>


        



    </main>


</body>

</html>