<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../include/password.php";
    
    $myMemberID = $_SESSION['myMemberID'];
    $youNickname = $_POST['youNickname'];
    $youName = $_POST['youName'];
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPassC'];

    $youPass = password_hash($youPass, PASSWORD_DEFAULT);

    $sql = "UPDATE myMember set youPass='$youPass', youNickname='$youNickname', youName='$youName'  WHERE myMemberID='$myMemberID'";

    $result = $connect -> query($sql);

    Header("Location: userpages.php?memberID=$myMemberID");
?>