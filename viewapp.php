<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Management System</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="icon" href="images/train.png" type="image/icon type">
    <style>
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 1000px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
        html, body {
            height: 100%;
        }

        html {
            display: table;
            margin: auto;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            font-family: Nunito;
        }
        a
        {
            text-decoration: None;
            color: #009879;
            font-family: Nunito;
            font-size: 20px;
        }
    </style>
</head>
<body>
<h1 style="text-align: center">Reservations</h1>
<table class="styled-table">
    <thead>
    <tr>
        <th>Email</th>

        <th>Date</th>
        <th>Phone Number</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include ("config.php");
    $sql="select * from `res`";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["umail"]."</td>"."<td>".$row["dt"]."</td>"."<td>".$row["phno"]."</td></tr>";
        }
    } else {
        echo "<tr><td colspan='6' style='text-align: center'>No Reservations</td></tr>";
    }
    ?>
    <tr>
        <td colspan="6" style="text-align: center"><a href="patient.php">Back</a></td>
    </tr>
    </tbody>
</table>
</body>
</html>