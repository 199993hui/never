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

  #coffee{
    text-align:right;
  }
  #coffee .pro_pic{
    position:relative;
    transform: translate(0%,40%);
    opacity: 0.8;
    border-radius: 100%;
    height:250px;
    width: 250px;
  }

  #coffee h4{
    position:relative;
    transform: translate(-30%,-400%);
    font-family:Courier, monospace;
    font-size: 30px;
    color:#800000;
  }

  /* design the form  */
  .openAdding
  {
    display: none;
  }
  .notepad{
    position: relative;
    margin-top:100px;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 70%;
    padding: 50px;
    background: rgba(255, 240, 236, 0.5);
    box-sizing: border-box;
    box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 30px;
  }

  .notepad input:{
    position: relative;
    margin-top:100px;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 70%;
    padding: 50px;
    background: rgba(255, 240, 236, 0.5);
    box-sizing: border-box;
    box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 30px;
  }

  /*  design the login word */
  .notepad h2{
    margin: 0 0 5px;
    padding: 0px;
    color: rgb(168, 203, 243);
    text-align: center;
  }
  /* design position of the output word */
  .notepad .keyin{
    position: relative;
  }
  /* .notepad .gen{
    position: relative;
  } */

  /* design the input place */
  .notepad .keyin input{
    width: 100%;
    padding: 5px 5px;
    font-size: 16px;
    color: rgb(188, 110, 144);
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #fff;
  }

  /* .notepad .gen input{
    letter-spacing: 5px;
    margin-bottom: 30px;
    margin-left: 70px;
    display:inline;
  } */

  .notepad .con input{
    font-size: 16px;
    color: rgb(188, 110, 144);
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #fff;
  }

  /* design the output to promt user key in */
  .notepad .keyin label{
    position: absolute;
    transform: translate(0%,-50%);
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0px;
    font-size: 16px;
    color: #778899;
    transition: .5s;
  }

  /* .notepad .gen label{
    position: absolute;
    transform: translate(-5%,-50%);
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 9px 3px;
    font-size: 16px;
    color: #778899;
    transition: .5s;
  } */

  .notepad .con label{
    position: absolute;
    transform: translate(110%,300%);
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 9px 3px;
    font-size: 16px;
    color: #778899;
    transition: .5s;
  }

  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color:rgba(255, 240, 236, 0.5);
    resize: none;
}
  .notepad .keyin input:focus ~ label,
  .notepad .keyin input:valid ~ label{
    top: -18px;
    left: 0px;
    color: rgb(188, 110, 144);
    font-size: 12px;
  }
  .openButton[type = "button"]
  {
    position: relative;
    transform: translate(50%,-700%);
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #4682B4;
    cursor:pointer;
    padding:10px 20px;
    border-radius: 100%;
  }
  .closeButton[type="submit"],
  .closeButton[type="button"]{
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #4682B4;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }

  .closeButton[type="submit"]:hover,
  .closeButton[type="button"]:hover{
    background-color:#DCDCDC ;
  }

  #footer {
    background-color: DarkSalmon;
    margin-bottom: 0px;

  }
  .footer center{
    font-size : 15px;
  }
  </style>
  <body>
    <div class = "Menu" >
      <ul>
        <li><a href = "Home.php"> Home </a></li>
        <li><a href = "About.php"> About </a></li>
        <li><a href = "View.php" >View</a></li>
      </ul>

        <div class = "time">
          <?php echo date("l F j, Y g:ia", time());?>
        </div>

    </div>
    <div id = "coffee">
        <img src = "coffee.jpg" class = "pro_pic" alt ="">
        <h4> Have a coffee and relax</h4>
    </div>
    <button class = "openButton" type = "button" onclick = "openNOTES()"> Add Note </button>
    <div id = "addNote" class="openAdding">
      <form class = "notepad" action="note.php" method = "post">
        <h2>Notes</h2>
         <div class="keyin">
           <input type="text" name="title"  autocomplete="off" required>
           <label >Title</label>
         </div>
         <div class="con">
           <textarea type="text" name="note" placeholder="Write something.." autocomplete="off" required></textarea>
           <label>Note</label>
         </div>
         <div>
           <button type ="submit" class = "closeButton"> Save </button>
           <button type = "button" class = "closeButton" onclick = "closeNOTES()"> Cancel </button>
         </div>
       </form>
    </div>
    <script>
      function openNOTES()
      {
        document.getElementById("addNote").style.display = "block";
      }

      function closeNOTES()
      {
        document.getElementById("addNote").style.display = "none";
      }
    </script>
  </body>
  <footer id="footer">
    <center><p>About us</p></center>
    <center><br>CAT 201</center>
    <center>2020</center>
  </footer>
</html>
