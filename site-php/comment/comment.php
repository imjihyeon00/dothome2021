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
    <title>댓글</title>

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

    <main id="contents">
        <section id="mainCont">
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
                <h3 class="ir_so">내가 좋아하는 책 추천하기</h3>
                <section id="comment" class="section-comment">
                    <h4>책 추천하기</h4>
                    <p>다른 사람에게 추천하고 싶은 나만의 책을 댓글로 남겨주세요!</p>
                    <div class="comment-form">
                        <form action="commentSave.php" method="POST" name="comment">
                            <fieldset>
                                <legend class="ir_so">댓글 영역</legend>
                                <div class="comment-wrap">
                                    <div>
                                        <label for="youName" class="ir_so">이름</label>
                                        <input type="text" name="youName" id="youName" class="input_write2"
                                            placeholder="이름" autocomplete="off" maxlength="10" required />
                                    </div>
                                    <div>
                                        <label for="youName" class="ir_so">댓글달기</label>
                                        <input type="text" name="youText" id="youText" class="input_write2 w100"
                                            placeholder="나만의 책을 적어주세요!" autocomplete="off" required />
                                    </div>
                                    <button class="btn_submit2" type="submit" value="작성하기">go</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <?php include "../connect/connect.php";
                            $sql = "SELECT * FROM myComment LIMIT 10";

                            $result = $connect -> query($sql);
                            while( $info = mysqli_fetch_array($result) ){ ?>
                            <div>
                                <p><?=$info['youText']?></p>
                                <div class="icon">
                                    <img src="http://imjihyeon01.dothome.co.kr/class/img/img10.jpg" alt="">
                                    <span><?=$info['youName']?></span>
                                    <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>

</html>