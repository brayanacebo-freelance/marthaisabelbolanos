$(document).ready(function() {

	var headerBg = $('#header .bg');
	
	$('#fullpage').fullpage({
		anchors: ['inicio', 'mis-pensamientos', 'mi-actualidad', 'mis-redes'],
		sectionsColor: ['#dd3570', '#dd3570', '#dd3570', '#fcfbf8'],
		navigation: true,
		scrollingSpeed: 1000,
		navigationPosition: 'right',
		navigationTooltips: ['Inicio', 'Mis pensamientos', 'Mi actualidad', 'Mis redes'],
		scrollOverflow: true,
		afterLoad: function(anchorLink, index){

			if(anchorLink == 'inicio'){
				headerBg.css( 'opacity', '1' );
			}

			if(anchorLink == 'mis-pensamientos'){
				headerBg.css( 'opacity', '.6' );
				$('#section1').find('.home-seccion').delay(500).animate({
					marginLeft: '10%'
				}, 1500, 'easeOutExpo');
			}

			if(anchorLink == 'mi-actualidad'){
				headerBg.css( 'opacity', '.6' );
				$('#section2').find('.home-seccion').delay(500).animate({
					marginLeft: '10%'
				}, 1500, 'easeOutExpo');
			}

			if(anchorLink == 'mis-redes'){
				headerBg.css( 'opacity', '1' );
				
			}
		}
	});

    var feed = new Instafeed({
        get: 'user',
        userId: 183699477,
        accessToken: '183699477.467ede5.fdddf1fbf852409ab759928dbbcef16a',
        resolution: 'thumbnail',
        sortBy: 'most-recent',
        limit: 4,
        template: '<div class="feed"><a href="{{link}}" target="_blank"><img src="{{image}}" width="184" height="184" /></a><div class="info"><div class="like"><img src="assets/img/home-like.png" />{{likes}}</div><div class="comentarios"><img src="assets/img/home-comentarios.png" />{{comments}}</div></div></div>'
    });
    feed.run();

	$('.home-twitter-tweet').twittie({
		username: 'bolanosmartha',
        dateFormat: '%b. %d, %Y',
        template: '{{tweet}} <div class="date">{{date}}</div>',
        count: 1,
        apiPath: 'api/tweet.php'
    });

	
});
