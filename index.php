<?php
require_once __DIR__. '/classes/User.php';
?>
<?php
require_once __DIR__. '/classes/Product.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
</head>
<body>
<!-- Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Eseguire poi degli output istanziando oggetti delle varie classi. -->

<header>My Shop</header>

<main>
    <section>
        <?php //ISTANCE USER
        $user1 = new User('Aurora','Grippaudo');
        ?>
    </section>
    <section>
        <?php //ISTANCE TEEN
        $teen1 = new Teen('Laura','Benedetta','15');
        ?>
    <div><?php echo $teen1->name?> you are granted a <?php echo $teen1->getSale();?> % sale</div>
    </section>
    <section>
        <?php //ISTANCE CLOTHES
        $product1 = new Clothes('pants',12,25,'cotton');
        ?>
    <div>you have <?php echo $product1->quantity?><?php echo $product1->name?>  in your cart </div>
    </section>
</main>
</body>
</html>