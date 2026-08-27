<?php include 'layout/header.php'; ?>

<main class="container">

    <div class="form-box">
        <form action="" method="POST">

            <h2>Login</h2>

            <input
                type="email"
                name="email"
                placeholder="Email"
                required
            >

            <input
                type="password"
                name="password"
                placeholder="Password"
                required
            >

            <a href="forgotPass.php" class="forgot-link">
                Forgot Password?
            </a>

            <button type="submit" name="login">
                Login
            </button>

            <p>
                Don't have an account?
                <a href="register.php">Register</a>
            </p>

        </form>
    </div>

</main>

<?php include 'layout/footer.php'; ?>