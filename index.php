<?php
require_once 'vendor/autoload.php';


$client = new Payeezy_Client();
$client->setApiKey("skJexYMD5r3M9UXzSFwThI0zGZSchCsp");
$client->setApiSecret("4e03cf58f9f099c29b9510eb5f734a1acc5d43f6ef8093bdb25fc4892b10e0d1");
$client->setMerchantToken("fdoa-d670bc4a75c4e60be0cd6b46bcf19edf52b9ba496be50786");

$client->setUrl("https://api-cert.payeezy.com/v1/transactions");

$card_transaction = new Payeezy_CreditCard($client);


$response = $card_transaction->purchase([
  "merchant_ref" => "Astonishing-Sale",
  "amount" => "1299",
  "currency_code" => "USD",
  "credit_card" => array(
    "type" => "visa",
    "cardholder_name" => "John Smith",
    "card_number" => "4788250000028291",
    "exp_date" => "1020",
    "cvv" => "123"
  )
]);



echo "<pre>";
var_dump($response);
echo "</pre>";
?>


