<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niveau page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "menu.php" ?>

    <section class="niveau">
        <h4>bonjour
            <span class="change_color">moh</span>
            choisissez d'abord le niveau des questions :
        </h4>
        <form action="" method="POST">
            <p>votre niveau actuel est :
                <span class="change_color">
                    debutant
                </span>
            </p>
            <div class="choices">
                <input type="radio" name="niveau" value="0">Debutant
            </div>

            <div class="choices">
                <input type="radio" name="niveau" value="1">confirmé
            </div>

            <button name="button" class="style_btn">soumettre</button>
        </form>
    </section>
</body>
</html>