<h2>MU Bootcamp Php | conditons in php </h2>
<?php
$name = "maryama";
$fee = 200;
$payment = false;

// Check if the user has paid the fee

if ($payment) {
    echo "Welcome ". $name. "! Your fee has been paid successfully.";
} else {
    echo "Welcome ". $name. "! Please pay the fee of $". $fee. ".";
}
?>