<img src="http://moshim.co.kr/assets/moshim/soundbook_track/img/<?php echo element('soundbookpage', $view) ?>.jpg" width="100%" height="100%">
<div class="pull-right" style="position: fixed; top:0px; display:flex; justify-content:space-between">
    <div class="btn1">
        <img src="<?php echo moshim_url('momo') ?>/../assets/moshim/images/soundbook/note.png" alt="" width="10%">
    </div>
    <div class="btn2">
        <img src="<?php echo moshim_url('momo') ?>/../assets/moshim/images/soundbook/audio.png" alt="" width="10%">
    </div>
</div>


<script>
    // btn1을 눌렀을 때 sound1.mp3 재생
    document.querySelector(".btn1").addEventListener("click", function() {
        var audio_src1 = `http://moshim.co.kr/assets/moshim/soundbook_track/song/track-<?php echo element('soundbookpage', $view) ?>.mp3`;
        var audio1 = new Audio(audio_src1);
        audio1.loop = false; // 반복재생하지 않음
        audio1.volume = 0.5; // 음량 설정
        status_audio = audio1.play(); // sound1.mp3 재생

        console.log(status_audio)
    });

    // btn2를 눌렀을 때 sound2.mp3 재생
    document.querySelector(".btn2").addEventListener("click", function() {
        var audio_src2 = `http://moshim.co.kr/assets/moshim/soundbook_track/storytelling/<?php echo element('soundbookpage', $view) ?>.Storytelling.mp3`;
        var audio2 = new Audio(audio_src2);
        audio2.loop = true; // 반복재생하지 않음
        audio2.volume = 0.5; // 음량 설정
        audio2.play(); // sound2.mp3 재생
        setTimeout(function() { // 1초 후 sound2.mp3 일시정지
            audio.pause();
        }, 1000);
    });
</script>