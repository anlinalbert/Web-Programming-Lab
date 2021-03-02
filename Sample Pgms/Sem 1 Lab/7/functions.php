<?php 
    # settings
    function settingsAll() {
        $server = "localhost";
        $username = "root";
        $password = "root";
        $database = "test";
        return $con = new mysqli($server, $username, $password, $database);
    }
    function settingsSome() {
        $server = "localhost";
        $username = "root";
        $password = "root";
        return $con = new mysqli($server, $username, $password);
    }
?>