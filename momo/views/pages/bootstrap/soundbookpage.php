<img style="display:flex" src="http://moshim.co.kr/assets/moshim/soundbook_track/img/<?php echo element('soundbookpage', $view) ?>.jpg" width="100%" height="100%">
<div style="position: fixed; top:0px; justify-content:space-between">
    <div class="row">
        <div>오디오북</div>
        <audio id="audio_play">
            <source src="http://moshim.co.kr/assets/moshim/soundbook_track/song/track-<?php echo element('soundbookpage', $view) ?>.mp3" type="audio/mpeg">
        </audio>
        <img src="<?php echo moshim_url('momo') ?>/../assets/moshim/soundbook_track/icon/play-icon.svg" onClick="document.getElementById('audio_play').play(); return false;" />
        <img src="<?php echo moshim_url('momo') ?>/../assets/moshim/soundbook_track/icon/pause-icon.svg" onClick=" document.getElementById('audio_play').pause(); return false;" />
    </div>
    <!-- <img src="<?php echo moshim_url('momo') ?>/../assets/moshim/images/soundbook/note.png" alt="" width="10%"> -->
    <!-- <img src="<?php echo moshim_url('momo') ?>/../assets/moshim/images/soundbook/audio.png" alt="" width="10%"> -->
    <div class="row">
        <div>소곤소곤 귓속말</div>
        <audio id="paragraph_play">
            <source src="http://moshim.co.kr/assets/moshim/soundbook_track/storytelling/<?php echo element('soundbookpage', $view) ?>.Storytelling.mp3" type="audio/mpeg">
        </audio>

        <img src="<?php echo moshim_url('momo') ?>/../assets/moshim/soundbook_track/icon/play-icon.svg" onClick="document.getElementById('paragraph_play').play(); return false;" />
        <img src="<?php echo moshim_url('momo') ?>/../assets/moshim/soundbook_track/icon/pause-icon.svg" onClick="document.getElementById('paragraph_play').pause(); return false;" />
    </div>
</div>
<!-- <div>아이콘 제작자 <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/kr/" title="Flaticon">www.flaticon.com</a></div> -->