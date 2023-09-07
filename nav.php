<?php
    include "db.php";
    session_start();
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    
    if ($username) {
        $menuData = json_decode(file_get_contents('json/log-nav.json'), true);
    } else {
        $menuData = json_decode(file_get_contents('json/nav.json'), true);
    }
    
    $logo = $menuData['logo'];
    $menu = $menuData['menuItems'];
?>
    <style>
        .navbar{
            background: linear-gradient(rgba(147, 176, 198, 0.3), rgba(255, 226, 309, 0.1));
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
        .nav-username{
            transition: all ease-in 0.3s;
            padding:7px 7px;
            border-radius:10px;
        }
        .nav-username:hover{
            background-color: #0dcaf0; 
            color: #fff;
           
        }
    </style>
 <div class="logo">
    <a href="<?php echo $logo['url']; ?>"><?php echo $logo['name']; ?></a>
</div>
<ul>
    <?php foreach ($menu as $item) : ?>
        <li><a href="<?php echo $item['url']; ?>" class="nav-username"><?php echo $item['label']; ?></a></li>
    <?php endforeach; ?>
    
    <?php if ($username) : ?>
        <li><a href="" class="nav-username"><b>Hi, </b><?php echo $username; ?></a></li>
        <li><a href="logout.php" class="nav-username">Logout</a></li>
    <?php endif; ?>
</ul>