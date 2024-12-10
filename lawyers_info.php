<?php
	session_start();
	
	include("db_con/dbCon.php");
	
?>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
        .font-weather{
            font-family: "Merriweather", serif;
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
    <header class="container lg:w-5/5 lg:mx-auto my-10">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
              <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a class="mt-0.5" href="index.php">Home</a></li>
                    <li><a href="service.php">Services <img src="images/arrow.svg" alt=""></a></li>
                    <li><a href="about.php">About Us <img src="images/arrow.svg" alt=""></a></li>
                    <li><a href="blog.php">Blog<img src="images/arrow.svg" alt=""></a></li>
                    <li><a href="contact.php">Contact Us <img src="images/arrow.svg" alt=""></a></li>
                </ul>
              </div>
              <h1 class="mb-36 lg:mb-0 -ml-10 lg:-ml-0 lg:text-4xl font-garamond flex multicolor-text"><img src="images/logo (2).png" alt="" class="lg:w-20 w-14">Justice <br> Portal</h1>
            </div>
            <div class="navbar hidden lg:flex">
              <ul class="menu menu-horizontal px-1 font-poppins text-gray-500">
                <li><a class="mt-0.5" href="index.php">Home</a></li>
                <li><a href="service.php">Services <img src="images/arrow.svg" alt=""></a></li>
                <li><a href="about.php">About Us<img src="images/arrow.svg" alt=""></a></li>
                <li><a href="blog.php">Blog <img src="images/arrow.svg" alt=""></a></li>
                <li><a href="contact.php">Contact Us <img src="images/arrow.svg" alt=""></a></li>
              </ul>
            </div>									
			<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
        <div >
          <ul class="flex gap-3">
            <li class="font-poppins text-gray-700">
					<a class="nav-link cus-a" href="user_dashboard.php">Dashboard</a>
					</li>
					<li class="font-poppins text-gray-700">
					<a class="nav-link cus-a" href="logout.php">Logout</a>
					</li>
          </ul>        
        </div>				
					<?php }else{ ?>
					<div class="dropdown dropdown-click">
						<div tabindex="0" role="button" class="btn font-poppins lg:text-lg text-xs text-white bg-gradient-to-r from-[#0E675C] to-black lg:w-60 h-14 lg:m-1">Book Consultation</div>
						<ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] lg:w-48 w-40 p-2 shadow">
							<li><a href="login.php">Sign in</a></li>
							<li><a href="user_register.php">Register</a></li>
							<?php }?>
						</ul>
					</div>
			</div>
		  </div>
		<!-- banner section -->				
	</header>
	<!-- header section end -->
	<!-- main section start -->
     <main class="bg-gray-700 my-24 py-14">
     <section class="container mx-auto w-4/5 py-24">
     <?php
						
						include_once 'db_con/dbCon.php';
						$conn = connect();
						
						$result = mysqli_query($conn,"SELECT * FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id AND user.status='Active' AND user.u_id='" . $_GET['u_id'] . "'");
						
						while($row = mysqli_fetch_array($result)) {
						?>
    <div class="grid lg:grid-cols-2 items-center lg:gap-48 ">
        <div class="text-white">
            <h3 class="font-poppins text-lg">Hello, I'm</h3>
            <h3 class="font-garamond text-5xl"><?php echo $row["first_Name"]; ?> <?php echo $row["last_Name"]; ?></h3>
            <p class="text-[#d7d3d3] text-justify font-poppins my-6">
            With deep expertise in <?php echo $row["speciality"]; ?>, I provide compassionate and strategic legal guidance to help you navigate through life's most challenging situations. Let me advocate for best interests with dedication and care.
            </p>
            <button class="btn btn-outline text-white" onclick="my_modal_2.showModal()">Book An Appoinment Now</button>
            <!-- Open the modal using ID.showModal() method -->
            <dialog id="my_modal_2" class="modal">
              <div class="modal-box">
              <form action="save_booking.php" method="post" class="">
                    <input type="hidden" name="lawyer_id" value="<?php echo $row['u_id']; ?>">
                    <input type="hidden" name="client_id" value="<?php echo $_SESSION['client_id']; ?>">

                    <div class="grid grid-cols-1 gap-6 mb-4">
                        <!-- Date Input -->
                        <div>
                        <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="date" id="date" name="date" class="w-full mt-2 text-sm p-2 font-poppins border border-gray-800 text-black rounded focus:outline-none focus:ring-2 focus:ring-gray-700">

                        </div>

                        <!-- Description Textarea -->
                        <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="" cols="20" rows="4" placeholder="Write description if any" class="w-full mt-2 p-2 font-poppins border border-gray-800 rounded text-black focus:outline-none focus:ring-2 focus:ring-gray-700"></textarea>
                        </div>

                        <!-- Submit Button or Login Message -->
                        <div class="flex items-center justify-start">
                            <?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
                                <input name="post" type="submit" class="px-4 py-2 btn btn-outline font-poppins" value="Request booking" />
                            <?php } else { ?>
                                <h6 class="text-green-900 font-poppins">
                                    <a href="login.php">*To request a lawyer booking, please login or register first.</a>
                                </h6>
                            <?php } ?>
                        </div>
                    </div>
                </form>
              </div>
              <form method="dialog" class="modal-backdrop">
                <button>close</button>
              </form>
            </dialog>
        </div>
        <div class="flex justify-center lg:-top-9 relative">
          <img src="images/shape-4.png" alt="" class="absolute w-80 h-80 -bottom-18">
            <img
                src="images 2/<?php echo $row["image"]; ?>"
                class="max-w-sm w-60 h-60 relative top-10 rounded-full object-cover"
            />
        </div>
      </div>
    </section>
    <section class="py-16 mx-auto">
      <div class="flex justify-center">
      <h3 class="font-garamond text-4xl lg:text-5xl text-center text-[#e2dede] font-extrabold">Education & Experience</h3>
      </div>
      <div class="flex justify-center flex-col lg:flex-row gap-x-16 mx-auto mt-32">
    <!-- First Card -->
     <div class=" bg-sky-50 rounded-r-xl lg:w-[590px] rounded-l-none p-6 border-s-8 border-slate-300">
        <h3 class="text-3xl font-bold font-garamond mb-2">Education</h3>
        <p class="text-green-900 font-semibold mb-4"> <?php echo $row["passing_year"]; ?> | Graduated with an <?php echo $row["degree"]; ?></p>
        <p class="text-[#707070] text-justify font-poppins">I completed my <?php echo $row["degree"]; ?> at <?php echo $row["university_College"]; ?>, graduating in <?php echo $row["passing_year"]; ?>. My academic journey has equipped me with a solid foundation in legal principles, where I am committed to making a meaningful impact through dedicated practice and client advocacy.</p>
      </div>

    <!-- Second Card -->
    <div class=" bg-sky-50 rounded-r-xl lg:w-[590px] rounded-l-none p-6 border-s-8 border-slate-300">
        <h3 class="text-3xl font-bold font-garamond mb-2">Experience</h3>
        <p class="text-green-900 font-semibold mb-4"> <?php echo $row["practise_Length"]; ?> | <?php echo $row["speciality"]; ?></p>
        <p class="text-[#707070] text-justify font-poppins">With <?php echo $row["practise_Length"]; ?> of continuous practice, I have honed my expertise in <?php echo $row["speciality"]; ?> while also handling cases in <?php echo $row["case_handle"]; ?>. This extensive experience enables me to provide well-rounded legal support, ensuring my clients receive the highest level of representation across various legal matters.</p>
      </div>
    </div>
    <?php
						}
					?>
    </section>
     </main>
    
	<!-- main section end -->
   <!-- foooter -->
    <footer class="footer px-10 md:p-5  lg:p-20 bg-base-200 text-base-content bg-slate-950">
        <nav>
          <img src="images/logo (2).png" alt="" class="w-56 lg:-mt-10"> 
          <p class="font-poppins text-[#CFCFCF] w-64 h-32 lg:-mt-5">Justice Portal: Dhaka’s premier law firm, dedicated to delivering expert legal counsel and unparalleled client service since 2018.</p>
        </nav> 
        <nav class="">
          <h3 class=" text-2xl font-extrabold font-garamond text-[#FFFFFF]">Usefull Link</h3> 
          <a href="index.php" class="link link-hover font-poppins text-[#0E675C]">Home</a>
          <a href="about.php" class="link link-hover font-poppins text-[#0E675C]">About Us</a>
          <a href="service.php" class="link link-hover font-poppins text-[#0E675C]">Services</a>
          <a href="blog.php" class="link link-hover font-poppins text-[#0E675C]">Blog</a>
          <a href="contact.php" class="link link-hover font-poppins text-[#0E675C]">Contact Us</a>
        </nav> 
        <nav>
          <h6 class="text-2xl font-extrabold font-garamond text-[#FFFFFF]">Contact Now</h6>
          <a class="link link-hover font-poppins text-[#0E675C] flex gap-1"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>+88 01750 000 000 <br>
            +88 01750 096 101</a> 
          <a class="link link-hover font-poppins text-[#CFCFCF] flex gap-1"><svg xmlns="http://www.w3.org/2000/svg" height="18" width="18" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M429.6 92.1c4.9-11.9 2.1-25.6-7-34.7s-22.8-11.9-34.7-7l-352 144c-14.2 5.8-22.2 20.8-19.3 35.8s16.1 25.8 31.4 25.8l176 0 0 176c0 15.3 10.8 28.4 25.8 31.4s30-5.1 35.8-19.3l144-352z"/></svg> 117 Borak Unique Heights,<br> Flat#9C (8th Floor),<br> Kazi Nazrul Islam Avenue, Ramna, <br> Dhaka-1217, Bangladesh.</a>
          <a class="link link-hover font-poppins text-[#0E675C] flex gap-1"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fcfcfc" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>info@justiceportal.com</a>
          <a class="link link-hover font-poppins text-[#CFCFCF] flex gap-1"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#f7f7f7" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>Sat-Thu 10 AM to 9 PM, Fri off</a>
          
        </nav> 
        <form>
          <h6 class="text-2xl font-extrabold font-garamond text-[#FFFFFF]">Subscribe</h6> 
          <fieldset class="form-control md:w-40">
            <label class="label">
              <span class="label-text font-poppins text-[#CFCFCF] w-56 md:w-32 h-20 mb-4">Subscribe for our latest & Articles. We Won’t Give You Spam Mails</span>
            </label> 
            <div class="join flex flex-col mx-auto gap-2 md:gap-2 lg:gap-0 md:flex-col  md:w-40 lg:w-auto lg:flex-row">
              <input type="text" placeholder="Email Address" class="input border-none join-item rounded font-poppins md:rounded" /> 
              <button class="btn bg-button-color border-none rounded-xl"><img src="images/arrow2.svg" alt=""></button>
            </div>
          </fieldset>
        </form>
    </footer>
	</body>
</html>
