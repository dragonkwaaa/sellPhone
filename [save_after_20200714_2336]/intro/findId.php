<!DOCTYPE html>
<html lang="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/head.php';?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/header.php';?>


	<?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/top.php';?>


	<div class="contents">




        <div class="topSearchGroup">
            <span class="txtLiner">내 폰 팔면 얼마 받을 수 있나요?</span>
            <div class="sboxGroup">
                <select class="sbox nomSort">
					<option>전체</option>
					<option>과목명</option>
					<option>적요명</option>
                </select>
                <select class="sbox nomSort">
					<option>전체</option>
					<option>과목명</option>
					<option>적요명</option>
                </select>
            </div>
            <span class="txtLiner">S급 매입시세</span>
            <span class="txtLiner priceSort">10,000원</span>
            <a href="javascript:void(0);" class="bgBtn nomSort">판매 신청하기</a>
        </div>
        <div class="mainCon userRegSort">
		    <div class="findUserInfoSection">



                <div class="titleBox findUserInfoSort">아이디 / 비밀번호 찾기</div>

                <div class="tabBtnGroup findUserInfo">
                    <a href="javascript:void(0);" class="tOnlyBtn activated">아이디찾기</a>
                    <a href="javascript:void(0);" class="tOnlyBtn">비밀번호찾기</a>
                </div>


                <div class="regGroup findUserInfoSort">
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="이름"/>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="휴대폰번호('-'빼고 입력)"/>
                    </div>
                    
                </div>
                <div class="btnGroup findBotSort">
                    <a href="javascript:void(0);" class="bgBtn">확인</a>
                </div>
            </div>
        </div>
        <a href="javascript:Void(0);" class="icBtn rtFloat"></a>
    </div>
    <!-- <div class="pageBot">
            <ul class="ntList">
		    	<li>
                    <span class="titleBox ntSort">공지사항</span>
                    <span class="infoBox">설연휴 우체국 픽업신청 제한 안내</span>
		    	    <a href="javascript:void(0);" class="moreBtn">MORE</a>
		        </li>
		    </ul>
        </div> 
    </div> -->
    <?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/bottom.php';?>


    <?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/footer.php';?>


</div>


<!-- <script src="/intro/js/join.js"></script> -->


</body>
</html>