<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Agencia</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: blanchedalmond; }
        header { background: #4CAF50; color: white; padding: 10px; text-align: center; }
        footer { background: dimgrey; text-align: center; padding: 10px; position: absolute; bottom: 0; width: 97%; }
    </style>
</head>
<body>
    <header>
    <img src="https://pngimg.com/d/php_PNG26.png" width="200px" height="90px">    <h1>Cadastro de Agencia</h1>
    </header>
    <br><form method="POST" action="processar.php">
        Nome: <input type="text" name="nome" required><br>
        Cidade: <input type="text" name="cidade" required><br>
        UF: <input type="text" name="uf" required maxlength="2"><br>
        <input type="submit" value="Cadastrar">
    </form>
    <br>
    <a href="index.php">Voltar</a>
    <footer>
        <p>Feito por: Dario Santos</p>
    </footer>
</body>
</html>