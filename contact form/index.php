<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <div class="main">
        <p>SEND EMAIL</p>
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Full Name">
            <input type="text" name="mail" placeholder="mail">
            <input type="text" name="subject" placeholder="subject">
            <textarea name="message" placeholder="message"></textarea>
            <button type="submit" name="submit">SEND EMAIL</button>
        </form>
    </div>
    


</body>
</html>