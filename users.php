<?php 
    session_start();
    if (!isset($_SESSION['unique_id'])) {
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat room</title>
    <link rel="stylesheet" href="style.css">
    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="wrapper">
        <section class="users">
         <header>
            <?php 
                include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>
            <div class="content">
                <img src="php/images/<?php echo $row['img'] ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                    <p><?php echo $row['status'] ?></p>
                </div>
            </div>
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
         </header>
         <div class="search">
            <span class="text">Select an user to start chat</span>
            <input type="text" placeholder="Enter name to search...">
            <button> <i class="fa-solid fa-search"></i></button>
         </div>
         <div class="users-list">

         </div>
        </section>
    </div>

    <script src="javascript/users.js"></script>
</body>
</html>