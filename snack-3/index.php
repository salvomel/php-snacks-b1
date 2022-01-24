<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <!-- ## Snack 3
    Creare un array con 15 numeri casuali, 
    tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
    
    <h1>Snack 3</h1>

    <?php
    $randomNumbers = [];

    while (count($randomNumbers) < 15) {
        $numbers = rand(1, 100);
        $number_check = in_array($numbers, $randomNumbers);
        
        if (!$number_check) {
            $randomNumbers[] = $numbers;
        }
    }
    var_dump($randomNumbers);
    ?>

</body>
</html>