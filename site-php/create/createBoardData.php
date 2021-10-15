<?php
  include "../connect/connect.php";

  for($i=1; $i<=100; $i++){
    $regTime = time();

    $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardContent, boardView, regTime) ";
    $sql .= "VALUES('6', '게시판 테스트 제목입니다${i}', '${i}번째 게시글 내용 입니다.', '1', '$regTime')";

    $result = $connect -> query($sql);

    if($result){
      echo "success";
    } else {
      echo "fail";
    }
  }
?>