<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       tbody td{
            width:10%;
            border:solid black 1px;
            text-align:center;
            background-color:#d1d3c5;
        }
        table{
            margin-top:50px;
        }
    </style>
</head>
<body>
    

<?php 
    include "header.php";
    include "connect.php";

    $sql1 = "SELECT * FROM analytics";
    $result1 = mysqli_query($connection, $sql1); ?>
    <table>
        <thead>    
            <tr>
                <th>Id</th>
                <th>Μήνας</th>
                <th>Έσοδα Στέφανου</th>
                <th>Έξοδα Στέφανου</th>
                <th>Έσοδα Γιάννη</th>
                <th>Έξοδα Γιάννη</th>
                <th>Δηλωμένα Έξοδα</th>
                <th>Μοίραμσα</th>
                <th>Εφορία</th>
                <th>Σύνολο</th>
            </tr>
        </thead>    
        <?php while($row = mysqli_fetch_assoc($result1)): ?>
            <tbody>    
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['minas'] ?></td>
                    <td><?= $row['esoda_stefanou'] ?></td>
                    <td><?= $row['eksoda_stefanou'] ?></td>
                    <td><?= $row['esoda_gianni'] ?></td>
                    <td><?= $row['eksoda_gianni'] ?></td>
                    <td><?= $row['dilomena_eksoda'] ?></td>
                    <td><?= $row['moirasma'] ?></td>
                    <td><?= $row['eforia'] ?></td>
                    <td><?= $row['sinolo'] ?></td>
                </tr>
                </tbody>

            <?php endwhile ?>
            
            </table>
        
  
<?php include "footer.php"; ?>
</body>
</html>