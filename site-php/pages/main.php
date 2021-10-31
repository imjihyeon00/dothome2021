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
    <title>Document</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip menu -->
    <header id="header">
        <?php
          include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="main">
        <section id="mainContent">
            <h2 class="ir_so">메인 컨텐츠</h2>

            <article class="content-article">
                <!-- cardType -->
                <section class="cardType">
                    <div class="cardType01">
                        <h2>Jihyeon’s Bookshelf</h2>
                        <p>재밌게 읽었던 내용의 책들과 읽어보고 싶은 책들을 모아둔 나만의 책장입니다.<br />
                            다양한 책들 가운데 좋아하는 책들만 골라 보았습니다.</p>
                        <div class="card-wrap">
                            <div class="card">
                                <a href="#">
                                    <img src="../assets/img/card01.jpg" alt="좋아하는 책 관련 이미지입니다." class="card-img">
                                    <strong class="card-title">좋아하는 책</strong>
                                    <span class="card-desc">재밌게 읽었던 책들을 모아둔 책장입니다.다시 읽고 싶은 책들을 모아두었습니다.</span>
                                    <span class="card-keyword">
                                        <span>#좋아하는 책</span>
                                        <spna>#읽은 책</spna>
                                    </span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="../assets/img/card02.jpg" alt="읽고있는 책 관련 이미지입니다." class="card-img">
                                    <strong class="card-title">읽고있는 책</strong>
                                    <span class="card-desc">현재 읽고있는 책들을 담아두는 페이지 입니다. 읽다가 멈춘 책들도 포함되어있습니다.</span>
                                    <span class="card-keyword">
                                        <span>#읽는중</span>
                                        <spna>#읽고있는 책</spna>
                                    </span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="../assets/img/card03.jpg" alt="기대되는 책 관련 이미지입니다." class="card-img">
                                    <strong class="card-title">기대되는 책</strong>
                                    <span class="card-desc">아직 읽지는 않았지만 읽어보고 싶은 책들을 모아두었습니다.</span>
                                    <span class="card-keyword">
                                        <span>#읽고싶은 책</span>
                                        <spna>#기대되는 책</spna>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- cardType01 -->
            </article>
            <article class="flow-article">
                <h3 class="ir_so">웹스토리보이 강의 설명</h3>
                <section class="section-intro container">
                    <h4 class="ir_so">강의 소개</h4>
                    <div class="youtube-intro">
                        <div>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/OwiLWFXRZw4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5>정신머리 프로젝트 페이퍼프로토타입</h5>
                            <p>정신머리 프로젝트 기획단계에 촬영한 페이퍼 프로토타입영상입니다.
                            </p>
                            <div class="interview">
                                <div class="icon">
                                    <a href="http://joungshin.dothome.co.kr/pages/index.php"
                                        target="_blank">
                                        <img src="../assets/img/svg-pizza.svg" alt="정신머리">
                                        <span>#사이트</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <article class="content-article content-sub">
                <section class="cardType">
                    <div class="container">
                        <div class="cardType02">
                            <h2>베스트 셀러 추천</h2>
                            <p>베스트셀러 책을 추천드립니다.</p>
                            <div class="card-wrap">
                                <div class="card">
                                    <a href="#">
                                        <img src="../assets/img/card04.jpg" alt="이미지입니다.">
                                        <strong class="card-title">미드나잇 라이브러리</strong>
                                        <span class="card-desc">밤 12시, 죽기 바로 전에만 열리는 마법의 도서관에서 인생의 두 번째...</span>
                                        <span class="card-word">
                                            <span>영미소설</span>
                                            <span>영화원작</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="../assets/img/card05.jpg" alt="이미지입니다.">
                                        <strong class="card-title">오늘밤, 세계에서...</strong>
                                        <span class="card-desc">밤에 자고 일어나면 기억이 리셋되는 '선행성 기억상실증'을 앓는 소녀 히노...</span>
                                        <span class="card-word">
                                            <span>전격소설대상</span>
                                            <span>로맨스</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="../assets/img/card06.jpg" alt="이미지입니다.">
                                        <strong class="card-title">나미야 잡화점의 기적</strong>
                                        <span class="card-desc">웹접근성 지첨서를 준수하여 만들 사이트입니다. 기본기를 다지기 위한...</span>
                                        <span class="card-word">
                                            <span>기적</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <img src="../assets/img/card07.jpg" alt="이미지입니다.">
                                        <strong class="card-title">백조와 박쥐</strong>
                                        <span class="card-desc">도쿄 해안 도로변에 불법 주차된 차 안에서 흉기에 찔린 사체가 발견된다. 피해자는... </span>
                                        <span class="card-word">
                                            <span>미스터리</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <article class="flow-article content-sub">
                <h3>최신 소식</h3>
                <p>최신 소식을 바로 확인 할 수 있습니다.</p>
                <section class="section-news container">
                    <div class="news">
                        <h4>게시판 업데이트</h4>
                        <ul>
                            <?php
                                $sql = "SELECT myBoardID, boardTitle, regTime FROM myBoard ORDER BY myBoardID DESC LIMIT 4";
                                $result = $connect -> query($sql);

                                if($result){
                                    $count = $result -> num_rows;
                                    
                                    if($count > 0){
                                        for($i = 1; $i <= $count; $i++){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            
                                            echo "<li><a href='../board/boardView.php?boardID=".$info['myBoardID']."'>".$info['boardTitle']."</a><span>".date('Y-m-d', $info['regTime'])."</span></li>";
                                        }
                                    }
                                }
                            ?>
                            <!-- <li><a href="#">스크립트 강의 업데이트 예정입니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">유튜브에 강의 업데이트할 예정입니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">스터디 참여에 대해서 자세히 알려드립니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">스터디 강의와 면접 잘 보는 법에 대해서 알려드릴께요~</a><span>2021.02.02</span></li> -->
                        </ul>
                        <a href="../board/board.php" title="더보기" class="more">더보기</a>
                    </div>
                    <div class="news">
                        <h4>댓글 업데이트</h4>
                        <ul>
                            <?php
                                $sql = "SELECT youText, regTime FROM myComment ORDER BY regTime DESC LIMIT 4";
                                $result = $connect -> query($sql);

                                if($result){
                                    $count = $result -> num_rows;
                                    
                                    if($count > 0){
                                        for($i = 1; $i <= $count; $i++){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            
                                            echo "<li><a href='../comment/comment.php'>".$info['youText']."</a><span>".date('Y-m-d', $info['regTime'])."</span></li>";
                                        }
                                    }
                                }
                            ?>
                            <!-- <li><a href="#">감사합니다. 잘 보고 있어요^^</a><span>2021.02.02</span></li>
                            <li><a href="#">앞으로도 좋은 영상 부탁드령요~</a><span>2021.02.02</span></li>
                            <li><a href="#">여기가 짱인듯.. 너무 좋아요~~ 너무 필요한 거였어요~ 여기가 짱인듯.. 너무 좋아요~~
                                </a><span>2021.02.02</span></li>
                            <li><a href="#">앞으로도 좋은 영상 부탁드령요~</a><span>2021.02.02</span></li> -->
                        </ul>
                        <a href="../comment/comment.php" title="더보기" class="more">더보기</a>
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //main -->

    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>

</html>