<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
		<li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Name:</em> <?php echo $_POST["name"]?></li>
        <li><em>Subject:</em> <?php echo $_POST["subject"]?></li>
        <li><em>Question:</em> <?php echo $_POST["message"]?></li>
    </ol>
</body>
</html>