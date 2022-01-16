<?php
require_once "connect.php";

$query = "SELECT * FROM groups ";
    $result = mysqli_query($connection, $query);



?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="js/testjs.js"></script>
    <script type="text/javascript" src="js/testjs1.js"></script>
    <script type="text/javascript" src="js/testjs2.js"></script>


    <style>
        body {
            background: #000139;
            color: white;

        }

        table.dataTable thead>tr>th.sorting_asc,
        table.dataTable thead>tr>th.sorting_desc,
        table.dataTable thead>tr>th.sorting,
        table.dataTable thead>tr>td.sorting_asc,
        table.dataTable thead>tr>td.sorting_desc,
        table.dataTable thead>tr>td.sorting {
            padding-right: 8px;
        }

        th.sorting_asc::after,
        th.sorting_desc::after {
            content: "" !important;
        }

        .sorting,
        .sorting_asc,
        .sorting_desc {
            background: none;
        }

        table.dataTable>thead .sorting_asc:before,
        table.dataTable>thead .sorting_desc:after {
            opacity: 1;
            display: none;
        }

        table.dataTable>thead .sorting:before,
        table.dataTable>thead .sorting_asc:before,
        table.dataTable>thead .sorting_desc:before,
        table.dataTable>thead .sorting_asc_disabled:before,
        table.dataTable>thead .sorting_desc_disabled:before {
            right: 1em;
            content: "\2191";
            display: none;
        }

        table.dataTable>thead .sorting:after,
        table.dataTable>thead .sorting_asc:after,
        table.dataTable>thead .sorting_desc:after,
        table.dataTable>thead .sorting_asc_disabled:after,
        table.dataTable>thead .sorting_desc_disabled:after {
            right: 1em;
            content: "\2191";
            display: none;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <center>
            <h2>Date</h2>
        </center>
        <br>
        <table id="example" class="table table-striped table-bordered" style="width:100%; color:white">
            <thead>
                <tr>
                    <th class="th-sm">Group Name
                    </th>
                    <th class="th-sm">Group Desc
                    </th>
                    
                </tr>
            </thead>
            <tbody>

                <?php
                $it = mysqli_query($connection, "SELECT * FROM groups ");
                while ($row = mysqli_fetch_array($it)) {


                    echo "<tr>";
                    echo "<td>" . $row['groupName'] . "</td>";
                    echo "<td>" . $row['groupDesc'] . "</td>";
                    

                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>