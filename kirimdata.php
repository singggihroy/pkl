<?php

if (isset($_POST['moisture']) AND isset($_POST['treshold'])) {
    echo "moisture: " . $_POST["moisture"];
    echo "<br>threshold: " . $_POST["treshold"];
} 
?>
<br>
<form action="kirimdata.php" method="post">
    moisture: <input type="text" name="moisture"><br>
    treshold: <input type="text" name="treshold"><br>
    <input type="submit" value="kirim data">
</form>