
<!DOCTYPE html>
<html>
    <head>
        <title>Practice</title>
        
        <body>
            <form action="includes/signup.php" method="POST">
                <input type="text" name="first" placeholder="FirstName">
                <br>
                <input type="text" name="last" placeholder="LastName">
                <br>
                <input type="text" name="email" placeholder="E-mail">
                <br>
                <input type="text" name="uid" placeholder="UserName">
                <br>
                
                <input type="password" name="pwd" placeholder="Password">
                <br><br>
                <button type="submit" name="submit">SignUp</button>


            </form>
        
    

 <?php
 /*
 $sql= "SELECT * FROM users;";
 $result =mysqli_query($conn, $sql);
 $resultCheck=mysqli_num_rows($result);
 if($resultCheck > 0){
     while($row=mysqli_fetch_assoc($result)){
        echo $row['user_uid']."<br>";
     
 }
}

$sql="INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
VALUES ('Daniel', 'Nielsen', 'mtuts@gmail.com', 'Admin', 'test123');";
mysqli_query($conn, $sql);
*/
 ?>
</body>

    </html>