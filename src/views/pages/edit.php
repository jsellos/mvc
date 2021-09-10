<?php $render('header'); ?>

    <h1>Vamos editar o usuário?</h1>
    <form method="post" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
        <label for="name">Nome</label>
        <input type="text" name="name" value="<?=$usuario['nome'];?>">

        <label for="email">E-mail</label>
        <input type="email" name="email" value="<?=$usuario['email'];?>">

        <input type="submit" value="Salvar">
    </form>

<?php $render('footer'); ?>