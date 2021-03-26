<?php

use App\Models\Price;

/**
 * Get how many cash|coins gives determined price
 * @param string $price
 * @return string|boolean
 */
function getCashValue(string $price)
{
  try {
    $getData = Price::select('cash')->where('price', $price)->first();
  } catch (\Exception $e) {
    return false;
  }
  if ($getData) {
    return $getData->cash;
  }
  return false;
}
