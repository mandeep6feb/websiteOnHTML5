<?php
include ('header.php')

?>

<script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jssor_1_slider_init = function() {

		var jssor_1_SlideoTransitions = [
		  [{b:0,d:600,y:-290,e:{y:27}}],
		  [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:125.00,t:-125.00}},{b:11000,d:500,c:{x:-125.00,t:125.00}}],
		  [{b:0,d:600,x:535,e:{x:27}}],
		  [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
		  [{b:-1,d:1,c:{x:250.0,t:-250.0}},{b:0,d:800,c:{x:-250.0,t:250.0},e:{c:{x:7,t:7}}}],
		  [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
		  [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
		  [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
		  [{b:2000,d:600,rY:30}],
		  [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
		  [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
		];

		var jssor_1_options = {
		  $AutoPlay: 1,
		  $Idle: 50000,
		  $CaptionSliderOptions: {
			$Class: $JssorCaptionSlideo$,
			$Transitions: jssor_1_SlideoTransitions,
			$Breaks: [
			  [{d:2000,b:1000}]
			]
		  },
		  $ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$
		  },
		  $BulletNavigatorOptions: {
			$Class: $JssorBulletNavigator$
		  }
		};

		var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

		/*#region responsive code begin*/

		var MAX_WIDTH = 2000;
	   

		function ScaleSlider() {
			var containerElement = jssor_1_slider.$Elmt.parentNode;
			var containerWidth = containerElement.clientWidth;

			if (containerWidth) {

				var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

				jssor_1_slider.$ScaleWidth(expectedWidth);
			}
			else {
				window.setTimeout(ScaleSlider, 30);
			}
		}

		ScaleSlider();

		$Jssor$.$AddEvent(window, "load", ScaleSlider);
		$Jssor$.$AddEvent(window, "resize", ScaleSlider);
		$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
		/*#endregion responsive code end*/
	};
</script>
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700&subset=latin-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<style>
	/*jssor slider loading skin spin css*/
	.jssorl-009-spin img {
		animation-name: jssorl-009-spin;
		animation-duration: 1.6s;
		animation-iteration-count: infinite;
		animation-timing-function: linear;
	}

	@keyframes jssorl-009-spin {
		from { transform: rotate(0deg); }
		to { transform: rotate(360deg); }
	}
    .button{
        background-color:green;
        border-radius: 40px;
      	background: linear-gradient(to right , #0f0, #00ee00);
      	box-shadow: 3px 3px 8px rgba(255,255,255,.5);
      	font-weight: 700;
      	border:1px solid rgba(0,0,0,.3);
    }

	/*jssor slider bullet skin 052 css*/
	.jssorb052 .i {position:absolute;cursor:pointer;}
	.jssorb052 .i .b {fill:#ff0055;fill-opacity:0.3;}
	.jssorb052 .i:hover .b {fill-opacity:0.7;}
	.jssorb052 .iav .b {fill-opacity: 1;}
	.jssorb052 .i.idn {opacity:.3;}

	/*jssor slider arrow skin 053 css*/
	/* .jssora053 {display:block;position:absolute;cursor:pointer;}
	.jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
	.jssora053:hover {opacity:.8;}
	.jssora053.jssora053dn {opacity:.5;}
	.jssora053.jssora053ds {opacity:.3;pointer-events:none;} */
</style>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:350px;overflow:hidden;visibility:hidden;">
	<!-- Loading Screen -->
   
	<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
	<div>
                 <img data-u="image" src="img/about/home/2.png"  />  
                <!-- <img data-u="image" src="img/about/b.JPG" /> -->
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:580px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Bar Code Solutions</div>
                <div data-u="caption"  style="position:absolute;top:135px;left:580px;width:350px;height:60px;font-size:16px;font-weight:350;line-height:1.2;text-align:center;padding:0.5rem; color:#ffffff">
				Barcode labels are commonly used for inventory control, product prcing and point of sale scanning
                <!-- If you have just started a new garment business or own a boutique we have a cost effective solution for you -->
                </div>
                <div data-u="caption"  style="position:absolute;top:30px;left:30px;width:520px;height:80px;z-index:1000;opacity:.9">
                <img data-u="image" src="img/Product/barcode.png"  />  
                </div>
                <!-- <div data-u="caption"  style="position:absolute;top:10px;left:-200px;width:500px;height:90px;">
                <img data-u="image" src="img/about/home/3b.png"  />  
                </div> -->
             

                <!-- <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Time lined layer animation</div>
                </div> -->
            </div>
		
		
	</div>
	<!-- Bullet Navigator -->
	<!-- <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
		<div data-u="prototype" class="i" style="width:16px;height:16px;">
			<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<circle class="b" cx="8000" cy="8000" r="5800"></circle>
			</svg>
		</div>
	</div> -->
	<!-- Arrow Navigator -->
		<!-- <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
			<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
			</svg>
		</div>
		<div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
			<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
			</svg>
		</div> -->
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
    <!-- <img src="img/about/14.jpg" alt=""class="al" style="width: 100%;height: 350px;padding: 0rem"></a> -->

	
		<!-- ========================about us======================================================================================= -->
		
<!-- ===============================Quality======================================================== -->
<br>
	<section class="content_info padding-top-10" id="about-us" style="background-color:white">


		<div class="paddings">
			<div class="container" >

				
				<div class="section-title-wrap margin-bottom-10" ><!-- section title -->
				<div style="font-size:32px;font-weight:600;text-align:center">BARCODE SOLUTION</div>
					<!-- <h1 style="text-align: center;font-size: 40px"	>Metal Buttons</h1> -->
					<div class="title-divider" style="text-align: center">
						<div class="line"></div>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				<style>
				.ul{
					text-decoration: underline;
				}
			</style>
			<br><br><br>
			<div class="col-md-12" style="text-transform: none;">
				<!-- <p class="bold ul" style="font-size: 25px">Woven Label</p> -->
			
				<div class="container">
				<section class="customer-logos slider">
						<div>
							<img src="img/Product/barcode/image-0-compressed.jpg" alt="">
							<h4><strong>Barcode Adhesive Label</strong></h4>
						</div>
						<div>
							<img src="img/Product/barcode/image-1-compressed.jpg" alt="">
							<h4><strong>Thermal Printed Barcode</strong></h4>
						</div>
						<div>
							<img src="img/Product/barcode/image-2-compressed.jpg" alt="">
							<h4><strong> Pre-printed Barcode Adhesive Label</strong></h4>
						</div>
			</section>
						</div>
					</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>	
		</div>
	</section>
<style>
			.btn-rounded{
				border-radius: 100px !important; 
			}
			.marquee {
				width: 100%;
				overflow: hidden;
				border:1px solid #ccc;
			}
			/* Slider */
			/* .slick-slide {
				margin: 20px 20px;
			} */
			.slick-slide img {
				margin: auto;
				width: 500px;
				height: 250px !important;
			}
			.slick-slide h4 {
				margin: auto;
			
			}
			.slick-slider
			{
				position: relative;
				display: block;
				box-sizing: border-box;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
						user-select: none;
				-webkit-touch-callout: none;
				-khtml-user-select: none;
				-ms-touch-action: pan-y;
					touch-action: pan-y;
				-webkit-tap-highlight-color: transparent;
			}
			.slick-list
			{
				position: relative;
				display: block;
				overflow: hidden;
				margin: 0;
				padding: 0;
			}
			.slick-list:focus
			{
				outline: none;
			}
			.slick-list.dragging
			{
				cursor: pointer;
				cursor: hand;
			}
			.slick-slider .slick-track,
			.slick-slider .slick-list
			{
				-webkit-transform: translate3d(0, 0, 0);
				-moz-transform: translate3d(0, 0, 0);
					-ms-transform: translate3d(0, 0, 0);
					-o-transform: translate3d(0, 0, 0);
						transform: translate3d(0, 0, 0);
			}
			.slick-track
			{
				position: relative;
				top: 0;
				left: 0;
				display: block;
			}
			.slick-track:before,
			.slick-track:after
			{
				display: table;
				content: '';
			}
			.slick-track:after
			{
				clear: both;
			}
			.slick-loading .slick-track
			{
				visibility: hidden;
			}
			.slick-slide
			{
				display: none;
				float: left;
				height: 100%;
				min-height: 1px;
			}
			[dir='rtl'] .slick-slide
			{
				float: right;
			}
			.slick-slide img
			{
				display: block;
			}
			.slick-slide.slick-loading img
			{
				display: none;
			}
			.slick-slide.dragging img
			{
				pointer-events: none;
			}
			.slick-initialized .slick-slide
			{
				display: block;
			}
			.slick-loading .slick-slide
			{
				visibility: hidden;
			}
			.slick-vertical .slick-slide
			{
				display: block;
				height: auto;
				border: 1px solid transparent;
			}
			.slick-arrow.slick-hidden {
				display: none;
			}
			
</style>


<div class="col-md-12 m-5 text-center" style="text-transform: none;">
<p>Barcode labels are commonly used for inventory control, product prcing and point of sale scanning</p>
</div>

								<!-- Service Modal 1 -->
							
								
						
								<!--================================Solution Section==========================================-->
								
										<!-- <section class="content_info padding-top-40" id="memberships">
											<div class="paddings">
												<div class="container">

														<h1 >Memberships Offers</h1>
														<div class="title-divider">
															<div class="line"></div>
															<i class="fa fa-star-o"></i>
															<div class="line"></div>
														</div>
													<div class="row">
														<div class="col-md-6"><img src="img/atdcktm_memb_1.png" alt=""></div>
														<div class="col-md-6">
															<h5 class="text-center" style="text-decoration: underline; color: black;">ATDC – KTM Forum Membership</h5>
															<p style="margin-top: 3px;margin-bottom: -28px; text-align: center; font-size: .8rem;">
																ATDC - KTM Centre of Excellence will deliver in an industry penetrative and industry supportive non-profit model
															</p>
															<br>
															<br>
															<table class="table table-striped table-responsive" style="font-size: 12px;font-family:  Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;">
																<thead>
																	<tr class="bg-primary">
																		<style>
																		.bold{
																			font-weight: bold;
																		}
																	</style>
																	<th class="bold">Services Offered</th>
																	<th class="bold">Description of services</th>
																	<th class="bold">Gold Membership <br> Rs.2,00,000/- per annum*</th>
																	<th class="bold">Silver Membership <br> Rs.1,50,000/- per annum*</th>
																	<th class="bold">Bronze Membership <br> Rs.1,00,000/- per annum*</th>
																</tr>
															</thead>
															<tbody>
																<tr style="height:4.1em;">
																	<td class="text-center bold">1</td>
																	<td>Warp Knit Product Developments</td>
																	<td><i class="">Unlimited</i></td>
																	<td>Not provided</td>
																	<td>Not provided</td>
																</tr>
																<tr style="height:4.1em;">
																	<td class="text-center bold">2</td>
																	<td>Apparel Design Pool</td>
																	<td><i class="">Unlimited</i></td>
																	<td><i class="">Unlimited</i></td>
																	<td>Not provided</td>
																</tr>
																<tr style="height:4.1em;">
																	<td class="text-center bold">3</td>
																	<td>Up-skill & CAD/design innovation  training vide virtual training [Free training per annum]</td>
																	<td>Up to 50 trainees</td>
																	<td>Up to 30 trainees</td>
																	<td>Up to 15 trainees</td>
																</tr>
																<tr style="height:4.1em;">
																	<td class="text-center bold">4</td>
																	<td>Testing [Complementary testing per month]</td>
																	<td>Up to Rs. 3000/-</td>
																	<td>Up to Rs. 2000/-</td>
																	<td>Up to Rs. 1000/-</td>
																</tr>
																<tr style="height:4.1em;">
																	<td class="text-center bold"> 5 </td>
																	<td>Up-skill & CAD/design innovation  training vide virtual training [Free training per annum]</td>
																	<td>Up to 50 trainees</td>
																	<td>Up to 30 trainees</td>
																	<td>Up to 15 trainees</td>
																</tr>
																<tr style="height:4.1em;">
																	<td class="text-center bold">6</td>
																	<td>Machine or Process Audit per annum</td>
																	<td>2</td>
																	<td>1</td>
																	<td>Not provided</td>
																</tr>
																<tr style="height:4.1em;">
																	<td class="text-center bold">7</td>
																	<td>Career Counseling & Placement Incubator</td>
																	<td><i class="">Unlimited</i></td>
																	<td><i class="">Unlimited</i></td>
																	<td><i class="">Unlimited</i></td>
																</tr>
																<tr style="height:4.1em;">
																	<td class="text-center bold">8</td>
																	<td>E-Resource</td>
																	<td><i class="">Unlimited</i></td>
																	<td><i class="">Unlimited</i></td>
																	<td>Not provided</td>

																</tr>
																<tr style="height:4.1em;">
																	<td class="text-center bold">9</td>
																	<td>Virtual Training ‘On-Demand’ per annum</td> 
																	<td>5 times</td>
																	<td>3 times</td>
																	<td>1 times</td>

																</tr>
															</tbody>
														</table>

														<div class="alert alert-success" style="font-size: .9em;">
															KTM membership offer: Early Bird Offer – Up to <span class="text-danger bold">50% less</span> from above charges
														</div>
													</div>
												</div>

											</div>
										</div>
									</section> -->
							
				<!--================================ SOCIAL SECTION ==========================================-->
				<?php 
include ('footer.php')
?>