<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- ## Snack 5
    Utilizzare questo array: https://pastebin.com/CkX3680A. 
    Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
    e i PM in un rettangolo verde. -->

    <h1>Snack 5</h1>

    <?php
    
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
    ?>
    
    <?php $teachers = $db['teachers'];

        // foreach ($array as $value) {
        foreach ($teachers as $teacher) { ?> 
            <div class="teachers">
                <?php echo $teacher['name'], ' ', $teacher['lastname']; ?>
            </div>
            
        <?php } ?>
    
    <?php $pms = $db['pm'];
    
        foreach ($pms as $pm) { ?> 
            <div class="pm">
                <?php echo $pm['name'], ' ', $pm['lastname']; ?>
            </div>
            
        <?php } ?>    

</body>
</html>