
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
    <div style="text-align:center; width:70%; margin:auto; border:solid black 2px;">
        <form action="" method="POST">
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
            <input type="submit" name="submit" value="Υπολογισμός"><br>
        </form>
    </div>
    <?php
    function strip_post($field){
        if (isset($_POST[$field])){
            if(strlen($_POST[$field]) == 0){
                $_POST[$field] = 0;
            }
        }
        else{
            $_POST[$field] = 0;
        }
        return $_POST[$field];
}
    echo "<br><br>";
    $kerdosGianni = strip_post("esodaGianni") - strip_post("eksodaGianni");
    $kerdosStefanou = strip_post("esodaStefanou") - strip_post("eksodaStefanou"); 
    if( $kerdosGianni >= $kerdosStefanou){
        
        echo "<div style='text-align:center;'>Ο Γιάννης χρωστάει " .  ($kerdosGianni -  $kerdosStefanou)/2 . " ευρώ στον Στέφανο!</div>";
    }
    else{
        echo "<div style='text-align:center;'>Ο Στέφανος χρωστάει " .  ( $kerdosStefanou - $kerdosGianni)/2 . " ευρώ στον Γιάννη!</div>";

    }
    echo "<br><br>";
    $foros = (strip_post("esodaGianni") + strip_post("esodaStefanou") - strip_post("eksoda") ) - ((strip_post("esodaGianni") + strip_post("esodaStefanou") - strip_post("eksoda")) / 1.24);
    echo "<br>";
    
    echo "<div style='text-align:center;'>Tα " . $foros . " ευρώ είναι για την εφορία. </div>";
?>
</body>
</html>
