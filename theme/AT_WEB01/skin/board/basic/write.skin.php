<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/write.css">', 0);
?>
<article class="inner">
    <section id="bo_w" class="respon_w ct1" style="margin-top: 200px;">
        <h2 class="sound_only"><?php echo $g5['title'] ?></h2>
        <!-- 게시물 작성/수정 시작 { -->
        <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
        <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
        <input type="hidden" name="w" value="<?php echo $w ?>">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
        <?php
        $option = '';
        $option_hidden = '';
        if ($is_notice || $is_html || $is_secret || $is_mail) { 
            $option = '';
            if ($is_notice) {
                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="notice" name="notice"  class="selec_chk" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice"><span></span>공지</label></li>';
            }
            if ($is_html) {
                if ($is_dhtml_editor) {
                    $option_hidden .= '<input type="hidden" value="html1" name="html">';
                } else {
                    $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html"><span></span>html</label></li>';
                }
            }
            if ($is_secret) {
                if ($is_admin || $is_secret==1) {
                    $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret"><span></span>비밀글</label></li>';
                } else {
                    $option_hidden .= '<input type="hidden" name="secret" value="secret">';
                }
            }
            if ($is_mail) {
                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail"><span></span>답변메일받기</label></li>';
            }
        }
        echo $option_hidden;
        ?>

        <?php if ($is_category) { ?>
        <div class="bo_w_select write_div">
            <label for="ca_name" class="sound_only">분류<strong>필수</strong></label>
            <select name="ca_name" id="ca_name" required>
                <option value="">분류를 선택하세요</option>
                <?php echo $category_option ?>
            </select>
        </div>
        <?php } ?>

        <article class="res_w">
			<p class="ment">
				<span class="red">(*)</span>표시는 필수입력사항 입니다.
			</p>
			<p style="display: block; margin: 0; padding: 15px 10px; border-left: 0; border-right: 0; overflow: hidden; background: #439BE4; color: white;">글 작성</p>
			<div class="tb_outline">
				<div class="div_tb">

                    <!--분류-->
                    <div class="div_tb_tr">
                        <div class="div_th">
                            <label for="ca_name">구분<strong class="sound_only">필수</strong></label>
                        </div>
                        <div class="div_td div_td_adb">
                            <select name="ca_name" id="ca_name" class="required">
                                <option value="" selected>선택하세요</option>
                                <option value="0">시스템문의</option>
                                <option value="1">견적문의</option>
                                <option value="2">기타</option>
                            </select>
                        </div>
                    </div>

                    <!--회사명-->  
                    <div class="div_tb_tr">
						<div class="div_th">
							<label for="wr_1">회사명 <strong class="sound_only">필수</strong><span class="red"></span></label>
						</div>
						<div class="div_td">
							<input type="text" name="wr_1" value="<?php echo $wr_1 ?>" id="wr_1" class="" / style="width:140px" required>
						</div>
					</div>

                    <!--이름-->  
					<?php if ($is_name) { ?>
						<div class="div_tb_tr">
							<div class="div_th">
								<label for="wr_name">이름 <strong class="sound_only">필수</strong><span class="red">(*)</span></label>
							</div>
							<div class="div_td">
								<input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" class="" / style="width:140px" required>
							</div>
						</div>
					<?php } ?>

                    <!--전화번호-->  
					<div class="div_tb_tr">
						<div class="div_th">
							<label for="">연락처 <strong class="sound_only">필수</strong><span class="red">(*)</span></label>
						</div>
						<div class="div_td">
							<ul class="layout_tel">
								<input type="hidden" name="wr_2" value="<?=$write[wr_2]?>" />
								<li class="" style="width:150px">
									<?$wr_2_=explode("-",$write[wr_2]);?>
									<select id="mb_tel1" name="mb_tel1">
										<option value="02">02</option>
										<option value="031">031</option>
										<option value="032">032</option>
										<option value="033">033</option>
										<option value="041">041</option>
										<option value="042">042</option>
										<option value="043">043</option>
										<option value="051">051</option>
										<option value="052">052</option>
										<option value="053">053</option>
										<option value="054">054</option>
										<option value="055">055</option>
										<option value="061">061</option>
										<option value="062">062</option>
										<option value="063">063</option>
										<option value="064">064</option>
										<option value="070">070</option>
										<option value="010">010</option>
										<option value="011">011</option>
										<option value="016">016</option>
										<option value="017">017</option>
										<option value="018">018</option>
										<option value="019">019</option>
									</select>
									<script type="text/javascript">
									$("#mb_tel1 option[value='<?=$wr_2_[0]?>']").prop("selected", "true");
									</script>
								</li>
								<li class=""style="width:150px"><input type="text" id="mb_tel2" name="mb_tel2" class="frm_input" maxlength="4" value="<?=$wr_2_[1]?>"/></li>
								<li class=""style="width:150px"><input type="text" id="mb_tel3" name="mb_tel3" class="frm_input" maxlength="4" value="<?=$wr_2_[2]?>"/></li>
						    </ul>
						</div>
					</div>

                    <!--이메일-->  
                    <?php if ($is_email) { ?>
                        <div class="div_tb_tr">
                            <div class="div_th">
                                <label for="wr_email">이메일 <strong class="sound_only">필수</strong><span class="red">(*)</span></label>
                            </div>
                            <div class="div_td">
                                <ul class="layout_email">
                                <input type="hidden" name="wr_email" >
                                <?$wr_email_=explode("@",$write[wr_email]);?>
                                    <li class="" style="width:140px"><input type="text" id="wr_email1" name="wr_email1" class="" value="<?=$wr_email_[0]?>" required/></li>
                                    <li style="width:auto">@</li>
                                    <li class="" style="width:140px"><input type="text" id="wr_email2" name="wr_email2" class="" value="<?=$wr_email_[1]?>" required /></li>
                                    <!--li class=""><input type="text" id="" name="" class="" /></li-->
                                    <li class="" style="width:140px">
                                        <select id="wr_email3" name="wr_email3" onchange="document.fwrite.wr_email2.value=this.value;document.fwrite.wr_email2.focus();">
                                            <option value="">선택하세요</option>
                                            <option value='naver.com'>naver.com</option>
                                            <option value='hanmail.net'>hanmail.net</option>
                                            <option value='nate.com'>nate.com</option>
                                            <option value='hotmail.com'>hotmail.com</option>
                                            <option value='hanmir.com'>hanmir.com</option>
                                            <option value='empal.com'>empal.com</option>
                                            <option value='gmail.com'>gmail.com</option>
                                            <option value='lycos.co.kr'>lycos.co.kr</option>
                                            <option value='paran.com'>paran.com</option>
                                            <option value='hananet.net'>hananet.net</option>
                                            <option value='korea.com'>korea.com</option>
                                            <option value='dreamwiz.com'>dreamwiz.com</option>
                                            <option value='hanafos.com'>hanafos.com</option>
                                            <option value='freechal.com'>freechal.com</option>
                                            <option value='chol.com'>chol.com</option>
                                            <option value='chollian.net'>chollian.net</option>
                                            <option value='hitel.net'>hitel.net</option>
                                            <option value='kornet.net'>kornet.net</option>
                                            <option value='icitiro.com'>icitiro.com</option>
                                            <option value='kebi.com'>kebi.com</option>
                                            <option value='netian.com'>netian.com</option>
                                            <option value='orgio.com'>orgio.com</option>
                                            <option value='sayclub.com'>sayclub.com</option>
                                            <option value='shinbiro.co.kr'>shinbiro.co.kr</option>
                                            <option value='unitel.co.kr'>unitel.co.kr</option>
                                            <option value='yahoo.co.kr'>yahoo.co.kr</option>
                                            <option value='yahoo.com'>yahoo.com</option>
                                            <option value="">직접입력</option>
                                        </select>
                                        <script type="text/javascript">
                                            <?php if ($wr_email_[1]==true) { ?>
                                            $("#wr_email3 option[value='<?=$wr_email_[1]?>']").prop("selected", "true");
                                            <?}?>
                                        </script>
                                    </li>
                                <input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email" size="50" maxlength="100">
                            </div>
                        </div>
                    <?php } ?>

					<? $is_homepage = false; // 홈페이지는 사용안함 ?>
					<?php if ($is_homepage) { ?>
						<div class="div_tb_tr">
							<div class="div_th">
								<label for="wr_homepage">홈페이지</label>
							</div>
							<div class="div_td">
								<input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="" />
							</div>
						</div>
					<?php } ?>
					<!-- <?php if ($option) { ?>
						<div class="div_tb_tr">
							<div class="div_th">옵션</div>
							<div class="div_td"><?php echo $option ?></div>
						</div>
					<?php } ?> -->

					<!--제목-->  
					<div class="div_tb_tr">
						<div class="div_th">
							<label for="wr_subject">제목 <strong class="sound_only">필수</strong><span class="red">(*)</span></label>
						</div>
						<div class="div_td">
							<div id="autosave_wrapper">
								<input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject"  class="" size="" maxlength="" required placeholder="제목을 입력해 주세요"/>
							</div>
						</div>
					</div>

                    <!--개인정보취급방침-->  
                    <div class="div_tb_tr">
						<div class="div_th">
							<label for="">개인정보취급방침 <strong class="sound_only">필수</strong><span class="red">(*)</span></label>
						</div>
						<div class="div_td">
							<div id="autosave_wrapper">
                                <div class="privacy">
                                    <p>1. 수집하는 개인정보 항목</p>
                                    <p>본 사이트는 홈페이지 문의, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.</p>
                                    </br>
                                    <p>ο 수집항목 :</p>
                                    <p>이름, 연락처, 이메일</p>
                                    </br>
                                    <p>ο 개인정보 수집방법 :</p>
                                    <p>홈페이지 문의 및 상담</p>
                                    </br>
                                    <p>1. 수집하는 개인정보 항목</p>
                                    <p>본 사이트는 홈페이지 문의, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.</p>
                                    </br>
                                    <p>ο 수집항목 :</p>
                                    <p>이름, 연락처, 이메일</p>
                                    </br>
                                    <p>ο 개인정보 수집방법 :</p>
                                    <p>홈페이지 문의 및 상담</p>
                                </div>
                                <div style="margin-top: 10px;">
                                    <label for="privacy_y" style="cursor: pointer; display: inline-block;">
                                        <input type="radio" id="privacy_y" name="wr_3" value="Y" checked>
                                        <span>동의함</span>
                                    </label>
                                    <label for="privacy_n" style="cursor: pointer; display: inline-block;">
                                        <input type="radio" id="privacy_n" name="wr_3" value="N">
                                        <span>동의안함</span>
                                    </label>
                                </div>
                            </div>
						</div>
					</div>

                    <!--내용-->  
					<div class="div_tb_tr">
						<div class="div_th">
							<label for="wr_content">내용 <strong class="sound_only">필수</strong><span class="red">(*)</span></label>
						</div>
						<div class="div_td">
							<?php if($write_min || $write_max) { ?><!-- 최소/최대 글자 수 사용 시 -->
								<p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
							<?php } ?>
							<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
							<?php if($write_min || $write_max) { ?><!-- 최소/최대 글자 수 사용 시 -->
								<div id="char_count_wrap"><span id="char_count"></span>글자</div>
							<?php } ?>
						</div>
					</div>

                    <!--첨부파일-->    
					<?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
						<div class="div_tb_tr">
							<div class="div_th">
								첨부파일 #<?php echo $i+1 ?>
							</div>
							<div class="div_td">
                                <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-folder-open" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
                                <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">					
                                <?php if ($is_file_content) { ?>
                                    <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
                                <?php } ?>
								<?php if($w == 'u' && $file[$i]['file']) { ?>
                                <span class="file_del">
                                    <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
                                </span>
                                <?php } ?>
							</div>
						</div>
					<?php } ?>

                    <!--자동등록방지-->               
					<?php if ($bo_table!='s3_1') { //자동등록방지  ?>
						<div class="div_tb_tr">
							<div class="div_th">자동등록방지</div>
							<div class="div_td"><?php echo captcha_html(); ?></div>
						</div>
					<?php } ?>

				</div>
			</div>
		</article>

        <!--<?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
        <div class="bo_w_link write_div">
            <label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크  #<?php echo $i ?></span></label>
            <input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){ echo $write['wr_link'.$i]; } ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
        </div>
        <?php } ?>-->

        <div class="btn_confirm write_div">
            <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_cancel btn">취소</a>
            <button type="submit" id="btn_submit" accesskey="s" class="btn_submit btn">작성완료</button>
        </div>
        </form>

        <script>
        <?php if($write_min || $write_max) { ?>
        // 글자수 제한
        var char_min = parseInt(<?php echo $write_min; ?>); // 최소
        var char_max = parseInt(<?php echo $write_max; ?>); // 최대
        check_byte("wr_content", "char_count");

        $(function() {
            $("#wr_content").on("keyup", function() {
                check_byte("wr_content", "char_count");
            });
        });

        <?php } ?>
        function html_auto_br(obj)
        {
            if (obj.checked) {
                result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
                if (result)
                    obj.value = "html2";
                else
                    obj.value = "html1";
            }
            else
                obj.value = "";
        }

        function fwrite_submit(f)
        {
            <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

            var subject = "";
            var content = "";
            $.ajax({
                url: g5_bbs_url+"/ajax.filter.php",
                type: "POST",
                data: {
                    "subject": f.wr_subject.value,
                    "content": f.wr_content.value
                },
                dataType: "json",
                async: false,
                cache: false,
                success: function(data, textStatus) {
                    subject = data.subject;
                    content = data.content;
                }
            });

            if (subject) {
                alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
                f.wr_subject.focus();
                return false;
            }

            if (content) {
                alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
                if (typeof(ed_wr_content) != "undefined")
                    ed_wr_content.returnFalse();
                else
                    f.wr_content.focus();
                return false;
            }

            if (document.getElementById("char_count")) {
                if (char_min > 0 || char_max > 0) {
                    var cnt = parseInt(check_byte("wr_content", "char_count"));
                    if (char_min > 0 && char_min > cnt) {
                        alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                        return false;
                    }
                    else if (char_max > 0 && char_max < cnt) {
                        alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                        return false;
                    }
                }
            }

            <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

            document.getElementById("btn_submit").disabled = "disabled";

            return true;
        }
        </script>
    </section>    
</article>

<!-- } 게시물 작성/수정 끝 -->