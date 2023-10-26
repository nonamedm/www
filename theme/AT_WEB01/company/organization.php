<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .org_name1{
        width: 300px;
        height: 300px;
        border-radius: 300px;
        background: #0068b7;
        line-height: 300px;
        text-align: center;
        color: #fff;
        font-size: 1.5em;
    }
    .org_name2{
        width: 200px;
        height: 200px;
        border-radius: 200px;
        background: #00489a;
        line-height: 200px;
        text-align: center;
        color: #fff;
        font-size: 1.5em;
    }
    .org_name3{
        width: 50px;
        height: 200px;
        border-radius: 5px;
        /* border: 1px solid #ccdaeb; */
        background: #ccdaeb;
        /* line-height: 200px; */
        text-align: center;
        color: #fff;
        margin: 0 4%;
        padding: 4% 2%;
        font-size: 1.1em;
        font-weight: 100;
    }
</style>

    <script>
    new WOW().init();
</script>

<div class="sub_intro sub_content1">
    <div class="ing_bnr_Wrap">
        <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL?>/company/intro_bg.jpg"></div>
        <div class="bnrtxtwrap">
            <h3 class="wow fadeInDown">동양네트워크 조직도</h3>
            <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
            <p class="wow fadeInDown" data-wow-delay="0.2s">열정과 신뢰의 Gloval IT Infra 서비스 기업으로 도약하겠습니다.</p>
        </div>
    </div>
    <div class="section sub1-2">
        <div class="inner">
            <div>
                <div class="title_wrap">
                    <h4 class="wow flipInX">동양네트워크 조직도</h4>
                    <p class="wow fadeInDown">동양네트워크 조직도를 알려드립니다.</p>
                </div>
                <div class="art_wrap1">
                    <div class="right_area wow bounceInRight" style="width: 100%;float: left;">
                        <img src="<?php echo G5_THEME_IMG_URL?>/company/organization.png" alt="" style="width:100%;">
                    </div>
                </div>
                <!--<div class="art_wrap2">
                    <div class="article wow bounceInUp" data-wow-delay="0.1s">
                        <div class="org_name1" style="margin: 0 auto;" >
                            대표이사
                        </div>
                        <div class="blueline">
                            <div></div>
                        </div>
                        <div class="tbox" style="display:flex;">
                            <div class="org_name2">
                                이사
                            </div>
                            <div class="blueline2">
                                <div></div>
                            </div>
                            <div class="org_name2">
                                안전.보건
                            </div>
                        </div>
                        <div class="tbox" style="padding: 40px 0;">
                            <div class="blueline" style="padding:0;">
                                <div style="margin-left: 100px;"></div>
                            </div>
                            <div class="blueline2" style="margin:0;">
                                <div style="width:100%;"></div>
                            </div>
                        </div>
                        <div class="tbox" style="display:flex;">
                            <div class="org_name3">
                                경영지원
                            </div>
                            <div class="org_name3">
                                정보통신사업부
                            </div>
                            <div class="org_name3">
                                정보통신사업부
                            </div>
                            <div class="org_name3">
                                정보통신사업부
                            </div>
                            <div class="org_name3">
                                정보통신사업부
                            </div>
                            <div class="org_name3">
                                정보통신사업부
                            </div>
                        </div>
                    </div>
                </div>-->

            </div>
        </div>
    </div>
</div>
<script>
    new WOW().init();
</script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container.sub_intro', {

        spaceBetween: 0,

        centeredSlides: true,

        loop: true,

        /* autoplay: {

             delay: 3500,

             disableOnInteraction: false,

         },*/


        navigation: {

            nextEl: '.swiper-button-prev1',

            prevEl: '.swiper-button-next1',

        },

    });
</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>