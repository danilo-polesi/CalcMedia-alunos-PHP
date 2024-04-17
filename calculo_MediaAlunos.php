<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Calculadora PHP</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nome: <input type="text" name="nome"><br><br>
	 Escolha a série:
    <select name="serie">
        <option value="primeira">1ª Série</option>
        <option value="segunda">2ª Série</option>
        <option value="terceira">3ª Série</option>
        <option value="quarta">4ª Série</option>
		<option value="quinta">5ª Série</option>
    </select><br><br>
    Português: <input type="text" name="portugues"><br><br>
	Matemática: <input type="text" name="matematica"><br><br>
	História: <input type="text" name="historia"><br><br>
	Geografia: <input type="text" name="geografia"><br><br>
	Ed. Física: <input type="text" name="educacaofisica"><br><br>
	Artes: <input type="text" name="artes"><br><br>
   
    <input type="submit" name="submit" value="Calcular">
</form> <br><hr>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $nome = $_POST['nome'];
	$serie = $_POST['serie'];
	$portugues = $_POST['portugues'];
	$matematica = $_POST['matematica'];
	$historia = $_POST['historia'];
	$geografia = $_POST['geografia'];
	$edfisica = $_POST['educacaofisica'];
	$artes = $_POST['artes'];

    $totalmedia = ($portugues + $matematica + $historia + $geografia + $edfisica + $artes) /6;
	
   
    echo "<br><strong>A média final para " . $nome;
	echo "<br><strong>Resultado:</strong> " . $totalmedia;

	}
	?>
	
</body>
</html>