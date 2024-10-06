<?php
    require 'config.php';

    $sql="SELECT name,email,mobile,massage FROM support";

    $result=$con->query($sql);

    if($result->num_rows>0)
    {
        echo"<table border='1'>";
        while($row=$result->fetch_assoc())
        {
            echo"<tr>";
            echo "<td>".$row["name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["mobile"]."</td>"."<td>".$row["massage"]."</td>";
            echo"</tr>";
        }
        echo"</table>";
    }
    else{
        echo "no result";
    }
    $con->close();
?>