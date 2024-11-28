<?php 
$pageTitle = "Sign Up or Login";
include 'header.php'; 
?>

<div class="container my-5">
    <!-- Replace text with image -->
    <div class="text-center mb-4">
        <!-- Resize the image using Bootstrap classes or custom CSS -->
        <img src="VISIONARY-logo.jpg" alt="VISIONARY-Logo" class="img-fluid" style="max-width: 175px;">
    </div>

    <!-- Display Error or Success Message -->
    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger text-center"><?php echo htmlspecialchars($_GET['error']); ?></div>
    <?php endif; ?>

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success text-center"><?php echo htmlspecialchars($_GET['success']); ?></div>
    <?php endif; ?>

    <!-- Tabs for Login and Sign Up -->
    <ul class="nav nav-tabs justify-content-center" id="authTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a>
        </li>
    </ul>

    <!-- Login and Sign Up Content -->
    <div class="tab-content" id="authTabContent">
        <!-- Login Form -->
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <div class="container my-4">
                <h3 class="text-center">Login</h3>
                <form action="process-login.php" method="POST">
                    <div class="form-group">
                        <label for="login-email">Email</label>
                        <input type="email" class="form-control" id="login-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" class="form-control" id="login-password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>

        <!-- Sign Up Form -->
        <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
            <div class="container my-4">
                <h3 class="text-center">Sign Up</h3>
                <form action="process-signup.php" method="POST">
                    <div class="form-group">
                        <label for="signup-name">Full Name</label>
                        <input type="text" class="form-control" id="signup-name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="signup-email">Email</label>
                        <input type="email" class="form-control" id="signup-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="signup-password">Password</label>
                        <input type="password" class="form-control" id="signup-password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
