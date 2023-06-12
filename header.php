<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div{
           width:40%;
           margin: auto;
         
        }
        div h2{
            font-weight: 200;
            text-align: center;
        }
        div h4{
            font-weight: 200;
            text-align: center;
        }
        header{
            background-color: #D1D3C5;
            height:140px;
            padding-top: 20px;
        }
        ul li{
            display: inline;
        }
        ul{
            width:99%;
            margin: auto;
            text-align: center;
        }
        li a:link{
            color: black;
            text-decoration: none;
        }
       
        nav li{
            border: 2px black solid;
            padding: 4px;
            background-color: white;
          
        }
        nav{
            padding-top: 23px;
            background-color: rgb(31, 139, 132);
            height: 50px;
        }
        li a:visited{
            color:black;
        }
        li a:active{
            color: white;
        }
        li a:hover{
            color: rgb(31, 139, 132);
        }
    </style>
</head>
<body>
    <header>
        <div class="div">
            <h2>Υπολογιστικό Πρόγραμμα</h2>
        </div>
        <div class="div">
            <h4>Ems at Home</h4>
        
        </div>
      
    </header>
    <nav class="container">
        <ul>
            <li><a href="index.php">Ems at Home</a></li>
            <li style="width: 50%;"><a href="db_display.php">Περιεχόμενο DB</a></li>
            <li><a href="delete.php">Διαγραφή Περιεχομένου DB</a></li>
            
        </ul>
        
    </nav>
   
</body>
</html>