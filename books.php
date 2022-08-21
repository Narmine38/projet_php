<?php
session_start();
require 'header.php';
require 'products.php';
require 'my-functions.php';

var_dump($_SESSION);
if (isset($_POST['emptyCart'])) {
    emptyCart();
}
if (isset($_POST['key'])) {

    if (!isset($_SESSION[$_POST['key']])) {
        $_SESSION[$_POST['key']] = ['name' => $_POST['key'], 'quantity' => $_POST['quantity']];

    }

}
?>


<?php foreach ($books as $key => $book) { ?>

    <div class="container-xxl col-8 d-flex justify-content-center  p-2  border rounded mt-2 bg-dark">

        <div class="col-md-3 mt-1">
            <img class="" src="<?= $book["picture_url"] ?>" alt="livre">
        </div>

        <div class="col-md-6 mt-1">

            <h5 class="text-white"><?php echo $book["name"] ?></h5>

            <div class="d-flex flex-row text-white">
                <span>Nombre de pages: <?php echo $book["no_of_pages"] ?></span>
            </div>

            <div class="mt-1 mb-1 spec-1">

                <span>Date de parution: <?php echo $book["release_date"] ?></span>
                <span class="dot"></span>
                <span>Editeur: <?php echo $book["editor"] ?></span>
                <span class="dot"></span>
                <span>Collection: <?php echo $book["collection"] ?><br></span>
            </div>

            <div class="mt-1 mb-1 spec-1">
                <span>Format: <?php echo $book["format"] ?></span>
                <span class="dot"></span>
                <span>Auteur: <?php echo $book["author"] ?></span>
                <span class="dot"></span>
                <span>Poids: <?php echo $book["weight"] ?><br></span>
            </div>
            <p class="text-justify text-truncate para mb-0 text-white-50"><?php echo $book["resum"] ?></p>
        </div>

        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
            <div style=" padding-left: 25px" class="d-flex flex-row align-items-center">
                <?php if ($book['discount'] == null) {
                    ?>

                    <h4 class="mr-3 text-white"><?php formatPrice($book["price"]) ?></h4>


                    <?php
                } else { ?>
                    <span class="strike-text"><?php formatPrice($book["price"]) ?></span>
                    <h4 id="prixttc"
                        class="mr-3 text-white"><?php formatPrice(discountedPrice($book["price"], $book['discount'])); ?></h4>

                    <span class="text-white" id="pourcent">-<?= $book['discount'] ?>%</span>
                    <?php
                } ?>

            </div>
            <form class="" method="post">
                <label for="quantity"> quantity</label>
                <input type="hidden" name="key" value="<?= $key ?>">
                <div class="d-flex flex-column mt-4 align-items-center align-content-center ">
                    <select style="width: 50%" class="product__dropdown" data-automation-id="btn-product-quantity-1" name="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10+</option>
                    </select>
                    <button style="width: 50%" class="btn btn-primary btn-sm" type="submit">Ajouter au panier</button>
                    </button>
                </div>
            </form>
        </div>
    </div>
<?php } ?>












