<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/post_blog.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/87936735cd.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include "db.php";
// Check if the form was submitted
if(isset($_POST['submit'])) {
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Set timezone to India
    date_default_timezone_set('Asia/Kolkata'); 
    $postTime = date('Y-m-d H:i:s');

    // Retrieve data from the form
    $post_text = mysqli_real_escape_string($conn, $_POST['post_text']);
    
    // Upload image
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $imageUploaded=move_uploaded_file($image_temp, "images/$image");

  
    // Insert data into the database
    $sql = "INSERT INTO blog_data (post_text, image,time) VALUES ('$post_text', '$image','$postTime')";
    
    if(mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success upload">Post uploaded successfully!</div>'; 
        echo '<a href=index.php><button class="btn btn-primary">Return to Home</button></a>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
</body>
</html>