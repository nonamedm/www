<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<style>
    .tab_btn{
        width: 100%;
        margin: 0 auto;
    }
    .tab_btn>ul{
        margin-bottom: 100px;
        width: 100%;
        display: flex;
        height: 60px;
    }
    .tab_btn>ul>li{
        text-align: center;
        line-height: 60px;
        width: 24%;
        text-align: center;
        /*background: #00489a;*/
        /*color: #fff;*/
        /*margin-right: 1%;*/
        border-right: 1px solid #fff;
    }

    .tab_btn>ul>li>a:hover{
        background: #fff;
        color: #00489a;
    }
    .tab_btn>ul>li:nth-child(6){
        border-right: 0px;
    }
    .tab_btn>ul>li:nth-child(2){
        padding: 0;
    }
    .tab_on{
        background: #fff;
        color:#00489a ;
    }
    .tab_off{
        background: #00489a;
        color:#fff ;
    }
    .tab_con_ul{
        margin-bottom: 10px;
        width: 100%;
        display: flex;
    }
    .tab_con_ul > li{
        width: 25%;
    }
    #tab1_con{
        display: none;
    }
    #tab2_con{
        display: none;
    }
    #tab3_con{
        display: none;
    }
    #tab4_con{
        display: none;
    }
    #tab5_con{
        display: none;
    }

</style>
<script>
    function TabClick (a){
        switch (a) {
            case 'tab0' :
                $('.tab_btn>ul>li>a').removeClass('tab_on');
                $('.tab_btn>ul>li>a').addClass('tab_off');
                $('#tab_btn0 > a').removeClass('tab_off');
                $('#tab_btn0 > a').addClass('tab_on');
                $('#tab0_con').show();
                $('#tab1_con').hide();
                $('#tab2_con').hide();
                $('#tab3_con').hide();
                $('#tab4_con').hide();
                $('#tab5_con').hide();
            break;
            case 'tab1' :
                $('.tab_btn>ul>li>a').removeClass('tab_on');
                $('.tab_btn>ul>li>a').addClass('tab_off');
                $('#tab_btn1 > a').removeClass('tab_off');
                $('#tab_btn1 > a').addClass('tab_on');
                $('#tab0_con').hide();
                $('#tab1_con').show();
                $('#tab2_con').hide();
                $('#tab3_con').hide();
                $('#tab4_con').hide();
                $('#tab5_con').hide();
            break;
            case 'tab2' :
                $('.tab_btn>ul>li>a').removeClass('tab_on');
                $('.tab_btn>ul>li>a').addClass('tab_off');
                $('#tab_btn2 > a').removeClass('tab_off');
                $('#tab_btn2 > a').addClass('tab_on');
                $('#tab0_con').hide();
                $('#tab1_con').hide();
                $('#tab2_con').show();
                $('#tab3_con').hide();
                $('#tab4_con').hide();
                $('#tab5_con').hide();
            break;
            case 'tab3' :
                $('.tab_btn>ul>li>a').removeClass('tab_on');
                $('.tab_btn>ul>li>a').addClass('tab_off');
                $('#tab_btn3 > a').removeClass('tab_off');
                $('#tab_btn3 > a').addClass('tab_on');
                $('#tab0_con').hide();
                $('#tab1_con').hide();
                $('#tab2_con').hide();
                $('#tab3_con').show();
                $('#tab4_con').hide();
                $('#tab5_con').hide();
            break;
            case 'tab4' :
                $('.tab_btn>ul>li>a').removeClass('tab_on');
                $('.tab_btn>ul>li>a').addClass('tab_off');
                $('#tab_btn4 > a').removeClass('tab_off');
                $('#tab_btn4 > a').addClass('tab_on');
                $('#tab0_con').hide();
                $('#tab1_con').hide();
                $('#tab2_con').hide();
                $('#tab3_con').hide();
                $('#tab4_con').show();
                $('#tab5_con').hide();
            break;
            case 'tab5' :
                $('.tab_btn>ul>li>a').removeClass('tab_on');
                $('.tab_btn>ul>li>a').addClass('tab_off');
                $('#tab_btn5 > a').removeClass('tab_off');
                $('#tab_btn5 > a').addClass('tab_on');
                $('#tab0_con').hide();
                $('#tab1_con').hide();
                $('#tab2_con').hide();
                $('#tab3_con').hide();
                $('#tab4_con').hide();
                $('#tab5_con').show();
            break;
        }
    }
</script>
<div class="sub_intro sub_content1">
    <div class="ing_bnr_Wrap">
        <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL?>/company/intro_bg.jpg"></div>
        <div class="bnrtxtwrap">
            <h3 class="wow fadeInDown">사업실적</h3>
            <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
            <p class="wow fadeInDown" data-wow-delay="0.2s">열정과 신뢰의 Gloval IT Infra 서비스 기업으로 도약하겠습니다.</p>
        </div>
    </div>
    <div class="section sub1-1">

        <div class="inner">
            <div class="con1wrap">
                <div class="title_wrap">
                    <h4 class="wow flipInX">동양 네트워크의 사업실적</h4>
                    <p class="wow fadeInDown">고객의 비즈니스 성장과 성공을 생각하는 마케팅</p>
                </div>
                <div class="tab_btn">
                    <ul>
                        <li id="tab_btn0"><a href="#" onclick="javascript:TabClick('tab0');" class="tab_on">협력사현황</a></li>
                        <li id="tab_btn1"><a href="#" onclick="javascript:TabClick('tab1');" class="tab_off">2021</a></li>
                        <li id="tab_btn2"><a href="#" onclick="javascript:TabClick('tab2');" class="tab_off">2020</a></li>
                        <li id="tab_btn3"><a href="#" onclick="javascript:TabClick('tab3');" class="tab_off">2019</a></li>
                        <li id="tab_btn4"><a href="#" onclick="javascript:TabClick('tab4');" class="tab_off">2018</a></li>
                        <li id="tab_btn5"><a href="#" onclick="javascript:TabClick('tab5');" class="tab_off">2017</a></li>
                    </ul>
                </div>
                <div class="art_wrap1" id="tab0_con">
                    <div class="right_area wow bounceInRight" style="width: 100%;float: left;">
                        <img src="<?php echo G5_THEME_IMG_URL?>/version/partners.png" alt="" style="width:100%;">
                    </div>
                </div>
                <div class="art_wrap1" id="tab1_con">
                    <div class="right_area wow bounceInRight" style="width: 100%;float: left;">
                        <!--<ul class="tab_con_ul">
                            <li>
                                <div class="con1_tbox">
                                    <h5>대우건설</h5>
                                    <p>충정로 ㈜풍산사옥<br>해당5구역 재개발</p>
                                </div>
                            </li>
                            <li style="padding: 0;">
                                <div class="con1_tbox">
                                    <h5>두산건설</h5>
                                    <p>사당동 영이아파트재건축<br>부천 악대2구역 재개발</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="tab_con_ul">
                            <li>
                                <div class="con1_tbox">
                                    <h5>대우건설</h5>
                                    <p>충정로 ㈜풍산사옥<br>해당5구역 재개발</p>
                                </div>
                            </li>
                            <li style="padding: 0;">
                                <div class="con1_tbox">
                                    <h5>두산건설</h5>
                                    <p>사당동 영이아파트재건축<br>부천 악대2구역 재개발</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="tab_con_ul">
                            <li>
                                <div class="con1_tbox">
                                    <h5>대우건설</h5>
                                    <p>충정로 ㈜풍산사옥<br>해당5구역 재개발</p>
                                </div>
                            </li>
                            <li style="padding: 0;">
                                <div class="con1_tbox">
                                    <h5>두산건설</h5>
                                    <p>사당동 영이아파트재건축<br>부천 악대2구역 재개발</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                        </ul>-->
                        <img src="<?php echo G5_THEME_IMG_URL?>/version/2021.png" alt="" style="width:100%;">
                    </div>
                </div>
                <div class="art_wrap1" id="tab2_con">
                    <div class="right_area wow bounceInRight" style="width: 100%;float: left;">
                        <!--<ul class="tab_con_ul">
                            <li>
                                <div class="con1_tbox">
                                    <h5>대우건설</h5>
                                    <p>충정로 ㈜풍산사옥<br>해당5구역 재개발</p>
                                </div>
                            </li>
                            <li style="padding: 0;">
                                <div class="con1_tbox">
                                    <h5>두산건설</h5>
                                    <p>사당동 영이아파트재건축<br>부천 악대2구역 재개발</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="tab_con_ul">
                            <li>
                                <div class="con1_tbox">
                                    <h5>대우건설</h5>
                                    <p>충정로 ㈜풍산사옥<br>해당5구역 재개발</p>
                                </div>
                            </li>
                            <li style="padding: 0;">
                                <div class="con1_tbox">
                                    <h5>두산건설</h5>
                                    <p>사당동 영이아파트재건축<br>부천 악대2구역 재개발</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="tab_con_ul">
                            <li>
                                <div class="con1_tbox">
                                    <h5>대우건설</h5>
                                    <p>충정로 ㈜풍산사옥<br>해당5구역 재개발</p>
                                </div>
                            </li>
                            <li style="padding: 0;">
                                <div class="con1_tbox">
                                    <h5>두산건설</h5>
                                    <p>사당동 영이아파트재건축<br>부천 악대2구역 재개발</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                        </ul>-->
                        <img src="<?php echo G5_THEME_IMG_URL?>/version/2020.png" alt="" style="width:100%;">
                    </div>
                </div>
                <div class="art_wrap1" id="tab3_con">
                    <div class="right_area wow bounceInRight" style="width: 100%;float: left;">
                        <!--<ul class="tab_con_ul">
                            <li>
                                <div class="con1_tbox">
                                    <h5>대우건설</h5>
                                    <p>충정로 ㈜풍산사옥<br>해당5구역 재개발</p>
                                </div>
                            </li>
                            <li style="padding: 0;">
                                <div class="con1_tbox">
                                    <h5>두산건설</h5>
                                    <p>사당동 영이아파트재건축<br>부천 악대2구역 재개발</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                        </ul>-->
                        <img src="<?php echo G5_THEME_IMG_URL?>/version/2019.png" alt="" style="width:100%;">
                    </div>
                </div>
                <div class="art_wrap1" id="tab4_con">
                    <div class="right_area wow bounceInRight" style="width: 100%;float: left;">
                        <!--<ul class="tab_con_ul">
                            <li>
                                <div class="con1_tbox">
                                    <h5>대우건설</h5>
                                    <p>충정로 ㈜풍산사옥<br>해당5구역 재개발</p>
                                </div>
                            </li>
                            <li style="padding: 0;">
                                <div class="con1_tbox">
                                    <h5>두산건설</h5>
                                    <p>사당동 영이아파트재건축<br>부천 악대2구역 재개발</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="tab_con_ul">
                            <li>
                                <div class="con1_tbox">
                                    <h5>대우건설</h5>
                                    <p>충정로 ㈜풍산사옥<br>해당5구역 재개발</p>
                                </div>
                            </li>
                            <li style="padding: 0;">
                                <div class="con1_tbox">
                                    <h5>두산건설</h5>
                                    <p>사당동 영이아파트재건축<br>부천 악대2구역 재개발</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="tab_con_ul">
                            <li>
                                <div class="con1_tbox">
                                    <h5>대우건설</h5>
                                    <p>충정로 ㈜풍산사옥<br>해당5구역 재개발</p>
                                </div>
                            </li>
                            <li style="padding: 0;">
                                <div class="con1_tbox">
                                    <h5>두산건설</h5>
                                    <p>사당동 영이아파트재건축<br>부천 악대2구역 재개발</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                            <li>
                                <div class="con1_tbox">
                                    <h5>한화건설</h5>
                                    <p>천안 갤러리아백화점<br>판교데크노밸리 SD-2개발사업</p>
                                </div>
                            </li>
                        </ul>-->
                        <img src="<?php echo G5_THEME_IMG_URL?>/version/2018.png" alt="" style="width:100%;">
                    </div>
                </div>
                <div class="art_wrap1" id="tab5_con">
                    <div class="right_area wow bounceInRight" style="width: 100%;float: left;">
                        <img src="<?php echo G5_THEME_IMG_URL?>/version/2017.png" alt="" style="width:100%;">
                    </div>
                </div>
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