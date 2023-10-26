<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
$board['bo_gallery_width']= 500; 
$board['bo_gallery_height']= 250;
?>

<script>
    new WOW().init();
</script>

<div class="ing_bnr_Wrap">
    <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL?>/product/produce_bg.jpg" alt=""><br style="clear:both;"><br style="clear:both;"></div>
    <div class="bnrtxtwrap">
        <?php if($bo_table == 'product_antenna') { ?>
            <h3 class="wow fadeInDown">ANTENNA PART</h3>
        <?php }else if($bo_table == 'product_headend') { ?>
            <h3 class="wow fadeInDown">HEADEND PART</h3>
        <?php }else if($bo_table == 'product_fiberoptical') { ?>
            <h3 class="wow fadeInDown">FIBER OPTICAL PART</h3>
        <?php }else if($bo_table == 'product_omb') { ?>
            <h3 class="wow fadeInDown">DMB PART</h3>
        <?php }else if($bo_table == 'product_network') { ?>    
            <h3 class="wow fadeInDown">NETWORK PART</h3>
        <?php } ?>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s">동양네트워크는 최선의 서비스를 제공합니다.</p>
    </div>
</div>

<div class="mdlTxt">
    <?php if($bo_table == 'product_antenna') { ?>
        <h2 class="wow flipInX" data-wow-duration="2s">ANTENNA</h2>
    <?php }else if($bo_table == 'product_headend') { ?>
        <h2 class="wow flipInX" data-wow-duration="2s">HEADEND</h2>
    <?php }else if($bo_table == 'product_fiberoptical') { ?>
        <h2 class="wow flipInX" data-wow-duration="2s">FIBER OPTICAL</h2>
    <?php }else if($bo_table == 'product_omb') { ?>
        <h2 class="wow flipInX" data-wow-duration="2s">DMB</h2>
    <?php }else if($bo_table == 'product_network') { ?>
        <h2 class="wow flipInX" data-wow-duration="2s">NETWORK</h2>
    <?php } ?>
    <!--<p class="wow flipInX mdlTxt_direc_p" data-wow-delay="0.3s">동양네트워크와 관련된 사이트 입니다.</p>-->
</div>


<!-- 게시판 목록 시작 { -->
<div id="bo_gall" <!--style="width:--><?php /*echo $width; */?>">
    <div class="gallery_inner">
       <!-- 게시판 페이지 정보 및 버튼 시작 { -->
        <div id="bo_btn_top">
            <div id="bo_list_total" class="wow fadeInUp">
                <span>전체 <?php echo number_format($total_count) ?></span>
                <select name="" id="new1">
                    <option value="">최신</option>
                    <option value="">날짜순</option>
                    <option value="">가나다순</option>
                    <option value="">조회순</option>
                </select>
            </div>

            <?php if ($rss_href || $write_href) { ?>
            <ul class="btn_bo_user">
                <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn"><i class="fa fa-rss" aria-hidden="true"></i> RSS</a></li><?php } ?>
                <!--<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn"><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</a></li><?php } ?>-->
                <?php if ($is_admin) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02 btn btn_write"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>
            </ul>
            <?php } ?>
        </div>
        <!-- } 게시판 페이지 정보 및 버튼 끝 -->

        <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
            <input type="hidden" name="stx" value="<?php echo $stx ?>">
            <input type="hidden" name="spt" value="<?php echo $spt ?>">
            <input type="hidden" name="sst" value="<?php echo $sst ?>">
            <input type="hidden" name="sod" value="<?php echo $sod ?>">
            <input type="hidden" name="page" value="<?php echo $page ?>">
            <input type="hidden" name="sw" value="">

            <?php if ($is_checkbox) { ?>
            <!--<div id="gall_allchk">
                <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
            </div>-->
            <?php } ?>

            <ul id="gall_ul" class="gall_row">
                <?php for ($i=0; $i<count($list); $i++) {

                $classes = array();

                $classes[] = 'gall_li';
                $classes[] = 'col-gn-'.$bo_gallery_cols;
                $classes[] = 'wow';
                $classes[] = 'fadeInUp';

                if( $i && ($i % $bo_gallery_cols == 0) ){
                    $classes[] = 'box_clear';
                }

                if( $wr_id && $wr_id == $list[$i]['wr_id'] ){
                    $classes[] = 'gall_now';
                }
             ?>
                <li class="<?php echo implode(' ', $classes); ?>">
                    <div class="gall_box">
                        <div class="gall_chk">
                            <?php if ($is_checkbox) { ?>
                            <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                            <!--<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">-->
                            <?php } ?>
                            <span class="sound_only">
                                <?php
                        if ($wr_id == $list[$i]['wr_id'])
                            echo "<span class=\"bo_current\">열람중</span>";
                        else
                            echo $list[$i]['num'];
                         ?>
                            </span>
                        </div>
                        <div class="gall_con">
                            <div class="gall_img">
                                <a href="<?php echo $list[$i]['href'] ?>">
                                    <?php
                            if ($list[$i]['is_notice']) { // 공지사항  ?>
                                    <span class="is_notice">공지</span>
                                    <?php } else {
                                $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

                                if($thumb['src']) {
                                    $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                                } else {
//                                    $img_content = '<span class="no_image">no image</span>';
                                    $img_content = '<img src="'.G5_THEME_IMG_URL.'/main/s_image.png'.'" alt="'.$thumb['alt'] = '이미지가 없습니다.'.'" >';
                                }

                                echo $img_content;
                            }
                             ?>
                                </a>
                            </div>

                            <div class="gall_text_href">
                                <?php
                            // echo $list[$i]['icon_reply']; 갤러리는 reply 를 사용 안 할 것 같습니다. - 지운아빠 2013-03-04
                            if ($is_category && $list[$i]['ca_name']) {
                             ?>

                                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                                <?php } ?>
                                <a href="<?php echo $list[$i]['href'] ?>" class="bo_tit" style="text-decoration: none;">
                                <div class="txtbox" style="">
                                    <strong style=""><?php echo $list[$i]['subject'] ?></strong>
                                    <span style="">DRM-1902ML</span>
                                </div>
                                <div class="btnbox"><span><span>자세히 보기</span></span></div>


                                    <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">댓글</span><span class="cnt_cmt">+ <?php echo $list[$i]['wr_comment']; ?></span><span class="sound_only">개</span><?php } ?>
                                    <?php
                                // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }

                                if (isset($list[$i]['icon_new'])) echo rtrim($list[$i]['icon_new']);
                                if (isset($list[$i]['icon_hot'])) echo rtrim($list[$i]['icon_hot']);
                                //if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                                //if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
                                if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                                 ?>
                                </a>
                            </div>
                            <div style="white-space:pre-line; word-break: break-all;">
                                <span class="sound_only">간략내용 </span><?php echo $list[$i]['wr_1'] ?>
                            </div>

                            <div class="gall_name">
                                <span class="sound_only">작성자 </span><?php echo $list[$i]['name'] ?>
                            </div>

                            <div class="gall_info">
                                <span class="sound_only">조회 </span><b class="info_detail">Hit</b><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $list[$i]['wr_hit'] ?>
                                <?php if ($is_good) { ?><span class="sound_only">추천</span><strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <?php echo $list[$i]['wr_good'] ?></strong><?php } ?>
                                <?php if ($is_nogood) { ?><span class="sound_only">비추천</span><strong><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> <?php echo $list[$i]['wr_nogood'] ?></strong><?php } ?>
                                <span class="gall_date"><span class="sound_only">작성일 </span><b class="info_detail">Date</b><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $list[$i]['datetime2'] ?></span>
                            </div>
                            <div class="gall_go" style="display: none;">
                                <a href="<?php echo $list[$i]['href'] ?>" class="bo_tit">
                                    VIEW MORE >
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <?php } ?>
                <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
            </ul>
            <?php if ($list_href || $is_checkbox || $write_href) { ?>
            <!--<div class="bo_fx">
                <div class="clearfix">
                    <?php if ($list_href || $write_href) { ?>
                    <ul class="btn_bo_user">
                        <?php if ($is_checkbox) { ?>
                        <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_admin btn_change2"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button></li>
                        <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn_admin btn_change2"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
                        <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn_admin btn_change2"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li>
                        <?php } ?>
                        <?php if ($is_admin) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01 btn btn_list"><i class="fa fa-list" aria-hidden="true"></i> 목록</a></li><?php } ?>
                        <?php if ($is_admin) { ?><li class="bo_fx_write"><a href="<?php echo $write_href ?>" class="btn_b02 btn btn_write"><i class="fa fa-pencil" aria-hidden="true"></i> 글쓰기</a></li><?php } ?>
                    </ul>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>-->

        </form>
        <div class="wow fadeInUp"><?php echo $write_pages;  ?></div>
    </div>
</div>

<!-- 게시판 검색 시작 { -->
<div class="gallery_inner clearfix wow fadeInUp">
    <fieldset class="bo_sch">

        <legend>게시물 검색</legend>

        <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">검색대상</label>
            <select name="sfl" id="sfl">
                <option value="wr_subject" <?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
                <option value="wr_content" <?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
                <option value="wr_subject||wr_content" <?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
            </select>
            <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <div class="sch_bar">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
                <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
            </div>
            </form>

    </fieldset>

</div>
<!-- } 게시판 검색 끝 -->

<?php if($is_checkbox) { ?>
<noscript>
    <p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>



<!-- 페이지 -->
<?php if ($is_checkbox) { ?>
<script>
    function all_checked(sw) {
        var f = document.fboardlist;

        for (var i = 0; i < f.length; i++) {
            if (f.elements[i].name == "chk_wr_id[]")
                f.elements[i].checked = sw;
        }
    }

    function fboardlist_submit(f) {
        var chk_count = 0;

        for (var i = 0; i < f.length; i++) {
            if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
                chk_count++;
        }

        if (!chk_count) {
            alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
            return false;
        }

        if (document.pressed == "선택복사") {
            select_copy("copy");
            return;
        }

        if (document.pressed == "선택이동") {
            select_copy("move");
            return;
        }

        if (document.pressed == "선택삭제") {
            if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
                return false;

            f.removeAttribute("target");
            f.action = "./board_list_update.php";
        }

        return true;
    }

    // 선택한 게시물 복사 및 이동
    function select_copy(sw) {
        var f = document.fboardlist;

        if (sw == 'copy')
            str = "복사";
        else
            str = "이동";

        var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

        f.sw.value = sw;
        f.target = "move";
        f.action = "./move.php";
        f.submit();
    }
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->