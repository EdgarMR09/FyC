<?php
require_once("Funciones.php");

$textoIngresado = "";
$resultadoProcesado = false;

if (isset($_POST['enviar'])) {
    $textoIngresado = $_POST['texto'];
    $resultadoProcesado = true;
    
    $numCaracteres = contarCaracteres($textoIngresado);
    $mayusculas    = convertirMayusculas($textoIngresado);
    $minusculas    = convertirMinusculas($textoIngresado);
    $invertida     = invertirCadena($textoIngresado);
    $palindromo    = esPalindromo($textoIngresado);
    $numVocales    = contarVocales($textoIngresado);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas en PHP</title>
</head>
<body>

<div class="container">
    <h2>Operaciones con Cadenas</h2>
    <form method="POST" action="">
        <label for="texto">Introduce una palabra o frase:</label>
        <input type="text" id="texto" name="texto" value="<?php echo htmlspecialchars($textoIngresado); ?>" required>
        <button type="submit" name="enviar">Ejecutar Funciones</button>
    </form>

    <?php if ($resultadoProcesado): ?>
        <div class="results">
            <h3>Resultados:</h3>
            <p><strong>Texto original:</strong> "<?php echo htmlspecialchars($textoIngresado); ?>"</p>
            <p><strong>Cantidad de caracteres:</strong> <?php echo $numCaracteres; ?></p>
            <p><strong>En mayúsculas:</strong> <?php echo htmlspecialchars($mayusculas); ?></p>
            <p><strong>En minúsculas:</strong> <?php echo htmlspecialchars($minusculas); ?></p>
            <p><strong>Cadena invertida:</strong> <?php echo htmlspecialchars($invertida); ?></p>
            <p><strong>Número de vocales:</strong> <?php echo $numVocales; ?></p>
            <p><strong>¿Es palíndromo?:</strong> 
                <?php if ($palindromo): ?>
                    <span class="badge bg-success">Sí, es un palíndromo</span>
                <?php else: ?>
                    <span class="badge bg-danger">No es un palíndromo</span>
                <?php endif; ?>
            </p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>