<?php 
    include_once "php/config.php";
    session_start();
    if (!isset($_SESSION['unique_id'])) {
        header("location: login.php");
    }
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

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
        <section class="chat-area">
         <header>
            <?php 
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
            
            ?>
                <a href="users.php" class="back-icon"><i class="fa-solid fa-arrow-left"></i></a>
                <img src="php/images/<?php echo $row['img'] ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                    <p><?php echo $row['status'] ?></p>
                </div>
         </header>
         <div class="chat-box">
            
         </div>
         <form action="#" class="typing-area">
            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
            <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" class="input-field" name="message" placeholder="Enter a message...">
            <button><i class="fa-solid fa-paper-plane"></i></button>
         </form>
        </section>
    </div>


    <script src="javascript/chat.js"></script>
</body>
</html>