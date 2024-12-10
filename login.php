<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justice Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,800;1,800&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'button-color': '#0E675C', 
              }
            }
          }
        }
    </script>
    <style>
        .font-garamond{
            font-family: "EB Garamond", serif;
        }
        .font-poppins{
            font-family: "Poppins", sans-serif;
        }
		.multicolor-text {
            background: linear-gradient(to left,
                	#0E675C,
                    black);
            -webkit-background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body>
	<!-- header section start -->
    <header class="container lg:w-5/5 lg:mx-auto my-4">
        <div class="navbar bg-base-100">
          <div class="flex-1">
            <h1 class="mb-36 lg:mb-0 -ml-10 lg:-ml-0 lg:text-4xl font-garamond flex multicolor-text"><img src="images/logo (2).png" alt="" class="lg:w-14 w-14 -mt-1">Justice Portal</h1>
          </div>
          <div class="flex-none">
            <ul class="menu menu-horizontal px-1 font-poppins text-gray-500">
            <li><a href="index.php">Home</a></li>
            <?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
                          <li class="">
                            <a class="nav-link cus-a" href="user_dashboard.php">Dashboard</a>
                          </li>
                          <li class="">
                            <a class="nav-link cus-a" href="logout.php">Sign out</a>
                          </li>
                          <?php }else{ ?>
                          
            <li><a href="user_register.php">Register</a></li>
            <?php }?>
            </ul>
          </div>
        </div>
    </header>
	<!-- header section end -->
	
	<!-- login form -->
	<div class="flex justify-center items-center font-[sans-serif] h-full min-h-screen p-4"
      style="background-image: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.204)), url(images/slider-2.jpg); background-repeat: no-repeat; background-size: cover;">
      <div class="max-w-md w-full mx-auto">
        <form action="db_con/db_login.php" method="POST" id="validateForm" class="bg-opacity-70 bg-white rounded-2xl p-6 shadow-[0_2px_16px_-3px_rgba(6,81,237,0.3)]">
          <div class="mb-12">
            <h3 class="text-gray-800 text-3xl font-extrabold">Sign in</h3>
          </div>
          <?php
				if(isset($_GET['error'])){
				//echo "<script>alert('Email or Password is wrong');</script>";
				echo "
				<div role='alert' class='alert alert-error mb-4'>
                                  <svg
                                    xmlns='http://www.w3.org/2000/svg'
                                    class='h-6 w-6 shrink-0 stroke-current'
                                    fill='none'
                                    viewBox='0 0 24 24'>
                                    <path
                                      stroke-linecap='round'
                                      stroke-linejoin='round'
                                      stroke-width='2'
                                      d='M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z' />
                                  </svg>
                                  <span>Error! Wrong password or email.</span>
                                </div>";
				}
				else if(isset($_GET['deactivate'])){
				//echo "<script>alert('Email or Password is wrong');</script>";
				echo "
				<div role='alert' class='alert alert-warning'>
                            <svg
                              xmlns='http://www.w3.org/2000/svg'
                              class='h-6 w-6 shrink-0 stroke-current'
                              fill='none'
                              viewBox='0 0 24 24'>
                              <path
                                stroke-linecap='round'
                                stroke-linejoin='round'
                                stroke-width='2'
                                d='M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z' />
                            </svg>
                            <span>Warning: Invalid password or email!</span>
                          </div>";
			}?>
          <div>
            <div class="relative flex items-center">
              <input name="email" type="text" required
                class="bg-transparent w-full text-sm text-gray-800 border-b border-gray-400 focus:border-gray-800 px-2 py-3 outline-none placeholder:text-gray-800"
                placeholder="Enter email" id="email" />
              <svg xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333" class="w-[18px] h-[18px] absolute right-2"
                viewBox="0 0 682.667 682.667">
                <defs>
                  <clipPath id="a" clipPathUnits="userSpaceOnUse">
                    <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                  </clipPath>
                </defs>
                <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                  <path fill="none" stroke-miterlimit="10" stroke-width="40"
                    d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                    data-original="#000000"></path>
                  <path
                    d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                    data-original="#000000"></path>
                </g>
              </svg>
            </div>
          </div>

          <div class="mt-6">
              <div class="relative flex items-center">
                  <input name="password" type="password"  minlength="6" required
                      class="bg-transparent w-full text-sm text-gray-800 border-b border-gray-400 focus:border-gray-800 px-2 py-3 outline-none placeholder:text-gray-800"
                      placeholder="Enter password" id="password"/>
                  <svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333"
                      class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                      <path
                          d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                          data-original="#000000"></path>
                  </svg>
              </div>
          </div>
          <div class="flex flex-wrap items-center justify-between gap-4 mt-6">
            <div class="flex items-center">
              <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 border-gray-300 rounded" />
              <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                Remember me
              </label>
            </div>
            <div>
              <a href="jajvascript:void(0);" class="multicolor-text text-sm font-semibold hover:underline">
                Forgot Password?
              </a>
            </div>
          </div>

          <div class="mt-12">
            <button type="submit"
              class="w-full py-2.5 px-4 text-sm font-semibold tracking-wider rounded-full text-white bg-gray-800 hover:bg-[#222] focus:outline-none" name="login" >
              Sign in
            </button>
            <p class="text-gray-800 text-sm text-center mt-6">Don't have an account? <a href=" user_register.php"
              class="multicolor-text font-semibold hover:underline ml-1 whitespace-nowrap" >Register here</a></p>
          </div>
        </form>
      </div>
    </div>
    <!-- script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('validateForm');
        const emailField = form.querySelector('[name="email"]');
        const passwordField = form.querySelector('[name="password"]');

        form.addEventListener('submit', function(event) {
            let isValid = true;

            // Validate email field
            const emailValue = emailField.value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailValue === '') {
                showError(emailField, 'Please Enter your email address');
                isValid = false;
            } else if (!emailRegex.test(emailValue)) {
                showError(emailField, 'Please Enter a valid email address');
                isValid = false;
            } else {
                showSuccess(emailField);
            }

            // Validate password field
            const passwordValue = passwordField.value.trim();
            if (passwordValue === '') {
                showError(passwordField, 'Please Enter Your Password');
                isValid = false;
            } else {
                showSuccess(passwordField);
            }

            if (!isValid) {
                event.preventDefault();
            }
        });

        function showError(input, message) {
            const formGroup = input.parentElement;
            const errorElement = formGroup.querySelector('.error-message');
            if (!errorElement) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.style.color = 'red';
                errorDiv.innerText = message;
                formGroup.appendChild(errorDiv);
            } else {
                errorElement.innerText = message;
            }
            input.classList.add('invalid');
            input.classList.remove('valid');
        }

        function showSuccess(input) {
            const formGroup = input.parentElement;
            const errorElement = formGroup.querySelector('.error-message');
            if (errorElement) {
                formGroup.removeChild(errorElement);
            }
            input.classList.add('valid');
            input.classList.remove('invalid');
        }
    });

    // toggle
    document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
        // Toggle the type attribute
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        // Optional: Toggle the eye icon
        if (type === 'password') {
            this.setAttribute('fill', '#333'); // Change to the "hidden" icon
        } else {
            this.setAttribute('fill', '#555'); // Change to the "visible" icon
        }
    });
});
</script>
	</body>
</html>
