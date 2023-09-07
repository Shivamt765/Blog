<?php
    include "db.php";
    include "total_post.php";
    include "view_count.php";
    session_start();    
    $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>
<style>
.card{
    margin:7px auto;
}
</style>
<body>
    <div class="dashboard">
        <div class="row">
            <div class="left-bar col-2">
                <div class="sider-bar">
                    <h1 class="text-center">Blog</h1>
                <div class="dash-menu text-center">
                    <a href="#" class="active"><i class="fa-solid fa-gauge"></i>Dashboard</a>
                    <a href="blog.php"><i class="fa-solid fa-blog" aria-hidden="false"></i>Blog Post</a>
                    <a href="#"><i class="fa-regular fa-message"></i>Message</a>
                    <a href="#"><i class="fa-solid fa-chart-simple"></i>Statistic</a>
                    <a href="#"><i class="fa-solid fa-gear"></i>Setting</a>
                    <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a>
                </div>
                </div>
            </div>
            <div class="col-7 mt-4">
                <div class="search-box">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>  
                <div class="box-wrapper d-flex text-center">
                <div class="card" style="width: 12rem;height:5rem;">
                        <div class="card-body">
                            <h6 class="card-title" style="font-size:12px;"><i class="fa-solid fa-blog">TOTAL POST</i></h5>
                            <p><?php echo $total_count; ?></p>
                        </div>
                    </div>
                    <div class="card" style="width: 12rem;height:5rem;">
                        <div class="card-body">
                        <h6 class="card-title" style="font-size:12px;"><i class="fa-solid fa-file">TOTAL PAGES</i></h5>
                        <p><?php echo $total_count; ?></p>
                        </div>
                    </div>
                    <div class="card" style="width: 12rem;height:5rem;">
                        <div class="card-body">
                        <h6 class="card-title" style="font-size:12px;"><i class="fa-solid fa-comments">TOTAL VIEWS</i></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-bar col-3">
                    <div class="profile mt-4 d-flex">
                        <div class="notification">
                        <a href=""><i class="fa-regular fa-bell"></i></a>
                        <div class="notification-dropdown">
                            <!-- Dropdown content here -->
                            <a href="#">Notification 1</a>
                            <a href="#">Notification 2</a>
                            <a href="#">Notification 3</a>
                        </div>
                        <span class="notification-text">3</span>
                        </div>
                        
                        <div class="user d-flex mt-2">
                        <img src="img/11.jpg" alt="">
                            <a href="" class=""><b>Hi,</b><?php
                            if(isset($username)){
                            echo $username;
                            }
                            else{
                                header("location:login.php");
                            }?>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="js/dash.js"></script>
</body>
</html>
