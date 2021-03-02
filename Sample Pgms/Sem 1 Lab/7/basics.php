<?php
    include 'functions.php';

    # connection 
    $connection = settingsSome() or die("Connection failed.\n" + $connection->error);

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
    $connection = settingsAll();

    # to create table in database
    $query = "CREATE TABLE IF NOT EXISTS tbl_students(
        student_id INT(10) PRIMARY KEY,
        student_name VARCHAR(25),
        student_mode VARCHAR(25)
    );";

    $result = $connection->query($query);

    # creating another table (just for fun)
    $query = "CREATE TABLE IF NOT EXISTS tbl_students_details(
        student_id INT(10) PRIMARY KEY,
        student_address VARCHAR(25),
        student_course VARCHAR(25),
        student_gender VARCHAR(5)
    );";

    $res = $connection->query($query);
    /****************** done with creation */

    if($result) {
        // echo 'Successfully created table';

        # to insert data into table
        $query = "INSERT INTO tbl_students VALUES
        (001,'Ajith', 'Bus'), 
        (002, 'Ram', 'Bus'), 
        (003, 'Alice', 'Car'), 
        (004, 'Raj', 'Train'), 
        (005, 'Varun', 'Walking'),
        (006, 'Sasha', 'Bus'), 
        (007, 'Sandeep', 'Car'),
        (008, 'Sandra', 'Bus'),
        (009, 'Rohit', 'Bike'),
        (010, 'Jose', 'Bus'),
        (011, 'Athira', 'Car');";

        $result2 = $connection->query($query);

        # inserting into second table
        $query = "INSERT INTO tbl_students_details VALUES
        (001,'Kodungallur', 'BCA', 'M'), 
        (002,'Ernakulam', 'Bcom', 'M'), 
        (003,'Thrissur', 'MCA', 'F'), 
        (004,'Angamaly', 'Bsc', 'M'), 
        (005,'Kothamangalam', 'MCA', 'M'),
        (006, 'Idukki', 'MCA', 'F'), 
        (007, 'Thrissur', 'Bsc', 'M'), 
        (008, 'Kochi', 'MCA', 'F'), 
        (009, 'Ernakulam', 'BBA', 'M'), 
        (010, 'Idukki', 'BBA', 'M'), 
        (011,'Kodungallur', 'BCA', 'F');";

        $res = $connection->query($query);
        /***************** done with inserting */

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