<?php
var_dump(openssl_get_cert_locations());
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, "/etc/pki/tls/certs/ca-bundle.crt", NULL, NULL);
$mysqli->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);
$mysqli->close();
phpinfo();
