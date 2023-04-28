<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
   

    <title>Hello, world!</title>
  </head>
  <body>
    <nav >
      <div >
        <a  href="index.php">PHP CRUD OPERATION</a>
        <div  style="display:flex; width:18rem;">
          <ul  style="display:flex;justify-content:space-between;gap:2rem">
            <li class="nav-item">
              <a  aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a type="button"  href="register.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>CITY</th>
        
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from register";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[fname]</td>
        <td>$row[email]</td>
        <td>$row[city]</td>
    
        <td>
                  <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
  
   
  </body>
</html>