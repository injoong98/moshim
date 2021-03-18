<style>
.youtube_btn{
    flex: none !important;
    max-width: 30% !important;
    padding: 0px !important;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 14px;
    height: 18px;
}
.youtube_btn img{
    width: 150%;
    max-width: 60px;
}
.single_program_list .single_program_list_content .program_list_details h5 {
    font-size: 15px;
    font-weight: 700;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex: 1;
}
.breadcrumb_part {
    background-image: url(../assets/malgeunmul/img/workbook/workbook_cover.jpg) !important;
    background-size: contain !important;
    height: 0 !important;
    width: 100%;
    padding-top: 20.84%;
}
#art-desc {
    background-color: #fd5c37;
    align-items: center;
    justify-content: center;
    display: flex;
    /* height: 100%; */
}
.program_details_content .description, .program_details_content span {
    color: white;
}
.single_program_list .single_program_list_content h4 a {
    font-size: 17.5px;
}
.single_program_list .single_program_list_content .program_list_details {
    justify-content: space-around;
}
.single_program_list .single_program_list_content h4 {
    margin-top: 5px;
 }
.step-title {
    margin-top: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.filter-box {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.filter-info {
    background: darkgray;
    border-radius: 10px;
    padding: 0% 10%;
    /* width: 40%; */
    /* height: 40px; */
    min-width: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.filter-info-text {
    text-align: center;
    color: white;
    /* font-size: 20px; */
    margin: 10px 0px;
}
.program_list_page .filters ul li.is-checked {
    font-size: 24px;
}
@media (min-width: 992px){
    #art-desc {
        height: 100%;
    }
    .filter-info-text {
        font-size: 20px;
    }
}
@media (max-width: 768px){
    .row.with-video{
        display:block;
    }
}
.logo-video{
    height : 404px;
    position: relative;
    left : 50%;
    transform: translateX(-50%);
}
.program_details_thumb {
    overflow: hidden;
}
</style>


<script src="http://code.jquery.com/jquery-latest.js"></script>

<!-- <div class="dummy-cache" style="width:0px; height:0px">
    <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-1.jpg"  style="width:0px; height:0px">
    <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-2.jpg"  style="width:0px; height:0px">
    <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-3.jpg"  style="width:0px; height:0px">
    <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-4.jpg"  style="width:0px; height:0px">
    <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-1.jpg"  style="width:0px; height:0px">
    <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-2.jpg"  style="width:0px; height:0px">
    <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-3.jpg"  style="width:0px; height:0px">
    <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-4.jpg"  style="width:0px; height:0px">
</div> -->
<!-- 이미지뷰어 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.3.7/viewer.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.3.7/viewer.min.css" />

    <!-- breadcrumb part -->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="animation-diaplay-none breadcrumb_animation_4">
            <div data-parallax='{"x": 30, "y": 250, "rotateZ":0}'>
                <img src="<?php echo trim(site_url(), '/') ?>/assets/malgeunmul/img/icon/banner_icon/animated_banner_4.png" alt="#">
            </div>
        </div>
        <div class="animation-diaplay-none breadcrumb_animation_5">
            <div data-parallax='{"x": 20, "y": 150, "rotateZ": 180}'>
                <img src="<?php echo trim(site_url(), '/') ?>/assets/malgeunmul/img/icon/banner_icon/animated_banner_5.png" alt="#">
            </div>
        </div>
        <div class="animation-diaplay-none breadcrumb_animation_7">
            <div data-parallax='{"x": 100, "y": 250, "rotateZ":0}'>
                <img src="<?php echo trim(site_url(), '/') ?>/assets/malgeunmul/img/icon/banner_icon/animated_banner_15.png" alt="#">
            </div>
        </div>
        <div class="animation-diaplay-none breadcrumb_animation_10">
            <div data-parallax='{"x": 15, "y": 150, "rotateZ":0}'>
                <img src="<?php echo trim(site_url(), '/') ?>/assets/malgeunmul/img/icon/banner_icon/animated_banner_10.png" alt="#">
            </div>
        </div>
        <div class="animation-diaplay-none breadcrumb_animation_12">
            <div data-parallax='{"x": 20, "y": 150, "rotateZ":180}'>
                <img src="<?php echo trim(site_url(), '/') ?>/assets/malgeunmul/img/icon/banner_icon/animated_banner_20.png" alt="#">
            </div>
        </div>
        <div class="animation-diaplay-none breadcrumb_animation_13">
            <div data-parallax='{"x": 10, "y": 250, "rotateZ": 180}'>
                <img src="<?php echo trim(site_url(), '/') ?>/assets/malgeunmul/img/icon/banner_icon/animated_banner_21.png" alt="#">
            </div>
        </div> -->
    </section>
    <!-- breadcrumb part end -->

    <section class="event_part section_padding section_bg_2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="Cafe24Ssurround title_overlay_effect"> 학습지</span></h2>
                        <p class="description wow fadeInDown" data-wow-delay=".3s">언제나 함께 하는 생각놀이 위드아이 - ART</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_part_iner">
                        <div class="row justify-content-end with-video">
                            <!-- <div class="event_img wow fadeInLeft" data-wow-delay=".5s">
                                <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/workbook/withi_logo.jpg" alt="#" class="img-fluid">
                            </div> -->
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="program_details_thumb profile_img pr-lg-3">
                                        <video src='<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/main/withi_logo_video_8s.mp4' class="logo-video" autoplay muted loop>
                                            해당 브라우저는 video 태그를 지원하지 않습니다.
                                        </video>
                                        <!-- <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/workbook/withi_logo_small.jpg" alt="#" class="img-fluid"> -->
                                        <!-- <img src="img/teacher_profile_shape.png" alt="#" class="img-fluid teacher_profile_shape"> -->
                                    </div>
                                </div>
                                <div class="col-lg-5 wow fadeInUp" id="art-desc" data-wow-delay=".5s">
                                    <div class="program_details_content mt-5 mb-5 mt-lg-0 mb-lg-0">
                                        <h2 class="kid_title mb-5"> <span class="Cafe24Ssurround">위드아이 - ART</span></h2>
                                        <p class="description mt-0 mb-1">그리기, 만들기등의 미술활동을 중심으로</p>
                                        <p class="description mt-0 mb-1">집에서는 부모님과 자녀들이,</p>
                                        <p class="description mt-0 mb-1">유치원에서는 선생님과 아이들이</p>
                                        <p class="description mt-0 mb-1">놀면서 생각을 나눕니다.</p>
                                        <p class="description mt-0 mb-1">언제나 아이와 함께 하는 생각놀이 &#39;위드아이&#39; ART !</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6 col-lg-7">
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".2s">
                                    <div class="event_date">
                                    </div>
                                    <div class="event_content">
                                        <h4> <a>위드아이 Art</a></h4>
                                    </div>
                                </div>
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".4s">
                                    <div class="event_date">
                                    </div>
                                    <div class="event_content">
                                        <h4> <a>위드아이 Science</a></h4>
                                    </div>
                                </div>
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".6s">
                                    <div class="event_date">
                                    </div>
                                    <div class="event_content">
                                        <h4> <a>위드아이 Connect</a></h4>
                                    </div>
                                </div>
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".8s">
                                    <div class="event_date">
                                    </div>
                                    <div class="event_content">
                                        <h4> <a>위드아이 Activity</a></h4>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event_animation_1">
            <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/event_1.png" alt="#"></div>
        </div>
        <div class="event_animation_2">
            <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/event_2.png" alt="#"></div>
        </div>
        <div class="event_animation_3">
            <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/icon/event_3.png" alt="#"></div>
        </div>
    </section>

     <!-- program list part here -->
     <section class="program_list program_list_page section_padding" id="program_list">
        <div class="container custom_container">
            <div class="row">
                <div class="col-md-12 filter-box">
                    <div class="filters">
                        <ul>
                            <!-- <li class="is-checked" data-filter="*">All</li> -->
                            <li id="filter-main" class="is-checked Cafe24Ssurround" data-filter=".1st">1호</li>
                            <!-- <li data-filter=".1st">2</li>
                            <li data-filter=".1st">3</li>
                            <li data-filter=".1st">4</li> -->
                        </ul>
                    </div>
                    <div class="filter-info">
                        <p class="filter-info-text" style="">미술활동을 통해 배우는 엄마ㆍ아빠의 사랑</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="step-title"><h4 class="Cafe24Ssurround">1단계</h4><p>24,000₩</p></div>
                    <div class="rows grid program_list_filter" id="program_list_filter1">
                        <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                                <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-1.jpg" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <p>1차시</p>
                                    <h4><a>포근한 품 속으로</a></h4>
                                    <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit adipisi
                                    </p> -->
                                    <div class="program_list_details">
                                        <h5>연령<span>4-5 세</span> </h5>                                     
                                        <h5>영상                                   
                                            <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/5DeDy9Ps_u4">
                                                <img src="/assets/images/youtube.png" class="music_sns_icon"/>
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                                <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-2.jpg" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <p>2차시</p>
                                    <h4><a>누가누가 닮았나</a></h4>
                                    <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit adipisi
                                    </p> -->
                                    <div class="program_list_details">
                                        <h5>연령<span>4-5 세</span> </h5>
                                        <h5>영상                                   
                                            <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/5DeDy9Ps_u4">
                                                <img src="/assets/images/youtube.png" class="music_sns_icon"/>
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                                <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-3.jpg" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <p>3차시</p>
                                    <h4><a>나도 어부바</a></h4>
                                    <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                    <div class="program_list_details">
                                        <h5>연령<span>4-5 세</span> </h5>                                     
                                        <h5>영상                                   
                                            <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/5DeDy9Ps_u4">
                                                <img src="/assets/images/youtube.png" class="music_sns_icon"/>
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                                <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-4.jpg" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <p>4차시</p>
                                    <h4><a>하하호호</a></h4>
                                    <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                    <div class="program_list_details">
                                        <h5>연령<span>4-5 세</span> </h5>                                     
                                        <h5>영상                                   
                                            <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/5DeDy9Ps_u4">
                                                <img src="/assets/images/youtube.png" class="music_sns_icon"/>
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="step-title"><h4 class="Cafe24Ssurround">2단계</h4><p>24,000₩</p></div>
                    <div class="rows grid program_list_filter" id="program_list_filter2">
                        <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                                <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-1.jpg" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <p>1차시</p>
                                    <h4><a>우리집 왕과 왕비</a></h4>
                                    <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                    <div class="program_list_details">
                                        <h5>연령<span>6-7 세</span> </h5>                                     
                                        <h5>영상                                   
                                            <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/5DeDy9Ps_u4">
                                                <img src="/assets/images/youtube.png" class="music_sns_icon"/>
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                                <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-2.jpg" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <p>2차시</p>
                                    <h4><a>사랑으로 꽃피는 우리가족</a></h4>
                                    <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                    <div class="program_list_details">
                                        <h5>연령<span>6-7 세</span> </h5>                                     
                                        <h5>영상                                   
                                            <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/5DeDy9Ps_u4">
                                                <img src="/assets/images/youtube.png" class="music_sns_icon"/>
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                                <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-3.jpg" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <p>3차시</p>
                                    <h4><a>정성을 담아서 맛있게</a></h4>
                                    <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                    <div class="program_list_details">
                                        <h5>연령<span>6-7 세</span> </h5>                                     
                                        <h5>영상                                   
                                            <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/5DeDy9Ps_u4">
                                                <img src="/assets/images/youtube.png" class="music_sns_icon"/>
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                            <div class="single_program_list wow fadeInUp" data-wow-delay=".4s">
                                <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-4.jpg" alt="#" class="img-fluid">
                                <div class="single_program_list_content">
                                    <p>4차시</p>
                                    <h4><a>웃음이 넘치는 우리집</a></h4>
                                    <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                    <div class="program_list_details">
                                        <h5>연령<span>6-7 세</span> </h5>                                     
                                        <h5>영상                                   
                                            <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/5DeDy9Ps_u4">
                                                <img src="/assets/images/youtube.png" class="music_sns_icon"/>
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list_animation_1">
                <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="../assets/malgeunmul/img/icon/story_animation_5.png" alt="#">
                </div>
            </div>
            <div class="list_animation_2">
                <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="../assets/malgeunmul/img/icon/event_6.png" alt="#">
                </div>
            </div>
            <div class="list_animation_3">
                <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="../assets/malgeunmul/img/icon/icon_8.png" alt="#">
                </div>
            </div>
            <div class="list_animation_4">
                <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="../assets/malgeunmul/img/icon/contact_icon.png" alt="#"></div>
            </div>
            <div class="list_animation_5">
                <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="../assets/malgeunmul/img/icon/story_animation_5.png" alt="#">
                </div>
            </div>
            <div class="list_animation_6">
                <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="../assets/malgeunmul/img/icon/icon_9.png" alt="#">
                </div>
            </div>
    </section>
    <!-- program list part end -->
    <script>
        $(function() {
            $('li.is-checked').trigger("click");
        })
    </script>

    <script>
        var viewer1 = new Viewer(document.querySelector('#program_list_filter1'), {
            navbar : false,
            toolbar : false,
            filter(image) {
                return image.className=='img-fluid';
            }
        });
        var viewer2 = new Viewer(document.querySelector('#program_list_filter2'), {
            navbar : false,
            toolbar : false,
            filter(image) {
                return image.className=='img-fluid';
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            console.log('ready');
            // document.getElementById("filter-main").click();
            // $('#filter-main').trigger('click')


            var mutationObserver = new MutationObserver(function(mutations) {
                // mutations.forEach(function(mutation) {
                //     console.log(mutation); 
                // }); 
                document.getElementById("filter-main").click();
                $('#filter-main').trigger('click')
                mutationObserver.disconnect();
            }); 
            var element = document.getElementsByClassName('preloder')[0];
            // console.log(element);
            var option = { 
                attributes : true, 
                characterData: true, 
                childList: true, 
                subtree: true, 
                attributeOldValue: true, 
                characterDataOldValue: true 
            } 
            mutationObserver.observe(element, option);
        })
        // console.log($('.preloder').css('display'));
        // while(1){
        //     if($('.preloder').css('display') == "none"){
        //         console.log($('.preloder').css('display'));
        //         break;
        //     }
        // }
        // $('.preloder').on("DOMSubtreeModified",function(){
        //     console.log('changed');
        // });
        // setTimeout(() => {
        //     console.log('timeout');
        //     document.getElementById("filter-main").click();
        //     $('#filter-main').trigger('click')
        // }, 10000);
    </script>
