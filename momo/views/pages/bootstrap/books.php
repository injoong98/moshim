   <!--Page Title-->
   <section class="page-title centred background-cancel main-slider-pc" style="background-image: url(http://www.moshim.co.kr/assets/moshim/images/book<?php echo $_GET['lang'] == 'jp' ? '/jp\/' : '/' ?>cover_01.jpg);">
       <div class="container">
           <div class="content-box" style="height:100px">
               <!-- <h1>동화책</h1> -->
               <!-- <ul class="bread-crumb clearfix">
                   <li><a href="index.html">Home</a></li>
                   <li>About</li>
               </ul> -->
           </div>
       </div>
   </section>
   <section class="page-title centred background-cancel main-slider-mobile" style="background-image: url(http://www.moshim.co.kr/assets/moshim/images/main-slider<?php echo $_GET['lang'] == 'jp' ? '/jp\/' : '/' ?>mmain-2.jpg); background-size:cover">
       <div class="container">
           <div class="content-box" style="height:400px">
               <!-- <h1>동화책</h1> -->
               <!-- <ul class="bread-crumb clearfix">
                   <li><a href="index.html">Home</a></li>
                   <li>About</li>
               </ul> -->
           </div>
       </div>
   </section>
   <!--End Page Title-->

   <!-- classes-section -->
   <section class="classes-section classes-page-section sec-pad">
       <div class="anim-icon">
           <div class="icon icon-custom-1 float-bob-x" style="left:180px"></div>
           <div class="icon icon-custom-2 float-bob-y"></div>
       </div>
       <div class="container">
           <div class="sec-title text-center">
               <h5><?php echo $this->lang->line('main_title_3') ?></h5>
               <h1 class="books_title">
                   <?php echo $this->lang->line('main_subtitle_3') ?>
               </h1>
               <h3 class="books_title_mobile">
                   <?php echo $this->lang->line('main_subtitle_mobile_3') ?>
               </h3>
           </div>
           <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-12 block-column">
                   <div class="inner-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                       <figure class="image-box">
                           <img src="http://www.moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>00.jpg" alt="">
                       </figure>
                       <div class="lower-content">
                           <h6><?php echo $_GET['lang'] == 'jp' ? 'SET' : '세트' ?></h6>
                           <div class="link-btn " style="display:none"></div>
                           <h3 class="books_title fs-20"><?php echo $this->lang->line('book_set_title') ?></h3>
                           <h3 class="books_title_mobile"><?php echo $this->lang->line('book_set_title_mobile') ?></h3>
                           <div class="price text-right">91,000원</div>
                           <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                           <ul class="info-box-custom">
                               <li><?php echo $this->lang->line('book_age') ?>: <span><?php echo $this->lang->line('book_age_range') ?></span></li>
                               <li><?php echo $this->lang->line('book_each') ?> : <span><?php echo $this->lang->line('book_total') ?></span></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 block-column play_button">
                   <div class="inner-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                       <figure class="image-box"><a target="_blank" onclick="javascript:void(openWin_books(1));"><img src="http://www.moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>01.jpg" alt=""></a></figure>
                       <div class="lower-content">
                           <h6><?php echo $this->lang->line('book_1') ?></h6>
                           <div class="link-btn "><a target="_blank" onclick="javascript:openWin_books(1);" style="font-size:0.9em"><?php echo $this->lang->line('main_btn2_3') ?></a></div>
                           <h3 class="books_title fs-20"><a target=" _blank" onclick="javascript:openWin_books(1);"><?php echo $this->lang->line('book_title_1') ?></a></h3>
                           <h3 class="books_title_mobile"><a target=" _blank" onclick="javascript:openWin_books(1);"><?php echo $this->lang->line('book_title_1_mobile') ?></a></h3>
                           <div class="price text-right">13,000원</div>
                           <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                           <ul class="info-box-custom">
                               <li><?php echo $this->lang->line('book_age') ?>: <span><?php echo $this->lang->line('book_age_range') ?></span></li>
                               <li><?php echo $this->lang->line('book_page') ?> : <span><?php echo $this->lang->line('book_total_page') ?></span></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 block-column play_button">
                   <div class="inner-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                       <figure class="image-box"><a target="_blank" onclick="javascript:openWin_books(2);"><img src="http://www.moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>02.jpg" alt=""></a></figure>
                       <div class="lower-content">
                           <h6><?php echo $this->lang->line('book_2') ?></h6>
                           <div class="link-btn "><a target="_blank" onclick="javascript:openWin_books(2);" style="font-size:0.9em"><?php echo $this->lang->line('main_btn2_3') ?></a></div>
                           <h3 class="books_title fs-20"><a target="_blank" onclick="javascript:openWin_books(2);"><?php echo $this->lang->line('book_title_2') ?></a></h3>
                           <h3 class="books_title_mobile"><a target="_blank" onclick="javascript:openWin_books(2);"><?php echo $this->lang->line('book_title_2_mobile') ?></a></h3>
                           <div class="price text-right">13,000원</div>
                           <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                           <ul class="info-box-custom">
                               <li><?php echo $this->lang->line('book_age') ?>: <span><?php echo $this->lang->line('book_age_range') ?></span></li>
                               <li><?php echo $this->lang->line('book_page') ?> : <span><?php echo $this->lang->line('book_total_page') ?></span></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 block-column play_button">
                   <div class="inner-block wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                       <figure class="image-box"><a target="_blank" onclick="javascript:openWin_books(3);"><img src="http://www.moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>03.jpg" alt=""></a></figure>
                       <div class="lower-content">
                           <h6><?php echo $this->lang->line('book_3') ?></h6>
                           <h3 class="books_title fs-20"><a target="_blank" onclick="javascript:openWin_books(3);"><?php echo $this->lang->line('book_title_3') ?></a></h3>
                           <h3 class="books_title_mobile"><a target="_blank" onclick="javascript:openWin_books(3);"><?php echo $this->lang->line('book_title_3_mobile') ?></a></h3>
                           <div class="link-btn "><a target="_blank" onclick="javascript:openWin_books(3);" style="font-size:0.9em"><?php echo $this->lang->line('main_btn2_3') ?></a></div>
                           <div class="price text-right">13,000원</div>
                           <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                           <ul class="info-box-custom">
                               <li><?php echo $this->lang->line('book_age') ?>: <span><?php echo $this->lang->line('book_age_range') ?></span></li>
                               <li><?php echo $this->lang->line('book_page') ?> : <span><?php echo $this->lang->line('book_total_page') ?></span></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 block-column play_button">
                   <div class="inner-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                       <figure class="image-box"><a target="_blank" onclick="javascript:openWin_books(4);"><img src="http://www.moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>04.jpg" alt=""></a></figure>
                       <div class="lower-content">
                           <h6><?php echo $this->lang->line('book_4') ?></h6>
                           <div class="link-btn  "><a target="_blank" onclick="javascript:openWin_books(4);" style="font-size:0.9em"><?php echo $this->lang->line('main_btn2_3') ?></a></div>
                           <h3 class="books_title fs-20"><a target="_blank" onclick="javascript:openWin_books(4);"><?php echo $this->lang->line('book_title_4') ?></a></h3>
                           <h3 class="books_title_mobile"><a target="_blank" onclick="javascript:openWin_books(4);"><?php echo $this->lang->line('book_title_4_mobile') ?></a></h3>
                           <div class="price text-right">13,000원</div>
                           <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                           <ul class="info-box-custom">
                               <li><?php echo $this->lang->line('book_age') ?>: <span><?php echo $this->lang->line('book_age_range') ?></span></li>
                               <li><?php echo $this->lang->line('book_page') ?> : <span><?php echo $this->lang->line('book_total_page') ?></span></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 block-column play_button">
                   <div class="inner-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                       <figure class="image-box"><a target="_blank" onclick="javascript:openWin_books(5);"><img src="http://www.moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>05.jpg" alt=""></a></figure>
                       <div class="lower-content">
                           <h6><?php echo $this->lang->line('book_5') ?></h6>
                           <div class="link-btn "><a target="_blank" onclick="javascript:openWin_books(5);" style="background-color:#8DD554; font-size:0.9em"><?php echo $this->lang->line('main_btn2_3') ?></a></div>
                           <h3 class="books_title fs-20"><a target="_blank" onclick="javascript:openWin_books(5);"><?php echo $this->lang->line('book_title_5') ?></a></h3>
                           <h3 class="books_title_mobile"><a target="_blank" onclick="javascript:openWin_books(5);"><?php echo $this->lang->line('book_title_5_mobile') ?></a></h3>
                           <div class="price text-right">13,000원</div>
                           <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                           <ul class="info-box-custom">
                               <li><?php echo $this->lang->line('book_age') ?>: <span><?php echo $this->lang->line('book_age_range') ?></span></li>
                               <li><?php echo $this->lang->line('book_page') ?> : <span><?php echo $this->lang->line('book_total_page') ?></span></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 block-column play_button">
                   <div class="inner-block wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                       <figure class="image-box"><a target="_blank" onclick="javascript:openWin_books(6);"><img src="http://www.moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>06.jpg" alt=""></a></figure>
                       <div class="lower-content">
                           <h6><?php echo $this->lang->line('book_6') ?></h6>
                           <div class="link-btn "><a target="_blank" onclick="javascript:openWin_books(6);" style="font-size:0.9em"><?php echo $this->lang->line('main_btn2_3') ?></a></div>
                           <h3 class=" books_title fs-20"><a target="_blank" onclick="javascript:openWin_books(6);"><?php echo $this->lang->line('book_title_6') ?></a></h3>
                           <h3 class="books_title_mobile"><a target="_blank" onclick="javascript:openWin_books(6);"><?php echo $this->lang->line('book_title_6_mobile') ?></a></h3>
                           <div class="price text-right">13,000원</div>
                           <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                           <ul class="info-box-custom">
                               <li><?php echo $this->lang->line('book_age') ?>: <span><?php echo $this->lang->line('book_age_range') ?></span></li>
                               <li><?php echo $this->lang->line('book_page') ?> : <span><?php echo $this->lang->line('book_total_page') ?></span></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 block-column play_button">
                   <div class="inner-block wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                       <figure class="image-box"><a target="_blank" onclick="javascript:openWin_books(7);"><img src="http://www.moshim.co.kr/assets/moshim/images/book/<?php echo $_GET['lang'] == 'jp' ? 'jp/' : '/' ?>07.jpg" alt=""></a></figure>
                       <div class="lower-content">
                           <h6><?php echo $this->lang->line('book_7') ?></h6>
                           <div class="link-btn "><a target="_blank" onclick="javascript:openWin_books(7);" style="font-size:0.9em"><?php echo $this->lang->line('main_btn2_3') ?></a></div>
                           <h3 class=" books_title fs-20"><a target="_blank" onclick="javascript:openWin_books(7);"><?php echo $this->lang->line('book_title_7') ?></a></h3>
                           <h3 class="books_title_mobile"><a target="_blank" onclick="javascript:openWin_books(7);"><?php echo $this->lang->line('book_title_7_mobile') ?></a></h3>
                           <div class="price text-right">13,000원</div>
                           <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div> -->
                           <ul class="info-box-custom">
                               <li><?php echo $this->lang->line('book_age') ?>: <span><?php echo $this->lang->line('book_age_range') ?></span></li>
                               <li><?php echo $this->lang->line('book_page') ?> : <span><?php echo $this->lang->line('book_total_page') ?></span></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- classes-section end -->
   <script>
       //동화책 미리보기 창
       function openWin_books(num) {
           window.open(`http://www.moshim.co.kr/assets/moshim/pdfjs-2.6.347-dist/web/viewer.html?file=http://www.moshim.co.kr/assets/moshim/pdf/<?php echo $_GET['lang'] == 'jp' ? 'jp/[jp]' : '[kr]' ?>0${num}_spread.pdf`, '동화 미리보기', 'width=800, height=700, resizable=yes');
           return false
       }
   </script>