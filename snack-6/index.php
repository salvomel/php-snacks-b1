<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>
    <!-- ## Snack 6
    Creare un array contenente qualche alunno di un’ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
    
    <h1>Snack 6</h1>

    <?php
        $students = [
            [
                'name' => 'Luca',
                'lastname' => 'Mazzini',
                'grades' => [7, 2, 6, 5, 4]
            ],
            [
                'name' => 'Antonella',
                'lastname' => 'Gualtieri',
                'grades' => [10, 9, 5, 8, 6]
            ],
            [
                'name' => 'Giovanni',
                'lastname' => 'Landini',
                'grades' => [7, 9, 8, 4, 5]
            ],
            [
                'name' => 'Paola',
                'lastname' => 'Del Vecchio',
                'grades' => [8, 8, 9, 10, 7]
            ]
        ];
    ?>

    <?php 
        foreach ($students as $student) { ?>
            <div>
                <?php echo $student['name'], ' ', $student['lastname']; ?>
            </div>
             
        <?php } ?>

        <!-- Formula calcolo media 
        $numbers = array();
        $sum;
        foreach($numbers as $i) {
        $sum += $i;
        }
        $media = $sum/count($numbers); -->

</body>
</html>