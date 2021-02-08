
<?php
include ('header.php')

?>

<style>
    .modal-body div p{

}
.modal-dialog{
  width:9000px !important;
}
.modal-content{
  width:900px !important;
  height:550px!important;
  float:center !important;
  margin-right:200px !important;
}

</style>
<script>
    $(function () {
  $(".openModal").click(function(){
    setTimeout(function(){
      var h=$(".modal-body .first-content p").height();
      $(".modal-body").css('height',h+80+'px');
      $(".modal-body .first-content p").css('height',h+'px');
    },250);
  });
  $('.first-button').on('click', function () {
    $('.first-content').animate({width:"toggle"}, function(){
      $('.second-content').animate({width:"toggle"});
        var h=$(".modal-body .second-content p").height();
        $(".modal-body").css('height',h+80+'px');
        $(".modal-body .second-content p").css('height',h+'px');
      });
  });
  $('.second-button').on('click', function () {
    $('.second-content').animate({width:"toggle"},function(){
      $('.first-content').animate({width:"toggle"});
        var h=$(".modal-body .first-content p").height();
        $(".modal-body").css('height',h+80+'px');
        $(".modal-body .first-content p").css('height',h+'px');
    });
  });
});
</script>


<h6 class="btn btn-info openModal" data-toggle="modal" data-target="#myModal">Open Modal</h6>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- <h4 class="modal-title">Modal Header</h4> -->
      </div>
      <div class="modal-body">
        <div class="row">
         <div class="col-md-5">
             <h3>Our Products</h3>
             <ul>
                 <li>testing</li>
                 <li>testing</li>
                 <li>testing</li>
                 <li>testing</li>
                 <li>testing</li>
             </ul>
         </div>
         <div class="col-md-7">
         <section class="customer-logos slider">
						<div>
								<img src="img/Product/woven/w1.jpg" alt="">
								<h6>High Defination Satin</h6>
							</div>
							<div>
								 <img src="img/Product/woven/w2.jpg" alt="">
								<h6>Colored Satin</h6>
							</div>
							<div>
								 <img src="img/Product/woven/w3.jpg" alt="">
								<h6>Embossed Effect</h6>
							</div>
							<div>
								<img src="img/Product/woven/w4.jpg" alt="">
								<h6>High Defination Ribbed</h6>
							</div>
							<div>
								<img src="img/Product/woven/w5.jpg" alt="">
								<h6>High Defination Extreme</h6>
							</div>
							<div>
								<img src="img/Product/woven/w6.jpg" alt="">
								<h6>High Defination Heavy Starched</h6>
							</div>
							<div>
								<img src="img/Product/woven/w7.jpg" alt="">
								<h6>High Defination Tafetta</h6>
							</div>
							<div>
								<img src="img/Product/woven/w8.jpg" alt="">
								<h6>Lurex Yarn	</h6>
							</div>
							<div>
								<img src="img/Product/woven/w9.jpg" alt="">
								<h6>Woven Edge Satin</h6>
							</div>
							<div>
								<img src="img/Product/woven/w10.jpg" alt="">
								<h6>Woven Edge Tafetta</h6>
							</div>
				</section>   
         <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tenetur ullam unde eum reiciendis, excepturi totam maiores animi officia, minima laboriosam, consequuntur qui voluptatibus illum? Vel sed tenetur alias ad.</p> -->
         </div>
      </div>

      
    </div>

  </div>
</div>
</div>
</div>
</div>
</div>
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
						margin-left: 0px;
						width: 1000px !important;
						height: 300px !important;
					}
					.slick-slide h6 {
					float:left;
						
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
<br><br><br>
<?php 
include ('footer2.php')
?>  