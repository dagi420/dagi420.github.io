<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Payment</title>
    </head>
    <body>
       
    <!-------------payment integration form-------------------->
        <form method="post" action="https://test.yenepay.com/">
            <input type="hidden" name="process" value="Express">
            <input type="hidden" name="successUrl" value="http://localhost/Payment-with-Yenepay-Php - form/success.php">
            <input type="hidden" name="ipnUrssal" value="http://localhost/Payment-with-Yenepay-Php - form/ipn.php">
            <input type="hidden" name="cancelUrl" value="http://localhost/Payment-with-Yenepay-Php - form/cancel.php">
            <input type="hidden" name="merchantId" value="SB1151">
            <input type="hidden" name="merchantOrderId" value="xy2">
            <input type="hidden" name="expiresAfter" value="24">
            <input type="hidden" name="itemId" value="50">
            <input type="hidden" name="itemName" value="Mint-service">
            <input type="hidden" name="unitPrice" value="105.75">
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="discount" value="0.5">
            <input type="hidden" name="handlingFee" value="0">
            <input type="hidden" name="deliveryFee" value="0">
            <input type="hidden" name="tax1" value="0">
            <input type="hidden" name="tax2" value="0">
    <!------------------Form end---------------------------->
            <br>
            
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-4 col-lg-4 content-left">
       <div class="content-left-wrapper">
       <a href="./index.html" id="logo"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="https://www.facebook.com/mint_ethiopia/"><i class="icon-facebook"></i></a></li>
	                        <li><a href="https://twitter.com/odhiambokatieno"><i class="icon-twitter"></i></a></li>
	                      <li><a href="#0"><i class="icon-google"></i></a></li> 
	                    </ul>
	                </div>
                    <div>
	                    <figure>
                        <img src="./images/mint_logo.png" alt="" class="img-fluid" width="300px" height="300px">
                        </figure>
                        <h2>Pay with Yenepay </h2>
                        <p>Fill this form before you finish your payment.</p>
	                    <a href="../index.html" class="btn_1 rounded yellow">Back to Homepage</a>
	                    <a href="#start" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
	                </div>
                	               
                     <div class="copy">©2022 | Ministry of innovation and technology</div>
	            </div>
              
              
                <div class="col-xl-8 col-lg-8 content-right" id="start">
	                <div id="wizard_container">
                    <form action="https://formsubmit.co/el/komoxo" id="wrapped" method="post" enctype="multipart/form-data">

	                    <div id="middle-wizard">
	                       	<!-- step start -->
                               <div style="float:left">
                                      <h3>Billing Address</h3>
                                      <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                      <br>
                                      <input type="text" id="fname" name="firstname" placeholder="Enter your name" required>
                                      <br>
                                      <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                      <br>
                                      <input type="text" id="email" name="email" placeholder="Ethiopia@example.com" required>
                                      <br>
                                      <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                      <br>
                                      <input type="text" id="adr" name="address" placeholder="Woreda,sub-city" required>
                                      <br>
                                      <label for="city"><i class="fa fa-institution"></i> City</label>
                                      <br>
                                      <input type="text" id="city" name="city" placeholder="Semera" required>
                                      <br>
                                      <label for="state"><i class="fa fa-institution"></i> State</label>
                                      <br>
                                      <input type="text" id="state" name="state" placeholder="Afar" required>
                            </div>

                            <div style="float:right">
                                 <h3>Payment</h3>
                                 <label for="fname">Accepted Payment gateway</label>
                                 <div class="icon-container">
                                   <img class="logo-image" src="images/yenepay.png" alt="yenepay logo">
                                 </div>
                                <label for="cname">Name on Yenepay</label>
                                <br>
                                <input type="text" id="cname" name="cardname" placeholder="Mohammed Abutarika" required>
                                <br>
                                <label for="ccnum">Item(service) Name</label>
                                <br>
                                <input type="text" id="ccnum" name="itemName" placeholder="Mint-service" required>
                                <br>
                                <label for="expyear">Expires After</label>
                                <br>
                                <input type="text" name="expiresAfter" placeholder="24" required>
                                <br>
                                <label>
                                     <input type="checkbox" checked="checked" name="sameadr"> Direct bank transfer
                                   </label>
                                   <input type="submit" value="Pay Now" class="btn">
                                    
                            </div>
          
      
                                                       
                               <!-- /step-->

	                        <!-- /Start Branch ============================== -->
	                       

	                        <!-- /Work Availability > Full-time ============================== -->
	                       
	                              
	                        <!-- /step-->

	                        <!-- /Work Availability > Part-time ============================== -->
	                       
	                        <!-- /step-->

	                        <!-- /Work Availability > Freelance-Contract ============================== -->
	                        
	                        <!-- /step-->
	                        <!-- /step last-->

	                    
	                    <!-- /middle-wizard -->
	                    
	                    <!-- /bottom-wizard -->
	                </form>
	            </div>
	            <!-- /Wizard container -->
	        </div> 
      </form>
    </div>
  </div>



	            
            </div>
        </form>
    </body>
</html>