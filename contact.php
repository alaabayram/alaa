<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style_contact.css">
    <title>login</title>
    </head>

<body>
<?php require "header.php";?>

    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="contact">
                    <form action="contact_action.php" method="post">
                        <h3>Contact Us</h3>
                        <?php

                        if (isset($_POST['submit'])) {
                            if ($email !== 1) {
                                echo ("<div class='error' style='color:red !important;'>email invalid</div>");
                            }
                        }

                        ?>
                        <input type="text" name="name" placeholder="Your Name" required><br>
                        <input type="email" name="email" placeholder="Your Email" required><br>
                        <textarea name="message" placeholder="Type your message her..." rows="6" required></textarea>
                        <button class="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="right" id="contact">
                <div class="right-text">
                </div>
                <div class="right-inductor"><img> </div>
                </div>
    </section>
    <?php require "footer.php"?>
</body>

</html>
