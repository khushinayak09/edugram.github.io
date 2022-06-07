<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, description FROM category";
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="images/icon1.png" >
    <meta charset="UTF-8">
    <title>Manage - Categories</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
    .button {
        background-color: black;
        border: none;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        margin: 1px 1px;
        cursor: pointer;
        }

    body
        {
          background-color: #E4E2E1;
          color: black;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            background-color: #E4E2E1;
        }
  
        h1 {
            text-align: center;
            color: black;
            font-size: xx-large;
            
        }
  
        td {
            background-color: #E4E2E1;
            border: 1px solid black;
        }
  
        th{
            background-color: #E4E2E1;
            border: 1px solid black;
        }
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    
        <h1>Category Details<br><button type="button" class="button" onclick="showUserCreateBox()">Add new Category</button><button  class ="button" onclick="history.back()">Go Back</button></h1>
        <section>
        <table>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            <?php  
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['description'];?></td>
                <td><button type="button" class="button" onclick="showUserCreateBox()">Edit</button><button type="button" class="button" onclick="document.location='delete.php'">Delete</button></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
</html>