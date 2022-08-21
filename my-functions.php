<?php
function formatPrice(int $param): void
{
    $param = $param / 100;
    echo number_format($param, 2) . "€";
}

function priceExcludingVAT(int $prixTTC, int $tva = 20): int
{
    return ($prixTTC) / (1 + $tva / 100);
}

function discountedPrice(int $prixTTC, int $discount): int
{
    return ($prixTTC) / (1 + $discount / 100);
}


function total($prix, $quantity){

    return  $prix * $quantity;

}

function emptyCart():void {
    session_destroy();
}

function checkQuantity($quantity): void{
    if($quantity<1){
        header("Location: http://localhost/E-Commerce_php/404.php");
        exit;
    }
}

function weightTotal($weight, $quantity){

    $end = $weight * $quantity  ;
    return number_format($end, 2) . "kg";


}


function priceTransport($prix, $weight, $quantity){

    $weight = weightTotal($weight, $quantity);

    if ($weight < 500){
        $prix = $prix + 500;
        return $prix;
    }elseif  ($weight < 2001){

        $prix = $prix + $prix/100*10;
        return $prix;
    }elseif ($weight >= 2002){

        echo "Livraision Gratuite";

    }


}





