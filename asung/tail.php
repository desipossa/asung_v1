<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<footer id="footer">
    <div class="footer_top">
        <div class="w_inner">
            <div class="lnk">
                <ul>
                    <li class="on">
                        <a href="">학교안내</a>
                        <ul>
                            <li><a href="">학교안내</a></li>
                            <li><a href="">인사말</a></li>
                            <li><a href="">훈련실적</a></li>
                            <li><a href="">교직원소개</a></li>
                            <li><a href="">연혁</a></li>
                            <li><a href="">시설안내</a></li>
                            <li><a href="">오시는 길</a></li>
                            <li><a href="">학교소식</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">모집중인과정</a>
                        <ul>
                            <li><a href="">현재모집중인과정</a></li>
                            <li><a href="">진행중인과정</a></li>
                            <li><a href="">연간모집과정</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">온라인등록</a>
                        <ul>
                            <li><a href="">온라인접수</a></li>
                            <li><a href="">입학상담</a></li>
                            <li><a href=""> 자주하는 질문</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">교육과정안내</a>
                        <ul>
                            <li><a href="">컴퓨터응용기계</a></li>
                            <li><a href="">의료기기제작</a></li>
                            <li><a href="">패션디자인</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="wp">국비과정입학안내</a>
                        <ul>
                            <li><a href="">국가기간전략훈련</a></li>
                            <li><a href="">내일배움카드(실업자)</a></li>
                            <li><a href="">근로자직무능력향상(재직자)</a></li>
                            <li><a href="">사업주지원훈련(재직자)</a></li>
                            <li><a href="">내일배움카드(재직자)</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">취업정보안내</a>
                        <ul>
                            <li><a href="">기업체구인</a></li>
                            <li><a href="">인재정보</a></li>
                            <li><a href="">수료생 취업현황</a></li>
                            <li><a href="">취업관련사이트</a></li>
                            <li><a href="">취업자료실</a></li>
                            <li><a href="">산학협력업체</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">커뮤니티</a>
                        <ul>
                            <li><a href="">공지사항</a></li>
                            <li><a href="">포트폴리오</a></li>
                            <li><a href="">갤러리</a></li>
                            <li><a href="">건의함</a></li>
                            <li><a href="">서식다운로드</a></li>
                            <li><a href="">일반자료실</a></li>
                            <li><a href="">자유게시판</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="w_inner content">
            <div class="desc">
                <div class="lnk l_list">
                    <a href="">HOME</a>
                    <a href="">개인정보취급방침</a>
                    <a href="">온라인 입학상담</a>
                    <a href="">오시는 길</a>
                </div>
                <address>
                    <ul>
                        <li>아성직업전문학교 경상남도 김해시 함박로 121 (덕산베스트타운주상가)</li>
                        <li>사업자번호: 615-91-51309</li>
                        <li>대표자 : 이재습</li>
                    </ul>
                    <ul>
                        <li>Tel : 055-335-2735</li>
                        <li>Fax : 0505-300-2735</li>
                    </ul>
                    <ul>
                        <li>통신사업자등록번호 : 제2013-경남김해-0268호</li>
                        <li>개인정보보호책임자 : 이재습 </li>
                    </ul>
                    <p class="copy"><span>© 1996 아성직업전문학교 All Rights Reserved.</span></p>
                </address>
            </div>

            <div class="sns">
                <a href="https://www.facebook.com/asungcad/" target="_blank" class="d_btn">
                    <svg width="16" height="16" fill="none" stroke="var(--body-color)" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <use href="<?=G5_THEME_URL;?>/images/feather-sprite.svg#instagram" />
                    </svg>
                </a>
                <a href="https://www.facebook.com/asungcad/" target="_blank" class="d_btn">
                    <svg width="16" height="16" fill="none" stroke="var(--body-color)" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <use href="<?=G5_THEME_URL;?>/images/feather-sprite.svg#facebook" />
                    </svg>
                </a>
            </div>
            <div class="contact_box bt">
                <a href="tel:055-335-2735">
                    <i>
                        <svg width="16" height="16" fill="none" stroke="var(--w-color)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <use href="<?=G5_THEME_URL;?>/images/feather-sprite.svg#phone-call" />
                        </svg>
                    </i>

                    <span>전액국비지원 : 수강신청</span>


                    <strong>055-335-2735</strong>
                </a>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="to_top" style="--color:var(--secondary-color)">
    <button class="d_btn">
        <svg width="16" height="16" fill="none" stroke="var(--body-color)" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <use href="<?=G5_THEME_URL;?>/images/feather-sprite.svg#arrow-up" />
        </svg>
    </button>
</div>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");