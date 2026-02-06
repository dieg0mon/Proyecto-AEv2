<!DOCTYPE html>
<html>
<head>
    <title>Crear Entidad</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Crear Entidad</h1>

    <form method="POST">
        Nombre:<br>
        <input type="text" name="nombre" required><br><br>

        Planeta:<br>
        <input type="planeta" step="1" name="planeta" required><br><br>

        Estabilidad:<br>
        <input type="number" step="1" name="nivelEstabilidad" min="1" max="10" required><br><br>

        Origen:<br>
        <input type="text" step="1" name="origen" required><br><br>

        Tipo:
        <select name="tipo" id="tipo">

        <option value="FormaDeVida">Forma de Vida</option>
        <option value="MineralRaro">Mineral Raro</option>
        <option value="ArtefactoAntiguo">Artefacto Antiguo</option>
        
        </select>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
