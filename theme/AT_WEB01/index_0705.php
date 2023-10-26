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
                $('.product_list>ul>li>a').css({"color":"#333","font-weight":"100"});
                $('#antenna_btn').css({"color":"#00489a","font-weight":"900"});
                $('.antenna_box').css('display','block');
                $('.headend_box').css('display','none');
                $('.fiber_optical_box').css('display','none');
                $('.dmb_box').css('display','none');
                $('.network_box').css('display','none');
                break;
            case 'headend_btn':
                $('.product_list>ul>li>a').css({"color":"#333","font-weight":"100"});
                $('#headend_btn').css({"color":"#00489a","font-weight":"900"});
                $('.antenna_box').css('display','none');
                $('.headend_box').css('display','block');
                $('.fiber_optical_box').css('display','none');
                $('.dmb_box').css('display','none');
                $('.network_box').css('display','none');
                break;
            case 'fiber_optical_btn':
                $('.product_list>ul>li>a').css({"color":"#333","font-weight":"100"});
                $('#fiber_optical_btn').css({"color":"#00489a","font-weight":"900"});
                $('.antenna_box').css('display','none');
                $('.headend_box').css('display','none');
                $('.fiber_optical_box').css('display','block');
                $('.dmb_box').css('display','none');
                $('.network_box').css('display','none');
                break;
            case 'dmb_btn':
                $('.product_list>ul>li>a').css({"color":"#333","font-weight":"100"});
                $('#dmb_btn').css({"color":"#00489a","font-weight":"900"});;
                $('.antenna_box').css('display','none');
                $('.headend_box').css('display','none');
                $('.fiber_optical_box').css('display','none');
                $('.dmb_box').css('display','block');
                $('.network_box').css('display','none');
                break;
            case 'network_btn':
                $('.product_list>ul>li>a').css({"color":"#333","font-weight":"100"});
                $('#network_btn').css({"color":"#00489a","font-weight":"900"});
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
        <div class="main_title system_info">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s" style="color:#333;">SYSTEM INTEGRATION</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s">디지털화 전환 추세에 발맞추어 UHD 관련 장비 및 솔루
                션 등을 개발하여 공급하고 있으며, <span>변화하는 방송장비시장에서 흐름에 맞는 제품을 선도하여 제공 하고자 합니다.</span></p>
        </div>
        <div class="detail">

        </div>
    </div>
</div>

<div class="portfolioWrap">
    <div class="inner2">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s" style="color:#333;">PRODUCT</h2>
        </div>
        <div class="product_list wow fadeInDown" data-wow-delay="0.3s">
            <ul>
                <li><a id="antenna_btn" onclick="fn_product('antenna_btn');" style="color:#00489a;font-weight:900;">ANTENNA PART</a></li>
                <li><a id="headend_btn" onclick="fn_product('headend_btn');">HEADEND PART</a></li>
                <li><a id="fiber_optical_btn" onclick="fn_product('fiber_optical_btn');">FIBER OPTICAL PART</a></li>
                <li><a id="dmb_btn" onclick="fn_product('dmb_btn');">DMB PART</a></li>
                <li><a id="network_btn" onclick="fn_product('network_btn');">NETWORK PART</a></li>
            </ul>
        </div>
        <div class="wow bounceInUp antenna_box" data-wow-delay="0.5s" style="display:block;width:100%;height:700px;">
            <ul class="produt_ul" style="width: 100%; float: left;" >
                <?php
                $sql = "SELECT DISTINCT fi.wr_id ,
                        pr.wr_subject,
                        pr.wr_content,
                        fi.bf_file,
                        pr.wr_1
                        FROM g5_board_file fi 
                        left join g5_write_product_antenna pr 
                        ON pr.wr_id = fi.wr_id 
                        WHERE fi.bo_table = 'product_antenna' 
                        ORDER BY fi.bf_datetime desc
                        LIMIT 4;
                        ";
                $datarow= sql_query($sql);
                for($i = 0;$row = sql_fetch_array($datarow);$i++){
                ?>
                <?php $antenna_href = G5_BBS_URL . "/board.php?bo_table=product_antenna&wr_id=" . $row['wr_id']; ?><!--herf 가져오기-->
                <li>
                    <a href="<?php echo $antenna_href ?>">
                        <div class="imgbox">
                            <?php $thumb = get_list_thumbnail("product_antenna", $row['wr_id'], "500", "250", false, true);
                            $img_content = '<img src="' . $thumb['src'] . '" alt="' . $thumb['alt'] . '" >';
                            echo $img_content; ?>
                            <!--<img src ="http://tthowtthow.com/data/file/product_antenna/<?php echo($row['bf_file']) ?>">-->
                        </div>
                        <div class="txtbox" style="">
                            <strong style=""><?php echo $row['wr_subject'] ?></strong>
                            <span style="">DRM-1902ML</span>
                        </div>
                        <div class="btnbox"><span><span>자세히 보기</span></span></div>
                        <div class="list_wr" style="white-space:pre-line; word-break: break-all" >
                            <?php
                            echo $row['wr_1']
                            ?>
                        </div>

                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="wow bounceInUp headend_box" data-wow-delay="0.5s" style="display:none;width:100%;height:900px;">
            <ul class="produt_ul" style="width: 100%; float: left;" >
                <?php
                $sql = "SELECT DISTINCT fi.wr_id ,
                        pr.wr_subject,
                        pr.wr_content,
                        fi.bf_file,
                        pr.wr_1
                        FROM g5_board_file fi 
                        left join g5_write_product_headend pr 
                        ON pr.wr_id = fi.wr_id 
                        WHERE fi.bo_table = 'product_headend' 
                        ORDER BY fi.bf_datetime desc
                        LIMIT 4;
                        ";
                $datarow= sql_query($sql);

                for($i = 0;$row = sql_fetch_array($datarow);$i++){
                ?>
                <?php $headend_href = G5_BBS_URL."/board.php?bo_table=product_headend&wr_id=".$row['wr_id']; ?><!--herf 가져오기-->
                <li>
                    <a href="<?php echo $headend_href ?>">
                        <div class ="imgbox">
                            <?php $thumb = get_list_thumbnail("product_headend", $row['wr_id'], "500", "250", false, true);
                            $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                            echo $img_content; ?>
                        </div>
                        <div class="txtbox" style="">
                            <strong style=""><?php echo $row['wr_subject'] ?></strong>
                            <span style="">DRM-1902ML</span>
                        </div>
                        <div class="btnbox"><span><span>자세히 보기</span></span></div>
                        <div class="" style="white-space:pre-line; word-break: break-all;">
                            <?php
                                echo $row['wr_1']
                            ?>
                        </div>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="wow bounceInUp fiber_optical_box" data-wow-delay="0.5s" style="display:none;width:100%;height:900px;">
            <ul class="produt_ul" style="width: 100%; float: left;" >
                <?php
                $sql = "SELECT DISTINCT fi.wr_id ,
                        pr.wr_subject,
                        pr.wr_content,
                        fi.bf_file,
                        pr.wr_1
                        FROM g5_board_file fi 
                        left join g5_write_product_fiberoptical pr 
                        ON pr.wr_id = fi.wr_id 
                        WHERE fi.bo_table = 'product_fiberoptical' 
                        ORDER BY fi.bf_datetime desc
                      	LIMIT 4;
                        ";
                $datarow= sql_query($sql);

                for($i = 0;$row = sql_fetch_array($datarow);$i++){
                ?>
                <?php $fiberoptical_href = G5_BBS_URL."/board.php?bo_table=product_fiberoptical&wr_id=".$row['wr_id']; ?><!--herf 가져오기-->
                <li>
                    <a href="<?php echo $fiberoptical_href ?>">
                        <div class ="imgbox">
                        <?php $thumb = get_list_thumbnail("product_fiberoptical", $row['wr_id'], "500", "250", false, true);
                            $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                            echo $img_content; ?>
                        </div>
                        <div class="txtbox" style="">
                            <strong style=""><?php echo $row['wr_subject'] ?></strong>
                            <span style="">DRM-1902ML</span>
                        </div>
                        <div class="btnbox"><span><span>자세히 보기</span></span></div>
                        <div class="" style="white-space:pre-line; word-break: break-all;">
                            <?php
                                echo $row['wr_1']
                            ?>
                        </div>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="wow bounceInUp dmb_box" data-wow-delay="0.5s" style="display:none;width:100%;height:900px;">
            <ul class="produt_ul" style="width: 100%; float: left;" >
                <?php
                $sql = "SELECT DISTINCT fi.wr_id ,
                        pr.wr_subject,
                        pr.wr_content,
                        fi.bf_file,
                        pr.wr_1
                        FROM g5_board_file fi 
                        left join g5_write_product_omb pr 
                        ON pr.wr_id = fi.wr_id 
                        WHERE fi.bo_table = 'product_omb' 
                        ORDER BY fi.bf_datetime desc
                       	LIMIT 4;
                        ";
                $datarow= sql_query($sql);

                for($i = 0;$row = sql_fetch_array($datarow);$i++){
                ?>
                <?php $omb_href = G5_BBS_URL."/board.php?bo_table=product_omb&wr_id=".$row['wr_id']; ?><!--herf 가져오기-->
                <li>
                    <a href="<?php echo $omb_href ?>">
                        <div class ="imgbox">
                        <?php $thumb = get_list_thumbnail("product_omb", $row['wr_id'], "500", "250", false, true);
                            $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                            echo $img_content; ?>
                        </div>
                        <div class="txtbox" style="">
                            <strong style=""><?php echo $row['wr_subject'] ?></strong>
                            <span style="">DRM-1902ML</span>
                        </div>
                        <div class="btnbox"><span><span>자세히 보기</span></span></div>
                        <div class="" style="white-space:pre-line; word-break: break-all;">
                            <?php
                                echo $row['wr_1']
                            ?>
                        </div>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="wow bounceInUp network_box" data-wow-delay="0.5s" style="display:none;width:100%;height:900px;">
            <ul class="produt_ul" style="width: 100%; float: left;" >
                <?php
                $sql = "SELECT DISTINCT fi.wr_id ,
                        pr.wr_subject,
                        pr.wr_content,
                        fi.bf_file,
                        pr.wr_1
                        FROM g5_board_file fi 
                        left join g5_write_product_network pr 
                        ON pr.wr_id = fi.wr_id 
                        WHERE fi.bo_table = 'product_network' 
                        ORDER BY fi.bf_datetime desc
                        limit 4;
                        ";
                $datarow= sql_query($sql);

                for($i = 0;$row = sql_fetch_array($datarow);$i++){
                ?>
                <?php $network_href = G5_BBS_URL."/board.php?bo_table=product_network&wr_id=".$row['wr_id']; ?><!--herf 가져오기-->
                <li>
                    <a href="<?php echo $network_href ?>">
                        <div class ="imgbox">
                        <?php $thumb = get_list_thumbnail("product_network", $row['wr_id'], "500", "250", false, true);
                            $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                            echo $img_content; ?>
                        </div>
                        <div class="txtbox" style="">
                            <strong style=""><?php echo $row['wr_subject'] ?></strong>
                            <span style="">DRM-1902ML</span>
                        </div>
                        <div class="btnbox"><span><span>자세히 보기</span></span></div>
                        <div class="" style="white-space:pre-line; word-break: break-all;">
                            <?php
                                echo $row['wr_1']
                            ?>
                        </div>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>

    <!--        <div class="latest_wr2 wow bounceInUp" data-wow-delay="0.5s">
        </div>-->
        <div class="port_go" style="display:none;">
            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=product">상품보러가기</a>
        </div>
    </div>

</div>
<div class="consertWrap">
   <div class="box inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s">ATSTORE CONSERTING</h2>
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
            <h2 class="wow fadeInDown" data-wow-delay="0.3s" style="color: #333;">CONTACT US</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s" style="color: #333;">동양네트워크로 찾아오시는 길을 안내해드립니다.</p>
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