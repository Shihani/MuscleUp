<?php
$page=''; include 'payment_header.php';
?>

<div class="container">
	<div>

        <div class="container col-6" align="center">
            
            <div class="card">
                <div class="card-header bg-success text-white"> Payment Details </div>
                <div class="card-body bg-light">
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Oops!</strong>
                            <?php echo validation_errors() ;?> 
                        </div>  
                    <?php endif ?>
                    <div id="payment-errors"></div>  
                     <form method="post" id="paymentFrm" enctype="multipart/form-data" action="<?php echo base_url('index.php/Payment/reg_check'); ?>">
                         <label> Registration Fee: Rs: 2500 </label>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo set_value('name'); ?>" required>
                        </div>  

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="email@you.com" value="<?php echo set_value('email'); ?>" required />
                        </div>

                         <div class="form-group">
                            <input type="number" name="card_num" id="card_num" class="form-control" placeholder="Card Number" autocomplete="off" value="<?php echo set_value('card_num'); ?>" required>
                        </div>
                       
                        
                        <div class="row">

                            <div class="col-sm-8">
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="exp_month" maxlength="2" class="form-control" id="card-expiry-month" placeholder="MM" value="<?php echo set_value('exp_month'); ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="exp_year" class="form-control" maxlength="4" id="card-expiry-year" placeholder="YYYY" required="" value="<?php echo set_value('exp_year'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="cvc" id="card-cvc" maxlength="3" class="form-control" autocomplete="off" placeholder="CVC" value="<?php echo set_value('cvc'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-right">
                          <button class="btn btn-secondary" type="reset">Reset</button>
                          <button type="submit" id="payBtn" class="btn btn-success">Submit Payment</button>
                        </div>
                    </form>     
                </div>
            </div>
                 
        </div>
    </div>
</div>

<?php include "footer.php";