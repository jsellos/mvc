<?php $render('header'); ?>

    <h1>Vamos adicionar um novo usuário?</h1>
    <form method="post" action="<?=$base;?>/novo">
        <label for="name">Nome</label>
        <input type="text" name="name">
        <br>
        <label for="email">E-mail</label>
        <input type="email" name="email">
        <br>
        <input type="submit" value="Salvar">
    </form>

<?php $render('footer'); ?>