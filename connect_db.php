<?php
$dbc = mysqli_connect("localhost", "root", "", "jewelshop") 
OR die(mysqli_connect_error());

# Set encoding to match PHP script encoding.
mysqli_set_charset( $dbc, 'utf8' ) ;
?>