<!DOCTYPE html>
<html lang="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/head.php';?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/header.php';?>


	<?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/top.php';?>


	<div class="contents">
       

        <div class="userCardGroup">
            <div class="userCardBox">
                <div class="userImgBox">
                    <!-- <img> -->
                </div>
                <div class="nameTitle">닉네임</div>
                <div class="ratingGroup">
					<a href="javascript:void(0);" class="rStarIcon activated"></a>
					<a href="javascript:void(0);" class="rStarIcon activated"></a>
					<a href="javascript:void(0);" class="rStarIcon activated"></a>
					<a href="javascript:void(0);" class="rStarIcon activated"></a>
					<a href="javascript:void(0);" class="rStarIcon activated"></a>
				</div>
                <div>
                    <a href="javascript:Void(0);" class="bdBtn">내 상점 관리</a>
                </div>
            </div>


            <div class="specInfoBox">
                <div class="upperGroup">
                    <div class="titleBox">닉네임</div>
                    <div class="infoBox">6개월간 판매 11건 (거래종료 9건   판매취소 0건    구매취소 0건    반품 2건) </div>
                </div>
                <div class="lowerGroup">
                    <div class="infoBox">
                        정상해지 된 공기계 판매합니다.</br>
                        분실/도난/침수폰은 절대 판매하지 않습니다.</br>
                        안전하게 구매해주세요^^ 
                    </div>
                    <a href="javascript:void(0);" class="bdBtn">소개글 수정</a>
                </div>
            </div>
        </div>

        <div class="moveToPGtab sndMySort">
            <a href="javascript:void(0);" class="tOnlyBtn activated">판매물품</a>
            <a href="javascript:void(0);" class="tOnlyBtn">구매물품</a>
            <a href="javascript:void(0);" class="tOnlyBtn">받은 문의</a>
            <a href="javascript:void(0);" class="tOnlyBtn">판매자후기관리</a>
            <a href="javascript:void(0);" class="tOnlyBtn">고객센터 문의</a>
        </div>

        <div class="mainCon listSort">
            <div class="lfFloat">
                <div class="titleBox">판매물품</div>
                <ul class="menuGroup commSort">
                    <li>
                        <a href="javascript:void(0);" class="tOnlyBtn activated">전체 판매물품</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="tOnlyBtn ">판매완료 물품</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="tOnlyBtn ">취소/환불/반품</a>
                    </li>
                </ul>
            </div>

		    <div class="rtSection commSort">

                <div class="listTopGroup schSort periodSort">

                    <div class="monthSelGroup">
                        <a href="javascript:void(0);" class="bgBtn activated">전체</a>
                        <a href="javascript:void(0);" class="bgBtn">1개월</a>
                        <a href="javascript:void(0);" class="bgBtn">3개월</a>
                        <a href="javascript:void(0);" class="bgBtn">6개월</a>
                        <a href="javascript:void(0);" class="bgBtn">12개월</a>
                    </div>
                    <div class="calendarGroup">
                        <div class="datePickGroup">
                            <input class="tbox dateBox">
                            <i class="calendarIcon"></i>
                        </div>
                        <span>~</span>
                        <div class="datePickGroup">
                            <input class="tbox dateBox">
                            <i class="calendarIcon"></i>
                        </div>
                        <a class="bgBtn searchSort">조회</a>
                    </div>
                </div>

                <div class="listTopCounter">
                    <span class="titleBox">전체</span>
                    <span class="countNum">6개</span>
                </div>
                <ul class="goodsList withStatSort">
                    <li>
                        <div class="gdImgBox">
                            <img src="/sellPhone/common/img/examplePhone_1.png">
                            <div class="cdBoxStat doneSort">판매완료</div>
                        </div>
                        <div class="infoGroup">
                            <div class="gdNameBox">애플 아이폰</div>
                            <div class="prcBox">299,000</div>
                        </div>
                    </li>
                    <li>
                        <div class="gdImgBox">
                            <img src="/sellPhone/common/img/examplePhone_1.png">
                            <div class="cdBoxStat onSellSort">판매중</div>
                        </div>
                        <div class="infoGroup">
                            <div class="gdNameBox">애플 아이폰</div>
                            <div class="prcBox">299,000</div>
                        </div>
                    </li>
                    <li>
                        <div class="gdImgBox">
                            <img src="/sellPhone/common/img/examplePhone_1.png">
                            <div class="cdBoxStat refundSort">환불</div>
                        </div>
                        <div class="infoGroup">
                            <div class="gdNameBox">애플 아이폰</div>
                            <div class="prcBox">299,000</div>
                        </div>
                    </li>
                    <li>
                        <div class="gdImgBox">
                            <img src="/sellPhone/common/img/examplePhone_1.png">
                            <div class="cdBoxStat returnSort">반품</div>
                        </div>
                        <div class="infoGroup">
                            <div class="gdNameBox">애플 아이폰</div>
                            <div class="prcBox">299,000</div>
                        </div>
                    </li>
                    <li>
                        <div class="gdImgBox">
                            <img src="/sellPhone/common/img/examplePhone_1.png">
                            <div class="cdBoxStat returnSort">반품</div>
                        </div>
                        <div class="infoGroup">
                            <div class="gdNameBox">애플 아이폰</div>
                            <div class="prcBox">299,000</div>
                        </div>
                    </li>
                    <li>
                        <div class="gdImgBox">
                            <img src="/sellPhone/common/img/examplePhone_1.png">
                            <div class="cdBoxStat returnSort">반품</div>
                        </div>
                        <div class="infoGroup">
                            <div class="gdNameBox">애플 아이폰</div>
                            <div class="prcBox">299,000</div>
                        </div>
                    </li>
                </ul>

                <!-- <div class="btnGroup moreShowSort">
                    <a href="javascript:void(0);" class="tOnlyBtn">더보기</a>
                </div> -->
            </div>
        </div>
        <a href="javascript:Void(0);" class="icBtn rtFloat"></a>
    </div>



    <?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/bottom.php';?>

    <?php include $_SERVER['DOCUMENT_ROOT'] .  '/sellPhone/common/pages/footer.php';?>


</div>


<!-- <script src="/intro/js/join.js"></script> -->


</body>
</html>
