<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header;?>
<nav class="fixed-top d-flex p-3" style="align-items: center;">
        <img src="assets/img/olopsc logo.png" alt="" style="height: 60px;width: auto;">
        <p class="navbar-brand text-primary mb-0 ml-3" href="#">OLOPSC RFID System</p>
    </nav>
    <main class="login-container">
        <div class="card login-card">
            <div class="form-header">
                <h1 class="text-primary form-title mb-0 pb-0">Welcome</h1>
            </div>
            <hr class="line-break">
            <span class="text-danger"><small>Invalid username or password!</small></span>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username">
                   
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <a href="forgot" class="ps-link"><small>Forgot your password?</small></a>
                <button type="submit" class="btn btn-primary w-100 mt-4">Login</button>
            </form>
        </div>

    </main>
	<?php echo $footer;?>