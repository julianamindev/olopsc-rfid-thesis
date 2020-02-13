<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header; ?>

    <main class="login-container">
        <div class="card login-card">
            <div class="form-header">
                <h1 class="text-primary form-title mb-0 pb-0">Forgot Password</h1>
            </div>
            <hr class="line-break">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">Forgot Password</button>
            </form>
        </div>

    </main>

    <?php echo $footer;?>
