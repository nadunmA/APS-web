<?php

    include "connection.php";
    $msg=""; 
    $User_id="";
    $name="";
    $email="";
    $review="";

    if(isset($_GET['User_id'])) {
        $User_id = $_GET['User_id'];
        $select=mysqli_query($conn,"select * from user_reviews");
        $data=mysqli_fetch_assoc($select);

        $User_id=$data['User_id'];
        $name=$data['name'];
        $email=$data['email'];
        /*$review=$data['review'];*/
    
        
    }


    if(isset($_POST['submit'])) {

       /* echo "<pre>";
        print_r($_POST);*/
    
        $User_id=$_POST['User_id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $review=$_POST['review'];

       /* if(isset($_GET['User_id'])) {
            $update=mysqli_query($conn,"UPDATE `user_reviews` SET `User_id`='$User_id', `name`='$name', `email`='$email', `u_reviews`='$review' WHERE User_id'");
        }*/
        
           $insert = mysqli_query($conn,"INSERT INTO `user_reviews`(`User_id`, `name`, `email`, `u_reviews`) VALUES ('$User_id','$name','$email','$review')");

           /* if($insert) {
    
                $msg = "Data inserted successfully";
    
            }
            else
            {
                $msg = "Error";
            }*/
    

    }

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.userReBanner{
    height: 850px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    border-radius: 5px; 
    margin-top: -75px;
    position: relative;
    background-attachment: fixed;
    object-fit: cover;   
    background: rgba(0, 0, 0, 0.416)url(images/ucars.jpg);
    background-blend-mode: darken;
    margin-top: 8px;
}
    .userrBannerText h2{
    position: absolute;
    width: 100%;
    margin-top: -810px;
    text-align: center;
    color: rgba(224, 224, 224, 0.99);
    font-family: sans-serif;
    font-size: 80px;

}

.userrBannerText h3{
    position: absolute;
    width: 100%;
    margin-top: -730px;
    text-align: center;
    color: rgba(224, 224, 224, 0.99);
    font-family: sans-serif;
    font-size: 60px;
    
}

.mianForm{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    position: absolute;
    margin-top: -620px;
    margin-left: 390px;
    font-family: sans-serif;
    font-size: 18px;
    color: rgb(0, 0, 0);
}

#formBack{
    background-color: rgb(205, 205, 205);
    border-radius: 20px;
    height: 90vh;
    width: 88vh;
}

.mainFullForm{
    display: flex;
    flex-direction: column;
    align-items: start;
    gap: 20px;
    margin-top: 15px;
}

.userAddDetails{
    width: 400px;
    height: 50px;
    border: none;
    outline: none;
    padding-left: 25px;
    font-weight: 500;
    color: rgb(0, 0, 0);
    border-radius: 50px;
}

textarea{
    height: 240px;
    padding-top: 5px;
    border-radius: 20px;
    font-family: sans-serif;
}

.userAddDetails:focus{
    border: 2px solid aqua;
    box-shadow: 0 0 6px 5px rgb(0, 202, 253);
}

.mianForm button{
    display: flex;
    align-items: center;
    padding: 15px 30px;
    font-size: 16px;
    color: wheat;
    gap: 10px;
    border: none;
    border-radius: 50px;
    margin-left: 145px;
    margin-top: 20px;
    font-family: sans-serif;
    background: linear-gradient(270deg, rgb(0, 72, 227), rgb(1, 118, 118));
    transition: background-color 0.3s, transform 0.3s;
}

.mianForm button:hover{
    transform: scale(1.1);
}

.hBtn{
    position: absolute;
    margin-top: -800px;
    display: flex;
    align-items: center;
    padding: 8px 12px;
    font-size: 12px;
    gap: 10px;
    border: none;
    border-radius: 50px;
    font-family: sans-serif;
    background: #50c111;
    margin-left: 1220px
}


a:link {
    background-color: transparent;
    text-decoration: none;
  }
  
a:visited {
    
    background-color: transparent;
    text-decoration: none;
  }

</style>







</head>
<body>

<div class="userReBanner"></div>
    <div class="userrBannerText">
        <h2>User Review's</h2><br>
        <h3>Park Pro</h3>
    </div> 


    <div class="mianForm" id="formBack">
        <form  method="post" class="mainFullForm" id="reviewForm">
            <label>User Id</label>
            <input type="text" name="User_id" placeholder="Your ID" class="userAddDetails"  required>
            <label>Name</label>
            <input type="text" name="name" placeholder="Your Name" class="userAddDetails"  required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Your Email" class="userAddDetails" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            <label>Review</label>
            <textarea name="review" placeholder="Your Review" class="userAddDetails" required></textarea>
            <button type="submit" name="submit">Submit</button>
            <br>
            <span><?php echo $msg; ?></span>
        </form>
    </div>

    
    
    <button class="hBtn"><a href="show_data.php">Dashboard</a></button>

    

</body>
</html>