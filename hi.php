<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Example</title>
</head>
<body>
    <h1>Welcome to PHP with HTML</h1>
    <p>The current date and time is:</p>
    <p>
        <?php
            // Display the current date and time
            echo date('Y-m-d H:i:s');
        ?>
    </p>
    <form method="post" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
    <?php
        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            echo "<p>Hello, $name! Nice to meet you.</p>";
        }
    ?>
</body>
</html>
