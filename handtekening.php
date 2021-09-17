<?php
if(empty($_POST)){
    header("Location: index.php");exit();

    foreach($_POST as $key => $value){
        $_POST[$key] = stripslashes(htmlentities($value));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handtekening GLU van ......</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        *{
            font-family:Arial, sans-serif;
            font-size:10pt;
        }
    </style>
</head>
<body>

<p>Met vriendelijke groet,</p>
<p>&nbsp;</p>
<p><?= $_POST['naam'];?></p>
<p><?= $_POST['functie'];?></p>
<p><?= $_POST['aanwezig'];?></p>
<p><img src="https://foto.glu.nl/glu_handtekening.jpg" alt=""></p>
<p>&nbsp;</p>
<p><b>Grafisch Lyceum Utrecht</b> | Vondellaan 178 - 3521 GH Utrecht | <b>T</b> 030 280 70 70 
<?= (isset($_POST['mobiel']) && $_POST['mobiel'] != '') ? '| <b>M</b> '.$_POST['mobiel']: '';?>
<br>
Postbus 5066 - 3502 JB Utrecht | <a href="mailto:info@glu.nl">info@glu.nl</a> | <a href="www.glu.nl">www.glu.nl</a></p> 
    
</body>
</html>