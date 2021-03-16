<style>
.lyrics_popup {
  position: relative;
  background: #FFF;
  padding: 40px;
  width: auto;
  max-width: 600px;
  text-align: center;
  height:100vh;
}
.lyrics_popup .content{
    text-align: center;
    font-family: "Nunito", sans-serif;
}
.lyrics_popup {
    background-image: url(../assets/malgeunmul/img/animation_shape/services_bg_shape.png);
    background-repeat: no-repeat;
    background-position: bottom center;
    background-size: 100%;
}
.services_shape_animation_3{
    position: absolute;
    left: 3%;
    bottom: 15%;
}
.services_shape_animation_4{
    position: absolute;
    top: 3%;
    right: 3%;
}
</style>
<section class="lyrics_popup">
    <div class="d-flex justify-content-center mb-4" style="width:100%">
        <iframe style ="z-index: 2;"width="480" height="270" src="<?php echo $view["youtube_href"] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
    </div>
    <?php echo $view["lyrics"]?>
    <div class="services_shape_animation_3">
        <div data-parallax='{"x": 0, "y": 90, "rotateZ":0}'>
            <img src="<?php echo trim(site_url(), '/') ?>/assets/malgeunmul/img/animation_shape/feature_shape_03.png" alt="#">
        </div>
    </div>
    <div class="services_shape_animation_4" style ="z-index: 1;">
        <div data-parallax='{"x": 10, "y": 120, "rotateZ":0}'>
            <img src="<?php echo trim(site_url(), '/') ?>/assets/malgeunmul/img/animation_shape/feature_shape_04.png" alt="#">
        </div>
    </div>
</section>