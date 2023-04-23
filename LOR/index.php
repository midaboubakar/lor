<?php 
    //demarer la session
    session_start();
    if(isset($_POST['button'])){
        echo "vous avez cliqué sur le button" ;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pseudo page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <?php include "menu.php" ?>

    <section class="pseudo">
        <form action="index.php" method="POST">
            <p class="error">veuillez entrez un pseudo

            </p>
            <label >entrer votre pseudo</label>
            <input type="text"name="name" placeholder="ex:midaboubakar">
            <button class="style_btn" name="button">soumettre</button>
        </form>
    </section>
</body>
</html>