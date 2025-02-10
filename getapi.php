<?php


$data = file_get_contents('https://api.offmorr.ir/api/fa/allproducts');

$json = json_decode($data,true);

echo '<div  style="display:flex;flex-direction:row;flex-wrap:wrap">';
foreach($json['productList'] as $product)
{
    echo "<img src='".$product['hero_image']."' style='width:150px;height:auto'/>";
    echo "<img src='".$product['image']."' style='width:150px;height:auto'/>";
}
echo '</div>';
// foreach($json['productList'] as $product)
// {
    // echo "<img src='".$product['hero_image']."' style='width:150px;height:auto'/>";
    // echo "<img src='".$product['image']."' style='width:150px;height:auto'/>";
// }
