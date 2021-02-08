<?php
include ('header.php')

?>
<style>
// Custom shit
body {
  margin-top: 30px;

}

.list-group.help-group {
  margin-bottom: 20px;
  padding-left: 0;
  margin: 0;
  .faq-list {
    display: block;
    top: auto;
    margin: 0 0 32px;
    border-radius: 2px;    
    border: 1px solid #ddd;
    box-shadow: 0 1px 5px rgba(85, 85, 85, 0.15);
    .list-group-item {
      position: relative;
      display: block;
      margin: 0;
      padding: 13px 16px;
      background-color: #fff;
   
      border-bottom: 1px solid #ddd;
      border-top-left-radius: 2px;
      border-top-right-radius: 2px;
      
      transition: background-color .2s;
      i.mdi {
        margin-right: 5px;
        font-size: 18px;
        position: relative;
        top: 2px;
      }
      &:hover {
        background-color: #008080;
      }
      &.active {
        background-color: #008080;
        font-weight: 700;
      
      }
      &:last-of-type {
        border-bottom-left-radius: 2px;
        border-bottom-right-radius: 2px;
        border-bottom: 0;
      }
    }
  }
}

.tab-content.panels-faq {
  padding: 0;
  border: 0;
}

.panel.panel-help {
  box-shadow: 0 1px 5px rgba(85, 85, 85, 0.15);
  padding-bottom: 0;
  border-radius: 2px;
  overflow: hidden;
 
  margin: 0 0 16px;
  a[href^="#"],
  a[href^="#"]:hover,
  a[href^="#"]:focus {
    outline: none;
    cursor: pointer;
    text-decoration: none;
  }
  .panel-heading {
 
    padding: 0 px;
    line-height: 48px;
    border-top-right-radius: 2px;
    border-top-left-radius: 2px;

    h5 {      
      font-size: 14px;
      font-weight: 400;
      line-height: 20px;
      letter-spacing: 0;
      text-transform: none;
      color:#008080;
      background-color:#008080;
    }
  }
  .panel-body {
    background-color: #fff;
    border-top: 1px solid #ddd;
    border-radius: 2px;
    border-top-right-radius: 0;
    border-top-left-radius: 0;
    margin-top: 0;
    p {
      margin: 0 0 0px;
      &:last-of-type {
        margin: 0;
      }
    }
  }
}.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6{
    color:#008080;
}
.tab-content h5{text-align:left;letter-spacing:0px;}
.list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
    z-index: 2;
    color: #fff;
    background-color: #008080;
    border-color: #008080;
}
</style>
<script>
$(function() {
    // Since there's no list-group/tab integration in Bootstrap
    $('.list-group-item').on('click',function(e){
     	  var previous = $(this).closest(".list-group").children(".active");
     	  previous.removeClass('active'); // previous list-item
     	  $(e.target).addClass('active'); // activated list-item
   	});
});
</script>
<div class="row m-3">
  <div class="col-md-4">
    <ul class="list-group help-group">
      <div class="faq-list list-group nav nav-tabs">
        <a href="#tab1" class="list-group-item active" role="tab" data-toggle="tab">Frequently Asked Questions</a>
        <a href="#tab2" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-account"></i>Contact Us</a>
        <a href="#tab3" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-account-settings"></i>About Us</a>
        <!-- <a href="#tab4" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-star"></i> </a>
        <a href="#tab5" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-cart"></i> Checkout</a>
        <a href="#tab6" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-heart"></i> Lorem ipsum</a>
        <a href="#tab7" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-check"></i> Dolor sit amet</a> -->
      </div>
    </ul>
  </div>
  <div class="col-md-8">
    <div class="tab-content panels-faq">
      <div class="tab-pane active" id="tab1">
        <div class="panel-group" id="help-accordion-1">
          <div class="panel panel-default panel-help">
            <a href="#opret-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h5>What is the minimum order?</h5>
              </div>
            </a>
            <div id="opret-produkt" class="collapse in">
              <div class="panel-body">
              <p>  <span style="font-weight:bold"> Woven Labels - </span> No Minimum, we have done this specially for our small and individual customers.</p>
                <p><span style="font-weight:bold">Printed Label - </span> 500 Pieces </p>
               <p>   <span style="font-weight:bold">HangTags - </span>1,000 Pieces </p>
               <p>   <span style="font-weight:bold">Iron on Labels -</span> No minimum</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help">
            <a href="#rediger-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h5>What is the delivery time?</h5>
              </div>
            </a>
            <div id="rediger-produkt" class="collapse">
              <div class="panel-body">
                <p>Approximately 3 working days for sample development and 15 working days for bulk production after approval on our counter samples.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help">
            <a href="#ret-pris" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h5>How many colours can you do?</h5>
              </div>
            </a>
            <div id="ret-pris" class="collapse">
              <div class="panel-body">
                <p>Up to 12 colors or we have dye to match every colour in our in house dyeing plant facility.</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#slet-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h5>What minimum width can you do?</h5>
              </div>
            </a>
            <div id="slet-produkt" class="collapse">
              <div class="panel-body">
                <p>8 mm</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#opret-kampagne" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h5>What maximum width can you do?</h5>
              </div>
            </a>
            <div id="opret-kampagne" class="collapse">
              <div class="panel-body">
                <p>400 mm</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#kampagne" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h5>What do we have to send to get the samples made?</h5>
              </div>
            </a>
            <div id="kampagne" class="collapse">
              <div class="panel-body">
                <p>
                <span style="font-weight:bold"> A.</span> Color artwork. </p>
                 <p> 
                 <span style="font-weight:bold"> B.</span> Original Lable Sample.</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#opret" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h5>What are the labels made of?</h5>
              </div>
            </a>
            <div id="opret" class="collapse">
              <div class="panel-body">
                <p><span style="font-weight:bold">100%</span> Polyester or <span style="font-weight:bold">100%</span>  Rayon.</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#opre" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h5>What are your terms of payment & how do I pay? </h5>
              </div>
            </a>
            <div id="opre" class="collapse">
              <div class="panel-body">
                <p>For all orders we need advance payment against invoice. We will send you our invoice and request for the payment to be made prior to production commences. We can accept payment by<span style="font-weight:bold"> Bank Transfer </span>or <span style="font-weight:bold">Paypal.</span>  </p>
              </div>
            </div>
          </div>
        </div>
      </div>

 <div class="tab-pane" id="tab2">
            <div class="panel-group" id="help-accordion-2">      
              <div class="panel panel-default panel-help">
                <a href="#help-three" data-toggle="collapse" data-parent="#help-accordion-2">
                  <div class="panel-heading">
                    <h5>Contact Us</h5>
                  </div>
                </a>
                <div id="help-three" class="collapse in">
                  <div class="panel-body">

                  <div class="col-md-5">
                  <p> 
														<span class="bold"> Label – Wala <br> </span>
														<!-- <i class="bold" style="font-size: .9em">LABELWALA Associates Pvt Ltd </i> -->
														
														<span style="font-weight:bold ">Address :</span><br><i class="fa fa-map-marker"></i> Plot No.26 Small Scale Industrial Estate<br> GT KARNAl ROAD,
														<br>
														New Delhi 110033,
														(India)
														</p>
                    <br>
                              </p>
                              <p>
                                  <span style="font-weight:bold">Call Us : </span>(+91) 98 1132 5895
                              </p>
                              <p>
                                  <span style="font-weight:bold">Email Us : </span>vikas@labelwala.com
                              </p>
                              </div>
                              <div class="col-md-7">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111938.39991025442!2d77.080699162644!3d28.747177705588804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d021c6e5428fb%3A0xa5d508a0667f1764!2sGT+Karnal+Rd!5e0!3m2!1sen!2sin!4v1535802576762" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>      
                  </div>
                </div>
              </div>
            </div>
          </div>

      
      <div class="tab-pane" id="tab3">
        <div class="panel-group" id="help-accordion-2">      
          <div class="panel panel-default panel-help">
            <a href="#three" data-toggle="collapse" data-parent="#help-accordion-2">
              <div class="panel-heading">
                <h5> About Us</h5>
              </div>
            </a>
            <div id="three" class="collapse in">
              <div class="panel-body">
                     <p>
                    Label Wala Miracles is a  <span style="font-weight: 800"> privately  held </span>company based in North India. Since our inception in 1985</span>, we have been servicing Apparel and Retail industry with our  <span style="font-weight: 800"> innovative and cost-effective solutions.</span> We have constantly upgraded our machinery and systems to match the<span style="font-weight: 800"> world's best standards.</span> Our factories follow the world's best production and social standards and are approved by global agencies as <span style="font-weight: 800"> SEDEX, FSC, Disney FAMA.</span> <br><br>

                    Right from  <span style="font-weight: 800"> conceptualization of brand to supply </span>of trims and accessories we have successfully partnered our customers. We can  <span style="font-weight: 800"> supply directly to your locations of production</span> in the most efficient way. Our concepts are practical and cost-effective driven by low-cost ideology. <br><br>

                    We provide unsurpassed service by listening to each customer's unique requirements and then delivering just the right labels, tags and trims within specified delivery times.  <span style="font-weight: 800"> Give us a call and put LABELWALA service and quality to work for you.</span>  
                    </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
</div>

<?php
include ('footer.php')

?>