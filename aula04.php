<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="get">
        Numero 1: <input type="text" name="numero1"><br>
        Numero 2: <input type="text" name="numero2"><br> 
        Numero 3: <input type="text" name="numero3"><br>
        <button type="submit">Testar</button>
    </form>
    <?php 
    $menor = $_GET['numero1'];
    $meio = $_GET['numero2'];
    $maior = $_GET['numero3'];

    if ($maior < $menor) {
    $temp = $menor;
    $menor = $menor; 
    $meio =  $temp;

    }
    if ($meio < $menor) {
        $temp = $menor;
        $menor = $meio; 
        $maior =  $temp;
    }



        if ($maior < $meio) {
            $temp = $meio;
            $meio = $maior; 
            $maior =  $temp;
        }

        echo "$menor < $meio < $maior";
    ?>
</body>
</html>