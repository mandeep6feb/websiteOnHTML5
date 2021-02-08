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
		  $Idle: 5000,
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
	.button{
        background-color:green;
        border-radius: 40px;
      	background: linear-gradient(to right , #0f0, #00ee00);
      	box-shadow: 3px 3px 8px rgba(255,255,255,.5);
      	font-weight: 700;
      	border:1px solid rgba(0,0,0,.3);
    }

	@keyframes jssorl-009-spin {
		from { transform: rotate(0deg); }
		to { transform: rotate(360deg); }
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
			 <img data-u="image" src="img/about/home/6.jpg"  />  
			<!-- <img data-u="image" src="img/about/b.JPG" /> -->
			    <!-- <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">   Sustainable Branding Solutions</div> -->
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Bespoke Branding Solutions</div>
                <!-- <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Worldwide  Logistics</div> -->
<div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Bespoke Branding Solutions</div>
			<div data-u="caption"  style="position:absolute;top:135px;left:550px;width:350px;height:60px;font-size:16px;font-weight:350;line-height:1.2;text-align:center;padding:0.5rem; color:#ffffff">
			If you have just started a new garment business or own a boutique we have a cost effective solution for you
			</div>
      <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:650px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
      Gallery..
			</div>
			<div data-u="caption"  style="position:absolute;top:20px;left:30px;width:500px;height:90px;z-index:1000;opacity:.6">
			<img data-u="image" src="img/about/home/3b.png"  />  
			</div>
			<!-- <div data-u="caption"  style="position:absolute;top:10px;left:-200px;width:500px;height:90px;">
			<img data-u="image" src="img/about/home/3b.png"  />  
			</div> -->
			

			<!-- <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
				<div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Time lined layer animation</div>
			</div> -->
		</div>

		
	<!-- Bullet Navigator -->

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
</div>
    <!-- <img src="img/about/14.jpg" alt=""class="al" style="width: 100%;height: 350px;padding: 0rem"></a> -->
					

<div class="col-md-12" >
		<section class="mt-5 content_info">
				<div class="section-title-wrap margin-bottom-50" >
				<div style="font-size:32px;font-weight:600;text-align:center">DIRECT FROM MANUFACTURER</div>
				<div class="title-divider mt-3">
					<div class="line" ></div>
                   
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <div class="line" ></div>
					<!-- <div class="line" ></div> -->
				</div>
</div>
<br>
<br>
<br>



<div class="row p-2 m-3">
<div class="card-deck">
  <div class="card border-success">
 <h5 class="card-header bg-transparent border-success">Bespoke Solutions(Custom Labels)</h5>
     <div class="card-body bg-transparent">
      <p class="card-text">If you have just started a new garment business or own a boutique and having trouble in getting small quantities of labels and other accessories, we have most cost effective solution for you. We call it "BRANDING FOR LESS"</p>
    </div>

  </div>

  

  <div class="card border-success">
 <h5 class="card-header bg-transparent border-success">Your Custom Designs Hang Tags</h5>
     <div class="card-body">
      <p class="card-text">Woven clothing labels give a high-end impression on your product and prominently display your brand name, logo and contact information. Our labels have excellent depth of detail, luxurious to the touch, and pleasing to the eye. Our woven labels will help you turn your project into a work of art from start to finish. Prices start from USD 145 for 500 pcs.</p>
    </div>
  </div>

  <div class="card border  "style="max-width: 24rem" >
  <a href="products.php"> <img class="card-img" src="img/slide/7.jpg" alt="Card image"></a>
  <!-- <div class="card-footer bg-transparent">
  <a href="" style="margin:40px ;font-size: 15px;text-decoration: underline"><strong> Woven Labels Gallery</strong></a>
  
  </div> -->
</div>
</div>
</div>

<div class="row p-2 m-3">
<div class="card-deck">
  <div class="card border-success">
 <h5 class="card-header bg-transparent border-success">Top 5 Reasons</h5>
     <div class="card-body">
      <h5 class="card-title" style="float:left">To Order Clothing Custom Labels from Atam </h5>
	  <p style="float:left;line-height: 25px">
		1. <span style="font-weight: 800">No Minimums</span> :-You can order as little as 50 pcs. <br>
		2. <span style="font-weight:800">Low Prices</span> :- Being Direct Manufacturer you don't have to pay middle man money.<br>
		3. <span style="font-weight:800">High Quality</span> :- Being authorized suppliers for world's leading brand we guarantee same high quality standards for your labels.<br>
		4. <span style="font-weight:800">No Shipping Charge </span> :-All our prices are to your door steps.<br>
		5. <span style="font-weight:800">No Setup Fees</span> :-We provide you free digital scan of your lables before order processing.<br>
															<!-- We offer latest in technologies for creating Woven labels and Hangtags. Our production schede is reviewed on a daily basis. Sampling is handled on seperate looms and do not affect regar production schede.
															-->	</p>
    </div>
  </div>

 <div class=" border " style="max-width: 20rem;">
 <a href="faq.php">
 <img class="card-img" src="img/about/7.jpg" alt="Card image">
 
 </a>
 </div>
 
  
  
</div>

</div>
<div class="row p-2 m-3">
<div class="card border-success">
 <h5 class="card-header bg-transparent border-success" style="float:left">Your Custom Designs Hang Tags</h5>
     <div class="card-body">
      <p class="card-text">Hang Tags are used to addition with labels to elobarate your branding . Our Hang Tags are made in range of materials, You can add them to your branding concept for as less as USD 245.</p>
    </div>
  </div>
  </div>

<script type="text/javascript">jssor_1_slider_init();</script>
<?php 
include ('footer.php')
?>