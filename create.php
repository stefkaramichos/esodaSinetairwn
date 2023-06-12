<?php
    

    $sql = "INSERT INTO analytics (minas, esoda_stefanou, eksoda_stefanou, esoda_gianni, eksoda_gianni, dilomena_eksoda, moirasma, eforia, sinolo) VALUES ('$minas', $esodaStefanou, $eksodaStefanou, $esodaGianni,  $eksodaGianni, $dilomenaEksoda, '$moirasma', $foros, $kerdos)";
    $result = mysqli_query($connection, $sql);
   if(!$result){
    die("failed!" . mysqli_error($result));
   }

?>