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
        <div class="random_head">
            <div class="container">
                <h1 id="random_title">문제풀기</h1>
                <span id="random_desc">랜덤으로 나오는 문제를 풀어 봅시다.</span>

                <div class="select_subject">
                    <label for="random_subject" class="ir_so">문제 과목 선택</label>
                    <select name="random_subject" id="random_subject" class="random_subject">
                        <option value="0">전체 랜덤 문제 풀기</option>
                        <option value="1">1과목 소프트웨어 설계</option>
                        <option value="2">2과목 소프트웨어 개발</option>
                        <option value="3">3과목 데이터베이스 구축</option>
                        <option value="4">4과목 프로그래밍 언어 활용</option>
                        <option value="5">5과목 정보시스템 구축 관리</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="random_question">
            <div class="container">
                <div class="question">
                    <div class="question_area">
                        <h3 class="question_title">
                            <span class="question_title_num">1</span>
                            <span class="question_title_ask">다음 중 올바른 것을 고르시오.</span>
                        </h3>
                        <div class="question_desc">
                            <h4>&lt;보기&gt;</h4>
                            <p>테스트용 보기 영역입니다.</p>
                        </div>
                        <div class="question_answer_selects">
                            <label for="select1">
                                <input type="radio" class="select" name="select" id="select1" value="1"><span
                                    class="choice">테스트용 보기1</span>
                            </label>
                            <label for="select2">
                                <input type="radio" class="select" name="select" id="select2" value="2"><span
                                    class="choice">테스트용 보기2</span>
                            </label>
                            <label for="select3">
                                <input type="radio" class="select" name="select" id="select3" value="3"><span
                                    class="choice">테스트용 보기3</span>
                            </label>
                            <label for="select4">
                                <input type="radio" class="select" name="select" id="select4" value="4"><span
                                    class="choice">테스트용 보기4</span>
                            </label>
                        </div>
                    </div>
                    <div class="question_side_menu">
                        <div class="share">
                            <h4 class="ir_so">공유하기</h4>
                            <span></span>
                        </div>
                        <div class="favorites">
                            <h4 class="ir_so">즐겨찾기</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="question_btn_area">
                    <div class="left"><button id="commentary_btn" class="question_btn">해설보기</button></div>
                    <div class="right">
                        <button type="button" id="grading_btn" class="question_btn">채점하기</button>
                        <a href="#" id="next_btn" class="question_btn">다음문제</a>
                    </div>
                </div>
                <div class="commentary_area">
                    <p>해설을 보여주는 영역입니다.</p>
                </div>
            </div>
        </div>
    </main>


    <footer id="footer">
        <?php
          include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->

    <script src="../assets/js/jquery.min_1.12.4.js"></script>
    <script src="../assets/js/common.js"></script>
    <script src="../assets/json/question.json"></script>
    <script>
        const questionTitle = document.querySelector(".question_title");
        const num = questionTitle.querySelector(".question_title_num");
        const ask = questionTitle.querySelector(".question_title_ask");
        const questionDesc = document.querySelector(".question_desc p");
        const commentary = document.querySelector(".commentary_area p");

        

        function urlCopy() {
            let url = '';
            let urlText = document.createElement("textarea");
            document.body.appendChild(urlText);
            url = window.document.location.href;
            urlText.value = url;
            urlText.select();
            document.execCommand("copy");
            document.body.removeChild(urlText);
            alert("URL이 복사되었습니다.")
        }

        document.querySelector(".share").addEventListener("click", urlCopy);
    </script>
</body>

</html>