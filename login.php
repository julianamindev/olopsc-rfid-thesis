<?php include('header.php'); ?>

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
            <form>
                <div class="form-group">
                    <input type="text" class="form-control form-error" placeholder="Username">
                    <span class="text-danger"><small>This field is required</small></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-error" placeholder="Password">
                    <span class="text-danger"><small>This field is required</small></span>
                </div>
                <a href="#" class="ps-link"><small>Forgot your password?</small></a>
                <button type="submit" class="btn btn-primary w-100 mt-4">Let me in</button>
            </form>
        </div>

    </main>

    <?php include('footer.php'); ?>
