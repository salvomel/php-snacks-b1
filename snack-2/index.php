<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <!-- ## Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        
        $test_name = strlen($name) > 3;
        $test_email_1 = strpos($email, '@');
        $test_email_2 = strpos($email, '.');
        $test_age = is_numeric($age);
    ?>

    <h1>Snack 2</h1>

    <?php if (strlen($name) > 3 === false || $test_email_1 === false || $test_email_2 === false || $test_age === false) { ?>
        <div>Accesso negato</div>
    <?php } else { ?>
        <div>Accesso riuscito</div>
    <?php } ?>
    
</body>
</html>