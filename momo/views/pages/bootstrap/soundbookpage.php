<style>
    .padding {
        text-align: center;

    }

    .wrapper {

        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        max-width: 1920px;
        margin: 0 auto;
        min-height: 50vh;
        /* display: grid;
        align-items: center;
        align-content: center;
        min-height: 100vh;
        min-width: 100vw; */
    }

    .container_music {
        box-sizing: border-box;
        color: white;
        cursor: pointer;
        padding: 16px 0 0 0;
        margin: 15px auto;
        display: inline-block;
        position: relative;
        border-radius: 25px;
        height: 50px;
        width: 50px;
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
        margin-bottom: 10px;

        border-color: transparent transparent transparent #FFF;
        transition: 100ms all ease;
        cursor: pointer;

        /* // play state */
        border-style: solid;
        border-width: 6px 0 6px 6px;
    }

    .play-button.playing::before {
        border-style: double;
        border-width: 0px 0 0px 8px;

    }
</style>

<img class="soundbook_bgimg" src="http://moshim.co.kr/assets/moshim/soundbook_track/img/nobtn<?php echo element('soundbookpage', $view) ?>.jpg" width="100%">
<div class="" style="width:100%; display:flex;">
    <div class="padding wrapper">
        <div class="container_music" onclick="toggleAudio('audio1')" style="background : #44B3D9">
            <audio preload="metadata" controls controlslist="nodownload" id="audio1">
                <source src="http://moshim.co.kr/assets/moshim/soundbook_track/song/track-<?php echo element('soundbookpage', $view) ?>.wav" type="audio/mpeg">
                Chrome 브라우저에 최적화 되어있습니다. Chrome을 이용해주시기 바랍니다.
            </audio>
            <div class="container text-center">
                <div class="play-button"></div>
                <div>노래</div>
            </div>
        </div>
        <div class="container_music" onclick="toggleAudio('audio2')" style="background: #FF7162">
            <audio preload="metadata" controls controlslist="nodownload" id="audio2">
                <source src="http://moshim.co.kr/assets/moshim/soundbook_track/storytelling/<?php echo element('soundbookpage', $view) ?>.Storytelling.mp3" type="audio/mpeg">
                Chrome 브라우저에 최적화 되어있습니다. Chrome을 이용해주시기 바랍니다.
            </audio>
            <div class="container">
                <div class="play-button"></div>
                <div>해설</div>
            </div>
        </div>
    </div>
    <!-- <div>아이콘 제작자 <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/kr/" title="Flaticon">www.flaticon.com</a></div> -->

    <script>
        let isPlaying = false;
        let isAnotherPlaying = false;

        const toggleAudio = (event) => {
            //재생중인지 여부 찾기
            let anotherAudio = ''
            if (event == 'audio1') {
                anotherAudio = 'audio2'
                console.log(anotherAudio)
            } else {
                anotherAudio = 'audio1';
                console.log(anotherAudio)
            }
            //클릭한 이외의 버튼 찾기
            anotherAudio = document.getElementById(anotherAudio);
            anotherPlayButton = anotherAudio.parentNode.querySelector('.play-button');
            console.log('anotherPlayButton : ', anotherPlayButton)

            if (isAnotherPlaying) {
                //재생중인 파일이 있으면 pause
                isAnotherPlaying = false
                anotherAudio.pause();
                anotherPlayButton.classList.remove('playing');
            }

            const audio = document.getElementById(event);
            const playButton = document.getElementById(event).parentNode.querySelector('.play-button');

            if (isPlaying) {
                audio.pause()
                isPlaying = false
                isAnotherPlaying = false
                playButton.classList.remove('playing')
            } else {
                audio.play()
                isPlaying = true
                isAnotherPlaying = true
                playButton.classList.add('playing')
            }
            return false
        }
    </script>