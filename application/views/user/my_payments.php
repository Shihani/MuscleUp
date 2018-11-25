<?php $panel = "my_payments"; include 'my_profile_frame.php' ?>


    <div class="col-md-9">
        <div class="card">
            <h4 class="card-header">My Payments</h4>

            <?php
            if($this->session->flashdata('msg')) {
                echo $this->session->flashdata('msg');
            }
            ?>

            <div class="row" align="center" style="display: inline; margin-top: 10px;">
                <?php if($this->session->userdata('registered')!=1): ?>
                    <a href="<?=base_url('index.php/payment')?>" class="btn btn-danger"><small>pay</small> Registration Fee </a>
                <?php else: ?>
                    <a href="<?=base_url('index.php/payment/monthly_payment')?>" class="btn btn-outline-primary"><small>pay</small> Monthly Fee </a>
                <?php endif; ?>
            </div>

            <?php if(!isset($payments)): ?>
                <p> You haven't done any payment yet. </p>
            <?php else: ?>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Payment ID</th>
                            <th scope="col">Category</th>
                            <th scope="col">Method</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($payments as $payment): ?>
                            <tr>
                                <th scope="row"><?=$payment->id?></th>
                                <td><?=$payment->category?></td>
                                <td><?=$payment->method?></td>
                                <td><?=$payment->amount?></td>
                                <td><?=$payment->date?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php include 'my_profile_footer.php' ?>