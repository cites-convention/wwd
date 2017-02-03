/*!
 * Mutuyimana Jean-Paul
 * mutuyimana@gmail.com
 * no-n.com
 */

(function ($) {



	//	load Foundation
	$(document).foundation();


	//	Top main menu

	$(document).on('scroll', function() {

		if ($(document).scrollTop() > 20) {
			$('.logo img').css('height','80px');
			$('.page-front .nav-desktop').css({
				'background-color' : 'rgba(0,0,0,0.8)',
				'height' : '100px',
			});
			$('.page .nav-desktop').css({
				'background-color' : 'rgba(0,0,0,0.8)',
				'height' : '100px',
			});
			$('.page #logo-image-black').css('display','none');
			$('.page #logo-image-white').css('display','block').addClass('animated fadeInDown');
			$('.page .wrap .top-bar-right ul li a').css('color','#fff');
// 			$('.page .nav-desktop .wrap .top-bar-right ul li a').mouseover(function() {
// 				$(this).css({
// 					'border-color':'rgba(0,0,0,0.6)'
// 				})
// 			}).mouseout(function(){
// 				$(this).css({
// 					'border-color':'#fefefe'
// 				})
// 			});
			$('.top-bar-right ul').css('line-height', '40px');
			$('.twitts-bt .button').css('background-color', 'rgba(36,36,36,0.9)');
		} if ($(document).scrollTop() < 20) {
			$('.logo img').css('height','140px');
			$('.page-front .nav-desktop').css({
				'background-color' : 'transparent',
				'height' : 'initial',
			});
			$('.page .nav-desktop').css({
				'background-color' : '#eee',
				'height' : 'initial',
			});
			$('.page #logo-image-black').css('display','block').addClass('animated fadeInDown');
			$('.page #logo-image-white').css('display','none');
// 			$('.page .wrap .top-bar-right ul li a').css('color','#fefefe !important');
			$('.page .wrap .top-bar-right ul li a').css('color','#000');
			$('.top-bar-right ul').css('line-height', '100px');
			$('.twitts-bt .button').css('background-color', 'transparent');
		}

		/* bacground color of the top bar on small devices */
// 		if ($(document).scrollTop() > 90) {
// 			$('.nav-mobile').css('background-color' , 'rgba(0,0,0,0.7)');
// 		} else {
// 			$('.nav-mobile').css('background-color' , 'initial');
// 		}

	});


	$(document).ready(function() {

		// Owl Carousel on the landing page
		$('#carousel').owlCarousel({
			lazyLoad : true,
			autoPlay: 10000,
			slideSpeed : 10000,
			transitionStyle : 'fade',
			singleItem:true,
			navigation : false,
		});

		// Go back on top */
		$(window).scroll(function () {
			if ($(window).scrollTop() > $('body').height() / 2) {
				$('.scroll-to-Top').css('display','block');
			} else {
				$('.scroll-to-Top').css('display','none');
		  }
		});

		// Mobile hide/show menus
		$('.nav-mobile .button').click(function() {
			$('#menus-mobile').toggle("speed");
		});

		// Show twitter feeds
		$('.twitts .twitts-bt .button').click(function(){
			if( $('.twitts').hasClass('in-Canvas') ){
				$('.twitts').removeClass('in-Canvas');
			} else {
				$('.twitts').addClass('in-Canvas');
			}

		});

		// hero text animation
		var terms = ["Listen to the young voices", "Do one thing today to help protect the world's wildlife"];
		function rotateTerm() {
			var ct = $(".wildlife").data("term") || 0;
			$(".wildlife").data("term", ct == terms.length -1 ? 0 : ct + 1).text(terms[ct]).fadeIn().delay(3000).fadeOut(500, rotateTerm);
		}
		function sloganAnim(){
			$( '.slogan' ).addClass('animated bounceInDown').css({
				'display' : 'inline-block',
	//			'top' : '45vh',
			})
		}
		function wildlifeAnim(){
			$( '.wildlife' ).addClass('animated bounceInRight').css('display' , 'inline-block')
		}

		var windowsize = $(window).width();
		windowsize = $(window).width();
		if (windowsize > 800) {
			$('.slogan').css({
	//			'display' : 'inline-block',
				'top' : '45vh',
			});
			setTimeout(sloganAnim, 1000);
			setTimeout(rotateTerm, 1500);
		}else{
			$('.slogan').css({
	//			'display' : 'inline-block',
				'top' : '20vh',
			});
			setTimeout(sloganAnim, 1000);
			setTimeout(rotateTerm, 1500);
		}

	});



})(jQuery);
