<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>Cashfree</title>  
</head>  
<body style="background-color: #8500ff !important;">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5 col-md-5 col-lg-5 mx-auto">
           <h5 style="color:white !important; margin-top: 100px;">Cashfree Payment Gateway Integration with CodeIgniter </h5>
            <br><h3><img style="width: 263px; height: 190px;"  src="<?php echo base_url().'./assets/images/cilogo1.png'; ?>"><img  style="width: 263px; height: 66px;" src="<?php echo base_url().'./assets/images/cf.png'; ?> ">
                    <img src="<?php //echo base_url().'./assets/images/cf1.jpeg'; ?>">  
        </br>
        </div>      
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">     
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Checkout Page</h5>
                    <form action="<?php echo base_url().'index.php/Payment/'; ?>" method="post" class="form-signin">
                        <div class="form-label-group">
                           
                            <input type="hidden" name="OrderID" id="OrderID" class="form-control" placeholder="OrderID" value="<?php 'OrderId_'.rand();?>" required >
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="email">Amount <span style="color: #FF0000">*</span></label>
                            <input type="text" name="order_amount" id="order_amount" class="form-control" placeholder="Amount" required>
                        </div> 
                       
                        <div class="form-label-group">
                            <input type="hidden" id="Currency" name="order_currency"  value="INR" class="form-control" placeholder="Customer Contact No" required>
                        </div><br/>
                        <label for="subject">Customer ID <span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="text" id="customerID" name="customer_id"  value="<?php 'CustomerId_'.rand();?>" class="form-control" placeholder="customerID" required>
                        </div><br/>
						<div class="form-label-group">
                            <label for="name">Customer Email <span style="color: #FF0000">*</span></label>
                            <input type="text" name="customer_email" id="customer_email" class="form-control" placeholder=" Customer email" required >
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="email">Customer Phone <span style="color: #FF0000">*</span></label>
                            <input type="text" name="customer_phone" id="cphone" class="form-control" placeholder="Customer Phone " required>
                        </div> 
                    
                        <div class="form-label-group">
                            <input type="hidden" id="return_url" name="return_url" class="form-control" value="http://localhost:8888/Hackathon/index.php/payment/success?order_id={order_id}&order_token={order_token}"   readonly>
                        </div>
		                
                        <div class="form-label-group">
                            <input type="hidden" id="notify_url" name="notify_url"  class="form-control" value="https://webhooktestbygaurav.000webhostapp.com/webhook.php"  readonly>
                        </div><br/>
                             <label for="subject">Payment Method <span style="color: #FF0000"></span></label>
                        <div class="form-label-group">
                            <input type="text" id="payment_methods" name="payment_methods"  class="form-control" placeholder="Payment Method optional" >
                        </div><br/>
						<div class="form-label-group">
                            <label for="name">Order Note <span style="color: #FF0000"></span></label>
                            <input type="text" name="order_note" id="order_note" class="form-control" placeholder="Order Note optional">
                        </div> <br/>
                        
                       <br/>
                       <button type="submit" name="sendMailBtn" class="btn btn-lg btn-primary btn-block text-uppercase" >Pay with Cashfree</button> 

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>