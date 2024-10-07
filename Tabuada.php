<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Criada</title>
</head>
<body>
    <h1>Tabuada criada</h1>
</body>
</html>
<?php 
    
    $numero = $_POST['numero'];
    $tabuada = 0;
    for ($i=1; $i < 11; $i++) { 
        $tabuada = $numero * $i; 
        echo nl2br("Tabuada do $numero * $i = $tabuada.\n");
    }
?>