<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="stayle.css">

</head>
<body>
    <div class="container">
        <h1>Relatorio de Notas</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD']=== 'POST'){
        // Validação das entradas
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];
        }
        if ($nota1 !== false && $nota2 !== false && $nota3 !== false && $nota4 !== false){
            //Calculo da media
            $media =($nota1 + $nota2 + $nota3 + $nota4) / 4;
            //Exibção dos resultados
            echo "<div class='result'>";
            echo "<table>";
            echo "<tr><th>Descrição</th><th>Notas</th></tr>";
            echo "<tr><td>Nota 1</td><td>$nota1</td></tr>";
            echo "<tr><td>Nota 2</td><td>$nota2</td></tr>";
            echo "<tr><td>Nota 3</td><td>$nota3</td></tr>";
            echo "<tr><td>Nota 4</td><td>$nota4</td></tr>";
            echo "<tr><th>Média</th><th>" . number_format($media, 2) ."</th></tr>";
            echo "</table>";
        } else {
            echo "<div class='result'>";
            echo "<p>Por favor, insira valores válidos para todas as notas.</p>";
            echo "</div>";

        }
        ?>
        <a href="index.php"><butoton>Novo Cálculo</button></a>
    </div>

   
</body>
</html>