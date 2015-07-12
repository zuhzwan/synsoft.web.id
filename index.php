<?php 

include 'header.php';


$url   = $_SERVER['QUERY_STRING'];
$pecah = explode('-',$url);
$page  = $pecah[0];
$id	   = $pecah[1];

if(isset($_GET['page'])){ $page = $_GET['page']; } else{ include'home.php'; }



include 'footer.php';

?>






