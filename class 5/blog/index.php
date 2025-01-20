<html>
<head>
    <title>Blog Post List</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div
        class="container">
        <div
            class="header">
            <div
                class="right-side">
                لیست پست ها
            </div>
            <div
                class="left-side">
                <a href="create.php">
                    ایجاد پست جدید
                </a>
            </div>
        </div>
        <table
            border="1">
        <?php
        $postList = file_get_contents('db.txt');
        $postList = json_decode($postList,true);
        foreach($postList as $key=>$postItem)
        {
            echo "<tr>
                    <td>".($key + 1)."</td>
                    <td>".$postItem['title']."</td>
                    <td>".$postItem['text']."</td>
                  </tr>";
        }
        ?>
        </table>
    </div>
</body>
</html>