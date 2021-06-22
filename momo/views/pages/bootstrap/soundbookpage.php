<style>
    html {
        overflow: hidden;
    }
    .soundbookPage-btn {
        text-align: center;
        font-size:1.2em;
        padding:1.2em 0; 
        font-weight:bold; 
        color:black;
        text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;
    }
</style>

<img class="soundbook_bgimg" src="http://moshim.co.kr/assets/moshim/soundbook_track/img<?php echo $this->lang->line('song_url') ?>/nobtn<?php echo element('soundbookpage', $view) ?>.jpg" width="100%">
<div class="player-section">
    <div class="wrapper-custom-soundbook col-lg-12 col-md-12 col-sm-12" <?php echo element('soundbookpage', $view) == '12' ? 'style="text-align:center !important" ' : ''?>>
        <!-- <div class="row"> -->
        <div class="container_music" onclick="toggleAudio(1)" style="background : #44B3D9;">
            <audio preload="metadata" controls controlslist="nodownload" id="audio1">
                <source src="http://moshim.co.kr/assets/moshim/soundbook_track/song/track-<?php echo element('soundbookpage', $view) ?>.wav" type="audio/mpeg">
                Chrome 브라우저에 최적화 되어있습니다. Chrome을 이용해주시기 바랍니다.
            </audio>
            <div class="container" style="margin-left: 3px;">
                <i class="fas fa-play cursor"></i>
            </div>
            <div class="soundbookPage-btn"><?php echo $this->lang->line('song_detail_btn_1') ?></div>
        </div>
        <div class="container_music" onclick="toggleAudio(2)" style="background: #FF7162">
            <audio preload="metadata" controls controlslist="nodownload" id="audio2">
                <source src="http://moshim.co.kr/assets/moshim/soundbook_track/storytelling/<?php echo element('soundbookpage', $view) ?>.Storytelling.mp3" type="audio/mpeg">
                Chrome 브라우저에 최적화 되어있습니다. Chrome을 이용해주시기 바랍니다.
            </audio>
            <div class="container" style="margin-left: 3px;">
                <i class="fas fa-play cursor"></i>
            </div>
            <div class="soundbookPage-btn"><?php echo $this->lang->line('song_detail_btn_2') ?></div>
        </div>
        <!-- </div> -->
    </div>
</div>


<script>

    let isPlaying = 0;

    const toggleAudio = (index) => {

        
        const audio = document.getElementById(`audio${index}`);
        const playButton = document.getElementById(`audio${index}`).parentNode.querySelector('.fas');
        
        var index_diff = index == 2? 1 : 2;
        var audios = document.getElementsByTagName('audio');
        
        // 이미 재생중일 경우
        if (isPlaying != 0) {
            
            // 다 멈추기
            for (var i = 0, len = audios.length; i < len; i++) {
                audios[i].pause();
                audios[i].parentNode.querySelector('.fas').classList.remove('fa-pause');
                audios[i].parentNode.querySelector('.fas').classList.add('fa-play');
            }
            
            // 재생중이 아닌거 눌렀을 경우 누른거 바로 재생
            if (index != isPlaying) {
                audios[index-1].play();
                audios[index-1].parentNode.querySelector('.fas').classList.remove('fa-play');
                audios[index-1].parentNode.querySelector('.fas').classList.add('fa-pause');
                isPlaying = index;
            } else {
                isPlaying = 0;
            }
        } else {
            audio.play()
            isPlaying = index;
            playButton.classList.remove('fa-play')
            playButton.classList.add('fa-pause')
        }
        return false
    }
</script>