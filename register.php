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
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">this is an error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label >First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label >Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label >Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label >Password</label>
                        <input type="password" name="password" placeholder="Enter new password" required>
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label >Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="continue to chat">
                    </div>
                
                    <div class="link">Already signed up? <a href="./login.php">login now</a></div>
            </form>
        </section>
    </div>

    <script src="javascript/show-hide-pass.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>