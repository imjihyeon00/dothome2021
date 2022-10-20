<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myComment (";
    $sql .= "myCommentID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "youName varchar(20) NOT NULL,";
    $sql .= "youText varchar(50) NOT NULL,";
    $sql .= "regTime int(15) NOT NULL,";
    $sql .= "PRIMARY KEY (myCommentID)";
    $sql .= ")charset = utf8;";

    $result = $connect -> query($sql);

    if($result){
        echo "Create Table True";
    } else {
        echo "Create Table False";
    }
?>
