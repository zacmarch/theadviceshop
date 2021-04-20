<?php include( "dbconnect.php" ); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Home</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include( "inc_header.php" );
include( "inc_nav.php" ); ?>
<section id="content">
    <h1>DICE PAGE</h1>
    <h2>Refresh the page to roll again</h2>
    <?php
    $diceValue = rand(1,6);
    echo "<h1>Dice roll value: $diceValue</h1>"?>


</section>
<?php include( "inc_footer.php" ); ?>
</body>
</html>
