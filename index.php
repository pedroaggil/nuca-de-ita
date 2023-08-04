<?php include 'script/config.php';

    $add = 'templates/home/';

    if(isset($_SESSION['id'])) {
        redirect($add .'admin/index.php');
    } else {
        redirect($add .'index.php');
    }

?>