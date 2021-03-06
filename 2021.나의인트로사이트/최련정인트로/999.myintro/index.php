<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FED_ 최련정</title>
  <!-- 파비콘 -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <!-- css -->
  <link rel="stylesheet" href="css/main.css">
  <!-- 스와이퍼 -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- script -->
  <script src="js/jquery-1.7.2.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/autoScroll_pageAction.js"></script>
  <script src="js/typed.min.js"></script>
  <script src="js/formmail.js"></script>
  <script src="js/main.js"></script>
  <script src="js/click.js"></script>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body>

  <!-- 1. 공통 상단영역(GNB) -->

  <div id="top">
    <header class="top ibx">
      <!-- 1-1.로고 -->
      <h1 id="logo">
      <a href="">
          <img src="images/logo3.png" alt="최련정로고">
        </a>
      </h1>
      <!-- 1-2.GNB메뉴 -->
      <nav class="gnb">
        <ul>
          <li class="on">
            <a href="#pg1">Home</a>
          </li>
          <li>
            <a href="#pg2">About Me</a>
          </li>
          <li>
            <a href="#pg3">Skill</a>
          </li>
          <li>
            <a href="#pg4">PortFolio</a>
          </li>
          <li>
            <a href="#pg5">Contact Me</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>


  <!-- 2. 페이지영역 -->

  <!-- SEC 1. Home -->
  <section id="pg1" class="page">
    <!-- 메인글 -->
    <video muted="" playsinline="" loop="" autoplay="" id="myvid">
      <source src="./video/pexels-ron-lach-7596677.mp4" type="video/mp4">
    </video>
    <!-- <video id="myvid" src="./video/pexels-ron-lach-7596677.mp4" autoplay muted loop></video> -->
    <h1>What do you think of this?</h1>
    <p>I hope you've shown interested.</p>
  </section>

  <!-- SEC 2. About ME -->
  <section id="pg2" class="page">
    <img src="./images/cha.png" alt="캐릭터">
    <!-- 프로필 전체박스 -->
    <div class="probox">
      <!-- 프로필 왼쪽박스 -->
      <div class="prolbx">
        <div class="mbti">
          <h1>논리적인 사색가</h1>
          <h2>INTP-T</h2>
        </div>
        <div class="photo">
          <div class="photoIn1">
            <img src="./images/최련정.jpg" alt="최련정">
          </div>
          <div class="photoIn2">
            <ul class="phosbx">
              <h3>나의 장점</h3>
              <li>상상력과 독창성이 뛰어나다</li>
              <li>능동적이며 수용력이 좋다</li>
              <li>매사에 정직하다</li>
              <li>체력이 좋다</li>
              <li>열정적이며 목표가 뚜렷하다</li>
            </ul>
          </div>
        </div>
        <div class="pg2ski">
          <div class="gp">
            <span>마음</span>
            <div class="gpin gpin1">
              <span class="pregp pretx1">49%<br>외향형</span>
              <span class="afgp aftx1">51% <br>내향형</span>
            </div>
          </div>
          <div class="gp">
            <span>에너지</span>
            <div class="gpin gpin2">
              <span class="pregp pretx2">66%<br>직관형</span>
              <span class="afgp aftx2">34%<br>현실주의형</span>
            </div>
          </div>
          <div class="gp">
            <span>본성</span>
            <div class="gpin gpin3">
              <span class="pregp pretx3">65%<br>이성적사고형</span>
              <span class="afgp aftx3">35%<br>원칙주의형</span>
            </div>
          </div>
          <div class="gp">
            <span>전술</span>
            <div class="gpin gpin4">
              <span class="pregp pretx4">18%<br>계획형</span>
              <span class="afgp aftx4">82%<br>탐색형</span>
            </div>
          </div>
          <div class="gp">
            <span>자아</span>
            <div class="gpin gpin5">
              <span class="pregp pretx5">25%<br>자기주장형</span>
              <span class="afgp aftx5">75%<br>신중형</span>
            </div>
          </div>
        </div>
      </div>
      <!-- 프로필 오른쪽박스 -->
      <div class="prorbx">

        <!-- 나는+자격증 박스 -->
        <div class="iamlicbx">
          <!-- 내소개박스 -->
          <div class="iambx">
            <ul class="gif">
              <li>
                <h2>I AM</h2>
              </li>
            </ul>
            <ul>
              <li>이름: 최련정</li>
              <li>생일: 1995.07.04</li>
              <li>핸드폰: 010.3904.6345</li>
              <li>메일: fpalsl@naver.com</li>
            </ul>
          </div>
          <!-- 자격증박스 -->
          <div class="licbx">
            <ul class="gif">
              <li>
                <h2>LICENSE</h2>
              </li>
            </ul>
            <ul>
              <li>GTQ 1급포토샵 - 한국생산성본부</li>
              <li>ITQ 아래한글 - 한국생산성본부</li>
              <li>ITQ 한글파워포인트 - 한국생산성본부</li>
              <li>운전면허 1종보통 - 전남지방경찰청</li>
              <!-- <li>웹디자인 기능사(예정)</li> -->
              <!-- <li>컴퓨터그래픽스기능사(예정)</li> -->
              <!-- <li>정보처리기능사(예정)</li> -->
            </ul>
          </div>
        </div>
        <!-- 일+교육박스 -->
        <div class="socialbx">
          <!-- 사회경험 -->
          <div class="workbx">
            <ul class="gif">
              <li>
                <h2>WORK</h2>
              </li>
            </ul>
            <ul>
              <!-- <li>2017.07 ~ 2017.10 스타벅스</li> -->
              <li>2017.10 ~ 2019.12 위치커피</li>
              <li>2020.05 ~ 2020.12 페이브베이커리</li>
            </ul>
          </div>
          <!-- 교육 -->
          <div class="edubx">
            <ul class="gif">
              <li>
                <h2>EDUCATION</h2>
              </li>
            </ul>
            <ul>
              <li>2018. 08 동신대학교 경찰행정학과 졸업</li>
              <li>2021.03.02~2021.08.11 천호하이미디어학원
                [UI/UX 웹디자인 & 웹퍼블리셔] 프론트앤드개발교육 수료</li>
            </ul>
          </div>
        </div>

        <!-- 프로필 오른쪽 아래박스(like,hobby박스) -->
        <div class="strong">
          <h2>LIKE</h2>
          <ul class="strone">
            <li class="like gbx">
              <a href="#">
                <img src="./images/game.png" alt="game">
              </a>
              <h3>Game</h3>
            </li>
            <li class="like cbx">
              <a href="#">
                <img src="./images/cartoon.png" alt="cartoon">
              </a>
              <h3>Cartoon</h3>
            </li>
            <li class="like ctbx">
              <a href="#">
                <img src="./images/coffee.png" alt="coffee">
              </a>
              <h3>Coffee</h3>
            </li>
            <li class="like mbx">
              <a href="#">
                <img src="./images/movie.png" alt="">
              </a>
              <h3>Movie</h3>
            </li>
          </ul>
          <h2>HOBBY</h2>
          <ul class="hobone">
            <li class="hobby mubx">
              <a href="#">
                <img src="./images/music.png" alt="music">
              </a>
              <h3>Music</h3>
            </li>
            <li class="hobby hibx">
              <a href="#">
                <img src="./images/hiking.png" alt="hiking">
              </a>
              <h3>Hiking</h3>
            </li>
            <li class="hobby tpbx">
              <a href="#">
                <img src="./images/toplan.png" alt="to plan">
              </a>
              <h3>To plan</h3>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- SEC 3. Skill -->
  <section id="pg3" class="page">
    <!-- 스킬메뉴박스 -->
    <div class="sklbx">
      <ul class="skill">
        <li>
          <div class="pbox pbx1">
            <a href="#">90%</a>
          </div>
          <img src="./images/photoshop.png" alt="포토샵" class="on">
          <span>사진편집 및 활용이 가능합니다.</span>
        </li>
        <li>
          <div class="pbox pbx2">
            <a href="#">80%</a>
          </div>
          <img src="./images/lilust.png" alt="일러스트">
          <span>일러스트를 활용한 펜툴작업 등 디자인 작업이 가능합니다.</span>
        </li>
        <li>
          <div class="pbox pbx3">
            <a href="#">85%</a>
          </div>
          <img src="./images/html5.png" alt="html5">
          <span>웹표준과 웹접근성을 고려한 작성을 합니다.</span>
        </li>
        <li>
          <div class="pbox pbx4">
            <a href="#">90%</a>
          </div>
          <img src="./images/css.png" alt="css">
          <span>CSS를 이용하여 다양한 스타일, 애니메이션 등 구현이 가능합니다.</span>
        </li>
        <li>
          <div class="pbox pbx5">
            <a href="#">65%</a>
          </div>
          <img src="./images/js.png" alt="js">
          <span>기본적인 문법구조를 이해합니다.</span>
        </li>
        <li>
          <div class="pbox pbx6">
            <a href="#">75%</a>
          </div>
          <img src="./images/jQuery.png" alt="jQuery">
          <span>플러그인 활용 및 다양한 스크립트 제작이 가능합니다.</span>
        </li>

      </ul>
    </div>

  </section>

  <!-- SEC 4. PortFolio -->
  <section id="pg4" class="page">
    <!-- my portfolio 타이핑 -->
    <div id="typing"></div>
    <!-- 부가설명 타이핑 -->
    <div class="type-wrap">
      <span id="typed"></span>
    </div>

    <!-- Swiper -->
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="#">
            <img src="./images/myintro2.png" alt="myintro2">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#">
            <img src="./images/SeoulLand_main.jpg" alt="SeoulLand_main">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#">
            <img src="./images/discoverymain2.png" alt="discoverymain2">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#">
            <img src="./images/myitemmain.PNG" alt="myitemmain">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#">
            <img src="./images/megabox2.png" alt="megabox2">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#">
            <img src="./images/voguemain.PNG" alt="voguemain">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#">
            <img src="./images/화보속스타.PNG" alt="화보속스타">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#">
            <img src="https://swiperjs.com/demos/images/nature-9.jpg" alt="nature-9" />
          </a>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </section>

  <!-- 팝업창 -->
  <div class="pop">
    <img src="./images/SeoulLand_main.jpg" alt="서울랜드">
    <button class="baro">웹사이트 바로가기</button>
    <ul>
      <li>이름: 서울랜드 </li>
      <li>구분: PC, 반응형</li>
      <li>페이지: 메인/ sns페이지, footer링크 연결작업</li>
      <li>설명: 기존 서울랜드 페이지를 그리드작업하여 최대한 동일한 느낌으로 제작하였습니다.</li>
    </ul>
    <div class="bbx">
      <button class="clse">Close</button>
    </div>

  </div>
  <!-- 팝업창 띄울때 주변 어둡게 -->
  <div class="popbg"></div>




  <!-- SEC 5. Contact me -->
  <section id="pg5" class="page">
    <!-- 전체박스 -->
    <div class="contact">
      <!-- 폼메일박스 -->
      <div class="contact_fm">
        <!-- contact me 타이틀 -->
        <span class="ctmtit">Contact Me</span>
        
        <!-- 이메일 보내기 -->
        <form action="../Sndmail.php" method="post">
          <p class="msgbox">
            <span class="tit2">SEND ME A EMAIL</span><br>
            <label for="nm">Your Name</label><br>
            <input type="text" id="nm"><br>
            <label for="email">Your email</label><br>
            <input type="text" id="email"><br>
            <label for="email">Your Title</label><br>
            <input type="text" id="title"><br>
            <label for="msg">Your Message</label><br>
            <textarea id="msg" cols="40" rows="5"></textarea><br>
            <input type="button" value="Send" id="btnsend">
          </p>
        </form>
      </div>
      <div class="rcont">
        <ul class="imcont">
          <li>
            <h2 class="mysbx">안녕하세요. 신입 웹퍼블리셔 최련정입니다. <br> 어떤 일이라도 안되면 될때까지 항상 열심히 하는 모습 보여드리겠습니다!</h2>
          </li>
          <li>
            <a href="#">
              <img src="images/mail.png" alt="메일주소"><span>fpalsl@naver.com</span>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="images/call.png" alt="핸드폰번호"><span>010-3904-6345</span>
            </a>
          </li>
          <li>
            <a href="https://open.kakao.com/o/sSU4QQud" target="_blank">
              <img src="images/kakao.png" alt="오픈카카오톡 ID"><span>카카오톡 오픈채팅</span>
            </a>
          </li>
          <li>
            <a href="http://fpalsl.dothome.co.kr/ryeonjeong/최련정입사지원서.hwp" download>
              <img src="images/down.png" alt="이력서 다운받기"><span>이력서 다운받기</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    </div>
  </section>





  <!-- 3. 인디케이터(위치표시자) -->
  <nav class="indic">
    <ul>
      <li class="on">
        <a href="#pg1"><span>Home</span></a>
      </li>
      <li>
        <a href="#pg2"><span>About Me</span></a>
      </li>
      <li>
        <a href="#pg3"><span>Skill</span></a>
      </li>
      <li>
        <a href="#pg4"><span>PortFolio</span></a>
      </li>
      <li>
        <a href="#pg5"><span>Contact me</span></a>
      </li>

    </ul>
  </nav>


  <!-- 스크롤 -->
  <div class="scroll">
    <div class="scrollin">
      <span>Scroll</span>
    </div>
  </div>
</body>

</html>