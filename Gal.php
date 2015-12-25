<?php require 'login.php'; ?>
<!doctype html>
<html>
<head>
    <?=$incorrect_login_js ?>
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <script type="text/javascript" src="jquery-1.10.2.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="jquery.mousewheel.pack.js?v=3.1.3"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.css?v=2.1.5" media="screen" />
	
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
        
        .photo {
			max-width: 1100px;
			margin: 0 auto;
		}
	</style>
            
            <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

		});
	</script>

    
    <title>Головна</title>
</head>
    
    <body>
        <header>
            
            <div class="nav">
                <a href="Index.php"><div class="butt">ГОЛОВНА</div></a>
                <a href="Ist.php"><div class="butt">ІСТОРІЯ</div></a>
                <a href="Inf.php"><div class="butt">ІНФРАСТРУКТУРА</div></a>
                <a href="Vidp.php"><div class="butt">МІСЦЯ ВІДПОЧИНКУ</div></a>
                <a href="Gal.php"><div class="butt">ГАЛЕРЕЯ</div></a>
            </div>
        </header>
        <?php require 'form.php'; ?>
        <div class="main">
            <div class="photo">
            <h1>Галерея</h1>

	           <h3>Сучасні фотографії міста Суми</h3>
	           <p>
        <a class="fancybox" href="img/1.JPG" data-fancybox-group="gallery" title="Sumy"><img src="img/1.JPG"  alt="" /></a>
		<a class="fancybox" href="img/gol2.jpg" data-fancybox-group="gallery" title="Sumy"><img src="img/gol2.jpg"  alt="" /></a>
		<a class="fancybox" href="img/gol1.jpg" data-fancybox-group="gallery" title="Sumy"><img src="img/gol1.jpg" alt="" /></a>
		<a class="fancybox" href="img/gol3.jpg" data-fancybox-group="gallery" title="Sumy"><img src="img/gol3.jpg"  alt="" /></a>
        <br>
        <a class="fancybox" href="img/park1.jpg" data-fancybox-group="gallery" title="Sumy"><img src="img/park1.jpg"  alt="" /></a>
        <a class="fancybox" href="img/park2.jpg" data-fancybox-group="gallery" title="Sumy"><img src="img/park2.jpg" alt="" /></a>
        <a class="fancybox" href="img/park3.jpg" data-fancybox-group="gallery" title="Sumy"><img src="img/park3.jpg"  alt="" /></a>
        <a class="fancybox" href="img/frunze%20(2).jpg" data-fancybox-group="gallery" title="Sumy"><img src="img/frunze%20(2).jpg"  alt="" /></a>
            
                <h3>Вигляд міста 100 років тому</h3>
            
        &nbsp;&nbsp;&nbsp;&nbsp;<a class="fancybox" href="img/ist4.jpg" data-fancybox-group="gallery1" title="Sumy"><img src="img/ist4.jpg" alt="" /></a>
        <a class="fancybox" href="img/ist3.jpg" data-fancybox-group="gallery1" title="Sumy"><img src="img/ist3.jpg"  alt="" /></a>
        <a class="fancybox" href="img/ist6.jpg" data-fancybox-group="gallery1" title="Sumy"><img src="img/ist6.jpg"  alt="" /></a>
        <a class="fancybox" href="img/ist2.jpg" data-fancybox-group="gallery1" title="Sumy"><img src="img/ist2.jpg"  alt="" /></a>
            </div>
        </div>
        <footer>
            <p class="footer"> © Copyright @ 2015  Andriy Akimenko. Kyiv. NTUU "KPI" </p>
        </footer>
    </body>
</html>