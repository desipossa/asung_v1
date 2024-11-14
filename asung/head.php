<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>


<div id="wrapper">
    <div class="top_banner">
        <div class="w_inner">
            <div class="img_box">
                <img src="<?=G5_THEME_URL;?>/images/top_banner01.jpg" alt="">
            </div>
            <div class="contact_box tt">
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
    <header id="header">

        <div class="top">
            <div class="w_inner">
                <div class="slg">
                    노동부지정 A등급 최우수 직업훈련교육기관 선정으로 고용노동부 장관 표창을 받아 명실상부 전국의 대표 직업훈련 교육기관으로 거듭나는 아성직업전문학교
                </div>
                <div class="utils dot_list">
                    <a href="">로그인</a>
                    <a href="">회원가입</a>
                </div>


            </div>
        </div>
        <div class="w_inner">
            <div class="sub_inner fx">
                <h1>
                    <a href="./">
                        <svg viewBox="0 0 310 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.5 33.2812C12.9062 33.2812 16.125 37.25 16.1562 43.5312C16.125 49.9062 12.9062 53.875 8.5 53.875C4.03125 53.875 0.78125 49.9062 0.8125 43.5312C0.78125 37.25 4.03125 33.2812 8.5 33.2812ZM8.5 37.3438C6.5 37.3438 5.15625 39.4375 5.1875 43.5312C5.15625 47.6875 6.5 49.7812 8.5 49.7812C10.5312 49.7812 11.8125 47.6875 11.8438 43.5312C11.8125 39.4375 10.5312 37.3438 8.5 37.3438ZM23.5 31.3125V41.9375H27.5625V45.6562H23.5V60H19V31.3125H23.5ZM39.5625 35.0312C39.5312 38.7812 41.2188 42.3125 45.9375 43.75L43.5625 47.25C40.5469 46.2344 38.5469 44.375 37.375 41.9375C36.0938 44.7812 33.8438 47.0156 30.4375 48.125L28.0625 44.5312C33.1562 42.9688 34.9688 39.125 35 35.25V32.7812H39.5625V35.0312ZM52.6875 31.3125V48.0625H48.2188V39.9688H43.1562V36.2812H48.2188V31.3125H52.6875ZM42.7812 48.7812C48.9688 48.7812 52.75 50.8438 52.7812 54.4062C52.75 57.9688 48.9688 60.0312 42.7812 60C36.6562 60.0312 32.875 57.9688 32.875 54.4062C32.875 50.8438 36.6562 48.7812 42.7812 48.7812ZM42.7812 52.25C39.1875 52.25 37.3438 52.9062 37.3438 54.4062C37.3438 55.8438 39.1875 56.5312 42.7812 56.5312C46.4375 56.5312 48.2812 55.8438 48.3125 54.4062C48.2812 52.9062 46.4375 52.25 42.7812 52.25ZM80.1562 31.3125V48.5625H75.6562V31.3125H80.1562ZM80.1562 49.75V60H75.6562V53.3125H60.3438V49.75H80.1562ZM73 32.875V36.4688H67.5312C67.7031 39.5781 69.5938 42.8281 74.1875 44.2188L71.875 47.6875C68.7344 46.7344 66.5781 44.7656 65.3125 42.3125C63.9844 44.9844 61.7344 47.125 58.4062 48.1875L56.0938 44.7188C60.7656 43.2344 62.75 39.7812 62.9375 36.4688H57.2812V32.875H73ZM91.75 32.5C95.3594 32.5 98.2656 34.5625 99.125 37.5625H103.531V31.3125H108V46.75H103.531V41.0938H99.1562C98.3125 44.1875 95.375 46.2812 91.75 46.2812C87.3125 46.2812 84.0312 43.375 84.0625 39.3438C84.0312 35.4062 87.3125 32.5 91.75 32.5ZM91.75 36.2188C89.7188 36.2188 88.3125 37.375 88.3125 39.3438C88.3125 41.3438 89.7188 42.5 91.75 42.5C93.6875 42.5 95.0938 41.3438 95.0938 39.3438C95.0938 37.375 93.6875 36.2188 91.75 36.2188ZM93.0938 47.9375V50.4062H103.531V47.9375H108V59.6875H88.6875V47.9375H93.0938ZM93.0938 56.0625H103.531V53.8438H93.0938V56.0625ZM135.656 31.3438V52.25H131.188V42.2188H126.875V38.5938H131.188V31.3438H135.656ZM136.312 55.9375V59.5312H116.438V50.4375H120.938V55.9375H136.312ZM122.469 36.8438C122.469 40.0625 124.25 43.5938 128.906 45.0938L126.719 48.6562C123.578 47.6562 121.469 45.6719 120.219 43.2188C118.969 45.9375 116.766 48.125 113.438 49.1875L111.125 45.5625C116.031 44.0938 117.875 40.3438 117.875 36.8125V36.75H112.375V33.1562H127.938V36.75H122.469V36.8438ZM165.219 45.3125V48.875H154.719V53.5312H150.281V48.875H139V45.3125H165.219ZM161.875 32.5312V43.2812H142.219V32.5312H161.875ZM146.625 36V39.8125H157.469V36H146.625ZM162.344 55.9375V59.5312H141.969V51.1562H146.469V55.9375H162.344ZM183.656 33.7188V37.25H166.656V33.7188H172.906V31.1875H177.406V33.7188H183.656ZM175.156 37.9688C179.344 37.9688 182.281 40.1562 182.281 43.2812C182.281 46.4688 179.344 48.625 175.156 48.625C171 48.625 167.969 46.4688 168 43.2812C167.969 40.1562 171 37.9688 175.156 37.9688ZM175.156 41.3438C173.5 41.3438 172.375 41.9688 172.375 43.2812C172.375 44.625 173.5 45.2188 175.156 45.2188C176.844 45.2188 178 44.625 178 43.2812C178 41.9688 176.844 41.3438 175.156 41.3438ZM189.531 31.3125V38.5938H193.25V42.25H189.531V49.3125H185.031V31.3125H189.531ZM189.531 50.4062V60H185.031V54H170.062V50.4062H189.531ZM218.344 33.6562V36.3438C218.344 39.7812 218.344 43.8125 217.281 49.7188L212.844 49.3438C213.734 44.2188 213.812 40.4219 213.812 37.2188H196.875V33.6562H218.344ZM220.5 53.0312V56.6562H194.344V53.0312H199.625V44.125H204.094V53.0312H206.781V44.125H211.219V53.0312H220.5Z"
                                fill="var(--body-color)" />
                            <path
                                d="M2.8 73.008H10.312V73.824H2.8V73.008ZM1.6 76.716H11.44V77.532H1.6V76.716ZM6.004 73.5H7V76.968H6.004V73.5ZM2.8 69H3.808V73.356H2.8V69ZM12.6391 73.428H22.4551V74.232H12.6391V73.428ZM17.0551 71.688H18.0271V73.764H17.0551V71.688ZM13.8751 71.376H21.3031V72.18H13.8751V71.376ZM13.8751 68.58H21.2311V69.372H14.8591V71.856H13.8751V68.58ZM17.5351 75.012C18.6951 75.012 19.6031 75.184 20.2591 75.528C20.9151 75.864 21.2431 76.344 21.2431 76.968C21.2431 77.592 20.9151 78.072 20.2591 78.408C19.6031 78.752 18.6951 78.924 17.5351 78.924C16.3751 78.924 15.4631 78.752 14.7991 78.408C14.1431 78.072 13.8151 77.592 13.8151 76.968C13.8151 76.344 14.1431 75.864 14.7991 75.528C15.4631 75.184 16.3751 75.012 17.5351 75.012ZM17.5231 75.792C16.9631 75.792 16.4791 75.84 16.0711 75.936C15.6711 76.024 15.3631 76.156 15.1471 76.332C14.9311 76.5 14.8231 76.712 14.8231 76.968C14.8231 77.216 14.9311 77.428 15.1471 77.604C15.3631 77.78 15.6711 77.912 16.0711 78C16.4791 78.096 16.9631 78.144 17.5231 78.144C18.0991 78.144 18.5871 78.096 18.9871 78C19.3951 77.912 19.7071 77.78 19.9231 77.604C20.1391 77.428 20.2471 77.216 20.2471 76.968C20.2471 76.712 20.1391 76.5 19.9231 76.332C19.7071 76.156 19.3951 76.024 18.9871 75.936C18.5871 75.84 18.0991 75.792 17.5231 75.792ZM23.6661 74.508H33.5061V75.312H23.6661V74.508ZM28.0701 74.88H29.0541V78.936H28.0701V74.88ZM24.9141 68.52H25.8981V70.008H31.2621V68.52H32.2581V73.212H24.9141V68.52ZM25.8981 70.812V72.396H31.2621V70.812H25.8981ZM37.5852 69.636H38.4012V71.388C38.4012 71.964 38.3212 72.532 38.1612 73.092C38.0012 73.644 37.7772 74.168 37.4892 74.664C37.2092 75.152 36.8812 75.584 36.5052 75.96C36.1292 76.336 35.7252 76.632 35.2932 76.848L34.7172 76.056C35.1092 75.864 35.4772 75.604 35.8212 75.276C36.1732 74.948 36.4812 74.572 36.7452 74.148C37.0092 73.724 37.2132 73.276 37.3572 72.804C37.5092 72.332 37.5852 71.86 37.5852 71.388V69.636ZM37.7892 69.636H38.5932V71.388C38.5932 71.844 38.6652 72.3 38.8092 72.756C38.9612 73.204 39.1692 73.628 39.4332 74.028C39.7052 74.42 40.0132 74.768 40.3572 75.072C40.7092 75.376 41.0852 75.616 41.4852 75.792L40.9332 76.584C40.4932 76.376 40.0812 76.096 39.6972 75.744C39.3132 75.392 38.9772 74.988 38.6892 74.532C38.4092 74.068 38.1892 73.572 38.0292 73.044C37.8692 72.508 37.7892 71.956 37.7892 71.388V69.636ZM35.0652 69.192H41.1252V70.02H35.0652V69.192ZM42.6012 68.076H43.5972V78.936H42.6012V68.076ZM51.5523 70.896H53.9883V71.724H51.5523V70.896ZM53.6883 68.076H54.6843V74.544H53.6883V68.076ZM51.1083 74.88C51.8603 74.88 52.5043 74.96 53.0403 75.12C53.5843 75.28 54.0003 75.512 54.2883 75.816C54.5763 76.112 54.7203 76.476 54.7203 76.908C54.7203 77.548 54.3963 78.044 53.7483 78.396C53.1083 78.748 52.2283 78.924 51.1083 78.924C49.9883 78.924 49.1043 78.748 48.4563 78.396C47.8163 78.044 47.4963 77.548 47.4963 76.908C47.4963 76.476 47.6403 76.112 47.9283 75.816C48.2243 75.512 48.6403 75.28 49.1763 75.12C49.7203 74.96 50.3643 74.88 51.1083 74.88ZM51.1083 75.66C50.5643 75.66 50.0963 75.708 49.7043 75.804C49.3123 75.9 49.0083 76.04 48.7923 76.224C48.5843 76.408 48.4803 76.636 48.4803 76.908C48.4803 77.164 48.5843 77.384 48.7923 77.568C49.0083 77.752 49.3123 77.896 49.7043 78C50.0963 78.096 50.5643 78.144 51.1083 78.144C51.6603 78.144 52.1283 78.096 52.5123 78C52.9043 77.896 53.2043 77.752 53.4123 77.568C53.6283 77.384 53.7363 77.164 53.7363 76.908C53.7363 76.636 53.6283 76.408 53.4123 76.224C53.2043 76.04 52.9043 75.9 52.5123 75.804C52.1283 75.708 51.6603 75.66 51.1083 75.66ZM48.5163 69.18H49.3323V70.056C49.3323 70.72 49.2043 71.344 48.9483 71.928C48.7003 72.504 48.3483 73.012 47.8923 73.452C47.4363 73.884 46.9083 74.216 46.3083 74.448L45.7923 73.656C46.2003 73.512 46.5683 73.316 46.8963 73.068C47.2323 72.82 47.5203 72.536 47.7603 72.216C48.0083 71.896 48.1963 71.552 48.3242 71.184C48.4523 70.816 48.5163 70.44 48.5163 70.056V69.18ZM48.7083 69.18H49.5243V70.044C49.5243 70.508 49.6323 70.96 49.8483 71.4C50.0643 71.84 50.3723 72.228 50.7723 72.564C51.1723 72.9 51.6323 73.164 52.1523 73.356L51.6483 74.148C51.0563 73.932 50.5403 73.62 50.1003 73.212C49.6603 72.796 49.3163 72.316 49.0683 71.772C48.8283 71.228 48.7083 70.652 48.7083 70.044V69.18ZM46.1043 68.868H51.9003V69.684H46.1043V68.868ZM60.9851 78H59.8771L63.0817 69.2727H64.1726L67.3771 78H66.2692L63.6612 70.6534H63.593L60.9851 78ZM61.3942 74.5909H65.8601V75.5284H61.3942V74.5909ZM68.2797 73.236H78.0957V74.064H68.2797V73.236ZM69.5157 71.4H76.9437V72.216H69.5157V71.4ZM69.5157 68.508H76.8717V69.324H70.4997V71.784H69.5157V68.508ZM73.1757 75C74.3357 75 75.2437 75.172 75.8997 75.516C76.5557 75.86 76.8837 76.34 76.8837 76.956C76.8837 77.58 76.5557 78.06 75.8997 78.396C75.2437 78.74 74.3357 78.912 73.1757 78.912C72.0157 78.912 71.1037 78.74 70.4397 78.396C69.7837 78.06 69.4557 77.58 69.4557 76.956C69.4557 76.34 69.7837 75.86 70.4397 75.516C71.1037 75.172 72.0157 75 73.1757 75ZM73.1637 75.78C72.6037 75.78 72.1197 75.828 71.7117 75.924C71.3117 76.012 71.0037 76.144 70.7877 76.32C70.5717 76.496 70.4637 76.708 70.4637 76.956C70.4637 77.212 70.5717 77.428 70.7877 77.604C71.0037 77.772 71.3117 77.904 71.7117 78C72.1197 78.088 72.6037 78.132 73.1637 78.132C73.7397 78.132 74.2277 78.088 74.6277 78C75.0357 77.904 75.3477 77.772 75.5637 77.604C75.7797 77.428 75.8877 77.212 75.8877 76.956C75.8877 76.708 75.7797 76.496 75.5637 76.32C75.3477 76.144 75.0357 76.012 74.6277 75.924C74.2277 75.828 73.7397 75.78 73.1637 75.78ZM80.5908 74.292H81.5748V75.72H86.8908V74.292H87.8748V78.792H80.5908V74.292ZM81.5748 76.5V77.976H86.8908V76.5H81.5748ZM80.5668 68.568H87.5508V69.384H80.5668V68.568ZM79.3188 72.504H89.1588V73.332H79.3188V72.504ZM86.9028 68.568H87.8868V69.372C87.8868 69.812 87.8708 70.3 87.8388 70.836C87.8068 71.372 87.7068 72.004 87.5388 72.732L86.5548 72.744C86.7308 72.008 86.8308 71.372 86.8548 70.836C86.8868 70.3 86.9028 69.812 86.9028 69.372V68.568ZM96.8408 73.812H97.8368V76.176H96.8408V73.812ZM96.8288 69.996H97.6328V70.248C97.6328 70.88 97.5048 71.46 97.2488 71.988C96.9928 72.508 96.6368 72.956 96.1808 73.332C95.7248 73.7 95.1928 73.98 94.5848 74.172L94.1168 73.404C94.6528 73.236 95.1248 73 95.5328 72.696C95.9408 72.384 96.2568 72.02 96.4808 71.604C96.7128 71.18 96.8288 70.728 96.8288 70.248V69.996ZM97.0208 69.996H97.8368V70.248C97.8368 70.712 97.9528 71.148 98.1848 71.556C98.4168 71.956 98.7368 72.308 99.1448 72.612C99.5608 72.908 100.037 73.132 100.573 73.284L100.117 74.064C99.5088 73.88 98.9728 73.604 98.5088 73.236C98.0448 72.868 97.6808 72.432 97.4168 71.928C97.1528 71.416 97.0208 70.856 97.0208 70.248V69.996ZM94.3808 69.492H100.333V70.308H94.3808V69.492ZM96.8408 68.16H97.8368V69.852H96.8408V68.16ZM101.581 68.076H102.577V78.948H101.581V68.076ZM93.9248 76.704L93.7928 75.876C94.4488 75.876 95.1728 75.872 95.9648 75.864C96.7648 75.848 97.5848 75.816 98.4248 75.768C99.2728 75.712 100.089 75.62 100.873 75.492L100.957 76.236C100.141 76.388 99.3128 76.496 98.4728 76.56C97.6408 76.624 96.8368 76.664 96.0608 76.68C95.2848 76.696 94.5728 76.704 93.9248 76.704ZM104.76 74.292H114.6V75.12H104.76V74.292ZM109.164 74.796H110.148V78.936H109.164V74.796ZM109.656 68.508C110.416 68.508 111.08 68.608 111.648 68.808C112.216 69 112.66 69.276 112.98 69.636C113.3 69.988 113.46 70.408 113.46 70.896C113.46 71.376 113.3 71.796 112.98 72.156C112.66 72.516 112.216 72.792 111.648 72.984C111.08 73.176 110.416 73.272 109.656 73.272C108.912 73.272 108.252 73.176 107.676 72.984C107.108 72.792 106.664 72.516 106.344 72.156C106.024 71.796 105.864 71.376 105.864 70.896C105.864 70.408 106.024 69.988 106.344 69.636C106.664 69.276 107.108 69 107.676 68.808C108.252 68.608 108.912 68.508 109.656 68.508ZM109.656 69.312C109.112 69.312 108.628 69.376 108.204 69.504C107.788 69.632 107.464 69.816 107.232 70.056C107 70.288 106.884 70.564 106.884 70.884C106.884 71.212 107 71.496 107.232 71.736C107.464 71.968 107.788 72.148 108.204 72.276C108.628 72.404 109.112 72.468 109.656 72.468C110.216 72.468 110.704 72.404 111.12 72.276C111.536 72.148 111.86 71.968 112.092 71.736C112.324 71.496 112.44 71.212 112.44 70.884C112.44 70.564 112.324 70.288 112.092 70.056C111.86 69.816 111.536 69.632 111.12 69.504C110.704 69.376 110.216 69.312 109.656 69.312ZM120.203 68.46H121.079V69.072C121.079 69.488 120.999 69.88 120.839 70.248C120.679 70.608 120.459 70.94 120.179 71.244C119.907 71.548 119.587 71.82 119.219 72.06C118.851 72.3 118.451 72.5 118.019 72.66C117.595 72.82 117.159 72.936 116.711 73.008L116.303 72.204C116.703 72.148 117.091 72.052 117.467 71.916C117.851 71.78 118.207 71.616 118.535 71.424C118.863 71.224 119.151 71 119.399 70.752C119.655 70.504 119.851 70.24 119.987 69.96C120.131 69.672 120.203 69.376 120.203 69.072V68.46ZM120.371 68.46H121.235V69.072C121.235 69.376 121.307 69.668 121.451 69.948C121.595 70.228 121.791 70.492 122.039 70.74C122.295 70.988 122.587 71.212 122.915 71.412C123.243 71.612 123.595 71.78 123.971 71.916C124.355 72.052 124.743 72.148 125.135 72.204L124.739 73.008C124.291 72.936 123.855 72.82 123.431 72.66C123.007 72.492 122.607 72.288 122.231 72.048C121.863 71.808 121.539 71.536 121.259 71.232C120.987 70.928 120.771 70.596 120.611 70.236C120.451 69.868 120.371 69.48 120.371 69.072V68.46ZM120.203 74.808H121.187V78.936H120.203V74.808ZM115.811 74.184H125.615V75.012H115.811V74.184ZM133.117 69.192H133.945V70.068C133.945 70.732 133.817 71.348 133.561 71.916C133.305 72.484 132.945 72.98 132.481 73.404C132.025 73.828 131.493 74.148 130.885 74.364L130.369 73.596C130.913 73.396 131.389 73.12 131.797 72.768C132.213 72.408 132.537 71.996 132.769 71.532C133.001 71.068 133.117 70.58 133.117 70.068V69.192ZM133.309 69.192H134.125V70.068C134.125 70.436 134.189 70.788 134.317 71.124C134.453 71.46 134.645 71.776 134.893 72.072C135.141 72.36 135.429 72.62 135.757 72.852C136.093 73.076 136.461 73.252 136.861 73.38L136.357 74.16C135.757 73.952 135.229 73.648 134.773 73.248C134.317 72.848 133.957 72.376 133.693 71.832C133.437 71.288 133.309 70.7 133.309 70.068V69.192ZM138.121 68.076H139.117V74.64H138.121V68.076ZM131.869 75.216H139.117V78.936H138.121V76.032H131.869V75.216ZM130.633 68.832H136.573V69.648H130.633V68.832ZM146.712 70.668H149.628V71.484H146.712V70.668ZM144.228 68.58C144.764 68.58 145.24 68.688 145.656 68.904C146.08 69.112 146.412 69.404 146.652 69.78C146.892 70.156 147.012 70.592 147.012 71.088C147.012 71.584 146.892 72.024 146.652 72.408C146.412 72.784 146.08 73.08 145.656 73.296C145.24 73.504 144.764 73.608 144.228 73.608C143.684 73.608 143.2 73.504 142.776 73.296C142.36 73.08 142.032 72.784 141.792 72.408C141.552 72.024 141.432 71.584 141.432 71.088C141.432 70.592 141.552 70.156 141.792 69.78C142.032 69.404 142.36 69.112 142.776 68.904C143.2 68.688 143.684 68.58 144.228 68.58ZM144.228 69.42C143.868 69.42 143.548 69.492 143.268 69.636C142.996 69.772 142.78 69.968 142.62 70.224C142.46 70.472 142.38 70.76 142.38 71.088C142.38 71.416 142.46 71.708 142.62 71.964C142.78 72.212 142.996 72.408 143.268 72.552C143.548 72.696 143.868 72.768 144.228 72.768C144.58 72.768 144.892 72.696 145.164 72.552C145.444 72.408 145.664 72.212 145.824 71.964C145.984 71.708 146.064 71.416 146.064 71.088C146.064 70.76 145.984 70.472 145.824 70.224C145.664 69.968 145.444 69.772 145.164 69.636C144.892 69.492 144.58 69.42 144.228 69.42ZM149.196 68.076H150.192V73.908H149.196V68.076ZM143.244 74.448H144.228V75.804H149.196V74.448H150.192V78.792H143.244V74.448ZM144.228 76.596V77.976H149.196V76.596H144.228ZM152.303 74.28H162.107V75.084H152.303V74.28ZM156.779 74.868H157.775V76.704H156.779V74.868ZM153.539 77.892H161.039V78.696H153.539V77.892ZM153.539 75.984H154.535V78.324H153.539V75.984ZM152.819 69.084H161.543V69.864H152.819V69.084ZM157.199 70.332C158.311 70.332 159.171 70.472 159.779 70.752C160.395 71.032 160.703 71.44 160.703 71.976C160.703 72.512 160.395 72.924 159.779 73.212C159.171 73.492 158.311 73.632 157.199 73.632C156.087 73.632 155.223 73.492 154.607 73.212C153.999 72.924 153.695 72.512 153.695 71.976C153.695 71.44 153.999 71.032 154.607 70.752C155.223 70.472 156.087 70.332 157.199 70.332ZM157.199 71.052C156.399 71.052 155.783 71.132 155.351 71.292C154.919 71.444 154.703 71.672 154.703 71.976C154.703 72.28 154.919 72.512 155.351 72.672C155.783 72.824 156.399 72.9 157.199 72.9C157.999 72.9 158.615 72.824 159.047 72.672C159.479 72.512 159.695 72.28 159.695 71.976C159.695 71.672 159.479 71.444 159.047 71.292C158.615 71.132 157.999 71.052 157.199 71.052ZM156.707 67.956H157.703V69.516H156.707V67.956ZM163.786 73.8H164.566C165.254 73.8 165.85 73.792 166.354 73.776C166.866 73.76 167.334 73.732 167.758 73.692C168.19 73.652 168.63 73.596 169.078 73.524L169.186 74.34C168.722 74.42 168.27 74.48 167.83 74.52C167.39 74.56 166.91 74.588 166.39 74.604C165.87 74.612 165.262 74.616 164.566 74.616H163.786V73.8ZM163.762 68.856H168.442V72.024H164.782V74.28H163.786V71.244H167.446V69.66H163.762V68.856ZM171.274 68.088H172.27V76.068H171.274V68.088ZM169.174 69.912H171.514V70.716H169.174V69.912ZM165.262 77.82H172.594V78.648H165.262V77.82ZM165.262 75.492H166.246V78.192H165.262V75.492ZM169.174 72.336H171.514V73.152H169.174V72.336ZM175.401 69.168H182.373V69.984H175.401V69.168ZM174.381 76.584H184.185V77.412H174.381V76.584ZM176.781 73.008H177.777V76.884H176.781V73.008ZM182.049 69.168H183.045V70.356C183.045 70.812 183.037 71.284 183.021 71.772C183.013 72.26 182.981 72.784 182.925 73.344C182.877 73.896 182.789 74.508 182.661 75.18L181.677 75.072C181.861 74.104 181.969 73.248 182.001 72.504C182.033 71.752 182.049 71.036 182.049 70.356V69.168ZM179.469 73.008H180.453V76.884H179.469V73.008ZM188 73.692H188.996V75.84H188V73.692ZM191.648 73.692H192.632V75.828H191.648V73.692ZM185.42 73.308H195.224V74.112H185.42V73.308ZM186.512 75.468H194.012V78.936H193.016V76.272H186.512V75.468ZM190.316 68.328C191.1 68.328 191.776 68.412 192.344 68.58C192.912 68.748 193.352 68.988 193.664 69.3C193.976 69.604 194.132 69.972 194.132 70.404C194.132 70.844 193.976 71.22 193.664 71.532C193.352 71.836 192.912 72.072 192.344 72.24C191.776 72.408 191.1 72.492 190.316 72.492C189.54 72.492 188.864 72.408 188.288 72.24C187.72 72.072 187.28 71.836 186.968 71.532C186.656 71.22 186.5 70.844 186.5 70.404C186.5 69.972 186.656 69.604 186.968 69.3C187.28 68.988 187.72 68.748 188.288 68.58C188.864 68.412 189.54 68.328 190.316 68.328ZM190.316 69.12C189.748 69.12 189.252 69.172 188.828 69.276C188.412 69.372 188.088 69.516 187.856 69.708C187.632 69.9 187.52 70.132 187.52 70.404C187.52 70.676 187.632 70.908 187.856 71.1C188.088 71.292 188.412 71.44 188.828 71.544C189.252 71.648 189.748 71.7 190.316 71.7C190.892 71.7 191.388 71.648 191.804 71.544C192.228 71.44 192.552 71.292 192.776 71.1C193 70.908 193.112 70.676 193.112 70.404C193.112 70.132 193 69.9 192.776 69.708C192.552 69.516 192.228 69.372 191.804 69.276C191.388 69.172 190.892 69.12 190.316 69.12ZM204.367 68.076H205.363V78.936H204.367V68.076ZM201.187 69.252H202.171C202.171 70.036 202.075 70.792 201.883 71.52C201.699 72.248 201.407 72.94 201.007 73.596C200.607 74.244 200.087 74.848 199.447 75.408C198.807 75.968 198.031 76.468 197.119 76.908L196.591 76.104C197.639 75.6 198.503 75.012 199.183 74.34C199.863 73.668 200.367 72.92 200.695 72.096C201.023 71.264 201.187 70.368 201.187 69.408V69.252ZM197.095 69.252H201.607V70.056H197.095V69.252ZM208.086 68.916H212.886V69.744H208.086V68.916ZM209.718 71.34H210.702V74.052H209.718V71.34ZM212.49 68.916H213.462V69.492C213.462 69.852 213.45 70.3 213.426 70.836C213.41 71.372 213.33 71.996 213.186 72.708L212.202 72.612C212.346 71.892 212.43 71.28 212.454 70.776C212.478 70.272 212.49 69.844 212.49 69.492V68.916ZM214.938 68.076H215.946V76.248H214.938V68.076ZM215.49 71.604H217.494V72.444H215.49V71.604ZM209.082 77.88H216.294V78.696H209.082V77.88ZM209.082 75.504H210.078V78.12H209.082V75.504ZM207.534 74.52L207.426 73.704C208.066 73.704 208.774 73.696 209.55 73.68C210.326 73.664 211.114 73.632 211.914 73.584C212.714 73.528 213.482 73.452 214.218 73.356L214.278 74.088C213.534 74.216 212.762 74.312 211.962 74.376C211.162 74.44 210.382 74.48 209.622 74.496C208.87 74.512 208.174 74.52 207.534 74.52Z"
                                fill="var(--body-color)" />
                            <path
                                d="M261.227 78H244.182L273.045 19.8182H294.636L304.182 78H287.136L281.455 35.8409H281L261.227 78ZM261.909 55.0455H293.955L291.909 66.8636H259.864L261.909 55.0455Z"
                                fill="var(--body-color)" />
                        </svg>
                    </a>
                </h1>
                <nav class="gnb mg01">
                    <ul>
                        <li class="on">
                            <a href="./sub.html">학교안내</a>
                            <ul>
                                <li><a href="./sub.html">학교안내</a></li>
                                <li><a href="./sub.html">인사말</a></li>
                                <li><a href="">훈련실적</a></li>
                                <li><a href="">교직원소개</a></li>
                                <li><a href="">연혁</a></li>
                                <li><a href="">시설안내</a></li>
                                <li><a href="">오시는 길</a></li>
                                <li><a href="">학교소식</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="./sub.html">모집중인과정</a>
                            <ul>
                                <li><a href="">현재모집중인과정</a></li>
                                <li><a href="">진행중인과정</a></li>
                                <li><a href="">연간모집과정</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="./sub.html">온라인등록</a>
                            <ul>
                                <li><a href="">온라인접수</a></li>
                                <li><a href="">입학상담</a></li>
                                <li><a href=""> 자주하는 질문</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="./sub.html">교육과정안내</a>
                            <ul>
                                <li><a href="">컴퓨터응용기계</a></li>
                                <li><a href="">의료기기제작</a></li>
                                <li><a href="">패션디자인</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="./sub.html" class="wp">국비과정입학안내</a>
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
                </nav>
            </div>

            <div class="utils">
                <a href="" style="--color:var(--primary-color)">
                    <span>수강문의 Q&A</span>
                    <em class="d_btn">
                        <svg width="16" height="16" fill="none" stroke="var(--body-color)" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <use href="<?=G5_THEME_URL;?>/images/feather-sprite.svg#edit-3" />
                        </svg>
                    </em>
                </a>
            </div>
            <button class="moblie_btn" style="--color: #000">
                <span>mobile</span>
            </button>
        </div>

    </header>
    <aside id="quick">


        <a href="">
            <i>
                <svg width="24" height="24" fill="none" stroke="var(--body-color)" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <use href="<?=G5_THEME_URL;?>/images/feather-sprite.svg#search" />
                </svg>
            </i>

            <span>교육과정 조회</span>
        </a>
        <a href="">
            <i>
                <svg width="24" height="24" fill="none" stroke="var(--body-color)" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <use href="<?=G5_THEME_URL;?>/images/feather-sprite.svg#monitor" />
                </svg>
            </i>

            <span>국비지원안내</span>
        </a>
        <a href="https://kko.kakao.com/XRjixnRSXb" target="_blank">
            <i>
                <svg width="24" height="24" fill="none" stroke="var(--body-color)" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <use href="<?=G5_THEME_URL;?>/images/feather-sprite.svg#map-pin" />
                </svg>
            </i>

            <span>오시는길</span>
        </a>

        <a href="#" class="strong pb">
            <i>
                <svg width="24" height="24" fill="none" stroke="var(--body-color)" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <use href="<?=G5_THEME_URL;?>/images/feather-sprite.svg#edit-3" />
                </svg>
            </i>

            <span>수강신청</span>
        </a>

        <a href="tel:055-335-2735" class="strong mb">
            <i>
                <svg width="24" height="24" fill="none" stroke="var(--body-color)" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <use href="<?=G5_THEME_URL;?>/images/feather-sprite.svg#phone-call" />
                </svg>
            </i>

            <span>바로전화</span>
        </a>


    </aside>