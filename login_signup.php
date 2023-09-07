<?php include "db.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $action= $_POST['action'];
        $username= $_POST['username'];
        $password= $_POST['password'];
        $username=mysqli_real_escape_string($conn,$username);
        $password=mysqli_real_escape_string($conn,$password);
        if($action=='login'){
            $sql="SELECT * FROM user_details WHERE username='$username' AND password='$password'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                session_start();    
                $_SESSION['username'] = $username;
                header("Location: index.php");
                exit();
            }
            else{
                echo "Invalid User or Password";
            }
        }
        elseif ($action=='signup'){
            $checkuser="SELECT * FROM user_details WHERE  username='$username'";
            $result=mysqli_query($conn,$checkuser);
            if(mysqli_num_rows($result)>0){
                echo "User Alerady Exsist";
            }
            else{
                
                $sql = "INSERT INTO user_details (username, password) VALUES ('$username', '$password')";
                if(mysqli_query($conn,$sql)){
                    echo "Signup Successfully";
                    header("Location:login.php");
                }
                else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        $conn->close();
    }
    ?>