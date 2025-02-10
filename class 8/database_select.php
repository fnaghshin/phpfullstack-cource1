<?php
$link = null;
require_once 'database_connect.php';

$sql_query = "SELECT * FROM `user`  ORDER BY `id` DESC ";

$result = $link->query($sql_query);

echo '<table border="1">';
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['username']."</td>
                <td>".$row['password']."</td>
                <td>".$row['status']."</td>
                <td>
                    <a href='database_show.php?id=".$row['id']."'>
                        ویرایش
                    </a>                
                </td>
                <td>
                    <a 
                        onclick='return confirm(\"Delete User ?\")'
                        href='database_delete.php?id=".$row['id']."'>
                        حذف
                    </a>
                </td>
              </tr>";
    }
}
echo '<teble>';