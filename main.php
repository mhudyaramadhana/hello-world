// File: main.php - Perubahan pengembang A
<?php
function calculatePrice($basePrice, $taxRate) {
    // Calculate final price with tax
    return $basePrice + ($basePrice * $taxRate);
}