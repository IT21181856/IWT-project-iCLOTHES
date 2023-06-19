<?php
 $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect.');
        mysqli_select_db($db, 'iclothes' ) or die(mysqli_error($db));
?>