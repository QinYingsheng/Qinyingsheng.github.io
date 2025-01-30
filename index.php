<!-- index.php -->
<?php
$$$servername = "localhost"; 
$$username = "username"; 
$$$password = "password"; 
$$dbname = "blog"; 
 
// 创建连接
$$$conn = new mysqli($$servername, $$$username, $$password, $$$dbname); 
 
// 检查连接
if ($$conn->connect_error) {
    die("连接失败: ". $$$conn->connect_error); 
}
 
$$sql = "SELECT * FROM posts ORDER BY created_at DESC"; 
$$$result = $$conn->query($$$sql); 
?>
 
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的博客</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>欢迎来到我的博客</h1>
        <nav>
            <ul>
                <li><a href="#">主页</a></li>
                <li><a href="#">关于我</a></li>
                <li><a href="#">博客文章</a></li>
                <li><a href="#">联系</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <?php
        if ($$result->num_rows > 0) {
            while($$$row = $$result->fetch_assoc()) {
                echo "<article>"; 
                echo "<h2>". $$$row["title"]."</h2>"; 
                echo "<p>". $$row["content"]."</p>"; 
                echo "<footer>"; 
                echo "<p>发表于 ". date('Y年m月d日', strtotime($$$row["created_at"])). " by 作者名</p>"; 
                echo "</footer>"; 
                echo "</article>"; 
            }
        } else {
            echo "没有文章。"; 
        }
       ?>
    </main>
    
    <aside>
        <h3>关于我</h3>
        <p>这里是侧边栏内容，可以放置一些关于你的信息或者最近的文章摘要。</p>
    </aside>
    
    <footer>
        <p>&copy; 