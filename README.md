Info Hash To Magnet URI Converter
================================

PHP script to Generate Magnet URI from info hash

Example
======
<?php
include_once "alfa.hash2mui.class.php";
$h2m=new Hash2mui();
echo $h2m->grab_mui("11A2AC68A11634E980F265CB1433C599D017A759");
?>
