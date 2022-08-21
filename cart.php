<?php
session_start();
require 'header.php';
require 'products.php';
require 'my-functions.php';

if (isset($_POST['emptyCart'])) {
    emptyCart();
}
//foreach ($_SESSION as $value => $item) {
//    ?>
<!--    <h4>--><?php //echo $books[$value]["name"] ?><!--</h4>-->
<!--    <h4>--><?php //echo $books[$value]["price"] ?><!--</h4>-->
<!--    <h4>--><?php //echo $item['quantity']?><!--</h4>-->
<!--            --><?php //print_r($item['quantity'])
//    ?>
<!---->
<!---->
<?php //} ?>


    <main class="text-white text-center ">

    <div id="panier"
         class="container justify-content-center  bg-dark border-primary border-top   ">
        <div class="row">
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Produit</h5>
                <?php foreach ($_SESSION as $value => $item) {
                ?>
                <h6 class="border-bottom border-primary mb-3"><?= $books[$value]["name"] ?> </h6>
                <?php } ?>

            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">prix unitaire</h5>
                <?php foreach ($_SESSION as $value => $item) {
                ?>
                <h6 class="border-bottom border-primary mb-3"> <?php echo formatPrice($books[$value]["price"]) ?></h6>
                <?php } ?>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Quantité</h5>
                <?php foreach ($_SESSION as $value => $item) {
                ?>
                <h6 class="border-bottom border-primary mb-3"><?php echo $item['quantity'] ?></h6>
                <?php } ?>
                <h5 class="mb-3">Total HT </h5>
                <h5 class="mb-3">TVA</h5>
                <h5 class="mb-3">Total TTC </h5>
            </div>
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Total</h5>
                <?php foreach ($_SESSION as $value => $item) {
                ?>
                <h6 class="border-bottom border-primary mb-3"><?php echo formatPrice(total($books[$value]["price"], $item['quantity']))?></h6>
                <?php } ?>
                <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total(priceExcludingVAT($books[$value]["price"]), $item['quantity'])) ?></h6>
                <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total($books[$value]["price"], $item['quantity']) - total(priceExcludingVAT($books[$value]["price"]), $item['quantity'])) ?></h6>
                <h6 class="border-bottom border-primary mb-3"><?php echo formatPrice(total($books[$value]["price"], $item['quantity']))?></h6>
            </div>
        </div>
    </div>

        <div class="col-12 bg-dark d-flex justify-content-center">
            1
            <div class="col-10 bg-info d-flex justify-content-center">1
                <div class="col-6 bg-success">1</div>
                <div class="col-4 bg-primary">1</div>
            </div>
        </div>




