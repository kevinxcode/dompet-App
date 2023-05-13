<?php

// konfigurasi database
$db_host = 'localhost';
$db_user = 'u2895797_fadepay321';
$db_pass = '65ghbigisfsdf52425dhgGG7fgfdgfd6t75rgdas858';
$db_base = 'u2895797_fadepay';

// koneksi database
@mysql_connect($db_host, $db_user, $db_pass) or die('Tidak terhubung ke MySQL : ' . mysql_error());
@mysql_select_db($db_base) or die('Tidak terhubung ke Database : ' . mysql_error());


?>
