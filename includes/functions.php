<?php
// Fonction pour formater le prix en CFA

if (! function_exists('formatPrice')) {
    function formatPrice($price)
    {
        return number_format($price, 0, ',', ' ') . 'CFA';
    }
}
