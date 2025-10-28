<input type="number" name="id" >
<input type="text" name="name" >
<input type="text" name="email" >
<input type="text" name="addr" >
<button type="submit">Submit</button>
<?php
 $id = $_POST['id'];
 $name = $_POST['name'];    
 $email = $_POST['email'];
$addr = $_POST['addr'];
    $conn = mysqli_connect("KARDILE","root","","test");
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }
    $sql = "INSERT INTO users (id,name,email,addr) VALUES ('$id','$name','$email','$addr')";

    if($conn->query($sql)===TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();

?>