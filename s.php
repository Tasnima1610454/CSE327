<!DOCTYPE html>
<html>
<head>


</head>
<body>

 <?php

 $type =$_POST["s"] ;
$conn = mysqli_connect("localhost", "root", "", "project");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT *  FROM car WHERE model REGEXP '$type'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   echo "Showing all "."$type"." Car"."<br>";
   while($row = $result->fetch_assoc()) {
    echo "Car Name :" .$row["Model"] ."<br>";
    echo "Brand Name :" .$row["Brand"] ."<br>";
    echo "Year :" .$row["Year"] ."<br>";
    echo "Auction Grade :" .$row["AucGrade"] ."<br>";
    echo "Price :" .$row["Price"] ."<br><br><br><br>";

}

} else { echo "No match found "; }
$conn->close();
?>

</body>
</html>
