<div>
      <form action="note.php" method = "post">
         <div class="keyin">
           <input type="text" name="username" size "30"  autocomplete="off" required>
           <label for="">Name</label>
         </div>
         <div class="gen">
           <label for="">Gender</label>
           <input type = "radio" name = "gender" value = "female">Female
           <input type = "radio" name = "gender" value = "male">Male
         </div>
         <div class="keyin">
           <input type="email" name="email"  autocomplete="off" required>
           <label for="">Email</label>
         </div>
         <div class="keyin">
           <input type="password" name="password"  autocomplete="off" required>
           <label for="">Password</label>
         </div>
         <div class="con">
           <textarea type="text" name="comment" placeholder="Write something.."></textarea>
           <label for="">Comment</label>
         </div>
           <input type="submit" >
       </form>
       <input action="retrieval.php">
    </div>
