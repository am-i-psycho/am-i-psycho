<?php     include("header.php");   ?>

<!-- from https://pentesterlab.com/exercises/php_include_and_post_exploitation/course -->
<?php hint("\n\n\nwill include the arg specified in the GET parameter \"page\""); ?>
<br>
<center>
<form action="index.php" method="GET">
    <input type="text" name="page">
</form>
</center>
<?php
include($_GET["page"]);
?>
