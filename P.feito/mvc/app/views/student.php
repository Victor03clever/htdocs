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
        <label for="ano_nasc">Data de nascimento</label>
        <p> <input type="date" name="ano_nasc" id="ano_nasc" required> </p>
        <label for="sexo">Sexo</label>
        <p>
            <select name="sexo" id="sexo" required>
                <option disabled selected>Selecionar sexo</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </p>
        <label for="encarregado">Encarregado</label>
        <p> <input type="text" name="encarregado" id="encarregado" required> </p>
        <label for="morada">Morada</label>
        <p> <input type="text" name="morada" id="morada" required> </p>
        <label for="email">E-mail</label>
        <p> <input type="text" name="email" id="email" required> </p>
        <!-- <label for="Tutor_idTutor">Tutor</label> -->
        <label for="contacto">Contacto</label>
        <p> <input type="text" name="contacto" id="contacto" required> </p>
        <label for="Tutor_idTutor">Tutor</label>
        <p>
            <select name="Tutor_IdTutor" id="Tutor_idTutor" required>
                <option disabled selected>Selecionar um tutor ao aluno</option>
                <?php foreach ($tutores as $tutor):?>
                <option value="<?=$tutor['idTutor']?>"><?=$tutor['nome']?></option>
                <?php endforeach;?>
            </select>
        </p>
        <label for="Curso_idCurso">Curso</label>
        <p>
            <select name="Curso_idCurso" id="Curso_idCurso" required>
                <option disabled selected>Selecionar curso do aluno</option>
                <?php foreach ($courses as $course):?>
                <option value="<?=$course['idCurso']?>"><?=$course['nome']?></option>
                <?php endforeach;?>
            </select>
        </p>
        <label for="login">Login</label>
        <p> <input type="text" name="login" id="login" required> </p>
        <button type="submit">Adicionar</button>
    </form>

</body>
</html>