<?php 
include "header.php";
 




//si te kalojme te dhenat ne databaze
$sql = "INSERT INTO projekt (full_name ,email ,salary, working_date, role, statuss) 
Values(:thename, :theemail, :thesalary,:thedate,:therole,:thestatus,)" ;
 
 $stmt = $conn->prepare($sql);

 $stmt ->bindParam(':thename', $_POST['full_name']); 
 $stmt -> bindParam(':theemail',$_POST['email']);
 $stmt -> bindParam(':thesalary',$_POST['salary']);
 $stmt -> bindParam(':thedate,',$_POST['worling_date']);
 $stmt ->bindParam(':therole', $_POST['role']);
 $stmt -> bindParam(':thestatus',$_POST['statuss']);


 $result = $stmt->execute(); 

if($result){
    $result = 1 ;
echo "Te dhenat u shtuan";

}else{
    echo"Problem ne shtim";
}



include "footer.php";
?>