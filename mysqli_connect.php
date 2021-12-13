<?php
$servername="localhost";
$username="root";
$password="";
$database_name="saischool";
//the script for connecting  to the database
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
    die("connection has failed".mysqli_error());
}else{
    echo"connected successfully";
}


//the script for creating the databse using php[saischool]
// $qry="CREATE DATABASE saischool";
// if(mysqli_query($conn,$qry)){
//     echo"<br> Database created successully";
// }else{
//     echo"<br>Error creating the Database".mysqli_error($conn);
// }


//the script for creating the table;
// $qry="CREATE TABLE se_school(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP
// )";
// //CHECKING WHETHER THE TABLE WAS CREATED, then if yes, the database wil be created or if the values columns are inserted using a wrong syntax,
//everything wont work;
// if(mysqli_query($conn, $qry)){
//     echo"<br> Table created successfully";
// }else{
//     echo"<br> Error creating table".mysqli_error($conn);
// }

//for creating another table
// $table2="CREATE TABLE se_class(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(50) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP)";

// //checking whether table has been created;
// if(mysqli_query($conn, $table2)){
//     echo"Table two has been created";
// }else{
//     echo"Error in creating the tabele!!.".mysqli_error($conn);
// }


//the script for inserting the data into the database(se_school)
// $insert="INSERT INTO `se_school`(`id`,`firstname`,`lastname`,`email`,`reg_date`) VALUES(2,'JOB1','BAGS','bags@gmail.com',20-7-2021)";
// $insert="INSERT INTO `se_school`(`id`,`firstname`,`lastname`,`email`,`reg_date`) VALUES(3,'Richer','zianah','bagsjob@gmail.com',2021-03-09)";
// $insert="INSERT INTO `se_school`(`id`,`firstname`,`lastname`,`email`,`reg_date`) VALUES(4,'JOB1','BAGS','bags@gmail.com',2021-04-08)";
// $insert="INSERT INTO `se_school`(`id`,`firstname`,`lastname`,`email`,`reg_date`) VALUES(5,'Tulinaks','Edward','tulinaksedward@gmail.com',2021-04-08)";
// //checking whether the values have been inserted
// if(mysqli_query($conn, $insert)){
//     echo"Values inserted successfully: Don't worry(another row inserted)";
// }else{
//     echo"Failed to insert the values, error in inserting the values".mysqli_error($conn);
// }

//inserting the values into table2
// $ins="INSERT INTO `se_class`(`id`,`firstname`,`lastname`,`email`) VALUES(1,'JOB1','BAGS','bags@gmail.com')";

//checking whether the records have been inserted;
// if(mysqli_query($conn, $ins)){
//         echo"Values inserted successfully: Don't worry( row inserted)";
//     }else{
//         echo"Failed to insert the values, error in inserting the values".mysqli_error($conn);
//     }
    //for inserting multiple rows in a table
    // $ins="INSERT INTO `se_class`(`id`,`firstname`,`lastname`,`email`) VALUES(6,'JOB1','BAGS','bags@gmail.com');";
    // $ins.="INSERT INTO `se_class`(`id`,`firstname`,`lastname`,`email`) VALUES(3,'JOB1','BAGS','bags@gmail.com');";
    // $ins.="INSERT INTO `se_class`(`id`,`firstname`,`lastname`,`email`) VALUES(4,'JOB1','BAGS','bags@gmail.com');";
    // $ins.="INSERT INTO `se_class`(`id`,`firstname`,`lastname`,`email`) VALUES(5,'JOB1','BAGS','bags@gmail.com')";

    //checking whether the above multiple rows have been inserted;
    // if(mysqli_multi_query($conn, $ins)){
    //     echo"Records inserted";
    // }
    // else{
    //     echo"Error in inserting the record".mysqli_error($conn);
    // }

    //retreiving the data from the se_class table
    $qry="SELECT id, firstname, lastname FROM se_class";
    $result=mysqli_query($conn, $qry)
//for outputting data
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo"id.".row['id']."Name:".$row['firstname']."".$row['lastname']"<br>"
    }
}

//for closing the connection
mysqli_close($conn);
?>

