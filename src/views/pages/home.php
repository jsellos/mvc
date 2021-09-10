<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo usuário</a>

<table width="100%" border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
<?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['id'];?></td>
        <td><?=$usuario['nome'];?></td>
        <td><?=$usuario['email'];?></td>
        <td>
            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
                <img src="<?=$base;?>/assets/images/edit.svg" alt="Editar registro" height="16px">
            </a> &nbsp
            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza?\n\nVai excluir mesmo?\nOlha olha! Não vá se arrepender!\n\nPosso excluir o registro?')">
                <img src="<?=$base;?>/assets/images/delete.svg" alt="Excluir registro" height="16px">
            </a>
        </td>
    </tr>
<?php endforeach; ?>
</table>

<?php $render('footer'); ?>
