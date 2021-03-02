<?php
    include 'functions.php';
    $con = settingsAll();

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM tbl_students WHERE student_id = $id";
        $result = $con->query($query);

        # to redirect page
        if($result) {
            header("Location: http://localhost/Anlin Albert/copies/index.php");
            exit(0);
        }
    }
?>