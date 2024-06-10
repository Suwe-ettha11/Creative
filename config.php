<?php
require_once "stripe-php-master/init.php";
$stripedetails=array(
"publishablekey"=>"pk_test_51Ow1aRSJPtD1I0WJIkYBjum5iMgSF4nnZNFjoKqnhJ3m80rxTSVWtkP5c8c3eKvgbu8HK5Ww2pDINpaG9meEHksr00Z8jamvFx",
"secretkey"=>"sk_test_51Ow1aRSJPtD1I0WJbSUz9V3LsAJJ2N5HbQVb0oxfS3zzQWuziIqylAQE3N94p8GmVUjQ0XAeN39zy9bR7NT5wMB300YmInBxAa");
\Stripe\Stripe::setApikey($stripedetails["secretkey"]);
?>