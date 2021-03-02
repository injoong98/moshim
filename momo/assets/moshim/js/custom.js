(function($) {

	$('.fas').on('click', function(e){
		
		console.log('내가 클릭한 요소 : ', $(this)[0])
		let track = $(this)[0].classList[0];
		// let clicking_tag = $(this)[0];
		console.log('track : ', track)

		let src_music = `http://moshim.co.kr/assets/moshim/soundbook_track/song/${track}.mp3`;
		let audioFile = new Audio(src_music); 
		console.log($(this))


		audioFile.pause();
		playPromise = audioFile.play();

		// if($(this).hasClass('fa-play') === true){
		// 	console.log("플레이버튼이 있었다가 없어졌습니다.")
		// 	$(this).removeClass("fa-play")
		// 	$(this).addClass("fa-pause")
			
		// }else if($(this).hasClass('fa-pause') === true){
		// 	console.log("파즈버튼이 있었다가 없어졌습니다")
		// 	$(this).removeClass("fa-pause")
		// 	$(this).addClass("fa-play")

		// 	audioFile.pause();

		// }else{
		// 	console.log('뭔일이죠?')
		// }

		

		if (playPromise !== undefined) {
		playPromise.then(_ => {
			// Automatic playback started!
			// Show playing UI.
			// We can now safely pause video...
			$(this).removeClass("fa-play")
			$(this).addClass("fa-pause")
			audioFile.pause();
		  })
		  .catch(error => {
			// Auto-play was prevented
			// Show paused UI.
			$(this).removeClass("fa-pause")
			$(this).addClass("fa-play")
		  });
		}

		return false
	
		
	})

	// $('.fas').on('click', function(e){
	// 	if($(this).hasClass('fas-play') === true){
	// 		$(this).removeClass("fa-play")
	// 		$(this).addClass("fa-pause")
	// 	}
	// 	if($(this).hasClass('fas-pause') === true){
	// 		$(this).removeClass("fa-pause")
	// 		$(this).addClass("fa-play")
	// 	}
	// })

	// //CD - 재생 버튼 변경
	// $('.fas-play').on('click', function(e){
	// 	console.log('fas0', $(this)[0])
	// 	var track = $(this)[0].classList[0];

	// 	var src_music = `http://moshim.co.kr/assets/moshim/soundbook_track/song/${track}.mp3`;
	// 	var audioFile = new Audio(src_music); 
	
	// 	audioFile.play();
		
	// 	// return false
	// })
	
	// $('.fas-pause').on('click', function(e){
	// 	console.log('fas0', $(this)[0])
		
	// 	audioFile.pause();
	// 	console.log('멈춤')

		

	// 	// return false
	// })

		




})(window.jQuery);