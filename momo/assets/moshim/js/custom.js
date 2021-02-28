(function($) {

	$('.fas').on('click', function(e){
		console.log('fas0', $(this)[0])
		let track = $(this)[0].classList[0];

		let src_music = `http://moshim.co.kr/assets/moshim/soundbook_track/song/${track}.mp3`;
		let audioFile_1 = new Audio(src_music); 
		
		if($(this).hasClass('fas-play') === true){
			$(this).removeClass("fa-play")
			$(this).addClass("fa-pause")
		}
		if($(this).hasClass('fas-pause') === true){
			$(this).removeClass("fa-pause")
			$(this).addClass("fa-play")
		}
		audioFile_1.play();

		// if (playPromise !== undefined) {
		// playPromise.then(_ => {
		// 	// Automatic playback started!
		// 	// Show playing UI.
		// 	// We can now safely pause video...
		// 	audioFile_1.pause();
		//   })
		//   .catch(error => {
		// 	// Auto-play was prevented
		// 	// Show paused UI.
		//   });
		// }
		
		
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