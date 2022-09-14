
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<div class="container">
    <h2> helloworld </h2>
<?php
    
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
    
    
$per_page = 10;
$start_page =0;



if(isset($_GET["page"])) $start_page=$_GET["page"]*$per_page;

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  echo "Connected successfully <br> <hr>"; 
$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);
$numrow = mysqli_num_rows($result);
echo '<br> จำนวนสินค้าทั้งหมด '.$numrow."Records<br>";

echo "<nav aria-label='Page navigation example'> <ul class='pagination'>";
echo " <li class='page-item'>";
echo " <a class='page-link' href='index.php?page=".(($start_page/10)-1)."'>Previous</a> </li>";

for($i=0; $i<ceil($numrow/$per_page); $i++)
{
    
    echo "<li class='page-item'> <a  class='page-link' href='index.php?page=$i'>".($i+1)."</a></li>";

}
echo " <li class='page-item'> <a class='page-link' href='index.php?page=".(($start_page/10)+1)."'>Next</a> </li>";


echo "</ul></nav>";
$sql = "SELECT * FROM product LIMIT $start_page,$per_page";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0 )
{   echo "<table  class='table table-bordered'><tr><th>id</th><th>name</th><th>description</th><th>price</th> <th> Image</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo " <tr><td>".$row["id"]."</td><td> ". $row["name"]." </td><td>" ;
        echo $row["description"]."</td><td>" .$row["price"]."</td> <td>";
        echo "<img src ='/picshop/".$row["id"].".jpg'> </td></tr>";
    }
}else{
    echo ' 0 resultes';
}

?>
</div>
</body>
</html>
