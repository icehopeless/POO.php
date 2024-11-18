<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
</head>
<body>
    <!-- Formulario feito pelo ChatGPT -->
    <h1>Cadastro de Pessoa</h1>
    <form action="" method="POST">
        <label for="tipo">Selecione o tipo:</label>
        <select name="tipo" id="tipo">
            <option value="">-- Selecione --</option>
            <option value="professor" <?php if (isset($_POST['tipo']) && $_POST['tipo'] == 'professor') echo 'selected'; ?>>Professor</option>
            <option value="aluno" <?php if (isset($_POST['tipo']) && $_POST['tipo'] == 'aluno') echo 'selected'; ?>>Aluno</option>
        </select>
        <input type="submit" value="Selecionar">
    </form>

    <?php
    if (isset($_POST['tipo'])) {
        if ($_POST['tipo'] == 'professor') {
            ?>
            <h2>Formulário de Professor</h2>
            <form action="processa_professor.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <br><br>
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" required>
                <br><br>
                <label for="siape">Siape:</label>
                <input type="text" name="siape" id="siape" required>
                <br><br>
                <input type="submit" value="Enviar">
            </form>
            <?php
        } elseif ($_POST['tipo'] == 'aluno') {
            ?>
            <h2>Formulário de Aluno</h2>
            <form action="processa_aluno.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <br><br>
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" required>
                <br><br>
                <label for="ra">RA:</label>
                <input type="text" name="ra" id="ra" required>
                <br><br>
                <input type="submit" value="Enviar">
            </form>
            <?php
        }
    }
    ?>
</body>
</html>
