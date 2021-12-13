<!--METHOD TWO FOR CONNECTING TO THE DATABASE-->
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="student";
$conn=new mysqli($servername, $username, $password, $database_name);
// check the connection
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}else{
    echo"Connected successfully";
}

//creating the database
// $sql="CREATE DATABASE student";
//CHECKING WHETHER THE DATABASE HAS BEEN CREATED
// if($conn->query($sql)==TRUE){
//     echo"Database created successfully";
// }else{
// echo"Error in creating the database".$conn->error;
// }

//CREATING THE TABLE IN THE STUDENTS DATABASE
// $sql="CREATE TABLE class_two(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(50) NOT NULL,
// lastname VARCHAR(50) NOT NULL,
// email VARCHAR(50) ,
// reg_date TIMESTAMP
// )";
//CHECKING WHETHER THE TABLE HAS BEEN CREATED;
// if($conn->query($sql)==TRUE){
//     echo"Table has been created successfully";
// }else{
//     echo"Error creating table".$conn->error;
// }

//for inserting the records into the database
// $qry ="INSERT INTO class_two(firstname, lastname,email)
// VALUES ('paul','job','jaka@gmail.com')
// ";
//checking whether the records have been inserted correctly
// if($conn->query($qry)){
//     echo"New record inserted successfully.";
// }else{
//     echo"Error in inserting the record".$conn->error;
// }

//for inserting multiple records
//  $qry="INSERT INTO `class_two`(`firstname`,`lastname`,`email`) VALUES('keila','BAGS','bas@gmail.com');";
//     $qry.="INSERT INTO `class_two`(`firstname`,`lastname`,`email`) VALUES('nana','rixa','ags@gmail.com');";
//     $qry.="INSERT INTO `class_two`(`firstname`,`lastname`,`email`) VALUES('coco','neoen','bgs@gmail.com');";
//     $qry.="INSERT INTO `class_two`(`firstname`,`lastname`,`email`) VALUES('keko','BAd','bag@gmail.com')";

    //checking whether the records have been inserted;
    // if($conn->multi_query($qry)){
    //     echo"New records inserted successfully";
    // }else{
    //     echo"Error inserting the records".$conn->error;
    // }

    //retreiving the data from the table;
    // $qry="SELECT id, firstname,lastname FROM class_two";
    // $result=$conn->query($qry);
    // if($result->num_rows>0){
        //output the data of each row
    //     while($row=$result->fetch_assoc()){
    //         echo"id:".$row["id"]. "Name:".$row["firstname"]."".$row["lastname"]."<br>";
    //     }
    // }else{
    //     echo"No records found";
    // }

    //for deleting the records
    $qry="DELETE FROM class_two WHERE id=4";
    // checking whether the records have been deleted successfully;
    if($conn->query($qry)==TRUE){
        echo"Record deleted successfully";
    }else{
        echo"Error deleting record".$conn->error;
    }
?>