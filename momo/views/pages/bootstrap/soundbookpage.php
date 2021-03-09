<img class="soundbook_bgimg" src="http://moshim.co.kr/assets/moshim/soundbook_track/img/<?php echo element('soundbookpage', $view) ?>.jpg" width="100%" height="100%">
<div class="button_position">
    <div style="width:30%" style="display:inline-flex">
        <h3>오디오북</h3>
        <audio id="audio_play">
            <source src="http://moshim.co.kr/assets/moshim/soundbook_track/song/track-<?php echo element('soundbookpage', $view) ?>.wav" type="audio/mpeg">
        </audio>
        <img class="play_button_size play_butto" src="<?php echo moshim_url('momo') ?>/../assets/moshim/soundbook_track/icon/play-icon.svg" onClick="document.getElementById('audio_play').play(); return false;" />
        <img class="pause_button_size play_butto" src="<?php echo moshim_url('momo') ?>/../assets/moshim/soundbook_track/icon/pause-icon.svg" onClick=" document.getElementById('audio_play').pause(); return false;" />
    </div>
    <div style="width:40%" style="display:inline-flex">
        <h3>소곤소곤 귓속말</h3>
        <audio id="paragraph_play">
            <source src="http://moshim.co.kr/assets/moshim/soundbook_track/storytelling/<?php echo element('soundbookpage', $view) ?>.Storytelling.mp3" type="audio/mpeg">
        </audio>
        <img class="play_button_size play_butto" src="<?php echo moshim_url('momo') ?>/../assets/moshim/soundbook_track/icon/play-icon.svg" onClick="document.getElementById('paragraph_play').play(); return false;" />
        <img class="pause_button_size play_butto" src="<?php echo moshim_url('momo') ?>/../assets/moshim/soundbook_track/icon/pause-icon.svg" onClick="document.getElementById('paragraph_play').pause(); return false;" />
    </div>
</div>
<!-- <div>아이콘 제작자 <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/kr/" title="Flaticon">www.flaticon.com</a></div> -->