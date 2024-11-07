<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    @vite('resources/css/stylelogin.css')
    <title>Sign Up</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
    <!-- Tabs Titles -->
         <h2 class="inactive underlineHover">
          <a href="{{ route('login') }}">Sign In</a>
         </h2>
         <h2 class="active">Sign Up </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{ asset('img/user.png') }}" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form>
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email">
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
                
                <div class="password-wrapper">
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
                    <span class="fa fa-eye toggle-password" onclick="togglePassword()"></span>
                </div>
                
                <input type="number" id="number" class="fadeIn third" name="no_hp" placeholder="No HP">
                <input type="submit" class="fadeIn fourth" value="Sign Up">
            </form>

    <!-- Remind Passowrd -->
   
   </div>
 </div>
 <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.querySelector('.toggle-password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
