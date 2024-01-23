<?php
    session_start();
    if (isset($_SESSION['unique_id'])) {
        header("location: users.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="style.css">
    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">this is an error message</div>
                    <div class="field input">
                        <label >Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label >Password</label>
                        <input type="password" name="password" placeholder="Enter your password">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="continue to chat">
                    </div>
                
                    <div class="link">Not yet signed up? <a href="./register.php">Signup now</a></div>
            </form>
        </section>
    </div>

    <script src="javascript/show-hide-pass.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>