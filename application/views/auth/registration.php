<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form method="post" action="<?= base_url('auth/registration') ?>">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="name" class="form-control" placeholder="Full name" required="required" autofocus="autofocus" name="name" value="<?= set_value('name'); ?>">
                        <!-- <label for="inputEmail">Full name</label> -->
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="email" class="form-control" placeholder="Email address" required="required" name="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        <!-- <label for="inputEmail">Email address</label> -->
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="password1" class="form-control" placeholder="Password" required="required" name="password1">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                <!-- <label for="inputPassword">Password</label> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="password2" class="form-control" placeholder="Confirm password" required="required" name="password2">
                                <!-- <label for="confirmPassword">Confirm password</label> -->
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url('auth'); ?>">Login Page</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>