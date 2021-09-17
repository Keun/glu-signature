<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handtekening GLU opmaken</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Vul onderstaande gegevens in</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="handtekening.php" method="post">
                <input type="text" class="form-control mb-3" name="naam" placeholder="Lisanne Hoornweg">
                <input type="text" class="form-control mb-3" name="functie" placeholder="Hoofd Communicatie">
                <input type="text" class="form-control mb-3" name="aanwezig" placeholder="(aanwezig: maandag tot en met donderdag)">
                <input type="text" class="form-control mb-3" name="mobiel" placeholder="Mobiel nummer (niet verplicht)">
                <input type="submit" class="btn btn-primary" value="Versturen">
            </form>
        </div>
    </div>
</div>
    
</body>
</html>