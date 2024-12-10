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
        .multicolor-text1 {
            background: linear-gradient(to left,
            #B68C5A,
            #258b84);
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
											
				<li><a href="login.php">Sign in</a></li>
				<?php }?>
				</ul>
			</div>
		</div>
	</header>
	<!-- header section end -->
	<!-- reg form start -->
	<div class="flex flex-col justify-center items-center font-[sans-serif] lg:h-screen p-6">
      <div class="grid md:grid-cols-2 items-center gap-y-8 bg-white max-w-7xl w-full shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md overflow-hidden">
        <div class="max-md:order-1 flex flex-col justify-center sm:p-8 p-4 bg-gradient-to-r from-gray-900 to-gray-700 w-full h-full">
          <div class="max-w-md space-y-12 mx-auto">
            <div>
              <h4 class="text-6xl font-extrabold font-garamond multicolor-text1">Book Your Legal Consultation Today!              </h4>
              <p class="text-base text-justify text-white font-poppins mt-2">Book your legal consultation today to receive expert advice and personalized service from our experienced team of attorneys. Whether you're facing a complex legal issue or simply need guidance on a matter, our dedicated professionals are here to help. Schedule your consultation now and take the first step towards resolving your legal concerns with confidence and peace of mind.</p>
            </div>
          </div>
        </div>
		<!-- form -->
		<form class="sm:p-8 p-4 w-full" action="user_registation.php" method="POST" enctype="multipart/form-data" id="validateForm">
			<div class="mb-12">
				<h3 class="text-gray-800 text-3xl font-extrabold max-md:text-center">Create Your Account</h3>
			</div>

			<div class="grid lg:grid-cols-2 gap-6">
				<div>
					<label class="text-gray-800 text-sm mb-2 block">First Name</label>
					<input name="first_name" type="text" id="first_Name" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" placeholder="Enter first name" required />
				</div>
				<div>
					<label class="text-gray-800 text-sm mb-2 block">Last Name</label>
					<input name="last_Name" type="text" id="last_Name" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" placeholder="Enter last name" required/>
				</div>
				<div>
					<label class="text-gray-800 text-sm mb-2 block">Email Id</label>
					<input name="email" type="text" id="email" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" placeholder="Enter email" required />
				</div>
				<div>
					<label class="text-gray-800 text-sm mb-2 block">Contact No.</label>
					<input name="contact_number" id="contact_number" type="number" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" placeholder="Enter contact number" required/>
				</div>
				<div>
					<label class="text-gray-800 text-sm mb-2 block">Password</label>
					<input name="user_password" id="user_password" type="password"  minlength="6" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" placeholder="Enter password" required/>
				</div>
				<div>
					<label class="text-gray-800 text-sm mb-2 block">Image</label>
					<input type="file" name="fileToUpload" id="image" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" oninput="CheckValue(this);" required />
				</div>
				<div>
					<label class="text-gray-800 text-sm mb-2 block" for="address">Address</label>
					<input type="text" name="full_address" id="full_address" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" placeholder="Enter address" required/>
				</div>
				<div>
					<label class="text-gray-800 text-sm mb-2 block" for="city">City</label>
					<select id="city" name="city" class="w-full bg-gray-100 text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" required>
						<option value="" selected>Choose...</option>
						<option value="Dhaka">Dhaka</option>
						<option value="Chittagong">Chittagong</option>
						<option value="Sylhet">Sylhet</option>
						<option value="Barishal">Barishal</option>
						<option value="Khulna">Khulna</option>
						<option value="Mymensingh">Mymensingh</option>
						<option value="Rajshahi">Rajshahi</option>
						<option value="Rangpur">Rangpur</option>
					</select>
				</div>
				<div>
					<label class="text-gray-800 text-sm mb-2 block" for="zip">Zip code</label>
					<input type="text" name="zip_code" id="zip_code" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" placeholder="Enter zip code" required/>
				</div>
			</div>

			<div class="flex items-center mt-6">
				<input id="accept" name="agree" type="checkbox" class="h-4 w-4 shrink-0 rounded" value="y"required/>
				<label for="remember-me" class="ml-3 block text-sm">
					I accept the <a href="javascript:void(0);" class="multicolor-text font-semibold hover:underline ml-1">Terms and Conditions</a>
				</label>
			</div>

			<div class="mt-6">
				<input name="post" type="submit" value="Sign Up" class="btn py-3 px-6 text-sm tracking-wide font-semibold rounded-md text-white bg-gray-800 hover:bg-[#222] focus:outline-none transition-all">
					
			</div>
		</form>
		<!-- form end -->
      </div>
    </div>
	<!-- reg form end -->
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            var firstName = document.getElementById('first_Name').value;
            var lastName = document.getElementById('last_Name').value;
            var email = document.getElementById('email').value;
            var contactNumber = document.getElementById('contact_number').value;
            var password = document.getElementById('user_password').value;
            var fullAddress = document.getElementById('full_address').value;
            var city = document.getElementById('city').value;
            var zipCode = document.getElementById('zip_code').value;
            
            if (!firstName || !lastName || !email || !contactNumber || !password || !fullAddress || !city || !zipCode) {
                event.preventDefault();
                alert('Please fill in all the required fields.');
                return false;
            }

            if (!validateEmail(email)) {
                event.preventDefault();
                alert('Please enter a valid email address.');
                return false;
            }
        });

        function validateEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    </script>

	</body>
</html>
