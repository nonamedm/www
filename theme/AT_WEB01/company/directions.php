<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>
  <script>
  new WOW().init();
  </script>
  
<div class="ing_bnr_Wrap">
    <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL?>/company/intro_bg.jpg" alt=""><br style="clear:both;"><br style="clear:both;"></div>
 <div class="bnrtxtwrap">
    <h3 class="wow fadeInDown">오시는 길</h3>
     <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
    <p class="wow fadeInDown" data-wow-delay="0.2s">동양네트워크로 찾아오시는 길을 안내해드립니다.</p>
    </div>

</div>
<div class="mdlTxt" style="display: none;">
    <h2 class="wow flipInX" data-wow-duration="2s">오시는 길</h2>
    <p class="wow flipInX mdlTxt_direc_p" data-wow-delay="0.3s">동양네트워크로 찾아오시는 길을 안내해드립니다.</p>
</div>

<div class="directions">
    <div class="inner">
        <div class="map_area">
            <!-- * 카카오맵 - 지도퍼가기 -->
            <!-- 1. 지도 노드 -->
            <div id="daumRoughmapContainer1654941671827" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%;"></div>

            <!--
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
            -->
            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

            <!-- 3. 실행 스크립트 -->
            <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp" : "1654941671827",
                    "key" : "2ak4p",
                    "mapHeight" : "500"
                }).render();
            </script>

        </div>
        <div class="map_desc">
            <div class="map_desc_box wow bounceInUp">
                <div class="map_title clearfix">
                    <span class="map_icon1"></span>
                    <h3>주소</h3>
                </div>
                <ul class="map_list clearfix">
                    <li class="map_item">
                        <p class="item_desc">
                            서울시 영등포구 경인로 775, 에이스하이테크시티 2동 1607호 (문래동 3가)
                        </p>
                    </li>
                </ul>
            </div>
            <div class="map_desc_box wow bounceInUp">
                <div class="map_title clearfix">
                    <span class="map_icon1"></span>
                    <h3>주변지하철</h3>
                </div>
                <ul class="map_list clearfix">
                    <li class="map_item">
                        <p class="item_desc">
                            2호선 문래역 - 문래역 7번출구에서 500m
                        </p>
                    </li>
                    <li class="map_item">
                        <p class="item_desc">
                            1호선 영등포역 - 영등포역 6번 출구에서705m
                        </p>
                    </li>                    
                </ul>
            </div>
            <div class="map_desc_box wow bounceInUp">
                <div class="map_title clearfix">
                    <span class="map_icon1"></span>
                    <h3>주변정류장</h3>
                </div>
                <ul class="map_list clearfix">
                    <li class="map_item">
                        <p class="item_desc">
                            남부지방법원 등기국, 구로세무서 (에이스하이테크시티)
                        </p>
                    </li>
                </ul>
            </div>
            <div class="map_desc_box wow bounceInUp">
                <div class="map_title clearfix">
                    <span class="map_icon1"></span>
                    <h3>주변버스</h3>
                </div>
                <ul class="map_list clearfix">

                    <li class="map_item bus_info">
                        <ul class="map_2list clearfix">
                            <li class="map_2item clerfix">
                                <span class="bus_line">지선</span>
                                <p class="bus_number">5615</p>
                                <p class="bus_number">5618</p>
                                <p class="bus_number">5714</p>
                                <p class="bus_number">6512</p>
                                <p class="bus_number">6513</p>
                                <p class="bus_number">6515</p>
                                <p class="bus_number">6637</p>
                                <p class="bus_number">6640B</p>
                            </li>
                            <li class="map_2item clearfix">
                                <span class="bus_line blue">간선</span>
                                <p class="bus_number">160</p>
                                <p class="bus_number">503</p>
                                <p class="bus_number">600</p>
                                <p class="bus_number">662</p>
                                <p class="bus_number">N16(심야)</p>
                            </li>
                            <li class="map_2item clearfix">
                                <span class="bus_line blue">일반</span>
                                <p class="bus_number">10</p>
                                <p class="bus_number">11-1</p>
                                <p class="bus_number">11-2</p>
                                <p class="bus_number">530</p>
                                <p class="bus_number">83</p>
                                <p class="bus_number">88</p>
                            </li>
                        </ul>
                        <p class="item_desc">
                            하차 후 구로세무서까지 직진 후 2개 횡단보도 건넌 후 우측 건물 
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>