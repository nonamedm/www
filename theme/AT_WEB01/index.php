<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

  <script>
    new WOW().init();

    function fn_product(a) {
        switch (a) {
            case 'antenna_btn':
                $('.product_list>ul>li>a').css({"color":"#333","font-weight":"400"});
                $('#antenna_btn').css({"color":"#00489a","font-weight":"700"});
                $('.antenna_box').css('display','block');
                $('.headend_box').css('display','none');
                $('.fiber_optical_box').css('display','none');
                $('.dmb_box').css('display','none');
                $('.network_box').css('display','none');
                break;
            case 'headend_btn':
                $('.product_list>ul>li>a').css({"color":"#333","font-weight":"400"});
                $('#headend_btn').css({"color":"#00489a","font-weight":"700"});
                $('.antenna_box').css('display','none');
                $('.headend_box').css('display','block');
                $('.fiber_optical_box').css('display','none');
                $('.dmb_box').css('display','none');
                $('.network_box').css('display','none');
                break;
            case 'fiber_optical_btn':
                $('.product_list>ul>li>a').css({"color":"#333","font-weight":"400"});
                $('#fiber_optical_btn').css({"color":"#00489a","font-weight":"700"});
                $('.antenna_box').css('display','none');
                $('.headend_box').css('display','none');
                $('.fiber_optical_box').css('display','block');
                $('.dmb_box').css('display','none');
                $('.network_box').css('display','none');
                break;
            case 'dmb_btn':
                $('.product_list>ul>li>a').css({"color":"#333","font-weight":"400"});
                $('#dmb_btn').css({"color":"#00489a","font-weight":"700"});;
                $('.antenna_box').css('display','none');
                $('.headend_box').css('display','none');
                $('.fiber_optical_box').css('display','none');
                $('.dmb_box').css('display','block');
                $('.network_box').css('display','none');
                break;
            case 'network_btn':
                $('.product_list>ul>li>a').css({"color":"#333","font-weight":"400"});
                $('#network_btn').css({"color":"#00489a","font-weight":"700"});
                $('.antenna_box').css('display','none');
                $('.headend_box').css('display','none');
                $('.fiber_optical_box').css('display','none');
                $('.dmb_box').css('display','none');
                $('.network_box').css('display','block');
                break;
        }
    }
    $(function () {
        var list_len = $('.list_wr').length;
        for (var i =0 ; i<list_len;i++){
            $('.list_wr')[i].innerHTML = $('.list_wr')[i].innerHTML.trim();
            var list_wr_sp = $('.list_wr')[i].innerHTML.split("\n");
            for(var j=0;j<list_wr_sp.length;j++){
                if(list_wr_sp[j].length>36){
                    list_wr_sp[j].substring(0,36)+"...";
                    console.log(list_wr_sp[j].substring(0,36)+"...");
                }else{
                    list_wr_sp[j] = list_wr_sp[j];
                }
            }
        }
    });

  </script>
  <style>
    @media ( min-width: 1024px ) {

        .produt_ul >li {
        width:23%;
    }
}
    @media ( max-width: 1023px ) {

        .produt_ul >li {
        width:100%;
        }
        .portfolioWrap .produt_ul li{
            width: 90%;
            margin: 5%;
        }

}
  </style>

<div class="bannerWrap">
    <img src="<?php echo G5_THEME_IMG_URL ?>/main/banner1_02.jpg">
    <div>
        <!--<img class="wow fadeInDown" data-wow-delay="0s" src="<?php /*echo G5_THEME_IMG_URL */?>/main/banner_logo.png">-->
        <!--<h2 class="wow fadeInDown" data-wow-delay="0.3s" style="color:#ffffff;">DISITAL LEADER</h2>-->
        <p class="wow fadeInDown" data-wow-delay="0.6s">고객 가치를 위한 끊임없는 학습으로 인류애에 기여하는 다인테크가 되겠습니다!<br/>Constant learning for customer value. Our Dain Tech will devote to humanity!</p>
        <!--<div class="square_bracket1 wow fadeInLeft" data-wow-delay="0.1s"></div>
        <div class="square_bracket2 wow fadeInRight" data-wow-delay="0.1s"></div>-->
    </div>
</div>

<div class="consertWrap">
   <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s">Contact</h2>
        </div>
        <div class="latest_wr wow bounceInUp" data-wow-delay="0.4s">
            
            <div class="ing_projects">
            <div class="lat">
                <div class="lat_title_area">
                    <h2 class="lat_title"><a href="#">연락처</a></h2>
                    <a href="#" class="lt_more"><span class="sound_only">연락처</span><span class="sound_only"> 더보기</span>+</a>
                </div>
                <ul>
                <li>
                    <a href="#"> <strong>Homepage</strong></a>
                    <span class="lt_date1">www.daintech9.co.kr</span>
                </li>
                <li>
                    <a href="#"> <strong>E-mail</strong></a>
                    <span class="lt_date1">yisj@daintech9.co.kr</span>
                </li>
                <li>
                    <a href="#"> <strong>Address</strong></a>
                    <span class="lt_date1">75, Techro1-ro, Yuseong-gu, </span>
                </li>
                <li>
                    <a href="#"> <strong>　</strong></a>
                    <span class="lt_date1">Daejeon, S. Korea </span>
                </li>
                <li>
                    <a href="#"> <strong>　</strong></a>
                    <span class="lt_date1">Hanbat incubation center #213 </span>
                </li>
                </ul>
            </div>
            </div>
            <div class="news wow bounceInUp" data-wow-delay="0.5s">
                <?php echo latest('theme/basic', 'notice', 6, 24, 1);?>
            </div>
        </div>
    </div>
</div>
<div class="contactWrap">
    <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s" style="color: #333;">Location</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s" style="color: #333;">다인테크로 찾아오시는 길을 안내해드립니다.</p>
        </div>
        <div class="detail" style="text-align:center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2269.967523722241!2d127.39364394693436!3d36.428090276642564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3565366fa93b5aa7%3A0x124049894ed2b738!2z64yA7KCE6rSR7Jet7IucIOycoOyEseq1rCDthYztgazrhbgx66GcIDc1!5e0!3m2!1sko!2skr!4v1694046142894!5m2!1sko!2skr" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <div id="daumRoughmapContainer1654941671827" class="root_daum_roughmap root_daum_roughmap_landing wow bounceInUp" style="width:100%;"></div>
            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
            <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp" : "1654941671827",
                    "key" : "2ak4p",
                    "mapHeight" : "500"
                }).render();
            </script> -->
        </div>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>