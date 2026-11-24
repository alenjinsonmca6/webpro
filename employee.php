$conn =mysqli_connect("localhost", "root","","company_db");
if(!conn)
die("connection failed:".mysqli_connect_error());
}
$message ='';
if(isset($_post['save'])){
$name=$_post['emp_name'];
$email=$_post['email'];
$dept=$_post['department'];
$salary=$_post['salary'];



$sql = "INSERT INTO employee(emp_name,email,deparment,salary)
    VALUES('$name','$email','$dept',$salary)";

if(mysqli_query($conn,$sql)){

$message="Employee saved successfully!";
}else{
$message="Error:".mysqli_error($conn);
}
}
?>