<style>
    .padding {
        text-align: center;
    }

    .wrapper {
        display: grid;
        align-items: center;
        align-content: center;
        min-height: 100vh;
        min-width: 100vw;
    }

    .container_music {
        box-sizing: border-box;
        color: white;
        cursor: pointer;
        padding: 16px 0 0 0;
        margin: 10px auto;
        display: inline-block;
        position: relative;
        border-radius: 25px;
        height: 50px;
        width: 150px;
    }

    audio {
        display: none;
    }

    .play-button::before,
    .play-button.playing::before {
        content: '';
        display: inline-block;
        border: 0;
        background: transparent;
        box-sizing: border-box;
        width: 0;
        height: 12px;
        margin-right: 10px;

        border-color: transparent transparent transparent #FFF;
        transition: 100ms all ease;
        cursor: pointer;

        /* // play state */
        border-style: solid;
        border-width: 6px 0 6px 8px;
    }

    .play-button.playing::before {
        border-style: double;
        border-width: 0px 0 0px 8px;
    }
</style>

<img class="soundbook_bgimg" src="http://moshim.co.kr/assets/moshim/soundbook_track/img/nobtn<?php echo element('soundbookpage', $view) ?>.jpg" width="100%" height="100%">
<div class="" style="width:100%; display:flex;">
    <div class="padding wrapper">
        <div class="container_music" onclick="toggleAudio('audio1')" style="background : #44B3D9">
            <audio preload="metadata" controls controlslist="nodownload" id="audio1">
                <source src="http://moshim.co.kr/assets/moshim/soundbook_track/song/track-<?php echo element('soundbookpage', $view) ?>.wav" type="audio/mpeg">
                Chrome 브라우저에 최적화 되어있습니다. Chrome을 이용해주시기 바랍니다.
            </audio>
            <div class="play-button">노래듣기</div>
        </div>
        <div class="container_music" onclick="toggleAudio('audio2')" style="background: #FF7162">
            <audio preload="metadata" controls controlslist="nodownload" id="audio2">
                <source src="http://moshim.co.kr/assets/moshim/soundbook_track/storytelling/<?php echo element('soundbookpage', $view) ?>.Storytelling.mp3" type="audio/mpeg">
                Chrome 브라우저에 최적화 되어있습니다. Chrome을 이용해주시기 바랍니다.
            </audio>
            <div class="play-button">해설듣기</div>
        </div>
    </div>
</div>
<!-- <div>아이콘 제작자 <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/kr/" title="Flaticon">www.flaticon.com</a></div> -->

<script>
    let isPlaying = false;
    let isAnotherPlaying = true;

    const toggleAudio = (event) => {
        //재생중인지 여부 찾기
        let anotherAudio = ''
        if (event == 'audio1') {
            anotherAudio = 'audio2'
        } else {
            anotherAudio = 'audio1';
        }
        //클릭한 이외의 버튼 찾기
        anotherAudio = document.getElementById(anotherAudio);
        anotherPlayButton = anotherAudio.parentNode.querySelector('.play-button');
        console.log('anotherPlayButton : ', anotherPlayButton)

        if (isAnotherPlaying) {
            //재생중인 파일이 있으면 pause
            isPlaying = false
            anotherAudio.pause();
            anotherPlayButton.classList.remove('playing');
        }


        const audio = document.getElementById(event);
        const container = document.getElementById(event).querySelector('.container_music');
        const playButton = document.getElementById(event).parentNode.querySelector('.play-button');
        console.log(document.getElementById(event));

        if (isPlaying) {
            audio.pause()
            isPlaying = false
            playButton.classList.remove('playing')
        } else {
            audio.play()
            isPlaying = true
            playButton.classList.add('playing')
        }
        return false
    }
</script>