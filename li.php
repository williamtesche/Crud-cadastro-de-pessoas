<li>
    <h3><?= $p['nome']  ?></h3>
    <a href="./delete.php?id=<?php echo $p['id']; ?>" class='btn btn-success btn-sm'>Excluir</a>
    <a href="./editar.php?id=<?= $p['id']; ?>" class='btn btn-danger btn-sm'>Editar</a>
</li>

