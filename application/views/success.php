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
    <style> 
     
     </style>
</head>  
<body  style="background-color: #8500ff !important; color: white !important;">
<div class="container-fluid" >
    <div class="row">
        <div class="col-sm-5 col-md-5 col-lg-5 mx-auto" style="margin-top: 10%;">
           <?php 
           
            if($resps['order_status']!= 'PAID'){ ?>
                <h1 style="text-align:center !important">Your transaction is Failed</h1>


           <?php }else{ ?>

                <h1 style="text-align:center !important">Your transaction is Successful</h1>
                    <?php }?>
     
        <table align="center">
             <tr>
                 <td>
                     Order id:
                 </td>
                 <td>  <?php  print_r($resps['cf_order_id']);?><td>
             </tr>
             <tr>
                 <td>Amount:</td>
                 <td>  <?php print_r($resps['order_amount']);?></td>
           </tr>
           <tr>
                 <td>Order Status:</td>
                 <td>
                   <?php print_r($resps['order_status']);?>

                 </td>
             </tr>
        </table>
    
       </div>
        </div>      
        <div>
       <?php if($resps['order_status']!= 'PAID'){ ?>
        <br>
                <h5 style="text-align:center !important; ">Worry not- Please retry the payment</h5>
       </br>

           <?php }?>
        </div>
        <div style="text-align: center;"><a href="http://localhost:8888/Hackathon/index.php/" ><input type="Button"  value="Back to shop" ></button></a></div>
      
</body>
</html>