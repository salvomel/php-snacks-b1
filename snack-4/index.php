<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <!-- ## Snack 4
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo. -->

    <?php 
        $paragraph = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt provident hic eius numquam nobis facilis libero. repellendus consequuntur impedit reprehenderit inventore totam exercitationem ipsam. quam magni blanditiis eos ipsum id.';
        $paragraphs_array = explode('.', $paragraph); 
    ?>
    <?php for($i = 0; $i < count($paragraphs_array); $i++) { ?>
        <?php $this_paragraph = $paragraphs_array[$i] ?>

        <?php if(!empty($this_paragraph)) { ?>
            <p><?php echo trim($this_paragraph); ?></p>
        <?php } ?>
    <?php } ?>
</body>
</html>