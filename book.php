<!DOCTYPE html>
<html>
<head>


</head>
<body>

 <?php

 $type =$_POST["booksearch"] ;
$conn = mysqli_connect("localhost", "root", "", "aaa");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT *  FROM books WHERE Type REGEXP '$type'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   echo "Showing all "."$type"." Books"."<br>";
   while($row = $result->fetch_assoc()) {
    echo "Book Name :" .$row["Name"] ."<br>";
    echo "Edition :" .$row["Edition"] ."<br>";
    echo "Author :" .$row["Author"] ."<br>";
    echo "Description :" .$row["Description"] ."<br>";
    echo "Price :" .$row["Price"] ."<br><br><br><br>";

}

} else { echo "No match found "; }
$conn->close();
?>

</body>
</html>
