<?php
    # settings
    $server = "localhost";
    $username = "root";
    $password = "root";

    # connecting with server
    $connection = new mysqli($server, $username, $password) or die("Connection failed.\n" + $connection->error);

    # creating database
    $query = "CREATE DATABASE IF NOT EXISTS test";

    $result = $connection->query($query);

    # use if needed
    /**********************************************
    if($result)
        echo 'Successfully created database.';
    else
        echo 'Error creating database.';
    ***********************************************/

    # new settings
    $database = "test";
    $connection = new mysqli($server, $username, $password, $database);

    # to create table in database
    $query = "CREATE TABLE IF NOT EXISTS tbl_stocks(
        item_code INT(10) PRIMARY KEY,
        item_name VARCHAR(25),
        type VARCHAR(25),
        available VARCHAR(25),
        dateofexpiry VARCHAR(25)
    );";

    $result = $connection->query($query);

    if($result) {
        // echo 'Successfully created table';

        # to insert data into table
        $query = "INSERT INTO tbl_stocks VALUES
        (001,'Bru', 'Coffee', 'Yes', '02/03/2022'), 
        (002, 'Nescafe', 'Coffee', 'Yes', '05/03/2022'), 
        (003, 'Sunlight', 'Detergent', 'No', null), 
        (004, 'Colgate', 'Toothpaste', 'Yes', '15/03/2023');";

        $result2 = $connection->query($query);

        # use if needed
        /**********************************************
        if($result2)
            echo 'Successfully inserted.';
        else
            echo 'Error inserting.';
        ***********************************************/
    }
    # use if needed
    /**********************************************
    else
        echo 'Error creating table.';
    ***********************************************/
?>