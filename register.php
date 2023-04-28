<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $q = " INSERT INTO `register`(`fname`, `email`, `city`) VALUES ( '$fname', '$email', '$city' )";

        $query = mysqli_query($conn,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  
</head>
<body>
       
          <ul >
            <li >
            <a   href="index.php">Home</a>
            </li>
            <li >
              <a  href="register.php"><span >Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div >
 
 <form method="post">
 
 <br><br><div >
 
 <div >
 <h1 > Register</h1>
 </div><br>

 <label> NAME: </label>
 <input type="text" name="fname" > <br>

 <label> EMAIL: </label>
 <input type="text" name="email" > <br>

 <label> City: </label>
 <input type="text" name="city" > <br>

 <button  type="submit" name="submit"> Submit </button><br>


 </div>
 </form>
 </div>
</body>
</html>