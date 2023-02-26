<?php
$harga = $_POST['harga'];
$modal = $_POST['modal'];

if($harga>$modal;){
    $laba = $harga - $modal;
    echo "Anda Ganteng";
}elseif($modal>$harga){
    $laba = $modal - $harga;
    echo "Anda Jelek";
}else{
    echo "Anda Buluk";
}