// File: main.php - Perubahan pengembang B 
<?php
function calculatePrice($basePrice, $taxRate, $discount = 0) {
    // Calculate final price with tax and discount
    $discountedPrice = $basePrice * (1 - $discount);
    return $discountedPrice + ($discountedPrice * $taxRate);
}