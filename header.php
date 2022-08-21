<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg  bg-dark col-12">
        <div class=" col-3 ">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="books.php">Livre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="movies.php">Filme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" ref="collectors.php">Edition Collector</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="derivedProducts.php">Produits Dérivés</a>
                </li>

            </ul>
        </div>
        <div class=" col-6 d-flex justify-content-center ">
            <img src="img/HerosMarkets.png" width="499" height="151" class="img-fluid" alt="logo">
        </div>
        <div class="col-3 d-flex flex-column  align-items-center">
            <a href="cart.php"><img width="75" height="75" src="img/panier.png"></a>


            <form method="post">
                <input style="width: 96px" class="product-image" type="submit" name="emptyCart" value="">
            </form>

        </div>

    </nav>
</header>

