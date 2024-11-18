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
    require_once 'Professor.php';
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $siape = $_POST['siape'];

    $professor = new Professor($nome,$cpf,$siape);

    echo $professor->toString();      
    ?>
</body>
</html>