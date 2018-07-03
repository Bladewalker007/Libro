<div class="top_bar">


    <div class="topnav">
        <form class="search" action="search.php" method="post">
            <input type="text" name="search" id="search" placeholder="Search.." required>
        </form>

        <form class="search" action="catagories_wise_search.php" method="post" style="left: 5px">
            <select name="selection" id="selection" class="selection" required>
  <option value="All">All</option>
   <?php
     $sqlop = "SELECT DISTINCT book_genre FROM library";
      $resultop = mysqli_query($db, $sqlop);
      if (mysqli_num_rows($resultop) > 0) {
          while($row=mysqli_fetch_assoc($resultop)){
              echo'<option value="'.$row["book_genre"].'">'.$row["book_genre"].'</option>';
          }
      }else {
    echo "Sorry No Location";
}
    ?> 
  </select>
            <input type="submit" class="seletion_submit">
        </form>
    </div>










    <a href="logout.php">

        <div class="signout top_nav_holder">
            <h4 class="top_nav_btn">Logout</h4>

        </div>

    </a>


    <div id="set_open" class="settings top_nav_holder">
        <h4 id="" class="top_nav_btn">Settings</h4>

    </div>
    <div id="set_close" class="set_close top_nav_holder">
        <h4 id="" class="top_nav_btn">Close</h4>
    </div>




</div>


<div class="left_side_bar">

    <div class="admin_pan_lable">
        <h4>SHELF</h4>
    </div>

    <div class="user_image">
        <img class="user_avatar" src="<?php echo( $_SESSION['user_image']); ?>" alt="">
        <div class="user_name">
            <h4>
                <?php echo( $_SESSION['user_name']); ?>
            </h4>
        </div>
    </div>


    <div class="control_button">

        <?php 

if($_SESSION["user_email"] == "admin"){
echo '<a href="all_books.php"><button class="accordion">All Books</button></a>
   
<a href="most_popular.php"><button class="accordion">Most Popular</button></a>

<a href="bias_weight.php"><button class="accordion">Bias weight</button></a>
';
}

?>

        <a href="welcome.php"><button class="accordion">My Shelf</button></a>

        <a href="library.php"><button class="accordion">Library</button></a>

        <a href="friends.php"><button class="accordion active">Friends</button></a>

        <a href="upload_section.php"><button class="accordion">Upload</button></a>

        <a href="recent.php"><button class="accordion">Recently Added</button></a>


    </div>

</div>



<?php
$user_id=$_SESSION['user_id'];
$sql = "SELECT * from users";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row=mysqli_fetch_assoc($result)){

        if($row["user_id"]!=$user_id){
echo'<div class="friends_holder" >
    <div class="card">
  <img src="'. $row["user_image"] .'" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>'.$row["user_name"].'</b></h4> 

  </div>
</div>
</div>';
        }
    }
}
?>






    <div id="settings_bar" class="settings_bar">

        <div class="single_item">
            <h2>Change profile Picture</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">

                <input type="file" name="fileToUpload" id="fileToUpload" class="inputfile" required />
                <label for="fileToUpload"><h4>Choose Photo</h4></label>
                <input class="confirm_upload" type="submit" value="Save" name="submit">
            </form>
        </div>

    </div>



    <script>
        var open_listen = document.getElementById("set_open");
        var close_listen = document.getElementById("set_close");

        open_listen.addEventListener('click', function() {

            console.log("open pressed");
            document.getElementById("settings_bar").style.right = "0%";
            document.getElementById("set_close").style.display = "block";
            document.getElementById("set_open").style.display = "none";

        });

        close_listen.addEventListener('click', function() {
            console.log("CLose preses");

            document.getElementById("settings_bar").style.right = "-99%";
            document.getElementById("set_close").style.display = "none";
            document.getElementById("set_open").style.display = "block";
        });

    </script>
