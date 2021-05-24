<?php
function sum_of_digits($nums) {
    $digits_sum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $digits_sum += $nums[$i];
               }
      return $digits_sum;
}
echo sum_of_digits("123")."<hr>";
echo sum_of_digits("10071989");
?>
