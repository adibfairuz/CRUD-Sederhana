<?php 

$s = 'localhost';
$u = 'root';
$p = '';
$d = 'barantum_db';

$conn = mysqli_connect($s, $u, $p, $d);

if (mysqli_connect_errno()) {
    echo "nggak konek" .mysqli_connect_error();
}

?>
