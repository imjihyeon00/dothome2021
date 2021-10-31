<?php
  include "../connect/connect.php";
  include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>정신머리</title>

  <!-- css -->
  <link href="../assets/css/reset.css" rel="stylesheet">
  <link href="../assets/css/font.css" rel="stylesheet">
  <link href="../assets/css/common.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header">
    <?php
            include "../include/header.php";
        ?>
  </header>
  <!-- //header -->

  <main>
    <div id="qna_wrap">
      <div class="qna_benner">
        <div class="container">
          <div class="qna_bg">
            <h3>Q & A</h3>
            <p>사이트 이용관련 자주 묻는 질문에 대한 답변입니다.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="qna_form">
          <div class="qna_accordion">
            <div id="accordion">
              <h3>
                <span>[사이트 이용]</span>
                <span>문제가 한문제씩만 나오는데 여러문제를 풀 수는 없나요?</span>
                <span>2021.10.24</span>
              </h3>
              <div>
                <p>
                  현재 저희 정신머리 사이트에서는 문제를 한문제씩 푸는것만이 아니라 여러문제도 풀 수 있도록<br>
                  게시판을 나누었으며, 상단 메뉴에서 기출문제로 들어가시면 여러 문제를 풀어보실 수 있습니다.
                </p>
              </div>
              <h3>
                <span>[사이트 이용]</span>
                <span>이번 년도에 나온 시험은 언제 업데이트 되나요?</span>
                <span>2021.10.24</span>
              </h3>
              <div>
                <p>
                  저희 정신머리 사이트는 공부용 프로젝트로 제작된 사이트로 아직 기출문제가 업데이트 되지 않았습니다.<br>
                  추후 문제들을 찾아 업데이트 예정에 있습니다.
                </p>
              </div>
              <h3>
                <span>[사이트 이용]</span>
                <span>정보처리기사 문제를 업로드 할 수 있나요?</span>
                <span>2021.10.24</span>
              </h3>
              <div>
                <p>
                  로그인 후 홈페이지 메인에서 문제만들기를 클릭하여 회원분이 직접 문제를 만들어 보실 수 있습니다.
                </p>
              </div>
              <h3>
                <span>[개인정보 관련]</span>
                <span>회원탈퇴는 어떻게 하나요?</span>
                <span>2021.10.24</span>
              </h3>
              <div>
                <p>
                  회원탈퇴는 조만간 업데이트 예정에 있으며 Q&A밑에 있는 이메일문의로 문의주시면<br>
                  최대한 빠르게 처리해 드리도록 하겠습니다.
                </p>
              </div>
              <h3>
                <span>[개인정보 관련]</span>
                <span>가입된 이메일을 다른 이메일로 바꾸고 싶어요.</span>
                <span>2021.10.24</span>
              </h3>
              <div>
                <p>
                  이메일은 회원분들을 특정하는 부분으로 회원탈퇴 후 재가입 부탁드립니다.
                </p>
              </div>
              <h3>
                <span>[개인정보 관련]</span>
                <span>비밀번호를 잊어버린거 같아요. 어떻게 해야 하나요?</span>
                <span>2021.10.24</span>
              </h3>
              <div>
                <p>
                  관리자에게 Mail로 본인의 ID와 닉네임을 함께 보내주세요.<br>
                  확인 후 임시비밀번호를 보내드립니다.<br><br>
                  <a href="mailto:jisuhyn94@naver.com" style="text-decoration: underline;">메일보내기</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- //아코디언 -->

        <div class="mail_tell">
          <h4>기타사항을 메일로 문의 주시면 1~2일 내로 답변 드립니다.</h4>
          <form action="qnaMail.php" name="mailWrite" method="post" class="mail_form">
            <fieldset>
              <legend class="ir_so">메일 문의 영역</legend>
              <div>
                <label for="email_tite">문의 제목</label>
                <input type="text" id="email_tite" name="email_tite" class="email_tite" placeholder="제목을 입력해주세요!"
                  required />
              </div>
              <div>
                <label for="email_txt">문의 내용</label>
                <textarea name="email_txt" id="email_txt" class="email_txt" rows="13" placeholder="내용을 작성해주세요!"
                  required></textarea>
              </div>
            </fieldset>
            <button type="submit" class="email-btn" value="보내기">보내기</button>
          </form>
        </div>
      </div>
    </div>
  </main>
  <!-- //main -->

  <footer id="footer">
    <?php
          include "../include/footer.php";
        ?>
  </footer>
  <!-- //footer -->


  <!-- js -->
  <script src="../assets/js/jquery.min_1.12.4.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="../assets/js/common.js"></script>
  <script>
    $(function () {
      $("#accordion").accordion();
    });
  </script>
</body>

</html>