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
  </script>

<div class="bannerWrap">
    <img src="<?php echo G5_THEME_IMG_URL ?>/main/banner1.png">
    <div>
        <!--<img class="wow fadeInDown" data-wow-delay="0s" src="<?php /*echo G5_THEME_IMG_URL */?>/main/banner_logo.png">-->
        <h2 class="wow fadeInDown" data-wow-delay="0.3s">동양네트워크</h2>

        <p class="wow fadeInDown" data-wow-delay="0.6s">동양 네트워크는 30여년간 축적한 시공기술과 풍부한 경험을 <span>바탕으로 앞으로도 성실하게 보답할 것을 약속 드립니다.</span></p>
        <!--<div class="square_bracket1 wow fadeInLeft" data-wow-delay="0.1s"></div>
        <div class="square_bracket2 wow fadeInRight" data-wow-delay="0.1s"></div>-->
    </div>
</div>
<div class="aboutWrap">
   <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>ATSTORE</span>ABOUT</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s">동양 네트워크는 30여년간 축적한 시공기술과 풍부한 경험을 바탕으로 앞으로도 성실하게 보답할 것을 약속 드립니다.</p>
        </div>
        <div class="detail">
            <ul class="clearfix">
                <li class="first wow bounceInUp" data-wow-delay="0.5s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/about_icon1.png">
                    <p>진행중인 프로젝트 수</p>
                    <strong><span>8,<span class="number" data-max="506" data-vel="6">506</span></span>건</strong>
                </li>
                <li class="second wow bounceInUp" data-wow-delay="0.6s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/about_icon2.png">
                    <p>함께한 클라이언트 수</p>
                    <strong><span>1,<span class="number" data-max="766" data-vel="1">766</span></span>명</strong>
                </li>
                <li class="third wow bounceInUp" data-wow-delay="0.7s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/about_icon3.png">
                    <p>진행중인 상담 수</p>
                    <strong><span class="number" data-max="106" data-vel="30">106</span>건</strong>
                </li>                                 
            </ul>
        </div>
    </div>
</div>

<div class="coreComWrap">
   <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>ATSTORE</span>핵심역량</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s">앞서가는 트랜드와 끊임없이 발전해가는 골뱅이커뮤니케이션입니다.</p>
        </div>
        <div class="detail">
            <ul class="clearfix">
                <li class="wow bounceInUp" data-wow-delay="0.5s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/coreCom_icon1.png">
                    <strong>분석 및 컨설팅</strong>
                    <p>시장조사 및 소비자 트렌드 분석과<span>차별화된 컨설팅</span></p>
                </li>
                <li class="second wow bounceInUp" data-wow-delay="0.6s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/coreCom_icon2.png">
                    <strong>타겟팅</strong>
                    <p>트렌드 소비자에 맞춘<span>정확한 타겟팅</span></p>
                </li>
                <li class="wow bounceInUp" data-wow-delay="0.7s">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/main/coreCom_icon3.png">
                    <strong>마케팅</strong>
                    <p>매출증대를 위한<span>마케팅 기획 및 실행</span></p>
                </li>                                 
            </ul>
        </div>
    </div>
</div>


<div class="portfolioWrap">
    <div class="inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s" style="color:#00489a;">PRODUCT</h2>
            <!--<p class="wow fadeInDown" data-wow-delay="0.4s">앞서가는 트렌드와 끊임없이 발전해가는 골뱅이커뮤니케이션입니다.</p>-->
        </div>
        <div <!--class="latest_wr wow bounceInUp" data-wow-delay="0.5s"-->
            <ul style="width: 100%; float: left;">
                <?php
                $sql = "SELECT DISTINCT fi.wr_id ,
                        pr.wr_subject,
                        pr.wr_content,
                            (SELECT bf_file 
                            FROM g5_board_file 
                            WHERE bo_table = 'product' 
                            AND wr_id = 6) AS bf_file
                        FROM g5_board_file fi 
                        left join g5_write_product pr 
                        ON pr.wr_id = fi.wr_id 
                        WHERE fi.bo_table = 'product' 
                        ORDER BY fi.bf_datetime;
                        ";
                $datarow= sql_query($sql);

                for($i = 0;$row = sql_fetch_array($datarow);$i++){
                ?>
                <li style="overflow: hidden;width:31%; height: 427px; border: 1px solid #eee;background:#fff;border-radius: 10px;margin: 1%;padding: 2%;float: left;">
                    <div style="width: 100%; height: 200px;float: left;">
                        <img style="width:100%;" src ="http://tthowtthow.com/data/file/product/<?php echo $row['bf_file']?>">
                    </div>
                    <div style="width: 100%; height: 300px;float: left;">
                        <?php
                            echo $row['wr_content']
                        ?>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>

    <!--        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.5s">
        </div>-->
        <div class="port_go">
            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=product">상품보러가기</a>
        </div>
    </div>

</div>
<div class="consertWrap">
   <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>ATSTORE</span>CONSERTING</h2>
        </div>
        <div class="latest_wr wow bounceInUp" data-wow-delay="0.4s">
            <div class="ing_projects">
                <?php echo latest('theme/basic', 'notice', 6, 24, 1);?>
            </div>

            <div class="news wow bounceInUp" data-wow-delay="0.5s">
                <?php echo latest('theme/basic', 'inquiry', 6, 24, 2);?>
            </div>
        </div>
    </div>
</div>
<div class="contactWrap">
    <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>CONTACT</span>US</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s">동양네트워크로 찾아오시는 길을 안내해드립니다.</p>
        </div>
        <div class="detail">
            <div id="daumRoughmapContainer1654941671827" class="root_daum_roughmap root_daum_roughmap_landing wow bounceInUp" style="width:100%;"></div>
            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
            <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp" : "1654941671827",
                    "key" : "2ak4p",
                    "mapHeight" : "500"
                }).render();
            </script>
        </div>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>