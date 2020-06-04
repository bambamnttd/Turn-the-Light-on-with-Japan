<?php
session_start();
if (isset($_SESSION['total'])) {
    $total=$_SESSION['total'];

require_once dirname(__FILE__).'/omise-php/lib/Omise.php';
define('OMISE_API_VERSION', '2015-11-17');
// define('OMISE_PUBLIC_KEY', 'PUBLIC_KEY');
// define('OMISE_SECRET_KEY', 'SECRET_KEY');
define('OMISE_PUBLIC_KEY', 'pkey_test_5fvyc0ows4f3ocr8r14');
define('OMISE_SECRET_KEY', 'skey_test_5fvyc0owpvdupuf1ttx');

$charge = OmiseCharge::create(array(
  'amount' => $total*100,
  'currency' => 'thb',
  'card' => $_POST["omiseToken"]
));

if ($charge['status'] == 'successful') {
  echo 'Success';
} else {
  echo 'Fail';
}

// print('<pre>');
// print_r($charge);
// print('</pre>');
}
?><br>
<a href="basket.php">Back</a> 