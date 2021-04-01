   <!--Page Title-->
   <section class="page-title centred background-cancel main-slider-pc" style="background-image: url(<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/cover_01.jpg);">
       <div class="container">
           <div class="content-box" style="height:100px">>
               <!-- <h1>CD</h1> -->
               <!-- <ul class="bread-crumb clearfix">
                   <li><a href="index.html">Home</a></li>
                   <li>About</li>
               </ul> -->
           </div>
       </div>
   </section>
   <section class="page-title centred background-cancel main-slider-mobile" style="background-image: url(<?php echo moshim_url('momo') ?>/assets/moshim/images/main-slider/mmain-5.jpg); background-size:cover">
       <div class="container">
           <div class="content-box" style="height:400px">
               <!-- <h1>CD</h1> -->
               <!-- <ul class="bread-crumb clearfix">
                   <li><a href="index.html">Home</a></li>
                   <li>About</li>
               </ul> -->
           </div>
       </div>
   </section>
   <!--End Page Title-->

   <!-- todo
    
    1. 색상 변경
    2. 노래 넣기
    3. 가사 해설 넣기
     -->
   <!-- our-teachers -->
   <section class="our-teachers style-three about-page sec-pad centred" style="background-color:white">
       <div class="anim-icon">
           <div class="icon icon-custom-1 float-bob-x"></div>
           <div class="icon icon-custom-2 float-bob-x"></div>
           <div class="icon icon-custom-3 float-bob-x"></div>
           <div class="icon icon-custom-4 float-bob-x"></div>
           <div class="icon icon-custom-1 float-bob-x" style="top:1310px; left:150px"></div>
           <div class="icon icon-custom-1 float-bob-x" style="top:720px; right:400px"></div>
           <div class="icon icon-custom-2 float-bob-x" style="top:1120px"></div>
           <div class="icon icon-custom-3 float-bob-x" style="top:1530px; right:100px"></div>
           <div class="icon icon-custom-4 float-bob-x" style="top:1320px"></div>
           <div class="icon icon-custom-1 float-bob-x" style="top:1820px"></div>
           <div class="icon icon-custom-2 float-bob-x" style="top:2120px; right:100px"></div>
           <div class="icon icon-custom-3 float-bob-x" style="top:2220px; right:200px"></div>
           <div class="icon icon-custom-4 float-bob-x" style="top:2380px; left:770px"></div>
           <div class="icon icon-custom-5 float-bob-y"></div>



       </div>
       <div class="container">
           <div class="sec-title books_title">
               <h5>참어머님 생애동요 CD</h5>
               <h1> 참어머님의 생애와 심정이 담긴 효정의 노래
                   <br />(7~10세)
               </h1>
           </div>
           <div class="sec-title books_title_mobile">
               <h5>참어머님 생애동요 CD</h5>
               <h3>
                   참어머님의 생애와 심정이
                   <br />담긴 효정의 노래
                   <br />(7~10세)
               </h3>
           </div>
           <!-- <div class="inner-content"> -->
           <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/07.jpg" alt=""></figure>
                           <div class="lower-content">
                               <h3><a class="play_button" onclick="openWin_cd('1')" target="_blank">달래강 노래</a></h3>
                               <ul class="social-list" style="font-size:20px">
                                   <audio id="cd_track_01">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-01.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_01').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_01').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('1')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/09.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a onclick="openWin_cd('2')" target="_blank">아름다운 이 세상</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_02">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-02.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_02').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_02').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('2')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/11.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a onclick="openWin_cd('3')" target="_blank">하나님의 나의 부모님</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_03">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-03.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_03').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_03').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('3')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/13.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a class="play_button" onclick="openWin_cd('4')" target="_blank">수선화 사랑</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_04">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-04.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_04').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_04').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('4')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/15.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a class="play_button" onclick="openWin_cd('5')" target="_blank">하늘 신부</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_05">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-05.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_05').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_05').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('5')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/17.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a class="play_button" onclick="openWin_cd('6')" target="_blank">산 넘고 바다 건너</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_06">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-06.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_06').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_06').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="play_button" onclick="openWin_cd('6')" target="_blank" style="font-size:20px"> 가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/19.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a class="play_button" onclick="openWin_cd('7')" target="_blank">효정의 어머니</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_07">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-07.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_07').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_07').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('7')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/21.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a class="play_button" onclick="openWin_cd('8')" target="_blank">하늘이 준비한 아들딸</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_08">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-08.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_08').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_08').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('8')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/23.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a class="play_button" onclick="openWin_cd('9')" target="_blank">어머니 손은 약손</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_09">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-09.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_09').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_09').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('9')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/25.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a class="play_button" onclick="openWin_cd('10')" target="_blank">해가 지고 달이 떠도</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_10">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-10.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_10').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_10').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('10')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/27.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a class="play_button" onclick="openWin_cd('11')" target="_blank">아름다운 나라 천일국</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_11">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-11.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_11').play(); return false;"><a class="play_button"><i class="track-01 fas fa-play"></i></a></li>
                                   <li onClick="document.getElementById('cd_track_11').pause(); return false;"><a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a></li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('11')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12 block-column" style="padding:25px 30px;">
                   <div class="teachers-block-two wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                       <div class="inner-box">
                           <figure class="image-box"><a href="#"><img src="<?php echo moshim_url('momo') ?>/assets/moshim/images/cd/29.jpg" alt=""></a></figure>
                           <div class="lower-content">
                               <h3><a class="play_button" onclick="openWin_cd('12')" target="_blank">새로운 세상 우리 함께해요</a></h3>
                               <ul class="social-list">
                                   <audio id="cd_track_12">
                                       <source src="http://moshim.co.kr/assets/moshim/soundbook_track/cd/track-12.mp3" type="audio/mpeg">
                                   </audio>
                                   <li onClick="document.getElementById('cd_track_12').play(); return false;">
                                       <a class="play_button"><i class="track-01 fas fa-play"></i></a>
                                   </li>
                                   <li onClick="document.getElementById('cd_track_12').pause(); return false;">
                                       <a class="play_button" style="margin:2px"><i class="track-01 fas fa-pause"></i></a>
                                   </li>
                                   <li><a class="lyric-style play_button" onclick="openWin_cd('12')" target="_blank">가사</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- </div> -->
       </div>
   </section>
   <!-- our-teachers end -->
   <script>
       //cd 가사 해설 창 
       function openWin_cd(num) {
           window.open(`http://moshim.co.kr/pages/cd_detail/${num}`, '가사&해설', 'width=740, height=600, scrollbars=no');
           return false
       }
       //    // 버튼 색상 변경 
       //    let pauseBtn = document.getElementsByTagName("i");

       //    function handleClick(event) {
       //        if (event.target.classList[3] === "clicked") {
       //            event.target.classList.remove("clicked");
       //        } else {
       //            for (var i = 0; i < pauseBtn.length; i++) {
       //                pauseBtn[i].classList.remove("clicked");
       //            }
       //            event.target.classList.add("clicked");
       //        }
       //    }

       //    function init() {
       //        for (var i = 0; i < pauseBtn.length; i++) {
       //            pauseBtn[i].addEventListener("click", handleClick);
       //        }
       //    }
       // 
       //    init();

       var audios = document.getElementsByTagName('audio');
       let div2 = document.getElementsByTagName("i");
       let stopBtn = '';
       let targetPlayBtn = '';
       document.addEventListener('play', function(e) {
           stopBtn = e.target.parentNode.querySelector('.fa-pause');
           targetPlayBtn = e.target.parentNode.querySelector('.fa-play');
           targetPlayBtn.classList.add('clicked')
           stopBtn.classList.remove('clicked')
           for (var i = 0, len = audios.length; i < len; i++) {
               if (audios[i] != e.target) {
                   audios[i].pause();
                   audios[i].parentNode.querySelector('.fas').classList.remove('clicked')
                   console.log('재생눌렀을때:', audios[i].parentNode.querySelector('.fas'))
               }
           }
       }, true);

       document.addEventListener('pause', function(e) {
           stopBtn = e.target.parentNode.querySelector('.fa-pause');
           targetPlayBtn = e.target.parentNode.querySelector('.fa-play');
           console.log('멈춤 클릭 : ', stopBtn)
           stopBtn.classList.add('clicked')
           targetPlayBtn.classList.remove('clicked')
           for (var i = 0, len = audios.length; i < len; i++) {
               if (audios[i] != e.target) {
                   audios[i].pause();
                   audios[i].parentNode.querySelector('.fas').classList.remove('clicked')
                   e.target.querySelector('.fas').classList.remove('clicked')
                   console.log('멈춤눌렀을때:', audios[i].parentNode.querySelector('.fas'))
               }
           }
       }, true);
   </script>