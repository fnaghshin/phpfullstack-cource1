<?php

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $link = null;

    require_once 'database_connect.php';

    $sql_query = "SELECT * FROM `user` WHERE `id`=$id";

    $result = $link->query($sql_query);

    $userInfo = $result->fetch_assoc();

    echo '<pre>';
    print_r($userInfo);
    echo '</pre>';

    ?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form
            method="post"
            action="database_update.php">
            <input
                type="hidden"
                name="id"
                value="<?php echo $userInfo['id']; ?>">
            <input
                type="text"
                name="username"
                value="<?php echo $userInfo['username']; ?>"
                >
            <br />
            <input
                type="text"
                name="password"
                value="<?php echo $userInfo['password']; ?>">
            <br>
            <select
                name="status">
                <option
                    <?php echo ($userInfo['status'] == 0)?'selected':''; ?>
                    value="0">DeActive</option>
                <option
                    <?php echo ($userInfo['status'] == 1)?'selected':''; ?>
                    value="1">Active</option>
            </select>
            <br >
            <button
                type="submit">
                Save
            </button>
        </form>
    </body>
</html>

<?php
}else{

    echo 'First Select A User';
}

?>

