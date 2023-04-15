<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <title>Sign Up</title>
</head>
<body>
    <?php 
        include 'header.php';
    ?>
    <main>
        <div class="container">
            <h1>Sign <span class="green">Up</span></h1>
            <form action="">
                <div class="image-input-item">
                    <label for="image-input" id="image">
                        <img src="images/plus.png" alt="">
                    </label>
                    <p id="image-status">Add Image</p>
                    <input type="file" name="image" accept="image/*" id="image-input" multiple>
                </div>
                <div class="input-item">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="inputs">
                    <div class="input-item">
                        <label for="">Full Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="input-item">
                        <label for="">Username</label>
                        <input type="text" name="uname" id="uname">
                    </div>
                </div>
                <div class="inputs">
                    <div class="input-item">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="input-item">
                        <label for="">Confirm Password</label>
                        <input type="password" name="c-password" id="c-password">
                    </div>
                </div>
                <div class="inputs">
                    <div class="input-item">
                        <label for="">Birth Date</label>
                        <input type="date" name="birth" id="birth">
                    </div>
                    <div class="input-item">
                        <label for="">Address</label>
                        <input type="text" name="address" id="address">
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" id="submit" value="Register">
                </div>
                
            </form>
        </div>
    </main>
    <?php 
        include 'footer.php';
    ?>
    <script src="main.js"></script>
</body>
</html>