<?php
  include "connection.php";
  $id="";
  $fname="";
  $email="";
  $phone="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:demo/index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from register where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: demo/index.php");
      exit;
    }
    $fname=$row["fname"];
    $email=$row["email"];
    $city=$row["city"];

  }
  else{
    $id = $_POST["id"];
    $fname=$_POST["fname"];
    $email=$_POST["email"];
    $city=$_POST["city"];

    $sql = "update register set fname='$fname', email='$email', city='$city' where id='$id'";
    $result = $conn->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
<nav >
      <div style="color:teal; margin-left:22rem;">
        <a  href="index.php">PHP CRUD OPERATION</a>
        <div  style="display:flex;">
          <ul >
            <li >
              <a   href="index.php">Home</a>
            </li>
            <li >
              <a  href="register.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div >
 
 <form method="post">
 
 <br><br><div style="color:orange; margin-left:22rem;">
 
 <div >
 <h1 >  Update Member </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" > <br>

 <label> NAME: </label>
 <input type="text" name="fname" value="<?php echo $fname; ?>" > <br>

 <label> EMAIL: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" > <br>

 <label> CITY: </label>
 <input type="text" name="city" value="<?php echo $city; ?>" > <br>

 <button style="color:orange; margin-left:5rem;" type="submit" name="submit"> Submit </button><br>
 

 </div>
 </form>
 </div>
</body>
</html>