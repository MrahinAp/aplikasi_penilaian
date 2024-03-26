<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h2 >Form PHP</h2>
        <form action="submit.php" method="post">
            <div class="form-group">
                <label for="name">1. Gundur:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">2. Rivan Sutrisno:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">3. Sherly:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">4. Wahyu:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>