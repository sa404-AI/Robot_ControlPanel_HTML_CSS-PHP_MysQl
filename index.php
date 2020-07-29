<!DOCTYPE html>

<html>
    <head>
        <?php
        include ('connection.php');
   
        ?>
        <meta charset="Utf-8">
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        
        <title>Robot Control Panel</title>
        <style>
            
            body
        {
          margin:0;
            padding:0;
            height: 100vh;
            background-position: center;
            background-size:cover;
            
        }

.hh
       { 
          font-family: sans-serif;
          text-align: center;
          margin-top: 70px;
         font-size: 70px;
         font-weight: 800;
           color:transparent;
           background-image: url(https://media.giphy.com/media/26BRGoqbUQvk8nwTC/giphy.gif);
           background-position: center;
           -webkit-background-clip:text;
    
      }
      .btn-container 
        {
            text-align: center;
           margin-bottom: 1000px;
            justify-content: center;
           align-items:center;
            min-height: 44vh;
            flex-direction: column;
            width: 100%;
            height: 10px;
    left:0;
    top: 0;
    bottom: 0;
    right:0;
    margin:auto;
        }
button
{
    position: relative;
    padding: 10px 10px;
    margin: 10px 0;
    color: #03e9f4;
    background-color: black;
   font-size: 10px;
    text-decoration:none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    -webkit-box-reflect: below 1px linear-gradient(transparent, #0005);
    
}
button:hover
{
    background-color: #03e9f4;
    color:#050801;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 200px #03e9f4,
                0 0 250px #03e9f4;
       
}
       </style>
    </head>
    <body>
        
        <h1 class="hh">SMART METHODS</h1>     
        
        <div class="btn-container">
            <form action="" method="post">

                <button type="submit" name="F" class="button1" >Foward</button>
         <br/><br/>
            <button  type="submit" name="L" class="button1" >Left</button>
            <button  type="submit" name="S" class="button1" >Stop</button>
            <button  type="submit" name="R" class="button1" >Right</button>
         <br/><br/>
            <button type="submit" name="B" class="button1" >Backward</button>
            <br/><br/>
            </form>
            </div>        
           
    </body>
</html>


<?php
if(isset($_POST["L"])){
$sql = "INSERT INTO `buttons` (`Leftt`,`Rightt`,`Backward`,`Forward`,`Stop`) VALUES ('','L','','','')";
    
    if(mysqli_query($mysqli,$sql)){
        echo "Records inserted successfully";
    }else{
        echo "Error: Could not able to Execute. " . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
}

if(isset($_POST["R"])){
    
$sql = "INSERT INTO `buttons` (`Leftt`,`Rightt`,`Backward`,`Forward`,`Stop`) VALUES ('R','','','','')";
    
    if(mysqli_query($mysqli,$sql)){
        echo "Records inserted successfully";
    }else{
        echo "Error: Could not able to Execute. " . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
}
if(isset($_POST["B"])){
$sql = "INSERT INTO `buttons` (`Leftt`,`Rightt`,`Backward`,`Forward`,`Stop`) VALUES ('','','B','','')";
    
    if(mysqli_query($mysqli,$sql)){
        echo "Records inserted successfully";
    }else{
        echo "Error: Could not able to Execute. " . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
}
if(isset($_POST["F"])){
$sql = "INSERT INTO `buttons` (`Leftt`,`Rightt`,`Backward`,`Forward`,`Stop`) VALUES ('','','','F','')";
    
    if(mysqli_query($mysqli,$sql)){
        echo "Records inserted successfully";
    }else{
        echo "Error: Could not able to Execute. " . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
}
if(isset($_POST["S"])){
$sql = "INSERT INTO `buttons` (`Leftt`,`Rightt`,`Backward`,`Forward`,`Stop`) VALUES ('','','','','S')";
    
    if(mysqli_query($mysqli,$sql)){
        echo "Records inserted successfully";
    }else{
        echo "Error: Could not able to Execute. " . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
}
?>
