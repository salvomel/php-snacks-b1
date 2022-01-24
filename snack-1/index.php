<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

    <!-- ## Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, 
    punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <?php
        $tappa = [
            [
                'home' => 'Olimpia Milano',
                'visitors' => 'Cantù',
                'homePoints' => 55,
                'visitorsPoints' => 60,
            ],
            [
                'home' => 'Vanoli Cremona',
                'visitors' => 'Virtus Bologna',
                'homePoints' => 70,
                'visitorsPoints' => 50,
            ],
            [
                'home' => 'Reyer Venezia',
                'visitors' => 'Gevi Napoli',
                'homePoints' => 35,
                'visitorsPoints' => 60,
            ],
            [
                'home' => 'Allianz Trieste',
                'visitors' => 'Germani Brescia',
                'homePoints' => 40,
                'visitorsPoints' => 40,
            ]
        ];
    ?>

    <h1>Snack 1</h1>
    <h2>Partite della tappa</h2>

        <?php for ($i = 0; $i < count($tappa); $i++) { ?>
            <?php $this_tappa = $tappa[$i]; ?>
    
            <div>
                <p><?php echo $this_tappa['home']; ?> - <?php echo $this_tappa['visitors']; ?> | <?php echo $this_tappa['homePoints']; ?> - <?php echo $this_tappa['visitorsPoints']; ?><p>
            </div>

        <?php } ?>
</body>
</html>