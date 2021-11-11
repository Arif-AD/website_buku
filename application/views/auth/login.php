<div class="login-box">
    <!-- /.login-logo -->
    <div class="login-box-body">
        <h3 class="login-box-msg"><b>Login</b></h3>
        <?= $this->session->flashdata('message'); ?>
        <form action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" name="username" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-xs-12">
                <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>