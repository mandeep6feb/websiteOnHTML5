<?php
include ('header.php')
?>
   
    <script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>

<!-- Start of atamlabel-help Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=e59863e9-392e-4903-b6a1-b8c54cc4dd09"> </script>
<!-- End of atamlabel-help Zendesk Widget script -->
    
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
        <img data-u="image" src="img/about/home/2.png"  />  
                <!-- <img data-u="image" src="img/about/b.JPG" /> -->
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Woven Labels Solutions</div>
                <div data-u="caption"  style="position:absolute;top:135px;left:550px;width:350px;height:60px;font-size:16px;font-weight:350;line-height:1.2;text-align:center;padding:0.5rem; color:#ffffff">
				If you have just started a new garment business or own a boutique we have a cost effective solution for you
                </div>
                <div data-u="caption"  style="position:absolute;top:10px;left:30px;width:520px;height:80px;z-index:1000;opacity:.9">
                <img data-u="image" src="img/about/home/w2.png"  />  
                </div>
                <!-- <div data-u="caption"  style="position:absolute;top:10px;left:-200px;width:500px;height:90px;">
                <img data-u="image" src="img/about/home/3b.png"  />  
                </div> -->
                <a  href="pro-woven.php">
                <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:670px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
      Learn More
			    </div>
                <!-- <div data-u="caption" data-t="0" class="button1 btn-fs-18 bg-blue white fwn lh1 btn-tfc btn-br4 hblue hbgwhite" style="position:absolute;top:580px;left:705px;width:0px;height:30px;font-family:Oswald,sans-serif;font-size:14px;font-weight:400;line-height:1;text-align:center;background-color:rgba(200,188,5); min-width:100px; padding:16px 10px;padding-top:6px; ">Learn More</div> -->
                </a>

                <!-- <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Time lined layer animation</div>
                </div> -->
            </div>   
        <div>
                <img data-u="image" src="img/about/home/1.jpg"  />
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">  Printed Labels Solutions</div>

                <!-- <div data-u="caption" data-t="0" style="position:absolute;top:360px;color:white;left:605px;width:300px;height:75px;font-size:28px;font-weight:400;line-height:1.2;text-align:center;background-color: #">
                  Sustainable Branding Solutions
                </div> -->
                <div data-u="caption"  style="position:absolute;top:125px;color:white;left:600px;width:300px;height:52px;font-size:16px;font-weight:350;line-height:1.2;text-align:center;padding:0.5rem;">
				<!-- Our sustainable branding solutions will compliment  your eco-friendly range of products -->
                Satin printed labels are awesome in case you’re searching for making custom labels to go into shirts or newborn child attire, on the grounds that they are delicate.
                </div>
                <div data-u="caption"  style="position:absolute;top:10px;left:30px;width:500px;height:70px;z-index:1000 ;opacity:0.9">
                <img data-u="image" src="img/Product/PRINTED LABEL.png"  />  
                </div>
                <!-- <div data-u="caption"  style="position:absolute;top:15px;left:-200px;width:500px;height:90px;">
                <img data-u="image" src="img/about/home/2s.png"  />  
                </div> -->
				<a  href="pro-printed.php">
                <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:670px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
      Learn More
			</div>
                <!-- <div data-u="caption" data-t="0" class="button1 btn-fs-18 bg-blue white fwn lh1 btn-tfc btn-br4 hblue hbgwhite" style="position:absolute;top:580px;left:705px;width:0px;height:30px;font-family:Oswald,sans-serif;font-size:14px;font-weight:400;line-height:1;text-align:center;background-color:rgba(200,188,5); min-width:100px; padding:16px 10px;padding-top:6px; ">Learn More</div> -->
                </a>
            </div>
            <div>
                 <img data-u="image" src="img/about/home/2.png"  />  
                <!-- <img data-u="image" src="img/about/b.JPG" /> -->
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Hangtags Solutions</div>
                <div data-u="caption"  style="position:absolute;top:105px;left:550px;width:350px;height:60px;font-size:16px;font-weight:350;line-height:1.2;text-align:center;padding:0.5rem; color:#ffffff">
				<!-- If you have just started a new garment business or own a boutique we have a cost effective solution for you -->
                They increase the value of your garments by emphatically recognizing your image and items in plain view in an advanced, proficient manner. Cruz Label can make greatly proficient, 100% altered silk screened hang labels
                </div>
                <div data-u="caption"  style="position:absolute;top:10px;left:30px;width:440px;height:80px;z-index:1000;opacity:.9">
                <img data-u="image" src="img/Product/TAG.png"  />  
                </div>
                <!-- <div data-u="caption"  style="position:absolute;top:10px;left:-200px;width:500px;height:90px;">
                <img data-u="image" src="img/about/home/3b.png"  />  
                </div> -->
                <a  href="pro-hangtag.php">
                <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:670px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
      Learn More
			    </div>
                <!-- <div data-u="caption" data-t="0" class="button1 btn-fs-18 bg-blue white fwn lh1 btn-tfc btn-br4 hblue hbgwhite" style="position:absolute;top:580px;left:705px;width:0px;height:30px;font-family:Oswald,sans-serif;font-size:14px;font-weight:400;line-height:1;text-align:center;background-color:rgba(200,188,5); min-width:100px; padding:16px 10px;padding-top:6px; ">Learn More</div> -->
                </a>

                <!-- <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Time lined layer animation</div>
                </div> -->
            </div>
            <div>
                 <img data-u="image" src="img/about/home/2.png"  />  
                <!-- <img data-u="image" src="img/about/b.JPG" /> -->
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Heat Transfer Labels Solutions</div>
                <div data-u="caption"  style="position:absolute;top:135px;left:550px;width:350px;height:60px;font-size:16px;font-weight:350;line-height:1.2;text-align:center;padding:0.5rem; color:#ffffff">
				Heat Transfer labels are best on lively shirts, athletic wear, or child things like infant bodysuits. The warmth exchanges are anything but difficult to apply by a general family press or a mechanical heat press.
                <!-- If you have just started a new garment business or own a boutique we have a cost effective solution for you -->
                </div>
                <div data-u="caption"  style="position:absolute;top:10px;left:30px;width:520px;height:80px;z-index:1000;opacity:.9">
                <img data-u="image" src="img/Product/Heat-Transfer-.png"  />  
                </div>
                <!-- <div data-u="caption"  style="position:absolute;top:10px;left:-200px;width:500px;height:90px;">
                <img data-u="image" src="img/about/home/3b.png"  />  
                </div> -->
                <a  href="pro-heat.php">
                <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:670px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
      Learn More
			    </div>
                <!-- <div data-u="caption" data-t="0" class="button1 btn-fs-18 bg-blue white fwn lh1 btn-tfc btn-br4 hblue hbgwhite" style="position:absolute;top:580px;left:705px;width:0px;height:30px;font-family:Oswald,sans-serif;font-size:14px;font-weight:400;line-height:1;text-align:center;background-color:rgba(200,188,5); min-width:100px; padding:16px 10px;padding-top:6px; ">Learn More</div> -->
                </a>

                <!-- <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Time lined layer animation</div>
                </div> -->
            </div>
            <div>
                 <img data-u="image" src="img/about/home/2.png"  />  
                <!-- <img data-u="image" src="img/about/b.JPG" /> -->
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Cotton Tapes Solutions</div>
                <div data-u="caption"  style="position:absolute;top:135px;left:550px;width:350px;height:60px;font-size:16px;font-weight:350;line-height:1.2;text-align:center;padding:0.5rem; color:#ffffff">
				<!-- If you have just started a new garment business or own a boutique we have a cost effective solution for you -->
                </div>
                <div data-u="caption"  style="position:absolute;top:30px;left:30px;width:520px;height:80px;z-index:1000;opacity:.9">
                <img data-u="image" src="img/Product/COTTON TAPE.png"  />  
                </div>
                <!-- <div data-u="caption"  style="position:absolute;top:10px;left:-200px;width:500px;height:90px;">
                <img data-u="image" src="img/about/home/3b.png"  />  
                </div> -->
                <a  href="pro-narrow.php">
                <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:670px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
      Learn More
			    </div>
                <!-- <div data-u="caption" data-t="0" class="button1 btn-fs-18 bg-blue white fwn lh1 btn-tfc btn-br4 hblue hbgwhite" style="position:absolute;top:580px;left:705px;width:0px;height:30px;font-family:Oswald,sans-serif;font-size:14px;font-weight:400;line-height:1;text-align:center;background-color:rgba(200,188,5); min-width:100px; padding:16px 10px;padding-top:6px; ">Learn More</div> -->
                </a>

                <!-- <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Time lined layer animation</div>
                </div> -->
            </div>
            <div>
                <img data-u="image" src="img/about/home/3.jpg"  />  
                <!-- <img data-u="image" src="img/about/w.JPG" style="width:250px !important"/> -->
                <div data-ts="flat" data-p="1360" id="three" style="position:absolute;top:0px;left:0px;width:980px;height:380px;">
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:320px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Boxes Solution</div>
                    
                    <!-- <div data-u="caption" data-t="2" style="position:absolute;top:65px;left:15px;width:350px;height:40px;font-size:28px;font-weight:500;line-height:1.2;text-align:center;padding:0.5rem;color:#fff;">Worldwide  Logistics</div> -->
                </div>
                <div data-u="caption"  style="position:absolute;top:125px;left:590px;width:300px;height:80px;font-size:16px;font-weight:350;line-height:1.2;text-align:left;padding:0.5rem;color:white">
                <!-- We provide local production & warehousing in manufacturing hotspots of India, -->
									<!-- Bangladesh, China and Turkey -->
                </div>
                <div data-u="caption"  style="position:absolute;top:10px;left:25px;width:440px;height:90px;z-index:1000;opacity:.9">
                <img data-u="image" src="img/Product/Boxes-1.png"  />  
                </div>
                <!-- <div data-u="caption"  style="position:absolute;top:20px;left:-200px;width:500px;height:90px;">
                <img data-u="image" src="img/about/home/1w.png"  />  
                </div> -->
                <a  href="pro-boxes.php">
                <!-- <div data-u="caption" data-t="3" class="button1 btn-fs-18 bg-blue white fwn lh1 btn-tfc btn-br4 hblue hbgwhite" style=" position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;"></div> -->
                <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:650px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
                        Learn More
			    </div>
                <!-- <div data-u="caption" data-t="0" class="button1 btn-fs-18 bg-blue white fwn lh1 btn-tfc btn-br4 hblue hbgwhite" style="position:absolute;top:580px;left:705px;width:0px;height:30px;font-family:Oswald,sans-serif;font-size:14px;font-weight:400;line-height:1;text-align:center;background-color:rgba(200,188,5); min-width:100px; padding:16px 10px;padding-top:6px; ">Learn More</div> -->
                </a>
            </div>
            <div>
                 <img data-u="image" src="img/about/home/2.png"  />  
                <!-- <img data-u="image" src="img/about/b.JPG" /> -->
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Batch Solutions</div>
                <div data-u="caption"  style="position:absolute;top:135px;left:550px;width:350px;height:60px;font-size:16px;font-weight:350;line-height:1.2;text-align:center;padding:0.5rem; color:#ffffff">
				<!-- If you have just started a new garment business or own a boutique we have a cost effective solution for you -->
                </div>
                <div data-u="caption"  style="position:absolute;top:30px;left:30px;width:520px;height:80px;z-index:1000;opacity:.9">
                <img data-u="image" src="img/Product/BATCHES .png"  />  
                </div>
                <!-- <div data-u="caption"  style="position:absolute;top:10px;left:-200px;width:500px;height:90px;">
                <img data-u="image" src="img/about/home/3b.png"  />  
                </div> -->
                <a  href="pro-batch.php">
                <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:670px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
      Learn More
			    </div>
                <!-- <div data-u="caption" data-t="0" class="button1 btn-fs-18 bg-blue white fwn lh1 btn-tfc btn-br4 hblue hbgwhite" style="position:absolute;top:580px;left:705px;width:0px;height:30px;font-family:Oswald,sans-serif;font-size:14px;font-weight:400;line-height:1;text-align:center;background-color:rgba(200,188,5); min-width:100px; padding:16px 10px;padding-top:6px; ">Learn More</div> -->
                </a>

                <!-- <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Time lined layer animation</div>
                </div> -->
            </div>
            <div>
                 <img data-u="image" src="img/about/home/2.png"  />  
                <!-- <img data-u="image" src="img/about/b.JPG" /> -->
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:580px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">
                    Bar Code Solutions</div>
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
                <a  href="pro-bar.php">
                <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:670px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
      Learn More
			    </div>
                <!-- <div data-u="caption" data-t="0" class="button1 btn-fs-18 bg-blue white fwn lh1 btn-tfc btn-br4 hblue hbgwhite" style="position:absolute;top:580px;left:705px;width:0px;height:30px;font-family:Oswald,sans-serif;font-size:14px;font-weight:400;line-height:1;text-align:center;background-color:rgba(200,188,5); min-width:100px; padding:16px 10px;padding-top:6px; ">Learn More</div> -->
                </a>

                <!-- <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Time lined layer animation</div>
                </div> -->
            </div>
            <div>
                 <img data-u="image" src="img/about/home/2.png"  />  
                <!-- <img data-u="image" src="img/about/b.JPG" /> -->
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:580px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Tag Sealers Solutions</div>
                <div data-u="caption"  style="position:absolute;top:135px;left:580px;width:350px;height:60px;font-size:16px;font-weight:350;line-height:1.2;text-align:center;padding:0.5rem; color:#ffffff">
				<!-- Barcode labels are commonly used for inventory control, product prcing and point of sale scanning -->
                <!-- If you have just started a new garment business or own a boutique we have a cost effective solution for you -->
                </div>
                <div data-u="caption"  style="position:absolute;top:30px;left:30px;width:520px;height:80px;z-index:1000;opacity:.9">
                <img data-u="image" src="img/Product/tag seller .png"  />  
                </div>
                <!-- <div data-u="caption"  style="position:absolute;top:10px;left:-200px;width:500px;height:90px;">
                <img data-u="image" src="img/about/home/3b.png"  />  
                </div> -->
                <a  href="pro-tagsealers.php">
                <div data-u="caption" class="button btn-fs-18"  style="position:absolute;top:255px;left:670px;width:150px;height:35px;font-size:16px;line-height:1.2;text-align:center;padding:0.5rem;">
      Learn More
			    </div>
                <!-- <div data-u="caption" data-t="0" class="button1 btn-fs-18 bg-blue white fwn lh1 btn-tfc btn-br4 hblue hbgwhite" style="position:absolute;top:580px;left:705px;width:0px;height:30px;font-family:Oswald,sans-serif;font-size:14px;font-weight:400;line-height:1;text-align:center;background-color:rgba(200,188,5); min-width:100px; padding:16px 10px;padding-top:6px; ">Learn More</div> -->
                </a>
                

                <!-- <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Time lined layer animation</div>
                </div> -->
            </div>
            <div>
                <img data-u="image" src="img/about/home/3.jpg"  />  
                <!-- <img data-u="image" src="img/about/w.JPG" style="width:250px !important"/> -->
                <div data-ts="flat" data-p="1360" id="three" style="position:absolute;top:0px;left:0px;width:980px;height:380px;">
                <div data-u="caption" data-t="3" style="position:absolute;top:60px;left:560px;width:350px;height:40px;font-size:28px;font-weight:400;line-height:1;text-align:center;padding:0.5rem; color:#fff;">Worldwide  Logistics</div>
                    
                    <!-- <div data-u="caption" data-t="2" style="position:absolute;top:65px;left:15px;width:350px;height:40px;font-size:28px;font-weight:500;line-height:1.2;text-align:center;padding:0.5rem;color:#fff;">Worldwide  Logistics</div> -->
                </div>
                <div data-u="caption"  style="position:absolute;top:125px;left:610px;width:300px;height:80px;font-size:16px;font-weight:350;line-height:1.2;text-align:left;padding:0.5rem;color:white">
                We provide local production & warehousing in manufacturing hotspots of India,
									Bangladesh and Hongkong
                </div>
                <div data-u="caption"  style="position:absolute;top:0px;left:25px;width:450px;height:70px;z-index:1000">
                <img data-u="image" src="img/Product/TAG.png"  />  
                </div>
                <!-- <div data-u="caption"  style="position:absolute;top:20px;left:-200px;width:500px;height:90px;">
                <img data-u="image" src="img/about/home/1w.png"  />  
                </div> -->
               
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
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
    
    <div class="col-md-12" >
		<section class="mt-5 content_info">
				<div class="section-title-wrap margin-bottom-50" >
				<div style="font-size:32px;font-weight:600;text-align:center">WELCOME TO LABEL WALA</div>
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
 
		<style>
             .button{
        background-color:green;
        border-radius: 40px;
      	background: linear-gradient(to right , #0f0, #00ee00);
      	box-shadow: 3px 3px 8px rgba(255,255,255,.5);
          font-weight: 700;
          color:#000;   
      	border:1px solid rgba(0,0,0,.3);
    }
			.ul{
                text-decoration: underline;
            }
		</style>
		</section>
		<section >
			<div class="container">

		<p class="mt-1 mb-5 mr-0" style=" text-align: justify;
						text-justify: inter-word; list-style: initial;line-height: 25px;">

			


           <strong style="font-weight: 800">"Label Wala"</strong>  is India's leading label manufacturer and supplier for last  
           <span style="font-weight: 800">3 decades.</span>
            We offer our customers a complete branding concept with the emphasis on brand identification and image strengthening.Our services include 
            <span style="font-weight: 800">branding design, total brand management, security and anti-counterfeit labeling.</span> 
            Our product range includes  
            <span style="font-weight: 800"> Woven Labels, Swing Tickets, Barcode Labels, Hangtags, Heat Transfer, Printed Fabric and Care Labels, Packaging, Metal Accessories, Boxes, Tissue paper and Bespoke Packaging.</span>
        </p>
		<br>
	<br>
	<br>
	<br>
	<br>
			</div>
		</section>
	</div>
			</div>
		</section>
		<style>
		.btn-rounded{
			border-radius: 100px !important;
		}
	</style>
    <script type="text/javascript">jssor_1_slider_init();</script>

    <!-- #endregion Jssor Slider End -->

<?php 
include ('footer.php')
?>

