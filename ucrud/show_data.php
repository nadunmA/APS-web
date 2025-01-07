<?php
include "connection.php";

if(isset($_GET['User_id'])) {
    $User_id = $_GET['User_id'];
    $delete=mysqli_query($conn,"delete from user_reviews where User_id='$User_id'");

    if($delete) {
        header("location:show_data.php");
        die();
    }
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
    font-family: sans-serif;
    background-color: #f5edde;
}

.fullTable{

    height: 650px;
    overflow: auto;
    font-family: sans-serif;
    
}

table{
    width: 100%;
    table-layout: fixed;
    min-width: 1000px;
    border-collapse: collapse;
    margin-top: 140px;
}

thead th{
    position: sticky;
    top: 0;
    background-color: #d97700;
}

th, td{
    border-bottom: 1px solid rgb(0, 0, 0);
    padding: 12px 20px;
    text-align: center;
}

.headingFeedback{
    font-family: sans-serif;
    color: #292929;
    position: absolute;
    margin-left: 540px;
    font-size: 35px;
    margin-top: -31px;
    margin-top: 50px;
}

.editBtn{
    display: flex;
    align-items: center;
    padding: 6px 10px;
    font-size: 11px;
    font-style: bold;
    color: rgb(255, 255, 255);
    gap: 10px;
    border: none;
    border-radius: 50px;
    font-family: sans-serif;
    background: rgb(54, 170, 0);
    margin-left: 70px;
}

.deleteBtn{
    display: flex;
    align-items: center;
    padding: 6px 10px;
    font-size: 11px;
    font-style: bold;
    color: rgb(255, 255, 255);
    gap: 10px;
    border: none;
    border-radius: 50px;
    font-family: sans-serif;
    background: rgb(236, 0, 0);
    margin-left: 84px;
   
}


.addnewBtn button{
    margin-top: -596px;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    font-size: 13px;
    color: "white";
    gap: 10px;
    border: none;
    border-radius: 50px;
    font-family: sans-serif;
    background: rgb(228, 157, 5);
  
    
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

<h2 class="headingFeedback">User Feedback</h2>
    

    <div class="fullTable">
         <table classtable>
             <thead>
                 <tr>
                     <th>User ID</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Review</th>
                     <th>Action</th>
                 </tr>
              </thead>
            

                <?php
                    include "connection.php";


                    $select = mysqli_query($conn,"select * from user_reviews");
                    $num = mysqli_num_rows($select);

                    if($num>0) {
                        while($result=mysqli_fetch_assoc($select)) {

                            echo "
                                <tbody>
                    
                                    <td>".$result['User_id']."</td>
                                    <td>".$result['name']."</td>
                                    <td>".$result['email']."</td>
                                    <td>".$result['u_reviews']."</td>
                                    <td>

                                      <button  class='deleteBtn'><a href='?User_id=".$result['User_id']."'>delete</a></button><br>
                                      <button  class='editBtn'><a href='form.php?User_id=".$result['User_id']."'>Edit/Update</a></button>

                                      
                                    </td>
                                
                                </tbody>
                            
                            ";
                        }
                    }

                ?>
            
         </table>
     </div>

     <div  class="addnewBtn">
        <button><a href="form.php">Add New</a></button>
    </div>

</body>
</html>

