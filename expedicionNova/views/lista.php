<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Expedición Nova🚀</title>
    <h1>Expedición Nova🚀<h1>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Listado Entidades</h1>

    <a href="index.php?accion=crear">Agregar Entidad</a>

    <?php
        $totalEntidades = count($entidades);
        $entidadesPorPagina = 5;
        $totalPaginas = ceil($totalEntidades / $entidadesPorPagina);
        $pagina = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $indiceInicio = ($pagina - 1) * $entidadesPorPagina;
        $entidadesMostrar = array_slice($entidades, $indiceInicio, $entidadesPorPagina);
    ?>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Planeta</th>
            <th>Estabilidad</th>
            <th>Origen</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($entidadesMostrar as $e): ?>
        <tr>
            <td><?= $e->getId() ?></td>
            <td><?= $e->getNombre() ?></td>
            <td><?= $e->getPlaneta() ?></td>
            <td><?= $e->getNivelEstabilidad() ?></td>
            <td><?= $e->getOrigen() ?></td>
            <td><?= $e->getTipo() ?></td>
            

            <td>
                <a href="index.php?accion=editar&id=<?= $e->getId() ?>">Editar</a>
                |
                <a href="index.php?accion=eliminar&id=<?= $e->getId() ?>" class = "eliminar">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>

    <div style="margin-top: 20px;">
        <?php if ($pagina > 1): ?>
            <a href="index.php?page=<?= $pagina - 1 ?>">« Anterior</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
            <?php if ($i === $pagina): ?>
                <strong><?= $i ?></strong>
            <?php else: ?>
        <a href="index.php?page=<?= $i ?>"><?= $i ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($pagina < $totalPaginas): ?>
            <a href="index.php?page=<?= $pagina + 1 ?>">Siguiente »</a>
        <?php endif; ?>
    </div>
</body>
</html>
