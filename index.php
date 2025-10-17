<?php

$posts = [
    'user' => 'amalie',
    'avatar' => '',
    'image' => 'https://scontent-prg1-1.xx.fbcdn.net/v/t1.15752-9/562992987_1398672601826785_2947656416474858876_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=0024fc&_nc_ohc=DL_RwpE6Ki4Q7kNvwGV1K2V&_nc_oc=AdlOo7Yr0kFNiUU7T5vA5dlQT5lH6o0-878KxB3k_hC8cRYLkiCsJCTVKUqz7pXPKuA&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-prg1-1.xx&oh=03_Q7cD3gGnBMrHkq4zbCvfvDn4BUcW6eDSEcESc64ePv_USlPFAg&oe=6919ADF4',
    'caption' => 'ahoj',
    'likes' => rand(100, 1000),
];
[
    'user' => 'vanessa',
    'avatar' => '',
    'image' => 'https://scontent-prg1-1.xx.fbcdn.net/v/t1.15752-9/566447207_1139801164394238_6392514770525798646_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=0024fc&_nc_ohc=G43g4DBUESoQ7kNvwHte-87&_nc_oc=AdkPypj8WYX3V4K3U7QT9IYg2qgrfVF-ZTrKjxNA1rubFzgbBrjLfD9hcn-6kOK1kv8&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-prg1-1.xx&oh=03_Q7cD3gHXkMmCYc3tf2HkRhq5zUSkTiao7UVszWrl4r38UEFdPA&oe=69197BCE',
    'caption' => 'cau',
    'likes' => rand(100, 1000),
];
[
    'user' => 'filip',
    'avatar' => '',
    'image' => 'https://scontent-prg1-1.xx.fbcdn.net/v/t1.15752-9/504478582_729607486676075_788063140528316806_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=0024fc&_nc_ohc=pSXhwOFGWz4Q7kNvwF0nxrd&_nc_oc=Adla48dY14QhhuWwLGTVDHU2uhSge2eCg5Vy6VGxZWHPeWhtD5CNm3pMaY6mvwW62GI&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-prg1-1.xx&oh=03_Q7cD3gGiBkq5Z3xdNDwL6xYfY0-Kqf_7Br-N0MK3tSqUAtQFZw&oe=691981B0',
    'caption' => 'miluju manon',
    'likes' => rand(100, 1000),
];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Instagram</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="sidebar">
        <div class="instagram"></div>
        <ul>
            <li><span class="icon"></span>Home</li>
            <li><span class="icon"></span>Search</li>
            <li><span class="icon"></span>Explore</li>
            <li><span class="icon"></span>Reels</li>
            <li><span class="icon"></span>Messages</li>
            <li><span class="icon"></span>Notifications</li>
            <li><span class="icon"></span>Create</li>
            <li><span class="icon"></span>Profile</li>
            <li class="low"><span class="icon">More</span></li>
            <li class="low"><span class="icon">Also from Meta</span></li>
        </ul>

    </div>

    <div class="feed">
        <?php foreach ($posts as $post): ?>
        <div class="post">
            <div class="post-header">
                <img src="<?php echo $post['avatar']; ?>" width="40" height="40">
                <strong><?php echo $post['user']; ?></strong>
            </div>
            <img class="main" src="<?php echo $post['image']; ?>" alt="">
            <div class="post-content">
                <div class="likes"><span class="like-icon"><?php echo $post['likes']; ?></span></div>
                <div class="caption"><strong><?php echo $post['user']?></strong> <?php echo $post ['caption']; ?></div>
                <div class="comment"><span class="comment-icon"></span></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>

</html>


