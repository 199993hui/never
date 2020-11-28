<!DOCTYPE html>
<html lang ="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <meta charset="utf-8">
    <title>Take a Note</title>
  </head>
  <header>
    <div class = "note">NoteBook</div>
  </header>
  <style>

  header{
  position: fixed;
  width:100%;
  height:60px;
  margin:0;
  background:#333234;
  padding:0 30px;
  }

  body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    background-image:url("colourful.png");
    background-attachment:fixed;
    background-size:cover;
  }
  .note{
    width:100%;
    float:left;
    font-weight: bold;
    color:RGB(218, 178, 181) ;
    text-transform:uppercase;
    line-height:60px;
    font-size:35px;
    font-family: courier;
    position: fixed;
  }
  .Menu {
    position: fixed;
    float: left;
    margin-top: 60px;
    width: 100%;
    background-color: RGB(81, 55, 0,0.8);
  }
  .Menu ul li {
    list-style-type: none;
    float: left;
    display: inline;
  }
  .Menu li a {
    display: block;
    text-decoration: none;
    color:RGB(119,240,210);
    font-family:verdana;
    border-right: 2px solid #FFFFFF;
    padding: 3px 10px;
    float: left;
  }
  .Menu li a:hover {
    background-color: #CCCCCC;
  }
  .Menu .time{
    text-decoration: none;
    color:rgb(53,141,173);
    font-family:verdana;
    border-right: 2px solid #FFFFFF;
    padding: 3px 10px;
    float: right;
  }

  .retrieve{
    position: relative;
    margin-bottom: 50px;
    top: 60%;
    left: 50%;
    transform: translate(-50%,200%);
    width: 70%;
    padding: 30px;
    background: rgba(255, 240, 236, 0.5);
    box-sizing: border-box;
    box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 30px;
  }
  </style>
  <body>
    <div class = "Menu" >
      <ul>
        <li><a href = "Home.php"> Home </a></li>
        <li><a href = "#footer"> About </a></li>
        <li><a href = "View.php" >view</a></li>
      </ul>

        <div class = "time">
          <?php echo date("l F j, Y g:ia", time());?>
        </div>

    </div>
    <div>
<?php

      $file = fopen("storage.txt", 'r') or die("File does not exist or you lack permission ot open it ");
      // $content = fgets($file);
      // if ($content == "Title")
      // {
      //   echo "<div class = 'retrieve'>";
      //   echo $content;
      // }
      while(!feof($file))
      {
        $content = fgets($file);
        echo "<div class = 'retrieve'>";
        $content = fgets($file);
        echo $content;
        echo "</div>";
        // if($content == "Title")
        // {
        //   echo "</div>";
        //   echo "<div class = 'retrieve'>";
        // }
        // echo $content;
        // if(feof($file))
        // {
        //   echo "</div>";
        // }
      }
      fclose($file);

    // for($i=0 ; $i<$x ; $i++)
    // {
      // echo $notes[$i];
      // $notebook= $notes[0];
      // $file = fopen($notebook, 'r') or die("File could not be imported");
      // while(!feof($file))
      // {
      //   $str = fgets($file);
      //   print $str;
      // }
      // fclose($file);
    // while(!feof($file))
    // {
      // echo "<div class = 'retrieve'>";
      // $content = fgets($file);
      // echo $content;

    //   $yournote = fopen($content,'r') or die("File could not be imported");
    //   echo " Title\n";
    //   echo $title."<br>";
    //   echo "<label> Notes </label>\n";
    //   while(!feof($yournote))
    //   {
    //     $notes = fgets($yournote);
    //     echo $note;
    //     if (feof($yournote))
    //     {
    //       break;
    //     }
    //   }
    //   if (feof($file))
    //   {
    //     break;
    //   }
    //   echo "</div>";
     // }
?>
</div>

</body>
</html>
