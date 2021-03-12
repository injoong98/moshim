<style>
    .padding {
        text-align: center;
        padding: 400px;
    }

    .wrapper {
        display: grid;
        place-items: center;
        min-height: 100vh;
        min-width: 100vw;
    }

    .container_music {
        box-sizing: border-box;
        color: white;
        cursor: pointer;
        padding: 16px 0 0 0;
        margin: 0 auto;
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
<div class="button_position">
    <div class="padding wrapper">
        <div class="container_music" onclick="toggleAudio()" style="background : #44B3D9">
            <audio preload="metadata" controls controlslist="nodownload" id="audio1">
                <source src="http://moshim.co.kr/assets/moshim/soundbook_track/song/track-<?php echo element('soundbookpage', $view) ?>.wav" type="audio/mpeg">
                Chrome 브라우저에 최적화 되어있습니다. Chrome을 이용해주시기 바랍니다.
            </audio>
            <div class="play-button">노래듣기</div>
        </div>
        <!-- <div class="container_music" onclick="toggleAudio()" style="background: #FF7162">
            <audio preload="metadata" controls controlslist="nodownload" id="audio2">
                <source src="http://moshim.co.kr/assets/moshim/soundbook_track/storytelling/<?php echo element('soundbookpage', $view) ?>.Storytelling.mp3" type="audio/mpeg">
                    Chrome 브라우저에 최적화 되어있습니다. Chrome을 이용해주시기 바랍니다.
            </audio>
            <div class="play-button">해설듣기</div>
        </div> -->
    </div>
</div>
<!-- <div>아이콘 제작자 <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/kr/" title="Flaticon">www.flaticon.com</a></div> -->

<script>
    const audio = document.querySelector('audio');
    const container = document.querySelector('.container_music');
    // const audioDuration = document.querySelector('.duration');
    const playButton = document.querySelector('.play-button');
    let isPlaying = false;
    console.log(audio)
    console.log(container)
    console.log(audioDuration)
    console.log(playButton)

    const toggleAudio = (event) => {
        if (isPlaying) {
            audio.pause()
            isPlaying = false
            playButton.classList.remove('playing')
        } else {
            audio.play()
            isPlaying = true
            playButton.classList.add('playing')
        }
    }

    // audio.onloadedmetadata = () => {
    //     let minutes = Math.floor(audio.duration / 60)
    //     let seconds = Math.floor(audio.duration - minutes * 60)
    //     audioDuration.innerHTML = `${minutes}:${seconds}`
    // }
</script>