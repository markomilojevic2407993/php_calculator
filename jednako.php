<?php

$broj1 = isset($_POST['broj1']) ? intval($_POST['broj1']) : 0;
$broj2 = isset($_POST['broj2']) ? intval($_POST['broj2']) : 0;
/*$broj1= intval($_POST['broj1']) ?? ' ';
$broj2= intval($_POST['broj2'])?? ' ';*/

$operator = isset($_POST['operator']) ? $_POST['operator'] : '+';
$rezultat = 0;

switch ($operator) {
    case '+':
        $rezultat = $broj1 + $broj2;
        break;
    case '-':
        $rezultat = $broj1 - $broj2;
        break;
    case '*':
        $rezultat = $broj1 * $broj2;
        break;
    case '/':
        $rezultat = $broj1 / $broj2;
        break;
}





?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Digitron</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .back_img{
        background-image: url(bg.jpg);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
    }
    .bodyy{
        background-color: aquamarine;
    }
</style>
    </head>
    <body class="bodyy">

    <div class="container back_img">
    <br><br><br><h1 class="text-center text-white h1">DIGITRON OSNVNE OPERACIJE</h1><br><br><br><br>
    <div class="d-flex justify-content-center align-items-center">

        <form method="post">
                            <input type="number" name="broj1" value="<?php $broj1 ?>" placeholder="Unesite broj"> <br><br>
                            <input class="btn btn-warning" type="text" name="operator" value="<?php $operator ?>" placeholder="Uneti operator + - * /"><br><br>
                            <input type="number" name="broj2" value="<?php $broj2 ?>" placeholder="Unesite broj"><br><br>
                            
                            <button class="btn btn-lg btn-success" type="submit">resenje=</button><br>
            </form>
                
                   
        </div>
<div class="d-flex justify-content-center align-items-center">
<h2 class="fw-bolder display-4 bg-white "> <?php echo "REZULTAT JE:".$rezultat ?> </h2>  
</div>
         
    </div>









    
    </body>
</html>