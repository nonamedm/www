<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');



?>
<style>

/*
.sub_bn {  display: table; width: 100%;}
.intro_sub { background: url(../img/company/intro_bg.jpg) no-repeat center center fixed; background-size: cover;}

.sub_bn {height: 310px;position: relative;}
.box {position: relative;}
.bnrline{width: 40px;height: 3px;background: #fff;margin: 20px auto 20px;}
.sub_top{position: absolute;margin: auto;top: 40%;bottom: 0;left: 0;right: 0;}
.sub_top{text-align: center; color: #fff}
.sub_top h3{ font-size: 40px;color: #fff;text-align: center;line-height: 40px;}
.sub_bn_desc  {font-size: 20px;color: #fff;text-align: center;line-height: 25px;}
*/
    
    
</style>

  <script>
  new WOW().init();
  </script>




<!--
<div id="sub_content">
       <div class="sub_bn intro_sub">
            <div class="sub_top">
                <h3 class="sub_bn_tit wow fadeInDown">연혁</h3>
                <div class="bnrline wow fadeInDown"></div>
                <p class="sub_bn_desc wow fadeInDown">가치있는 홈페이지를 만들기 위해 골뱅이스토어는 노력합니다.</p>
            </div>
        </div>
    <div class="box">
    
    </div>   
</div>
-->


<div id="sub_content">
    <div class="ing_bnr_Wrap">
        <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL?>/company/intro_bg.jpg"></div>
        <div class="bnrtxtwrap">
            <h3 class="wow fadeInDown">History</h3>
            <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
            <p class="wow fadeInDown" data-wow-delay="0.2s">Present - 1988</p>
        </div>
    </div>
    
<div class="mdlTxt">
    <h2 class="wow flipInX" data-wow-duration="2s">연혁</h2>
    <p class="wow flipInX" data-wow-delay="0.3s">동양네트워크가 걸어 온 길입니다.</p>
</div>
    
    <div class="sub_con">
        <div class="inner">
            <div class="history_area">
            <!--빨#C80D21 파#0E58A4 -->
               <style>
                   .clearfix:after {content: ''; display: block; clear: both;}
                   .time_list {padding: 30px 0;  display: flex; align-items: center;}
                   .tl_line {position: relative; width: 160px; height: 160px; padding: 20px; border: 1px solid #ddd; border-radius: 50%;text-align: center;}
                   .tl_line:before {content: ''; position: absolute; top: 50%; left: 100%; width: 100px; height: 1px; background: #ddd;}
                    .tl_ood .tl_line:after{content: ''; position: absolute; top: 50%; right: -100px; width: 8px; height: 8px; margin-top: -4px; border-radius: 50%; background: #333333;}
                    .tl_even .tl_line:after{content: ''; position: absolute; top: 50%; right: -100px; width: 8px; height: 8px; margin-top: -4px; border-radius: 50%; background: #333333;}
                    .time_list .year_cricle{padding: 20px;width: 100%; height: 100%; border-radius: 50%; display: table;}
                   .time_list .year_txt {width: 100%; height: 100%; background: #fff;border-radius: 50%; font-size: 20px; font-weight: 700;display: table-cell;vertical-align: middle;}
                   .tl_ood  .year_cricle{background:#F0F0F0; }
                   .tl_even  .year_cricle{background:#F0F0F0;}
                   
                   .tl_ood  .year_txt{color:#333333; }
                   .tl_even  .year_txt{color:#333333;}
                   .time_list .tl_year {   margin-right: 80px;padding-right: 100px; }
                   .time_list .tl_txt {  width: 500px;  text-align: left;} 
                   .tl_txt li{margin-bottom: 5px;}
                   .tl_txt li:after{content: ''; display: block; clear: both;}
                   .tl_month {float: left;width: 15%; display: inline-block;padding:0 10px; font-weight: 700; font-size: 18px;}
                   .tl_info {float: left; width: 85%; display: inline-block; font-size: 18px;}
                   
                   .history_area {text-align: center;}
                   .timeline_box {display: inline-block; margin-bottom: 70px;}
                   
                   @media screen and (max-width:768px){
                        .time_list{display: block;}
                        .tl_line{display: inline-block; width: 120px; height: 120px; padding: 15px;}
                       .time_list .year_cricle {padding: 15px;}
                       .time_list .year_txt {font-size: 18px;}
                        .tl_line:before {top: 100%;left: 50%;width: 1px;height: 30px;}
                        .time_list .tl_year {margin: 0 auto;  padding-right: 0; padding-bottom: 35px;} 
                        .tl_even .tl_line:after {top: auto; right: 50%; bottom: -30px; margin-right: -4px; margin-top: 0;}
                        .tl_ood .tl_line:after {top: auto;right: 50%;bottom: -30px;margin-right: -4px;margin-top: 0;}
                     }
                   
                   @media screen and (max-width:600px){
                       .timeline_box{width: 100%;}
                       .time_list .tl_txt {width: 100%;}
                   }
                   @media screen and (max-width:480px){
                       
                       .tl_month {width: 20%; font-size: 16px;}
                       .tl_info {width: 80%; font-size: 16px;}
                       
                   }
                   
                </style>
               
                <div class="timeline_box">

                    <div class="time_list tl_ood clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                                <div class="year_cricle">
                                    <p class="year_txt">2022</p>
                                </div>
                            </div>
                        </div>

                        <ul class="tl_txt">
                            <li>
                                <span class="tl_month">2월</span>
                                <p class="tl_info">한화테크윈 와이즈넷 파트너 인증서 취득</p>
                            </li>

                        </ul>
                    </div>

                    <div class="time_list tl_even clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                                <div class="year_cricle">
                                    <p class="year_txt">2021</p>
                                </div>
                            </div>
                        </div>

                        <ul class="tl_txt">
                            <li>
                                <span class="tl_month">2월</span>
                                <p class="tl_info">서울 지방 중소벤처기업청 표창장 수상</p>
                            </li>
                            <li>
                                <span class="tl_month">2월</span>
                                <p class="tl_info">과학기술 정보방송통신위원 표창장 수상</p>
                            </li>
                            <li>
                                <span class="tl_month">11월</span>
                                <p class="tl_info">ISO 45001:2018 (안전보건경영시스템) 인증서 취득</p>
                            </li>
                        </ul>
                    </div>

                    <div class="time_list tl_ood clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                                <div class="year_cricle">
                                    <p class="year_txt">2019</p>
                                </div>
                            </div>
                        </div>

                        <ul class="tl_txt">
                            <li>
                                <span class="tl_month">5월</span>
                                <p class="tl_info">UHD 신호처리 인증서 취득</p>
                            </li>
                        </ul>
                    </div>

                    <div class="time_list tl_even clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                                <div class="year_cricle">
                                    <p class="year_txt">2017</p>
                                </div>
                            </div>
                        </div>

                        <ul class="tl_txt">
                            <li>
                                <span class="tl_month">2월</span>
                                <p class="tl_info">특정 소 출력 무선기기(중계용 무선기기)인증서 취득 </p>
                            </li>
                        </ul>
                    </div>

                    <div class="time_list tl_ood clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                                <div class="year_cricle">
                                    <p class="year_txt">2016</p>
                                </div>
                            </div>
                        </div>

                        <ul class="tl_txt">
                            <li>
                                <span class="tl_month">5월</span>
                                <p class="tl_info">FM-DMB 멀티미디어방송 신호처리기 인증서 취득</p>
                            </li>
                            <li>
                                <span class="tl_month">6월</span>
                                <p class="tl_info">두산건설㈜ 우수 협력사 수상 (외주:통신)</p>
                            </li>
                        </ul>
                    </div>

                    <div class="time_list tl_even clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                                <div class="year_cricle">
                                    <p class="year_txt">2013</p>
                                </div>
                            </div>
                        </div>

                        <ul class="tl_txt">
                            <li>
                                <span class="tl_month">1월</span>
                                <p class="tl_info">서울특별시장 표창장 수상</p>
                            </li>
                        </ul>
                    </div>

                    <div class="time_list tl_ood clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                                <div class="year_cricle">
                                    <p class="year_txt">2010</p>
                                </div>
                            </div>
                        </div>

                        <ul class="tl_txt">
                            <li>
                                <span class="tl_month">5월</span>
                                <p class="tl_info">소프트웨어사업자 신고</p>
                            </li>
                            <li>
                                <span class="tl_month">11월</span>
                                <p class="tl_info">산학협력협약 체결</p>
                            </li>
                        </ul>
                    </div>


                   
                    <div class="time_list tl_even clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                                <div class="year_cricle">
                                    <p class="year_txt">2009</p>
                                </div>
                            </div>
                        </div>

                        <ul class="tl_txt">
                            <li>
                                <span class="tl_month">11월</span>
                                <p class="tl_info">광대 역 (SMATV) 기기 형식승인 인증서 취득</p>
                            </li>
                        </ul>
                    </div>
                    

                    <div class="time_list tl_ood clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                                <div class="year_cricle">
                                    <p class="year_txt">2008</p>
                                </div>
                            </div>
                        </div>

                        <ul class="tl_txt">
                            <li>
                                <span class="tl_month">1월</span>
                                <p class="tl_info">특허권 획득 (특허등록:멀티 탭 단자 대)</p>
                            </li>
                            <li>
                                <span class="tl_month">5월</span>
                                <p class="tl_info">디지털신호처리기(8VSB RE-MODULATOR) 인증서 취득</p>
                            </li>
                            <li>
                                <span class="tl_month">6월</span>
                                <p class="tl_info">광 송수신 장비 인증서 취득</p>
                            </li>
                            <li>
                                <span class="tl_month">11월</span>
                                <p class="tl_info">방송 공동수신설비 품질검사 확인증</p>
                            </li>
                        </ul>
                    </div>
                    

                    <div class="time_list tl_even clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                                <div class="year_cricle">
                                    <p class="year_txt">2006</p>
                                </div>
                            </div>
                        </div>

                        <ul class="tl_txt">
                            <li>
                                <span class="tl_month">1월</span>
                                <p class="tl_info">ISO 9001:2015 (품질경영시스템) 인증서 취득</p>
                            </li>
                            <li>
                                <span class="tl_month">2월</span>
                                <p class="tl_info">ISO 14001:2015 (환경경영시스템) 인증서 취득</p>
                            </li>
                            <li>
                                <span class="tl_month">6월</span>
                                <p class="tl_info">864MHz CATV기자재개발 및 전기통신기자재 승인</p>
                            </li>
                        </ul>
                    </div>
                    

                    <div class="time_list tl_ood clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                            <div class="year_cricle">
                                <p class="year_txt">2000</p>
                            </div>
                            </div>
                        </div>   
                        
                        <ul class="tl_txt">
                            <li>
                            <span class="tl_month">5월</span>
                            <p class="tl_info">자본금 1000백만원 증자</p>
                            </li>
                        </ul>
                    </div>


                    <div class="time_list tl_even clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                            <div class="year_cricle">
                                <p class="year_txt">1999</p>
                            </div>
                            </div>
                        </div>   
                        
                        <ul class="tl_txt">
                            <li>
                            <span class="tl_month">6월</span>
                            <p class="tl_info">750MHz CATV기자재개발 및 전기통신기자재 승인</p>
                            </li>
                        </ul>
                    </div>
                    

                    <div class="time_list tl_ood clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                            <div class="year_cricle">
                                <p class="year_txt">1997</p>
                            </div>
                            </div>
                        </div>   
                        
                        <ul class="tl_txt">
                            <li>
                            <span class="tl_month">4월</span>
                            <p class="tl_info">(주)동양네트워크 법인 설립</p>
                            </li>
                        </ul>
                    </div>


                    <div class="time_list tl_even clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                            <div class="year_cricle">
                                <p class="year_txt">1996</p>
                            </div>
                            </div>
                        </div>   
                        
                        <ul class="tl_txt">
                            <li>
                            <span class="tl_month">1월</span>
                            <p class="tl_info">동양전자시스템 공장등록</p>
                            </li>
                            <li>
                                <span class="tl_month">5월</span>
                                <p class="tl_info">650MHz CATV기자재개발 및 전기통신기자재 승인</p>
                            </li>
                        </ul>
                    </div>


                    <div class="time_list tl_ood clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                            <div class="year_cricle">
                                <p class="year_txt">1995</p>
                            </div>
                            </div>
                        </div>   
                        
                        <ul class="tl_txt">
                            <li>
                            <span class="tl_month">8월</span>
                            <p class="tl_info">정보통신공사업 (일반 1등급) 취득</p>
                            </li>
                        </ul>
                    </div>
                    

                    <div class="time_list tl_even clearfix wow fadeInUp" data-wow-delay="0.7s">
                        <div class="tl_year">
                            <div class="tl_line">
                            <div class="year_cricle">
                                <p class="year_txt">1988</p>
                            </div>
                            </div>
                        </div>   
                        
                        <ul class="tl_txt">
                            <li>
                            <span class="tl_month">11월</span>
                            <p class="tl_info">동양전자시스템 개인사업자 설립</p>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            
            </div>
        </div>
    </div>

</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>