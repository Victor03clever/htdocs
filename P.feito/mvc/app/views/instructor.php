<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutores</title>
</head>
<body>
    <?=getFlash('message')?>
    <form method="post">
        <label for="nome">Nome</label>
        <p> <input type="text" name="nome" id="nome" required> </p>
        <label for="especialidade">Especialidade</label>
        <p> <input type="text" name="especialidade" id="especialidade" required> </p>
        <label for="contacto">Contacto</label>
        <p> <input type="text" name="contacto" id="contacto" required> </p>
        <label for="endereco">Endereço</label>
        <p> <input type="text" name="endereco" id="endereco" required> </p>
        <label for="email">E-mail</label>
        <p> <input type="text" name="email" id="email" required> </p>
        <label for="login">Login</label>
        <p> <input type="text" name="login" id="login" required> </p>
        <label for="senha">Senha</label>
        <p> <input type="password" name="senha" id="senha" required> </p>
        <button type="submit">Adicionar</button>
    </form>

</body>
</html>