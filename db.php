<?php
//make mysql connection with the database week_task
$connection = mysqli_connect('localhost', 'root', '', 'week_task');
//check if the connection is successful
if(!$connection){
    die("Database connection failed");
}
//make a query to the database
$query = "SELECT * FROM week";
//store the result of the query in a variable
$result = mysqli_query($connection, $query);

//check if the query was successful
if(!$result){
    die("Query failed");
}
//return all assocated result to trmplate.php
$data=[];
while($row = mysqli_fetch_assoc($result)){
    $data[]=$row;
}
$result=$data;
$arrayData = json_encode($data);


?>