<?php
include 'db.php';  //memanggil file db.php
 
//mengecek variabel
if(isset($_POST["email"]) && isset ($_POST["password"]))
 {
 $password = $_POST['password'];
 $email= $_POST['email'];
 
 //perintah SQL untuk memasukan data
 $query = "INSERT INTO pegawai (email,password) VALUES ('$email','$password')";
 $hasil  = mysql_query($query);
 if($hasil)
  {
      $response["result"]= true ;
      $response["msg"]= "Register berhasil, silakan login";
      echo json_encode($response);
  }
 else {
     $response['result']= false ;
     $response['msg']="maaf,terjadi kesalahan";
     echo json_encode($response);
  }
}else{
    $response['result']= false ;
    $response['msg']="maaf, data salah";
    echo json_encode($response);
}
?>