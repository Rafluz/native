<?php
session_start();
if (empty($_SESSION['user'])) {
    echo "<center>
    <font color='red'>Access Denied</font>
    </center>";
} else {
    include "header.php";
    include "sidebar.php";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = "";
    }
    switch ($page) {
        case "tambah_menu":
            include "form_tambah_menu.php";
        break;
        default:
            include "home.php";
    }
    include "footer.php";
}
?>