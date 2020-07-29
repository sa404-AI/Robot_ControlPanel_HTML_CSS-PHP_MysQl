<!DOCTPE html>
<html>
    <head>
        <?php
        include ('connection.php');
   
        ?>
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
     />
        <meta charset="Utf-8">
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <title>Robot Control Panel</title>
 
        <style>
            body
        {
          margin:0;
          padding:0;
          background-color: whitesmoke;
            
        }
        h1{
            font-family: sans-serif;
          text-align: center;
          margin-top: 70px;
         font-size: 30px;
         font-weight: 800;
         color:transparent;
           background-image: url(https://media.giphy.com/media/26BRGoqbUQvk8nwTC/giphy.gif);
           background-position: center;
           -webkit-background-clip:text;
           
        }
        .animate__animated.animate__bounce {
   --animate-duration: 2s;
}

/* This changes all the animations globaly */
:root {
    --animate-duration: 800ms;
    -animate-delay: 0.9s;
}
        
       
        </style>
    </head>
    <body>
        <h1 class="animate__animated animate__bounce">The Response To the Pressed Buttons in Control Panel Page</h1>
    </body>
</html>
<?php
$homepage = file_get_contents('./index.php', true);

$servername = "localhost";
$username = "root";
$password = "";
$db = "task_3";


$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
 echo "The Preseed Buttone is :      ";
 echo "\r\n";


 
 $sql_ui_control = 'SELECT * FROM `buttons`';


 $result = mysqli_query($conn, $sql_ui_control);

 $direction_commands = mysqli_fetch_all($result, MYSQLI_ASSOC);


      echo $direction_commands[count($direction_commands)-1]['Forward'];
      echo $direction_commands[count($direction_commands)-1]['Backward'];
      echo $direction_commands[count($direction_commands)-1]['Rightt'];
      echo $direction_commands[count($direction_commands)-1]['Leftt'];
      echo $direction_commands[count($direction_commands)-1]['Stop'];
    
 
 mysqli_free_result($result);

 
 mysqli_close($conn);
?>
       



