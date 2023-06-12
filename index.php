
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .giannis{
            text-align: center;
            width:50%;
            float:right;
            background-color: #D1D3C5;
            height:180px;
            padding-top: 50px;
        }
        input{
            width:70%;
        }    
        
        .stefanos{
            text-align: center;
            width:50%;
            background-color: #D1D3C5;
            height:180px;
            padding-top: 50px;
            
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div style="text-align:center; width:70%; margin:auto; ">
        <form action="" method="POST">
        <div style="width:20%; margin:auto;padding: 20px;">
            
                <label for="">Μήνας:</label><br>
                <input type="month" name="month" value="2023-<?php echo date('m'); ?>" style="margin:auto;">
           
        </div>
        <div class="giannis">  
            <laber for="esodaGianni">Έσοδα Γιάννη:</laber><br>
            <input type="number" name="esodaGianni" ><br><br>
            <laber for="eksodaGianni">Έξοδα Γιάννη:</laber><br>
            <input type="number" name="eksodaGianni" ><br>
         </div> 
         <div class="stefanos">    
            <laber for="esodaStefanou">Έσοδα Στέφανου:</laber><br>
            <input type="number" name="esodaStefanou" ><br><br>
            <laber for="eksodaStefanou">Έξοδα Στέφανου:</laber><br>
            <input type="number" name="eksodaStefanou" ><br>
         </div> 
            <laber for="eksoda">Δηλωμένα έξοδα:</laber><br>
            <input type="number" name="eksoda" style="width:40%"> <br><br>
            <input style="width:43%" type="submit" name="submit" value="Υπολογισμός"><br>
        </form>
    </div>
    <br>
   
    <?php
    include "function.php";
    echo "<br><br>";
    $minas = strip_post("month");
    $kerdosGianni = strip_post("esodaGianni") - strip_post("eksodaGianni");
    $kerdosStefanou = strip_post("esodaStefanou") - strip_post("eksodaStefanou"); 
    $esodaStefanou = strip_post("esodaStefanou");
    $eksodaStefanou = strip_post("eksodaStefanou");
    $esodaGianni = strip_post("esodaGianni");
    $eksodaGianni = strip_post("eksodaGianni");
    $dilomenaEksoda =  strip_post("eksoda");
    
    
    
    if( $kerdosGianni >= $kerdosStefanou){
        
         echo "<div style=' padding-bottom:15px;  margin:auto;text-align:center; background-color: #D1D3C5; width:50%;'><h3 style='background-color: rgb(31, 139, 132);'>Μοίρασμα εσόδων - εξόδων<br></h3>Ο Γιάννης χρωστάει " .  ($kerdosGianni -  $kerdosStefanou)/2 . " ευρώ στον Στέφανο!</div>";
          $moirasma = "Ο Γιάννης χρωστάει " .  ($kerdosGianni -  $kerdosStefanou)/2 . " ευρώ στον Στέφανο!";
         
        }
    else{
        echo "<div style=' padding-bottom:15px;  margin:auto;text-align:center; background-color: #D1D3C5; width:50%;'><h3 style='background-color: rgb(31, 139, 132);'>Μοίρασμα εσόδων - εξόδων<br></h3>Ο Στέφανος χρωστάει " .  ( $kerdosStefanou - $kerdosGianni)/2 . " ευρώ στον Γιάννη!</div>";
        $moirasma ="Ο Στέφανος χρωστάει " .  ( $kerdosStefanou - $kerdosGianni)/2 . " ευρώ στον Γιάννη!";
    }
    
    echo "<br>";
    $foros = round((strip_post("esodaGianni") + strip_post("esodaStefanou") - strip_post("eksoda") ) - ((strip_post("esodaGianni") + strip_post("esodaStefanou") - strip_post("eksoda")) / 1.24),4);
    echo "<br>";
    
    echo "<div style=' padding-bottom:15px;  margin:auto;text-align:center; background-color: #D1D3C5; width:50%;'><h3 style='background-color: rgb(31, 139, 132);'>Υπολογισμός ποσού εφορίας<br></h3>Tα " . $foros . " ευρώ είναι για την εφορία. </div>";

    echo "<br>";
   
    $kerdos = round($kerdosGianni + $kerdosStefanou - $foros,4);
   
    echo "<div style=' padding-bottom:15px;  margin:auto;text-align:center; background-color: #D1D3C5; width:50%;'><h3 style='background-color: rgb(31, 139, 132);'>Σύνολο μήνα επιχείρησης<br></h3>Tα " . $kerdos . "</div>";
   if(isset($_POST['submit'])){
        include "connect.php";
        include "create.php";
    }
    include "footer.php";
?>

</body>
</html>