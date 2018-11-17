<?php $page = 'login'; include 'header.php' ?>

    <div class="container w-50 p-2">
        <h3 class="text-center m-2" style="color: darkblue"> Sign Up  </h3>
        <hr>

        <span style="color: red"><?php echo validation_errors(); ?></span>
        <?php echo form_open("sign_up/user_sign_up"); ?>

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" value="<?php echo set_value('name'); ?>" name="name" required>
        </div>

        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" class="form-control" placeholder="Enter your date of birth" value="<?php echo set_value('dob'); ?>" name="dob" required>
        </div>

        <div class="form-group">
            <label>NIC</label>
            <input type="text" class="form-control" placeholder="Enter your NIC" value="<?php echo set_value('nic'); ?>" name="nic" required>
        </div>

        <div class="form-group">
            <label>Contact No</label>
            <input type="text" class="form-control" placeholder="Enter your contact no." value="<?php echo set_value('contact'); ?>" name="contact" required>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Enter your address" value="<?php echo set_value('address'); ?>" name="address" required>
        </div>

        <div class="form-group">
            <label> E-Mail </label>
            <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo set_value('email'); ?>" name="email" required>
        </div>

        <div class="form-group">
            <label> Username </label>
            <input type="text" class="form-control" placeholder="Enter a username" value="<?php echo set_value('username'); ?>" name="username" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
        </div>

        <div class="form-group">
            <label> Re-enter Password</label>
            <input type="password" class="form-control" placeholder="Enter Password Again" name="password_again" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary"> Submit </button>
        </div>

        <?php echo form_close(); ?>
    </div>

<?php include 'footer.php' ?>