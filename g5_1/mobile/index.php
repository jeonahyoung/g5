<?php
    add_stylesheet('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">',0);
?>



<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<!-- 배너 최신글 -->
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/banner', 'banner', 3, 33);
?>

<!-- <div class="idx_rs">
   <h2><i class="fa fa-calendar"></i> 진료예약</h2>
   <p class="tel">01-234-5678</p>
   <div class="online-btn">
       <p>간단절차로 빠르고 쉽게 병원예약을 진행해보세요.</p>
       <a href="#">온라인예약</a>
   </div>
</div> -->



<!-- sec02 -->
<div class="idx_con">
    <h2>우리병원만의 특징</h2>
    <h4>의학적 근거와 지식에 기반이 된 의료체계를 바탕으로</h4>
    <h4 class="mb-50">질환 치료가 중심이 되는 질환 중심 안과</h4>
    <ul class="hover-frame">
        <li class="card01">
            <div class="titleform">
                <p class="title01">대학병원급 이상의</p>
                <p class="title02"><strong>첨단 검사장비</strong></p>
            </div>
            <div class="hover_content">
                <p>
                    오차 없는 정확한 수술 결과를<br>
                    위해 눈의 전안부부터 후안부까지<br>
                    대학병원급 이상의 최신 검사
                </p>
            </div>
        </li>

        <li class="card02">
            <div class="titleform">
                <p class="title01">질환에 대한</p>
                <p class="title02"><strong>지속적 연구와 개발</strong></p>
            </div>
            <div class="hover_content">
                <p>
                    질환 중심, 연구 중심,<br>
                    눈의 가치를 새롭게 정의하여<br>
                    역량 있는 구성원, 첨단 시설 바탕
                </p>
            </div>
        </li>

        <li class="card03">
            <div class="titleform">
                <p class="title01">최적의</p>
                <p class="title02"><strong>수술 시스템 구축</strong></p>
            </div>
            <div class="hover_content">
                <p>
                    첨단 수술 장비에 대한<br>
                    투자는 물론, 철저한 감염예방을 위한<br>
                    멸균 시스템 구축으로 청정 수술센터 유지·관리
                </p>
            </div>
        </li>

        <li class="card04">
            <div class="titleform">
                
                <p class="title01">체계적</p>
                <p class="title02"><strong>사후관리 프로그램</strong></p>
            </div>
            <div class="hover_content">
                <p>
                    수술 후 발생할 수 있는<br>
                    차별화된 케어,<br>
                    체계적인 사후관리 프로그램 운영
                </p>
            </div>
        </li>
        
    </ul>
</div>
<!-- sec02 end -->

<!-- sec03 -->
<div class="swiper_container">
    <h2 class="swiper_title">진료과목</h2>
      <div class="swiper subject">
        <div class="swiper-wrapper">

     <div class="swiper-slide">
        <div class="slide01">
            <div class="subject_img">
                <img src="http://jay230.dothome.co.kr/img/swiper01.jpg" alt="swiper01" class="swiper_img">
            </div>
            <div class="subject_content">
                <p class="swiper_sub__subtitle">하루 만에 선명한 세상</p>
                <h4 class="swiper_sub_title">투데이라섹 (Today LASIK)</h4>
                <h2 class="swiper_sub_c-title">안전하고 빠른 맞춤형 레이저 시력교정</h2>
                <p class="swiper_sub_c-content">- 10분 내외 짧은 수술, 당일 일상 복귀 가능</p>
                <p class="swiper_sub_c-content">- 개인 눈 상태 맞춤 플랜으로 부작용 최소화</p>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide01">
            <div class="subject_img">
                <img src="http://jay230.dothome.co.kr/img/swiper02.png" alt="swiper02" class="swiper_img">
            </div>
            <div class="subject_content">
                <p class="swiper_sub__subtitle">노안·백내장 완벽 솔루션</p>
                <h4 class="swiper_sub_title">노안·백내장 케어</h4>
                <h2 class="swiper_sub_c-title">다초점 인공수정체로 두 마리 토끼 잡기</h2>
                <p class="swiper_sub_c-content">- 노안과 백내장 동시 교정 가능한 최신 렌즈</p>
                <p class="swiper_sub_c-content">- 빠른 시력 회복 & 선명한 대비감도</p>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide01">
            <div class="subject_img">
                <img src="http://jay230.dothome.co.kr/img/swiper03.png" alt="swiper03" class="swiper_img">
            </div>
            <div class="subject_content">
                <p class="swiper_sub__subtitle">렌즈부터 레이저까지, One-Stop 시력교정</p>
                <h4 class="swiper_sub_title">시력교정 클리닉</h4>
                <h2 class="swiper_sub_c-title">당신의 눈, 최적의 솔루션으로 케어</h2>
                <p class="swiper_sub_c-content">- 안경·콘택트렌즈 처방부터 수술까지 전문 상담</p>
                <p class="swiper_sub_c-content">- 고해상도 정밀 측정으로 오차 없는 교정</p>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide01">
            <div class="subject_img">
                <img src="http://jay230.dothome.co.kr/img/swiper04.png" alt="swiper04" class="swiper_img">
            </div>
            <div class="subject_content">
                <p class="swiper_sub__subtitle">눈 건강, 한 번에 끝내다</p>
                <h4 class="swiper_sub_title">안종합검진</h4>
                <h2 class="swiper_sub_c-title">시력·안압·망막·녹내장까지 종합 점검</h2>
                <p class="swiper_sub_c-content">- 건조증·황반변성 조기 진단 포함</p>
                <p class="swiper_sub_c-content">- 맞춤형 관리 플랜으로 사후 케어까지 완벽 지원</p>
            </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>
<!-- sec03 end -->

<!-- sec04 -->
<section class="sec04">
    <div class="surgery">
        <div class="surgery_img">
            <img src="http://jay230.dothome.co.kr/img/surgery.png" alt="surgery" class="surgery01">
        </div>
        <div class="surgery_des">
            <p class="sec04_subtitle">샤인안과는 끝까지 책임집니다.</p>
            <h2 class="sec04_title">평생 수술 보장제 시행</h2>
            <p class="sec04_des">
                20년이 넘게 한자리를 지켜온 샤안안과에서는<br>
                환자의 시력을 평생 함께 관리하는 평생보장제를 시행하고 있습니다.<br>
                본원의 수술 후 다시 시력이 저하 된 경우 평생 재수술을 보장해드립니다.
            </p>
        </div>
    </div>
</section>
<!-- sec04 end -->
<!-- 진료과목  -->  
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/service', 'service', 4, 33);
?>
<!-- 의료진  -->   
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/team', 'team', 4, 33);
?>

<!-- 후기  -->   
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/review', 'review', 4, 33);
?>

<!--  최신글 -->
<div class="idx_lt">
    <div class="bg"><span></span><span></span><span></span></div>
    <div class="lt_wr">
        <h2>진료예약</h2>
        <strong class="tel">032)223-5067</strong>
        <p>홈페이지에서 빠르고 쉽게 진료예약을 하실 수 있습니다.</p>
        <a href="" class="btn_m btn_b02">예약하기</a>
    </div>

    <div class="lt_wr time">
        <h2>진료시간안내</h2>
        <ul>
            <li><strong><i class="fa fa-clock-o"></i> 진료시간</strong> 09:00 ~ 18:00</li>
            <li><strong><i class="fa fa-clock-o"></i> 점심시간</strong> 12:00 ~ 13:00</li>
            <li><strong><i class="fa fa-clock-o"></i> 토요일,공휴일</strong> 09:00 ~ 14:00</li>
        </ul>
    </div>

    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/basic', 'notice', 4, 33);
    ?>

</div>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>




<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
     var swiper = new Swiper(".subject", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      loop:true,
    });
</script>