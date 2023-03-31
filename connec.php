<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname="ktpm";
$conn = new mysqli ($servername, $username, $password, $dbname) or die ('Không thể kết nối tới database');
mysqli_set_charset($conn, 'UTF8');

if($conn === false){ 
die("ERROR: Could not connect. " . mysqli_connect_error()); 
}
else {

}
if(isset($_POST['gui'])){
    $ten = $_POST['hoten'];
    $pass = $_POST['password'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $nd = $_POST['nd'];

    $query = "SELECT * FROM test WHERE sdt='$sdt'";
    $result = mysqli_query($conn, $query) or die( mysqli_error($conn));
    
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if ($result) {
       if(mysqli_num_rows($result) > 0){
   
       echo "<br><p style='color:Red'>*Đừng spam</p>";
       exit;   
   }
   }

   if ($conn->query("INSERT INTO test (ten,pass,sdt,email,noidung) VALUES 
   (N'$ten',N'$pass',N'$sdt',N'$email',N'$nd')")) {
       echo "<br><p style='color:rgb(106, 226, 144);'>Gửi thành công</p>";

   } 


}


?>