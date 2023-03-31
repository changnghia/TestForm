<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <style>
       
        #formn{
           display: block;
           width: 800px;
           margin-left: 300px;
           border: 1px solid black;   
          
           padding: 50px ;
        }
    </style>
    <form class="row g-3" method="POST" onsubmit="return matchpass()" name="f1" action="test.php">
    
        <div id="formn">
    <div class="col">
    <label for="hoten" class="form-label">Họ và tên</label>
    <input type="text" class="form-control" id="hoten" aria-label="First name" name="hoten" >
    <div style="color:red" id="checkcc1"></div>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4"  name="password" >
    <div style="color:red" id="checkcc"></div>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" name="sdt" id="inputCity" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" >
    <div style="color:red" id="checkcc2"></div>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" >
    <div style="color:red" id="checkcc3"></div>
  </div>


 
 
  
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nội dung</label>
  <textarea class="form-control" name="nd" id="exampleFormControlTextarea1" rows="3"></textarea>
  <div style="color:red" id="checkcc4"></div>
</div>
  <div class="col-12">
    <button type="submit" name="gui" class="btn btn-primary">Gửi</button>
  </div>
  </div>
  <?php require 'connec.php' ?>
</form>
<script>
  function matchpass(){  

var firstpassword=document.f1.password.value;  
var hoten=document.f1.hoten.value;  
var sdt=document.f1.sdt.value;  
var email=document.f1.email.value; 
var nd=document.f1.nd.value;  
    

let chucai=/[a-z]/;
let chucaihoa=/[A-Z]/;
let chuso=/\d/;
if(!hoten){
  document.getElementById("hoten").style.borderColor="red";
    document.getElementById("checkcc1").innerHTML = "Họ tên không được để trống";
    return false;
}
else{
  document.getElementById("hoten").style.borderColor="gray";
    document.getElementById("checkcc1").innerHTML = "";
if(!firstpassword){
  document.getElementById("inputPassword4").style.borderColor="red";
    document.getElementById("checkcc").innerHTML = "Mật khẩu không được để trống";
  

  return false;
}

else{
  document.getElementById("inputPassword4").style.borderColor="gray";
    document.getElementById("checkcc").innerHTML = "";
 
if(firstpassword.length>=8){
  document.getElementById("inputPassword4").style.borderColor="gray";
    document.getElementById("checkcc").innerHTML = "";
    if(chucai.test(firstpassword)){
      document.getElementById("inputPassword4").style.borderColor="gray";
    document.getElementById("checkcc").innerHTML = "";
    if(chucaihoa.test(firstpassword)){
      document.getElementById("inputPassword4").style.borderColor="gray";
    document.getElementById("checkcc").innerHTML = "";
    
    if(chuso.test(firstpassword)){
      document.getElementById("inputPassword4").style.borderColor="gray";
    document.getElementById("checkcc").innerHTML = "";
    if(!sdt){
    document.getElementById("inputCity").style.borderColor="red";
    document.getElementById("checkcc2").innerHTML = "Số điện thoại không được để trống";
    return false;
  }
  else{
    document.getElementById("inputCity").style.borderColor="gray";
    document.getElementById("checkcc2").innerHTML = "";
    if(sdt.length>=10){
      document.getElementById("inputCity").style.borderColor="gray";
    document.getElementById("checkcc2").innerHTML = "";
    if(!email){

      document.getElementById("inputEmail4").style.borderColor="red";
    document.getElementById("checkcc3").innerHTML = "Email không được để trống";
  return false;
    }
    else{
      document.getElementById("inputEmail4").style.borderColor="gray";
    document.getElementById("checkcc3").innerHTML = "";
    if(!nd){
      document.getElementById("exampleFormControlTextarea1").style.borderColor="red";
    document.getElementById("checkcc4").innerHTML = "Vui lòng nhập ý kiến của bạn";
  return false;
    }
    else{
      document.getElementById("exampleFormControlTextarea1").style.borderColor="gray";
    document.getElementById("checkcc4").innerHTML = "";
    }
    }
  }else{
    document.getElementById("inputCity").style.borderColor="red";
    document.getElementById("checkcc2").innerHTML = "Ít nhất 10 chữ số";
    return false;
  }
  }
}else{
  document.getElementById("inputPassword4").style.borderColor="red";
    document.getElementById("checkcc").innerHTML = "Mật khẩu phải chứa ít nhất một chữ số";
    return false;
}
}
else{
  document.getElementById("inputPassword4").style.borderColor="red";
    document.getElementById("checkcc").innerHTML = "Mật khẩu phải chứa ít nhất một chữ cái hoa";
    return false;
}
}
else{
  document.getElementById("inputPassword4").style.borderColor="red";
    document.getElementById("checkcc").innerHTML = "Mật khẩu phải chứa ít nhất một chữ cái thường";
    return false;
}

}


else{
  document.getElementById("inputPassword4").style.borderColor="red";
    document.getElementById("checkcc").innerHTML = "Mật khẩu không hợp lệ. Mật khẩu cần có trên 8 ký tự, chứa ít nhất một chữ cái và một chữ số.";
  return false;
}

}

}

}


</script>
</body>
</html>