<!-- display stocks from database -->

<!-- database used 'test' -->
<!-- table used 'tbl_stocks' -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display stock</title>
</head>

<body bgcolor="lightblue">
    <h2>Available stocks</h2>

    <table border="2">
        <th>Item code</th>
        <th>Item name</th>
        <th>Type</th>
        <th>Available</th>
        <th>Date of expiry</th>
        <th>Delete</th>
        <?php
        include 'basics.php';

        $con  = settingsAll();

        $q = "SELECT * FROM tbl_stocks";

        $r = $con->query($q);

        # fetch_array() is used to separate out received items
        while ($row = $r->fetch_array()) {
        ?>
            <tr>
                <td>
                    <?php echo $row['item_code']; ?>
                </td>
                <td>
                    <?php echo $row['item_name']; ?>
                </td>
                <td>
                    <?php echo $row['type']; ?>
                </td>
                <td>
                    <?php echo $row['available']; ?>
                </td>
                <td>
                    <?php
                    if ($row['dateofexpiry'] == null)
                        echo 'Null';
                    else
                        echo $row['dateofexpiry'];
                    ?>
                </td>
                <td>
                    <a href="deleteitem.php?id=<?php echo $row['item_code'] ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h5>All values are retrieved from database.</h5>
</body>

</html>