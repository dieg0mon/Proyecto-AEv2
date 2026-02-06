<!DOCTYPE html>
<html>
<head>
    <title>Editar Entidad</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Editar Entidad</h1>

    <form method="POST">
        Nombre:<br>
        <input type="text" name="nombre" value="<?= $entidad->getNombre() ?>" required><br><br>

        Planeta:<br>
        <input type="text" name="planeta" value="<?= $entidad->getPlaneta() ?>" required><br><br>

        Estabilidad:<br>
        <input type="number" step="1" name="nivelEstabilidad" value="<?= $entidad->getNivelEstabilidad() ?>" min="1" max="10" required><br><br>

        Origen:<br>
        <input type="text" step="1" name="origen" value="<?= $entidad->getOrigen() ?>" required><br><br>

        Tipo:
        <select name="tipo" id="tipo">

        <option value="FormaDeVida">Forma de Vida</option>
        <option value="MineralRaro">Mineral Raro</option>
        <option value="ArtefactoAntiguo">Artefacto Antiguo</option>
        
        </select><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
