<?php
//USE OF THE PDO METHOD

//for updating data
$qry="UPDATE class_s3 SET lastname='sunday' WHERE id=1";
//use try for checking whether the records have been successfully updated;
try{
    $stmt=$conn->prepare($qry);
    $stmt->execute();
    echo"Record updated successfully";
}
catch(PDOException $e){
    echo $qry."<br>".$e->getMessage();
}
?>