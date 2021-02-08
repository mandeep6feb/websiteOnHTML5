<?php
include ('header2.php')

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
			<img data-u="image" src="img/about/home/2.jpg"  />
			     <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">   Sustainable Branding Solutions</div>
                <!-- <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Bespoke Branding Solutions</div> -->
                <!-- <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Worldwide  Logistics</div> -->

			<div data-u="caption"  style="position:absolute;top:155px;color:white;left:600px;width:300px;height:52px;font-size:16px;font-weight:350;line-height:1.2;text-align:center;padding:0.5rem;">
			Our sustainable branding solutions will compliment  your eco-friendly range of products
		   
			</div>
			<div data-u="caption"  style="position:absolute;top:10px;left:30px;width:520px;height:90px;z-index:1000 ;opacity:0.7">
			<img data-u="image" src="img/about/home/s.png"  />  
			</div>
           <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:670px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
      Gallery..
			</div>
			<!-- <div data-u="caption"  style="position:absolute;top:15px;left:-200px;width:500px;height:90px;">
			<img data-u="image" src="img/about/home/2s.png"  />  
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
    <!-- <img src="img/about/14.jpg" alt=""class="al" style="width: 100%;height: 350px;padding: 0rem"></a> -->

			
         
            <div class="row pb-3" id="0"style="background-color:">
             
                
                <div class="col-md-12 " style="color: #000000">
                  <div class=" ml-3"> 
                     <div class="section-title-wrap mt-5"> 
				<div style="font-size:32px;font-weight:600;text-align:center">COMMITTED TO NATURE</div>

                                                <h1 style="text-align: center" > </h1>
                                                <div class="title-divider" style="text-align: center">
                                                    <div class="line" ></div>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>

                                                    <!-- <i class="fa fa-star-o" ></i>
                                                    <i class="fa fa-star-o" ></i>
                                                    <i class="fa fa-star-o" ></i>
                                                    <i class="fa fa-star-o" ></i>
                                                    <i class="fa fa-star-o" ></i> -->
                                                    <div class="line" ></div>
                                                </div>
                                            </div>
               
                </div>
                  <p class="mt-1 mr-5 ml-5 p-3" style=" text-align: justify;
                        text-justify: inter-word; list-style: initial;line-height: 25px;font-weight: bold">
                       We acknowledge our clients' challenge to secure a supply chain that minimizes and eventually eliminates all negative impact on environment. therefore, working proactively on sustainability is an important value that we add to our clients' brands.</p>
                </div>
            </div>
            </div>

            <div class="row py-3"style="background-color:whitesmoke"  id="1">
        <div class="ml-3 mr-3">
     <div class="col-md-4">
             <img  src="img/1.-FSC_TextOnlyBrandmark_TM_RGB.png"  height="auto" width="220" style="margin-top: -30px;margin-left: 100px;margin-top:4px ">
             </div>
         <div class="col-md-8" style="color: #000000">
           <div class="ml-3 mr-3"> 
             <h4 style="text-align: left">  
                 FSC
         </h4>    
         </div>
           <p class="mt-3 mr-3 ml-3" style=" text-align: justify;
           text-justify: inter-word; list-style: initial;line-height: 25px">
           We hold FSC certification for our paper products. FSC certifies forsts all over the world to ensure they meet highest enviromental and social standards.     
           <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
         </p>
         <div class="mt-5"> 
                 <h4 style="text-align: left">  
                         <!-- IN EVERYTHING WE DO, SUSTAINABILITY IS OUR MOTIVATION. -->
             </h4>    
             </div>
               <p class="mr-3 mt-3" style=" text-align: justify;
               text-justify: inter-word; list-style: initial;line-height: 25px">
                     <!-- The nature has so much to offer. We are very aware of that and we do everything we can to work in the most ecological way possible. Our focus on sustainability has been implemented throughout our organization. Our production facilities are modern and meet the highest ecological standards. Since 2004 we succeeded in enabling a total reduction of 43% of CO2 footprint, the lowest CO2 footprint of the branch, of which we are proud. Also, we produce our own electricity by which we achieved a reduction of 60%. Through these investments in environmentally friendly way of packaging we reduced 20% of plastic. Finally, we are proud of our in-plant water recycling system. The Sunland Quality Juices are 100% pure juice. Therefore Sunland does the utmost so future generations can enjoy nature as much as we do -->
                     <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
             </p>
         </div>
     </div>
 </div>     
 
 <div class="row py-3" id="2">
                <div class="">
                    <div class="col-md-4">
                    <img  src="img/global.gif"  height="auto" width="220" style="margin-left: 115px;padding: 1rem">
                    </div>
                    <div class="col-md-8" style="color: #000000">
                        <div class="ml-3 mr-3"> 
                        <h4 style="text-align: left">  
                        Global Organic Textile Standard
                    </h4>    
                    </div>
                        <p class="mt-3 mr-3 ml-3" style=" text-align: justify;
                        text-justify: inter-word; list-style: initial;line-height: 25px">
                        Our organic cotton products like ribbon and labels are certified by GOTS.    
                        <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
                    </p>
                    <div class="mt-3 ml-3 mr-3"> 
                            <h4 style="text-align: left">  
                                    <!-- COMPREHENSIVE RULES FOR ECOLOGICAL AND SOCIALLY RESPONSIBLE TEXTILE PRODUCTION    -->
                                <!-- IN EVERYTHING WE DO, SUSTAINABILITY IS OUR MOTIVATION. -->
                        </h4>    
                        </div>
                            <p class="mr-3 mt-3 ml-3" style=" text-align: justify;
                            text-justify: inter-word; list-style: initial;line-height: 25px">
                            
                                The Global Organic Textile Standard (GOTS) was developed through collaboration by leading standard setters with the aim of defining requirements that are recognised world-wide and that ensure the organic status of textiles from harvesting of the raw materials through environmentally and socially responsible manufacturing all the way to labelling in order to provide credible assurance to the consumer.   
                            <!-- The nature has so much to offer. We are very aware of that and we do everything we can to work in the most ecological way possible. Our focus on sustainability has been implemented throughout our organization. Our production facilities are modern and meet the highest ecological standards. Since 2004 we succeeded in enabling a total reduction of 43% of CO2 footprint, the lowest CO2 footprint of the branch, of which we are proud. Also, we produce our own electricity by which we achieved a reduction of 60%. Through these investments in environmentally friendly way of packaging we reduced 20% of plastic. Finally, we are proud of our in-plant water recycling system. The Sunland Quality Juices are 100% pure juice. Therefore Sunland does the utmost so future generations can enjoy nature as much as we do -->
                                <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
                        </p>
                
                    </div>
                </div>
                
            </div>
           
            <div class="row py-3" style="background-color:whitesmoke" id="3" >
                <div class="">
                    <div class="col-md-4">
                        <div class="row p-1">
                    <img  src="img/ekot.png"  height="150" width="220"style="margin-left: 130px;padding: 1rem">
                    <!-- <img  src="img/sustainable/e2.jpg" height="200px" width="200px" > -->
                </div>
                    <!-- <div class="row p-1">
                    <img  src="img/sustainable/e3.jpeg" height="200px" width="200px" >
                    <img  src="img/sustainable/e4.jpg" height="200px" width="200px" >
                </div> -->
                    </div>
                    <div class="col-md-8" style="color: #000000">
                      <div class=" ml-3"> 
                        <h4 style="text-align: left">  
                                OEKO TEX CLASS 1
                    </h4>    
                    </div>
                      <p class="mt-3 mr-3 ml-3" style=" text-align: justify;
                      text-justify: inter-word; list-style: initial;line-height: 25px">
                      Atam holds an Oekotex certificate for textile production which is a vindication against harmful substances in textiles. We hold certification for product class 1, the highest level.      
                      <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
                    </p>
                    <div class="mt-5"> 
                            <h4 style="text-align: left">  
                                    <!-- IN EVERYTHING WE DO, SUSTAINABILITY IS OUR MOTIVATION. -->
                        </h4>    
                        </div>
                          <p class="mr-3 mt-3" style=" text-align: justify;
                          text-justify: inter-word; list-style: initial;line-height: 25px">
                                <!-- The nature has so much to offer. We are very aware of that and we do everything we can to work in the most ecological way possible. Our focus on sustainability has been implemented throughout our organization. Our production facilities are modern and meet the highest ecological standards. Since 2004 we succeeded in enabling a total reduction of 43% of CO2 footprint, the lowest CO2 footprint of the branch, of which we are proud. Also, we produce our own electricity by which we achieved a reduction of 60%. Through these investments in environmentally friendly way of packaging we reduced 20% of plastic. Finally, we are proud of our in-plant water recycling system. The Sunland Quality Juices are 100% pure juice. Therefore Sunland does the utmost so future generations can enjoy nature as much as we do -->
                                <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
                        </p>
                
                    </div>
                    </div>
                
            </div>
            <div class="row py-3"  id="4" >
<div class="ml-3 mr-3">
     <div class="col-md-4">
             <img  src="img/logo.svg" height="auto" width="190" style="margin-top: 60px;margin-left: 126px ">
             </div>
         <div class="col-md-8" style="color: #000000">
           <div class="ml-3 mr-3"> 
             <h4 style="text-align: left">  
             SEDEX
         </h4>    
         </div>
           <p class="mt-3 mr-3 ml-3" style=" text-align: justify;
           text-justify: inter-word; list-style: initial;line-height: 25px">
            We are <span style="font-weight: 800">SEDEX CERTIFIED</span> organization. <br>
            Sedex is an organisation with ethical and social audit programs. Driving improvements in ethical- and sustainable business practices in global supply chains.
            The ethical- and social audit program cover the following aspects:
            <ul style="list-style: circle;margin-top:20px">
                                    <li style="text-align: left;margin-left:32px">  Health and safety </li><div style="height: 7px;"></div>
									<li style="text-align: left;margin-left:32px">Waste management   </li><div style="height: 7px;"></div>
									<li style="text-align: left;margin-left:32px"> Child and young labor  </li><div style="height: 7px;"></div>
									<li style="text-align: left;margin-left:32px">Labor practices, including forced labor, worker representation and discrimination.   </li><div style="height: 7px;"></div>
									<li style="text-align: left;margin-left:32px">Working hours and wages   </li><div style="height: 7px;"></div>
								
								</ul>
                                <br>
                               <!-- <a style="text-align: left;margin-left:15px" target="blank" href="www.sedexglobal.com/">www.sedexglobal.com</a>  -->
           <!-- We hold FSC certification for our paper products. FSC certifies forsts all over the world to ensure they meet highest enviromental and social standards.      -->
           <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
         </p>
         <div class="mt-5"> 
                 <h4 style="text-align: left">  
                         <!-- IN EVERYTHING WE DO, SUSTAINABILITY IS OUR MOTIVATION. -->
             </h4>    
             </div>
               <p class="mr-3 mt-3" style=" text-align: justify;
               text-justify: inter-word; list-style: initial;line-height: 25px">
                     <!-- The nature has so much to offer. We are very aware of that and we do everything we can to work in the most ecological way possible. Our focus on sustainability has been implemented throughout our organization. Our production facilities are modern and meet the highest ecological standards. Since 2004 we succeeded in enabling a total reduction of 43% of CO2 footprint, the lowest CO2 footprint of the branch, of which we are proud. Also, we produce our own electricity by which we achieved a reduction of 60%. Through these investments in environmentally friendly way of packaging we reduced 20% of plastic. Finally, we are proud of our in-plant water recycling system. The Sunland Quality Juices are 100% pure juice. Therefore Sunland does the utmost so future generations can enjoy nature as much as we do -->
                     <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
             </p>
     
         </div>
        
             </div>
     

</div>
            
            <div class="row py-3" style="background-color:whitesmoke" id="5">
                  
                        <div class="">
                                <div class="col-md-4">
                                        <img  src="img/sustainable/reach.png" height="auto" width="220" style="margin-left: 120px;padding: 1rem" >
                                        </div>
                            <div class="col-md-8" style="color: #000000">
                              <div class="ml-3"> 
                                <h4 style="text-align: left">  
                                REACH
                            </h4>    
                            </div>
                              <p class="mt-3 mr-3 ml-3" style=" text-align: justify;
                              text-justify: inter-word; list-style: initial;line-height: 25px">
                              All our products stricly follow REACH regulation and restricted substances list are complied with.      
                              <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
                            </p>
                            <div class="mt-3 ml-3"> 
                                    <h4 style="text-align: left">  
                                        REACH Restriction
                                            <!-- IN EVERYTHING WE DO, SUSTAINABILITY IS OUR MOTIVATION. -->
                                </h4>    
                                </div>
                                  <p class="mr-3 mt-3 ml-3" style=" text-align: justify;
                                  text-justify: inter-word; list-style: initial;line-height: 25px">
                                  
                            Section 8 of REACH regulation details the restriction on certain dangerous substances, and preparations or articles which are manufactured, used and placed on the EU market. Any substance which is used as a substance or in preparations shall be restricted in EU, as long as the use of the substance poses an unacceptable risk to human health or the environment.      
                                  <!-- The nature has so much to offer. We are very aware of that and we do everything we can to work in the most ecological way possible. Our focus on sustainability has been implemented throughout our organization. Our production facilities are modern and meet the highest ecological standards. Since 2004 we succeeded in enabling a total reduction of 43% of CO2 footprint, the lowest CO2 footprint of the branch, of which we are proud. Also, we produce our own electricity by which we achieved a reduction of 60%. Through these investments in environmentally friendly way of packaging we reduced 20% of plastic. Finally, we are proud of our in-plant water recycling system. The Sunland Quality Juices are 100% pure juice. Therefore Sunland does the utmost so future generations can enjoy nature as much as we do -->
                                        <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
                                </p>
                            </div>
                        </div>
                    </div>  
            
<div class="row py-3"   id="6" >
<div class="ml-3 mr-3">
     <div class="col-md-4">
             <img  src="img/rsl.jpg" height="auto" width="190" style="margin-top: 60px;margin-left: 126px ">
             </div>
         <div class="col-md-8" style="color: #000000">
           <div class="ml-3 mr-3"> 
             <h4 style="text-align: left">  
             Restricted Substance List
         </h4>    
         </div>
           <p class="mt-3 mr-3 ml-3" style=" text-align: justify;
           text-justify: inter-word; list-style: initial;line-height: 25px">
           This Restricted Substance List (RSL) is intended to provide apparel and footwear companies with information related to regulations and laws that restrict or ban certain chemicals and substances in finished home textile, apparel, and footwear products around the world. <br>
          <br> The RSL was developed by a special working group of the American Apparel & Footwear Association’s (AAFA’s) Environmental Task Force. It serves as a practical tool to help individuals in textile, apparel and footwear companies, and their suppliers - responsible for environmental compliance throughout the supply chain - to become more aware of various national and international regulations governing the amount of substances that are permitted in finished home textile, apparel, and footwear products.
            <br><br>
            The RSL will be updated on a regular basis and will be supplemented with additional resources to help officials in these companies undertake responsible chemical management practices in the aforementioned finished products.
           <!-- Ethical sourcing of Disney-branded products is an important focus of our overall corporate citizenship efforts.<span style="font-weight: 800"> We promote ethical production of Disney-branded products </span>by working to improve labor conditions in <span style="font-weight: 800">production facilities, testing the safety and integrity of products,</span> and exploring ways to reduce the <span style="font-weight: 800">environmental footprint of our supply chain.</span> -->
          
                                <br>
                               <!-- <a style="text-align: left;margin-left:15px" target="blank" href="www.sedexglobal.com/">www.sedexglobal.com</a>  -->
           <!-- We hold FSC certification for our paper products. FSC certifies forsts all over the world to ensure they meet highest enviromental and social standards.      -->
           <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
         </p>
         <div class="mt-5"> 
                 <h4 style="text-align: left">  
                         <!-- IN EVERYTHING WE DO, SUSTAINABILITY IS OUR MOTIVATION. -->
             </h4>    
             </div>
               <p class="mr-3 mt-3" style=" text-align: justify;
               text-justify: inter-word; list-style: initial;line-height: 25px">
                     <!-- The nature has so much to offer. We are very aware of that and we do everything we can to work in the most ecological way possible. Our focus on sustainability has been implemented throughout our organization. Our production facilities are modern and meet the highest ecological standards. Since 2004 we succeeded in enabling a total reduction of 43% of CO2 footprint, the lowest CO2 footprint of the branch, of which we are proud. Also, we produce our own electricity by which we achieved a reduction of 60%. Through these investments in environmentally friendly way of packaging we reduced 20% of plastic. Finally, we are proud of our in-plant water recycling system. The Sunland Quality Juices are 100% pure juice. Therefore Sunland does the utmost so future generations can enjoy nature as much as we do -->
                     <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
             </p>
     
         </div>
             </div>
</div>


            <div class="row  py-3" style="background-color:whitesmoke" id="7">
                        <div class="">
                                <div class="col-md-4">
                                        <img  src="img/Global-Standard-Logo-FINALFINAL2tone-08-300x137.png"  height="auto" width="220" style="padding: 1.5rem;margin-left: 120px;margin-top:20px" >
                                        </div>
                            <div class="col-md-8" style="color: #000000">
                                <div class=" ml-3"> 
                                <h4 style="text-align: left">  
                                        Global Recycle Standard
                            </h4>    
                            </div>
                                <p class="mt-3 mr-3 ml-3" style=" text-align: justify;
                                text-justify: inter-word; list-style: initial;line-height: 25px">
                                We hold Certificate of compliance from GRS to guarantaee authenticity of all our recycled products like polyester ribbons, woven labels, paper labels.   
                                <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
                            </p>
                            <div class="mt-3"> 
                                        
                                </div>
                                    <p class="mr-3 mt-3 ml-3" style=" text-align: justify;
                                    text-justify: inter-word; list-style: initial;line-height: 25px">
                                    The Global Recycled Standard is intended for companies that are making and/or selling products with recycled content. The standard applies to the full supply chain and addresses traceability, environmental principles, social requirements, and labeling. Developed with the textile industry in mind, the GRS may also be applied to products from any industry.  
                                    <!-- The nature has so much to offer. We are very aware of that and we do everything we can to work in the most ecological way possible. Our focus on sustainability has been implemented throughout our organization. Our production facilities are modern and meet the highest ecological standards. Since 2004 we succeeded in enabling a total reduction of 43% of CO2 footprint, the lowest CO2 footprint of the branch, of which we are proud. Also, we produce our own electricity by which we achieved a reduction of 60%. Through these investments in environmentally friendly way of packaging we reduced 20% of plastic. Finally, we are proud of our in-plant water recycling system. The Sunland Quality Juices are 100% pure juice. Therefore Sunland does the utmost so future generations can enjoy nature as much as we do -->
                                        <!-- We acnowledge our clients' challange to secure a supply chain tht minimizes and eventually eliminates all negative impact on environment. thereore, working proacyively on sustainablity is an important value that we add to our clients' brands. -->
                                </p>
                            </div>
                          </div>
                    </div>
          
           
  
                
<?php 
include ('footer2.php')
?>

<script type="text/javascript">jssor_1_slider_init();</script>
