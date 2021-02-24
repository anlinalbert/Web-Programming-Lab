<!-- This is a php file so open with xampp in htdocs. -->

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
        <?php
        $con  = new mysqli("localhost", "root", "root", "dsd");

        $q = "SELECT * FROM tbl_stocks";

        $r = $con->query($q);

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
                    <?php echo $row['dateofexpiry']; ?>
                </td>
            </tr>
        <?php
        } ?>
    </table>

    <h5>All values are retrieved from database.</h5>
</body>

</html>
