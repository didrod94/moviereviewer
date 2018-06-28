<?php 

include "header.php";

$error = filter_input(INPUT_GET, 'err'. $filter = FILTER_SANTIZE_STRING);

if(!$error){
    $error = 'Unknown error happened.';
}

?>
<h1>ERROR</h1>
<p class = 'error'><?php echo $error; ?></p>
</body>
</html>

