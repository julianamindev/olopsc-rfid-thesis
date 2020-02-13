<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>

    <main class="login-container">
        <nav class="fixed-top d-flex p-3" style="align-items: center;">
            <img src="assets/img/olopsc logo.png" alt="" style="height: 60px;width: auto;">
            <p class="navbar-brand text-primary mb-0 ml-3" href="#">OLOPSC RFID System</p>
        </nav>
        <div class="card register-card">
            <div class="form-header">
                <h1 class="text-primary form-title mb-0 pb-0">Create Account</h1>
            </div>
            <hr class="line-break">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-primary mt-4 w-100">Let me in</button>
            </form>
        </div>

    </main>

    <?php echo $footer;?>
