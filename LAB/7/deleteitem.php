<?php
    include 'functions.php';
    $con = settingsAll();

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM tbl_stocks WHERE item_code = $id";
        $result = $con->query($query);

        # to redirect page
        if($result) {
            header("Location: http://localhost/Anlin Albert/7/index.php");
            exit(0);
        }
    }
?>