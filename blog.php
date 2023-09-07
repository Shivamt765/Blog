<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Feed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .comnt{
            font-style:italic;  
            color:palegreen;
        }
       .container{
             max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
       }

        .post {
            border: 1px solid #ccc;
            margin:15px auto;
            padding: 10px;
            width:50%;
            overflow: hidden;
         
        }

        .post img {
            max-width: 100%;
            height: auto;
            width:70%;
        }

        .post-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .post-author {
            font-style: italic;
            color: #666;
        }

        .post-content {
            margin-top: 10px;
        }
        @media screen and (max-width:360px){
            .post{
                width:100%;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Blog Feed</h1>
   
    <?php
    include "db.php";
    include "post_blog_1.php";
    session_start();
    $username=$_SESSION['username'];
    //  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     $comment=$_POST['comment'];
    //     $com="INSERT INTO blog_data (comment) VALUES ('$comment')";
    //     if(mysqli_query($conn,$com)){
    //         echo '<div class="alert">comment posted</div>';
    //     }
    //     else{
    //        echo  "No Data Found";
    //     }
    // }
    $sql = "SELECT * FROM blog_data";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {  
        while ($row = mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $postImage = $row['image'];
            $postText = $row['post_text'];
            $postTime=$row['time'];
            $comm=$row['comment'];
            echo '<div class="post text-center">';
            echo '<h2 class="post-title text-center"> Blog Feed </h2>';   
            echo '<p class="post-author">'.'Author - ' . $username . '</p>';
            echo '<small class="" style="font-size:11px";>' .$postTime. '</small><br>';
            echo '<p><li>' . $id . '</li>' . $postText . '</p>';
            if(!$postImage){
                echo "";
            }
            else{
                echo '<img src="images/' .$postImage . '" alt="Blog Post Image" width=100;>';  
            }
            echo '<div class="post-content">';
            echo '<p class="comnt">' .$comm . '</p>';
            // echo '<form method="POST" action="blog.php">';
            echo '<input type="text"  class="cmnt" name="comment" placeholder="Enter your comment">';
            echo '<button type="submit" class="btn btn-primary">Submit Comment</button>';
            echo '<p>'
            // echo '</form>';

            echo '</div>';
            echo '</div>';
           
        }
    } else {
        echo "No blog posts found.";
    }   
    ?>
</div>
<script src="js/comment.js"></script>
</body>
</html>
