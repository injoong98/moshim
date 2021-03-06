<style>
    .youtube_btn {
        flex: none !important;
        max-width: 30% !important;
        padding: 0px !important;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 14px;
        height: 18px;
    }

    .youtube_btn img {
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

    .program_details_content .description,
    .program_details_content span {
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

    .single_program_list>img {
        cursor: pointer;
    }

    @media (min-width: 992px) {
        #art-desc {
            height: 100%;
        }

        .filter-info-text {
            font-size: 20px;
        }
    }

    @media (max-width: 768px) {
        .row.with-video {
            display: block;
        }
    }

    .logo-video {
        height: 404px;
        position: relative;
        left: 50%;
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

<!-- ??????????????? -->
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
                    <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="Cafe24Ssurround title_overlay_effect"> ?????????</span></h2>
                    <p class="description wow fadeInDown" data-wow-delay=".3s">????????? ?????? ?????? ???????????? ???????????? - ART</p>
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
                            <div class="col-lg-4" data-wow-delay=".3s">
                                <div class="program_details_thumb profile_img pr-lg-3">
                                    <video src='<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/main/withi_logo_video_8s.mp4' class="logo-video" autoplay playsinline muted loop>
                                        ?????? ??????????????? video ????????? ???????????? ????????????.
                                    </video>
                                    <!-- <img src="<?php echo trim(site_url(), '/'); ?>/assets/malgeunmul/img/workbook/withi_logo_small.jpg" alt="#" class="img-fluid"> -->
                                    <!-- <img src="img/teacher_profile_shape.png" alt="#" class="img-fluid teacher_profile_shape"> -->
                                </div>
                            </div>
                            <div class="col-lg-5" id="art-desc" data-wow-delay=".5s">
                                <div class="program_details_content mt-5 mb-5 mt-lg-0 mb-lg-0">
                                    <h2 class="kid_title mb-5"> <span class="Cafe24Ssurround">???????????? - ART</span></h2>
                                    <p class="description mt-0 mb-1">?????????, ??????????????? ??????????????? ????????????</p>
                                    <p class="description mt-0 mb-1">???????????? ???????????? ????????????,</p>
                                    <p class="description mt-0 mb-1">?????????????????? ???????????? ????????????</p>
                                    <p class="description mt-0 mb-1">????????? ????????? ????????????.</p>
                                    <p class="description mt-0 mb-1">????????? ????????? ?????? ?????? ???????????? &#39;????????????&#39; ART !</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-lg-7">
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".2s">
                                    <div class="event_date">
                                    </div>
                                    <div class="event_content">
                                        <h4> <a>???????????? Art</a></h4>
                                    </div>
                                </div>
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".4s">
                                    <div class="event_date">
                                    </div>
                                    <div class="event_content">
                                        <h4> <a>???????????? Science</a></h4>
                                    </div>
                                </div>
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".6s">
                                    <div class="event_date">
                                    </div>
                                    <div class="event_content">
                                        <h4> <a>???????????? Connect</a></h4>
                                    </div>
                                </div>
                                <div class="single_event_list wow fadeInDown" data-wow-delay=".8s">
                                    <div class="event_date">
                                    </div>
                                    <div class="event_content">
                                        <h4> <a>???????????? Activity</a></h4>
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
                        <li id="filter-main" class="is-checked Cafe24Ssurround" data-filter=".1st">1???</li>
                        <!-- <li data-filter=".1st">2</li>
                            <li data-filter=".1st">3</li>
                            <li data-filter=".1st">4</li> -->
                    </ul>
                </div>
                <div class="filter-info">
                    <p class="filter-info-text" style="">??????????????? ?????? ????????? ?????????????????? ??????</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="step-title">
                    <h4 class="Cafe24Ssurround">1??????</h4>
                    <p>25,000???</p>
                </div>
                <div class="rows grid program_list_filter" id="program_list_filter1">
                    <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                        <div class="single_program_list" data-wow-delay=".4s">
                            <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-1.jpg" alt="#" class="img-fluid">
                            <div class="single_program_list_content">
                                <p>1??????</p>
                                <h4><a>????????? ??? ?????????</a></h4>
                                <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit adipisi
                                    </p> -->
                                <div class="program_list_details">
                                    <h5>??????<span>4-5 ???</span> </h5>
                                    <h5>??????
                                        <!-- <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/t3vGHY5rqJ0"> -->
                                        <a class="col-lg-2 youtube_btn" target="_blank" href="https://www.youtube.com/watch?v=TEX1yFhoYlw">
                                            <img src="/assets/images/youtube.png" class="music_sns_icon" />
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                        <div class="single_program_list" data-wow-delay=".4s">
                            <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-2.jpg" alt="#" class="img-fluid">
                            <div class="single_program_list_content">
                                <p>2??????</p>
                                <h4><a>???????????? ?????????</a></h4>
                                <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit adipisi
                                    </p> -->
                                <div class="program_list_details">
                                    <h5>??????<span>4-5 ???</span> </h5>
                                    <h5>??????
                                        <!-- <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/QWsnUcI4FJk"> -->
                                        <a class="col-lg-2 youtube_btn" target="_blank" href="https://www.youtube.com/watch?v=T_qTPP6R0sg">
                                            <img src="/assets/images/youtube.png" class="music_sns_icon" />
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                        <div class="single_program_list" data-wow-delay=".4s">
                            <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-3.jpg" alt="#" class="img-fluid">
                            <div class="single_program_list_content">
                                <p>3??????</p>
                                <h4><a>?????? ?????????</a></h4>
                                <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                <div class="program_list_details">
                                    <h5>??????<span>4-5 ???</span> </h5>
                                    <h5>??????
                                        <!-- <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/E1NWhaYZba4"> -->
                                        <a class="col-lg-2 youtube_btn" target="_blank" href="https://www.youtube.com/watch?v=_-L4JP-QrR8">
                                            <img src="/assets/images/youtube.png" class="music_sns_icon" />
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                        <div class="single_program_list" data-wow-delay=".4s">
                            <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_1-4.jpg" alt="#" class="img-fluid">
                            <div class="single_program_list_content">
                                <p>4??????</p>
                                <h4><a>????????????</a></h4>
                                <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                <div class="program_list_details">
                                    <h5>??????<span>4-5 ???</span> </h5>
                                    <h5>??????
                                        <!-- <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/0z4bnumGqko"> -->
                                        <a class="col-lg-2 youtube_btn" target="_blank" href="https://www.youtube.com/watch?v=cR5iK-2wu3Q">
                                            <img src="/assets/images/youtube.png" class="music_sns_icon" />
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="step-title">
                    <h4 class="Cafe24Ssurround">2??????</h4>
                    <p>25,000???</p>
                </div>
                <div class="rows grid program_list_filter" id="program_list_filter2">
                    <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                        <div class="single_program_list" data-wow-delay=".4s">
                            <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-1.jpg" alt="#" class="img-fluid">
                            <div class="single_program_list_content">
                                <p>1??????</p>
                                <h4><a>????????? ?????? ??????</a></h4>
                                <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                <div class="program_list_details">
                                    <h5>??????<span>6-7 ???</span> </h5>
                                    <h5>??????
                                        <!-- <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/U4-C0JXpj2k"> -->
                                        <a class="col-lg-2 youtube_btn" target="_blank" href="https://www.youtube.com/watch?v=gCLMbfceX3g">
                                            <img src="/assets/images/youtube.png" class="music_sns_icon" />
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                        <div class="single_program_list" data-wow-delay=".4s">
                            <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-2.jpg" alt="#" class="img-fluid">
                            <div class="single_program_list_content">
                                <p>2??????</p>
                                <h4><a>???????????? ????????? ????????????</a></h4>
                                <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                <div class="program_list_details">
                                    <h5>??????<span>6-7 ???</span> </h5>
                                    <h5>??????
                                        <!-- <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/tBZ9apEkaDs"> -->
                                        <a class="col-lg-2 youtube_btn" target="_blank" href="https://www.youtube.com/watch?v=_VuJ8NMs_RQ">
                                            <img src="/assets/images/youtube.png" class="music_sns_icon" />
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                        <div class="single_program_list" data-wow-delay=".4s">
                            <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-3.jpg" alt="#" class="img-fluid">
                            <div class="single_program_list_content">
                                <p>3??????</p>
                                <h4><a>????????? ????????? ?????????</a></h4>
                                <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                <div class="program_list_details">
                                    <h5>??????<span>6-7 ???</span> </h5>
                                    <h5>??????
                                        <!-- <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/CxPopdESND4"> -->
                                        <a class="col-lg-2 youtube_btn" target="_blank" href="https://www.youtube.com/watch?v=eFjui6yCK8I">
                                            <img src="/assets/images/youtube.png" class="music_sns_icon" />
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-6 grid-item 1st">
                        <div class="single_program_list" data-wow-delay=".4s">
                            <img src="../assets/malgeunmul/img/workbook/workbook_photo/1st/workbook_1st_2-4.jpg" alt="#" class="img-fluid">
                            <div class="single_program_list_content">
                                <p>4??????</p>
                                <h4><a>????????? ????????? ?????????</a></h4>
                                <!-- <p>The amazing way to olor sit adipisi sed do consectetur way to olor sit
                                        adipisi</p> -->
                                <div class="program_list_details">
                                    <h5>??????<span>6-7 ???</span> </h5>
                                    <h5>??????
                                        <!-- <a class="col-lg-2 youtube_btn" target="_blank" href="https://youtu.be/5vBoBB7WbEI"> -->
                                        <a class="col-lg-2 youtube_btn" target="_blank" href="https://www.youtube.com/watch?v=9C9ogkdbSqs">
                                            <img src="/assets/images/youtube.png" class="music_sns_icon" />
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
        navbar: false,
        toolbar: false,
        filter(image) {
            return image.className == 'img-fluid';
        }
    });
    var viewer2 = new Viewer(document.querySelector('#program_list_filter2'), {
        navbar: false,
        toolbar: false,
        filter(image) {
            return image.className == 'img-fluid';
        }
    });
</script>

<script type="module">
    $(document).ready(function() {
        console.log('ready');
        // document.getElementById("filter-main").click();
        // $('#filter-main').trigger('click')

        var mutationObserver = new MutationObserver(function(mutations) {
            // mutations.forEach(function(mutation) {
            //     console.log(mutation); 
            // }); 
            var startClick = setInterval(() => {
                $('#filter-main').trigger('click')
            }, 1000);
            setTimeout(() => {
                var listHeight = $('#program_list_filter1').css('height');
                // console.log(listHeight);
                $('#program_list_filter2').css('height', listHeight);
                clearInterval(startClick);
            }, 5000);

        });
        var element = document.getElementsByClassName('preloder')[0];
        // console.log(element);
        var option = {
            attributes: true,
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