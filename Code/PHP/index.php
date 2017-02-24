<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_qICGOZrnAtsrN1TQHnISrC5Q",
  "publishable_key" => "pk_test_ZLj6EI2hBSClqgUkMtAtNPIB"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>