<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
</head>
<style>
    main{
        background-color:
#d1d3c5;
        margin:auto;
        width:40%;
        text-align:center;
        height:100px;
        padding-top:30px;
        margin-top:80px;

    }
</style>
<body>
    

<?php 
    include "header.php";
    include "connect.php";
    include "function.php";

    if(isset($_POST['submit'])){
        $id_num = strip_post("id");
        $i = 0;
        $sql2 = "SELECT * FROM analytics WHERE id = $id_num";
        $result2 = mysqli_query($connection, $sql2);
        while($row = mysqli_fetch_assoc($result2)){
            if($row['id']){
                echo "<span style='color:green;'>Τα δεδομένα διαγράφτηκαν με επιτυχία</span>";
                $i++;
            }
       }
     if($i == 0){
        echo "<span style='color:red;'>Δεν βρέθηκε περιεχόμενο με id = " . $id_num . "</span>" ;
     }
        $sql = "DELETE FROM analytics WHERE id = $id_num";
        $result = mysqli_query($connection, $sql);
        
        
    }
?>
<main>
    <form action="" method="POST">
     <label for="">Εισάγετε το id που θέλετε να διαγράψετε:</label><br>
        <input type="number" name="id">
        <input type="submit" value="Διαγραφή" name="submit">
    </form>
</main>

    
        
  
<?php include "footer.php"; ?>

</body>
</html>