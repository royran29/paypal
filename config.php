<?php

//definir constante global
define('URL_SITIO', 'http://localhost/paypal/');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AdHC_HYFCP1qT5QeBH46PCx5t0HCciVTfpu38N1C-IWRd_I6YxbgkVI7WscFtXe7QzeLWb-w9Ua9HUoO',//ClientID
        'EIA-22dLGNRtFfhhYYgmn3n4zdANPPtqOPHwRD2Mwd-4B5TylhvYxfymVE3E47tuUpnxdGpjFRbGxAXg'//Secret
    )
);