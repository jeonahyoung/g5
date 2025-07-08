<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>


<div id="ft">
    <div class="ft_wr">
            

            <div id="ft_company">
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">환자권리장전</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">비급여진료비</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">개인정보취급방침</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=use">이용약관</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=store">제휴협력</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=consumer">고객의소리</a>
                <ul class="footer-list">
                    <li class="footer-ceo">대표자: 전아영</li>
                    <li>사업자번호: 221-45-87943</li>
                    <li>상호명: 샤인안과</li>
                    <li>대표전화: 1522-0774</li>
                </ul>
                <p>서울특별시 종로구 종로2가 71-2</p>
                <br>
                <p class="footer-copy">Copyright &copy; <b>http://jay230.dothome.co.kr/</b> All rights reserved.</p>
            </div>
            <!-- <div id="ft_copy">Copyright &copy; <b>http://jay230.dothome.co.kr/</b> All rights reserved.</div> -->

    </div>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>



<script>
jQuery(function($) {

    $( document ).ready( function() {
                
        //상단고정
        if( $(".top").length ){
            var jbOffset = $(".top").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '.top' ).addClass( 'fixed' );
                }
                else {
                    $( '.top' ).removeClass( 'fixed' );
                }
            });
        }

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        
        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>