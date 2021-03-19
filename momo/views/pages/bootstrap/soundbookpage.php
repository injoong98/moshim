<style>
    html {
        overflow: hidden;
    }
</style>

<img class="soundbook_bgimg" src="http://moshim.co.kr/assets/moshim/soundbook_track/img/nobtn<?php echo element('soundbookpage', $view) ?>.jpg" width="100%">
<div class="player-section">
    <div class="padding wrapper-custom-soundbook col-lg-12 col-md-12 col-sm-12">
        <!-- <div class="row"> -->
        <div class="container_music" onclick="toggleAudio('audio1')" style="background : #44B3D9;">
            <audio preload="metadata" controls controlslist="nodownload" id="audio1">
                <source src="http://moshim.co.kr/assets/moshim/soundbook_track/song/track-<?php echo element('soundbookpage', $view) ?>.wav" type="audio/mpeg">
                Chrome 브라우저에 최적화 되어있습니다. Chrome을 이용해주시기 바랍니다.
            </audio>
            <div class="container text-center">
                <i class="fas fa-play cursor"></i>
            </div>
            <div style="font-size:1.2em;padding:1.2em 0; font-weight:bold; color:white">노래</div>
        </div>
        <div class="container_music" onclick="toggleAudio('audio2')" style="background: #FF7162">
            <audio preload="metadata" controls controlslist="nodownload" id="audio2">
                <source src="http://moshim.co.kr/assets/moshim/soundbook_track/storytelling/<?php echo element('soundbookpage', $view) ?>.Storytelling.mp3" type="audio/mpeg">
                Chrome 브라우저에 최적화 되어있습니다. Chrome을 이용해주시기 바랍니다.
            </audio>
            <div class="container">
                <i class="fas fa-play cursor"></i>
            </div>
            <div style="font-size:1.2em;padding:1.2em 0; font-weight:bold; color:white">해설</div>
        </div>
        <!-- </div> -->
    </div>
</div>


<script>
    let isPlaying = false


    //하나가 재생 중일때, 다른 플레이어 눌렀을 경우
    document.addEventListener('play', function(e) {
        var audios = document.getElementsByTagName('audio');
        for (var i = 0, len = audios.length; i < len; i++) {
            if (audios[i] != e.target) {
                audios[i].pause();
                audios[i].parentNode.querySelector('.fas').classList.remove('fa-pause');
                audios[i].parentNode.querySelector('.fas').classList.add('fa-play');
            }
        }
    }, true);


    //자기 자신버튼 눌렀을때 재생 & 멈춤
    const toggleAudio = (event) => {

        const audio = document.getElementById(event);
        const playButton = document.getElementById(event).parentNode.querySelector('.fas');

        if (isPlaying) {
            audio.pause()
            isPlaying = false
            playButton.classList.remove('fa-pause')
            playButton.classList.add('fa-play')
        } else {
            audio.play()
            isPlaying = true
            playButton.classList.remove('fa-play')
            playButton.classList.add('fa-pause')
        }
        return false
    }
</script>