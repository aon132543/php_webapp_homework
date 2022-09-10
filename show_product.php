<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname = "shop";
$per_page = 10;
$start_page =0;
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_GET["page"])) $start_page=$_GET["page"]*$per_page;
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully"; 
$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);
$numrow = mysqli_num_rows($result);
echo '<br>'.$numrow."Records<br>";


for($i=0; $i<ceil($numrow/$per_page); $i++)
{
    echo " <a href='show_product.php?page=$i'>[".($i+1)."]</a>";

}
$next = ($start_page+1);
echo $next;
echo " <a href='show_product.php?page=".$next."'>[ > ]</a>";

$sql = "SELECT * FROM product LIMIT $start_page,$per_page";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{   echo "<table border=1><tr><th>id</th><th>name</th><th>description</th><th>price</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo " <tr><td>".$row["id"]."</td><td> ". $row["name"]." </td><td>" ;
        echo $row["description"]."</td><td>" .$row["price"]."</td></tr>";
    }
}else{
    echo ' 0 resultes';
}

?>