<?php
$products = array(
  "Laptop" => 1500,
  "Phone" => 800,
  "Tablet" => 1200,
  "PS5" => 2000
);

$maxKey = null;
$maxPrice = 0;

echo "All Products: <br>";
foreach ($products as $name => $price) {
  echo "- {$name}: {$price}$<br>";

  if ($price > $maxPrice) {
    $maxPrice = $price;
    $maxKey = $name;
  }
}
echo "The most expensive product is <b>$maxKey</b> with price <b>$maxPrice</b>";
