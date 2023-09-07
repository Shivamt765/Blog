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
<style>
    .upload{
        color: green;
    position: relative;
    top: -170px;
    right: -512px;
    width: 18%;
    height: 55px;
    }
</style>
<body>
<div class="post-blog">
        <div class="post-wrapper">
            <h1 class="text-center" style="color:#ff820cf0">Post a Blog</h1>
            <form action="post_blog_1.php" method="post" enctype="multipart/form-data">
                    
                    <textarea name="post_text" required placeholder="What`s on your mind..."></textarea>
                    <input type="file" name="image" accept="image/*">
                    <button type="submit" name="submit">Post</button>
            </form>
        </div>
    </div>


</body>
</html>