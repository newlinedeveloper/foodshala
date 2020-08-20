<?php


//[CONTROLLER]
define("TIME_ZONE","US/Eastern");
define("TIME_FORMAT","Y-m-d H:i:s");

//DB Constants
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "foodshala_db");


// define("DOMAIN_PATH","http://localhost/drivingbee/");
// define("driver","request-driver.php/");

//Twilio
define("ACCOUNT_SDI", "ACa965f080a0de5a12b87e08d360e98a87");
define("AUTH_TOKEN", "8f0d32646ef9908abe9bc2c9bcebac3f");
define("TWILIO_NUMBER", "+15042672154");


//pages
define("SUCCESS_PAGE","index");
define("ERROR_PAGE", "index");
// define("PAY_SUCCESS","https://localhost/drivingbee.com/payment/cardpayfinalize.php");
// define("PAY_ERROR","https://localhost/drivingbee.com/payment/cardpayerror.php");
//[STRIPE - PRODUCTION]
// define("SUCCESS_PAGE","");
// define("SECRET_KEY", "");
//[STRIPE - TEST]
define("PUBLISHABLE_KEY","pk_test_1OQIpmEO0XShl5RpdcH6kEqM");
define("SECRET_KEY", "sk_test_qmmtT63JZzSyu4RRGtMVYD7T");
//[CHARGE]
define("CURRENCY","usd");
define("CHARGE_AMOUNT", 250);
define("CHARGE_DES","drivingbee.com-d");
?>