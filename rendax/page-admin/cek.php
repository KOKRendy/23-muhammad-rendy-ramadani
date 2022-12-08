<?php 

if (isset($_SESSION['level']) && isset($_SESSION['username'])){
    if ($_SESSION['level'] == 'user'){
        include "bukan-admin.php";
        exit;
    }
}

?>