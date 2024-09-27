<!DOCTYPE html>
<html>
<head>
    <title>Pesquisar Cadastro</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: blanchedalmond; }
        header { background: #4CAF50; color: white; padding: 10px; text-align: center; }
        footer { background: dimgrey; text-align: center; padding: 10px; position: absolute; bottom: 0; width: 97%; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; }
        th { background-color: #4CAF50; color: white; }
    </style>
</head>
<body>
    <header>
    <img src="https://pngimg.com/d/php_PNG26.png" width="200px" height="90px">    <h1>Cadastro de Agencia</h1>
    </header>
    <h1>Lista de Agencias Cadastradas</h1>

    <?php
    include 'conexao.php';

    $sql = "SELECT * FROM tbagencia";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>UF</th>
                </tr>";
        while($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <td>{$row['idagencia']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['cidade']}</td>
                    <td>{$row['uf']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhuma agência cadastrada.";
    }

    mysqli_close($conexao);
    ?>

    <br>
    <a href="index.php">Voltar</a>
    <footer>
        <p>Feito por: Dario Santos</p>
    </footer>
</body>
</html>
