<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'Aluno.php';
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $ra = $_POST['ra'];

    $aluno = new Aluno($nome,$cpf,$ra);

    echo $aluno->toString();      
    ?>
</body>
</html>