<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/script.js"> </script>
    <title> Atividade4 </title>

</head>
<body>
<form method ="POST" onsubmit="return validaForm(this)">
        <Label>Digite Seu Nome Completo: </label>
        <input type="text" name="name">
        <input type="submit" value="Enviar">
</form>
<?php
        $name = strtoupper($_POST["name"]);
        $antes = array(' DAS', ' DA', ' DE', ' DO', ' DOS',' E');
        $depois = array();
        $name = str_replace($antes, $depois, $name);
        $abrev = array();
        $espaco = strpos($name," ");
        while ($espaco > 0) 
        {
            $abrev [] = substr($name,0,1);
            $name = substr($name,($espaco+1));
            $espaco = strpos($name," ");
        }
        echo strtoupper($name).", ";
        for($x=0; $x<count($abrev); $x++)
        {
            echo strtoupper($abrev[$x].". ");
        }
?>
</body>
</html>