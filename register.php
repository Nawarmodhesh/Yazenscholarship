<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width,intial-scale=1.0">

<div class="container" dir="rtl" style="text-align:right importaint">
<form method="post">


اسم:<input class= " form-control" type="text" name="name" required/>
<br>
العمر:<input class= " form-control" type="date" name="age" required/>
<br>
ايميل:<input class= " form-control" type="text" name="email" required/>
<br>
كلمه المرور:<input class= " form-control" type="text" name="password" required/>
<br>

<button class= " btn btn-dark" type="submit" name="register" >Register-تسجيل </button>
<a class="btn btn-warning " href="index.php">تسجيل الدخول</a>

</forme>
</div>
<?php
$username = "root";
$password =""; 
$database = new PDO ("mysql:host = localhost; dbname=mail;",$username,$password);//





if(isset($_POST['register']) ){
    $checkEmail = $database ->prepare("SELECT * FROM user WHERE email =:email");
    $email = $_POST ['email'];
    $checkEmail ->bindParam("email",$email);
    $checkEmail ->execute();
    if($checkEmail->rowCount()>0){
        echo '<div class="alert alert-danger" role="alert">
        ه>ا الحساب مستخدم سابقا</div>';
    }else{
        $name =filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $password =filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        $email =filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $age =($_POST['age']);
       


        $addUser = $database->prepare("INSERT INTO user(name, age,email,password) 
        VALUES(:name,:age,:email,:password)");
        $addUser->bindParam("name",$name);
        $addUser->bindParam("age",$age);
        $addUser->bindParam("email",$email);
        $addUser->bindParam("password",$password);
        //$securityCode = md5(date("h:i:s"));
       // $addUser->bindParam("SECURITY_CODE",$security_code);
        

       if($addUser -> execute()){
           echo '<div class="alert alert-success" role="alert">
            تم انشاء حساب بنجاح</div>';
            header("Location: index.php"); 

            
        }else{
           echo '<div class="alert alert-danger" role="alert">
            حدث خطا غير متوقع</div>';

        }

        







       
    }

}
?>