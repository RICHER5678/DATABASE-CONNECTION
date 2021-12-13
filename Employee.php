<!--EXERCISE-->
<?php
// create a database COMPANY, with a table called employee, with columns,
// ==>eid 
// ==>ename 
// ==>eaddress 
// ==>ephone 

$servername="localhost";
$username="root";
$password="";
$database_name="company";
//the script for connecting  to the database
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
    die("connection has failed".mysqli_error());
}else{
    echo"connected successfully";
}


// $qry="CREATE DATABASE COMPANY";
// if(mysqli_query($conn,$qry)){
//     echo"<br> Database created successully";
// }else{
//     echo"<br>Error creating the Database".mysqli_error($conn);
// }

//CREATING THE  TABLE IN THE EMPLOYEE DATABASE
// $table1="CREATE TABLE employee(eid INT(6) PRIMARY KEY, ename VARCHAR(50) NOT NULL, eaddress VARCHAR(50) NOT NULL, 
// ephone INT(10) NOT NULL) ";
//CHECKING WHETHER THE TABLE HAS BEEN CREATED;
// if(mysqli_query($conn, $table1)){
//     echo"Table has been created";
// }else{
//     echo"Error in creating the table".mysqli_error($conn);
// }

//for inserting the records
// $qry="INSERT INTO employee(eid, ename, eaddress, ephone) VALUES(1,'Job','Entebbe',0706179176)";
// $qry="INSERT INTO employee(eid, ename, eaddress, ephone) VALUES(2,'bags','Entebbe',0706379176)";
// $qry="INSERT INTO employee(eid, ename, eaddress, ephone) VALUES(3,'walker','Entebbe',0706179135)";
// $qry="INSERT INTO employee(eid, ename, eaddress, ephone) VALUES(4,'nam','Entebbe',0706179170)";
// $qry="INSERT INTO employee(eid, ename, eaddress, ephone) VALUES(5,'rita','Entebbe',0706179126)";
// $qry="INSERT INTO employee(eid, ename, eaddress, ephone) VALUES(6,'rema','Entebbe',0706179190)";
//checking whether the records have been inserted;
// if(mysqli_query($conn, $qry)){
//     echo"Records inserted successfully";
// }else{
//     echo"Error in creating table".mysqli_error($conn);
// }

//QUERY FOR DELETING RECORDS
// $qry="DELETE FROM employee WHERE eid=4";
//checking whether the record has been deleted
// if(mysqli_query($conn, $qry)){
//     echo"Record deleted successfully";
// }else{
//     echo"Error in deleting the record".myqli_error($conn);
// }

//for updating the data using php
$qry="UPDATE employee SET ename='Bagombeka' WHERE eid=1";
if(mysqli_query($conn, $qry)){
    echo"Record updated successfully";
}else{
    echo"Error in updating the record".mysqli_error($conn);
}
?>