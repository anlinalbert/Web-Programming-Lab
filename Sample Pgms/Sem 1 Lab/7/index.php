<!-- display stocks from database -->

<!-- database used 'test' -->
<!-- table used 'tbl_students', 'tbl_students_details' -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
</head>

<body bgcolor="lightblue">
    <u>
        <center>
            <h2>Students list</h2>
        </center>
    </u>
    <p>List of all the student.</p>

    <form method="get">
        <table border="2">
            <th>Student ID</th>
            <th>Student name</th>
            <th>Transport</th>
            <th>Location</th>
            <th>Course</th>
            <th>Gender</th>
            <th>Delete</th>

            <?php

            include 'basics.php';
            $con = settingsAll();

            # to display everything from table
            $q = "SELECT * FROM tbl_students, tbl_students_details
                    WHERE tbl_students_details.student_id = tbl_students.student_id ";

            $r = $con->query($q);

            while ($row = $r->fetch_array()) {
            ?>
                <tr>
                    <td>
                        <?php echo $row['student_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['student_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['student_mode']; ?>
                    </td>
                    <td>
                        <?php echo $row['student_address']; ?>
                    </td>
                    <td>
                        <?php echo $row['student_course']; ?>
                    </td>
                    <td>
                        <?php echo $row['student_gender']; ?>
                    </td>
                    <td>
                        <a href="deleteuser.php?id=<?php echo $row['student_id'] ?>">Delete</a>
                    </td>
                <?php
            }
                ?>
                </tr>
        </table>

        <!-- to sort based on mode of transport -->
        <br>Sort by:
        <?php
        $query = "SELECT DISTINCT student_mode FROM tbl_students";
        $result = $con->query($query);

        // to add transport names to dropdown list
        echo "<select name='names'>";
        while ($row = $result->fetch_array()) {
            echo "<option value='" . $row['student_mode'] . "'>" . $row['student_mode'] . "</option>";
        }
        echo "</select>";

        ?>
        <input type="submit" value="Sort">
        <!-- sort ends -->

    </form>

    <?php
    // works only if 'sort' button is pressed
    if (isset($_GET['names'])) {
    ?>
        <br>
        <table border="2">
            <th>Student ID</th>
            <th>Student name</th>
            <th>Transport</th>
            <th>Location</th>
            <th>Course</th>
            <th>Gender</th>

            <?php
            $name = $_GET['names'];

            # to get details of both the tables together without duplicates
            $q = $query = "SELECT * FROM tbl_students_details, tbl_students
                    WHERE tbl_students_details.student_id = tbl_students.student_id 
                    AND tbl_students.student_mode = '$name'";

            $r = $con->query($q);

            # fetch_array() is used to separate out received items
            while ($row = $r->fetch_array()) {
            ?>
                <tr>
                    <td>
                        <?php echo $row['student_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['student_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['student_mode']; ?>
                    </td>
                    <td>
                        <?php echo $row['student_address']; ?>
                    </td>
                    <td>
                        <?php echo $row['student_course']; ?>
                    </td>
                    <td>
                        <?php echo $row['student_gender']; ?>
                    </td>
                <?php
            }
                ?>
        </table>
    <?php }  ?>

    <h5>All values are retrieved from database.</h5>
</body>

</html>