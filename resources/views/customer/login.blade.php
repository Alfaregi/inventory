<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    @vite('resources/css/stylelogin.css')
    <title>Login</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>
            <h2 class="inactive underlineHover">
                <a href="{{ route('register') }}">Sign Up</a>
            </h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{ asset('img/user.png') }}" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form>
                <input type="text" id="username" class="fadeIn second" name="Username" placeholder="Username">
                <input type="password" id="password" class="fadeIn third" name="Password" placeholder="Password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Password -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</body>
</html>