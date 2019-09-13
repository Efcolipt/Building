$(document).ready(function(){
	function goToSurpise(){
		let widthWaitLevel = 0;
		let counterQuestion = 1;
		let LevelBar = 2;
		let counterOnSurpriseQuestion = 6;
		let lineWaitLevel = $('.line__wait__level');
		let paymentData = [];
		let currentType = 1;
		let PhoneC;

		$('.btn__next__level').click(function(){
			if (isAddContent()) {
				let levelCurrent = $(this).attr('data-level-current');
				let barStop = $('.progress__bar').find(`.bar__stop[data-id="${LevelBar}"] > .circle_bar`);
				let txtCurrentType = currentType.find('p').text();
				paymentData.push(txtCurrentType);
				LevelBar++;
				barStop.css({'background':'#FED562','box-shadow':'0px 0px 7px #FED562'});

				if (counterQuestion != 6) {
					counterQuestion++;
					$('.counter__question__before__surprise').text('0'+counterQuestion);
				}

				if ( counterOnSurpriseQuestion > 0 && !(counterOnSurpriseQuestion > 6) ) {
					counterOnSurpriseQuestion--;
					$('.question__counter__onSurprise').text(counterOnSurpriseQuestion+' вопросов');
				}

				if (widthWaitLevel < 100 && widthWaitLevel != 100) {
					widthWaitLevel+=20;
					lineWaitLevel[0].style.width = widthWaitLevel + "%";
				}
				if (levelCurrent == 6) {
					if (PhoneC.length == 11 ) {
						paymentData.push(PhoneC);
					}
				}

				$(this).attr('data-level-current',++levelCurrent);
				
				

				if ( levelCurrent <= 6) {
					let questoinNow = $(`.type__obj[data-id="${levelCurrent}"] > .question__now__for__this__type`).text();
					$('.questoin__now__of__type').text(questoinNow);
					$(`.type__obj[data-id="${--levelCurrent}"]`).fadeOut(100);
					$(`.type__obj[data-id="${++levelCurrent}"]`).fadeIn('slow').css({'display':'flex'});

						$('.type').removeClass('active__add__type');

				}else{
					$(this).off();
					$('.type').off();
					$('.phone__payment__send').off();
					$('.phone__payment__send').removeClass('active_phone_current__payment');
					$('.type').removeClass('active__add__type');
					$('.type__your__welcome').fadeIn(100);
					$('.questoin__now__of__type').text($('.type__your__welcome > .question__now__for__this__type').text());
					$('.phone__payment__send').fadeOut(100);
					let top = document.getElementById('#EndCalcTh').offsetTop; 
    				window.scrollTo(0, top);     
    				$('.intro__content').slideUp('slow');     
    				$('.end__calc').slideDown('slow'); 

    				$.ajax({
						type: "POST",
						url: "sendMail.php",
						data: {'paymentData':paymentData },
						success: function(msg){
							if (msg) {
								console.log('Найс');
								console.log(msg);
							}else{
								console.log('не Найс');
								console.log(msg);
							}
						   
					}
				});
			}
				

				
			}
		});
		$('.phone__payment__send').on('input keyup',function(e){
				let phone = $(this).val();
				phone = phone.replace(/-/g,"");
				phone = phone.replace(')',"");
				phone = phone.replace('(',"");
				phone = phone.replace(/_/g,"");
				phone = +phone;
				phone = phone +"";
			if( phone.length == 11 ){
				PhoneC = phone;
				$(this).addClass('active_phone_current__payment');
			}else{
				PhoneC = "1";
				$(this).removeClass('active_phone_current__payment')
			}

		});

		$('.type').click(function(){
			let data_id = $(this).parent().attr('data-id');
			currentType = $(this);
			if (data_id != 6) {
				$('.type').removeClass('active__add__type');
				$(this).addClass('active__add__type');
			} 
		});

		function isAddContent(){
			let data_id = $('.btn__next__level').attr('data-level-current');
			if ($('.type__obj[data-id="'+data_id+'"]').find('.type').hasClass('active__add__type') || $('.phone__payment__send ').hasClass('active_phone_current__payment') && PhoneC.length == 11) {
				return true;
			}
			return false;
		}
	}
	goToSurpise();


// For link

	$("a").click(function() {
		var elementClick = $(this).attr("href")
		var destination = $(elementClick).offset().top;
		destination -= 30;
		jQuery("html:not(:animated),body:not(:animated)").animate({
			scrollTop: destination
		}, 800);
		return false;
	});

	$('.still__current__img__flat > img ').click(function(){
		var imgSrc = $(this).attr("src");
		var currentImg = $('.img__current__flat > img').attr("src");
		$('.img__current__flat > img').attr("src",imgSrc);
		$(this).attr('src',currentImg);
	});
	function isInteger(num) {
	  return (num ^ 0) === num;
	}

	$('.prev__flat__arrow').click(function(){
		let id = $('.current__level__txt').attr('data-id');
		id = +id;
		let lastId = id;
		if (isInteger(id) && id <= 5 && id > 1 && isInteger(lastId)) {
			id--;
			$('.flat[data-id="'+lastId+'"]').slideUp('slow');
			$('.flat[data-id="'+id+'"]').slideDown('slow');
			$('.current__level__txt').attr('data-id',id);
			$('.cr_lv_txt').text("0"+id);
		}
	});

	$('.next__level__arrow').click(function(){
		let id = $('.current__level__txt').attr('data-id');
		id = +id;
		let lastId = id;
		if (isInteger(id) && id < 5 && id >= 1 && isInteger(lastId)) {
			id++;
			$('.flat[data-id="'+lastId+'"]').slideUp('slow');
			$('.flat[data-id="'+id+'"]').slideDown('slow');
			$('.current__level__txt').attr('data-id',id);
			$('.cr_lv_txt').text("0"+id );
		}
	});

	// function Flat(name,typeFlat,square,term,task,repair,testimonial,photoMain, ...arguments){
	// 	this.name = name;
	// 	this.square = square;
	// 	this.term = term;
	// 	this.task = task;
	// 	this.repair = repair;
	// 	this.testimonial = testimonial;

	// 	this.photoMain = photoMain;
	// 	this.photoOther = [...arguments];
	// }

	// let flatFirst = new Flat("Ремонтно-отделочные работы ул. Р. Зорге, 7","текст","текст","текст","текст","текст","текст","image/flats/flat 1/flat.jpg","image/flats/flat 1/flat2.jpg","image/flats/flat 1/flat3.jpg","image/flats/flat 1/flat4.jpg");
	// let flatSecond = new Flat("Ремонтно-отделочные работы ул. Р. Зорге, 7","текст2","текст2","текст2","текст2","текст2","текст2","image/flats/flat 1/flat.jpg","image/flats/flat 1/flat2.jpg","image/flats/flat 1/flat3.jpg","image/flats/flat 1/flat4.jpg");
	// let flatThird= new Flat("Ремонтно-отделочные работы ул. Р. Зорге, 7","текст3","текст3","текст3","текст3","текст3","текст3","image/flats/flat 1/flat.jpg","image/flats/flat 1/flat2.jpg","image/flats/flat 1/flat3.jpg","image/flats/flat 1/flat4.jpg");
	// let flatFourth = new Flat("Ремонтно-отделочные работы ул. Р. Зорге, 7","текст4","текст4","текст4","текст4","текст4","текст4","image/flats/flat 1/flat.jpg","image/flats/flat 1/flat2.jpg","image/flats/flat 1/flat3.jpg","image/flats/flat 1/flat4.jpg");
	// let flatFiveth = new Flat("Ремонтно-отделочные работы ул. Р. Зорге, 7","текст5","текст5","текст5","текст5","текст5","текст5","image/flats/flat 1/flat.jpg","image/flats/flat 1/flat2.jpg","image/flats/flat 1/flat3.jpg","image/flats/flat 1/flat4.jpg");

	// let defualtLevelCurrentFlat = 1;
	

	// $('.before__feature > .main__img__feature >.other__img__feature > img ').click(function(){
	// 	var imgSrc = $(this).attr("src");
	// 	var currentImg = $('.before__feature> .main__img__feature > img').attr("src");
	// 	$('.before__feature > .main__img__feature > img').attr("src",imgSrc);
	// 	$(this).attr('src',currentImg);
	// });

	// $('.after__feature > .main__img__feature >.other__img__feature > img ').click(function(){
	// 	var imgSrc = $(this).attr("src");
	// 	var currentImg = $('.after__feature> .main__img__feature > img').attr("src");
	// 	$('.after__feature > .main__img__feature > img').attr("src",imgSrc);
	// 	$(this).attr('src',currentImg);
	// });


	$(".phone__payment__send").mask("+7(999)999-99-99");
	
	$('.wrapper .animated').each(function( index ) {
	    (function(that, i) {
	        var idx = i;
	        if (idx > 50)
	            idx = 50;
	        var t = setTimeout(function() {
	            $(that).removeClass('fadeOutDown');
	            $(that).removeClass('opacity-zero');
	            $(that).removeClass('slideInDown');
	            $(that).addClass('fadeInUp');
	        }, 50 * idx);
	    })(this, index);
	});

	 timeOut = setTimeout(function () {
	        $('main .animated').each(function( index ) {
	            $(this).removeClass('fadeInUp');
	        });

	        $('nav').removeClass('slideInDown');
	        $('footer').removeClass('fadeInUp');
	    }, 3000);	

});