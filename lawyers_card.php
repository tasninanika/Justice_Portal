<?php
	session_start();
	
	include("db_con/dbCon.php");
  $conn = connect();

	if (isset($_POST['submit'])){
    $experience=$_POST['experience'];
    $speciality=$_POST['speciality'];
    $location=$_POST['location'];
		
		// Build the query based on filters
		$query = "SELECT * FROM user, lawyer WHERE user.u_id=lawyer.lawyer_id AND user.status='Active'";
		
		if (!empty($experience)) {
			$query .= " AND lawyer.practise_Length='$experience'";
		}
		
		if (!empty($speciality)) {
			$query .= " AND lawyer.speciality='$speciality'";
		}
		
		if (!empty($location)) {
			$query .= " AND lawyer.city='$location'";
		}
		$result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 0) {
			$noResults = true;
		}
	} else {
		// Default query to display all lawyers
		$result = mysqli_query($conn, "SELECT * FROM user, lawyer WHERE user.u_id=lawyer.lawyer_id AND user.status='Active'");
	}	
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
	<!-- main section -->
	<main class="lg:mx-auto bg-gray-100 my-20">
        <div class="text-center mb-14 pt-10">
            <h2 class="text-5xl font-extrabold font-garamond text-[#414040]">OUR LAWYERS</h2>
        </div>
        <!-- Search Button and Modal -->
        <div class="flex justify-center">
        <button class="btn btn-outline w-80" onclick="my_modal_2.showModal()" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
            <path d="M14 14L16.5 16.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
            <path d="M16.4333 18.5252C15.8556 17.9475 15.8556 17.0109 16.4333 16.4333C17.0109 15.8556 17.9475 15.8556 18.5252 16.4333L21.5667 19.4748C22.1444 20.0525 22.1444 20.9891 21.5667 21.5667C20.9891 22.1444 20.0525 22.1444 19.4748 21.5667L16.4333 18.5252Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            <path d="M16 9C16 5.13401 12.866 2 9 2C5.13401 2 2 5.13401 2 9C2 12.866 5.13401 16 9 16C12.866 16 16 12.866 16 9Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
        </svg>
        Search Here
        </button> 
        <!-- Open the modal using ID.showModal() method -->
        <dialog id="my_modal_2" class="modal">
          <div class="modal-box">
          <form method="post" novalidate="novalidate">
            <div class="grid grid-cols-1 gap-4">
              <div>
                <div class="mb-4">
                  <label for="experience" class="block text-sm font-medium text-gray-700">Experience</label>
                  <select name="experience" class="mt-1 block w-full py-2 px-3 border border-gray-800 bg-white rounded-md shadow-sm focus:outline-none focus:ring-gray-800 focus:border-gray-800 sm:text-sm">
                    <option value="" selected>Choose...</option>
                    <option value="1-5 years">1-5 years</option>
                    <option value="6-10 years">6-10 years</option>
                    <option value="11-15 years">11-15 years</option>
                    <option value="16-20 years">16-20 years</option>
                    <option value="Most Senior">Most Senior</option>
                  </select>
                </div>
              </div>
              <div>
                <div class="mb-4">
                  <label for="speciality" class="block text-sm font-medium text-gray-700">Speciality</label>
                  <select name="speciality" class="mt-1 block w-full py-2 px-3 border border-gray-800 focus:ring-gray-800 focus:border-gray-800 bg-white rounded-md shadow-sm  sm:text-sm">
                    <option value="" selected>Choose...</option>
                    <option value="Criminal law">Criminal law</option>
                    <option value="Civil law">Civil law</option>
                    <option value="Writ Jurisdiction">Writ Jurisdiction</option>
                    <option value="Company law">Company law</option>
                    <option value="Contract law">Contract law</option>
                    <option value="Commercial law">Commercial law</option>
                    <option value="Construction law">Construction law</option>
                    <option value="IT law">IT law</option>
                    <option value="Family law">Family law</option>
                    <option value="Religious law">Religious law</option>
                    <option value="Investment law">Investment law</option>
                    <option value="Labour law">Labour law</option>
                    <option value="Property law">Property law</option>
                    <option value="Taxation law">Taxation law</option>
                  </select>
                </div>
              </div>
              <div>
                <div class="mb-4">
                  <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                  <select name="location" class="mt-1 block w-full py-2 px-3 border border-gray-800 focus:ring-gray-800 focus:border-gray-800 bg-white rounded-md shadow-sm focus:outline-none  sm:text-sm">
                    <option selected>Choose...</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur"></option>
                  </select>
                </div>
              </div>
            </div>
            <div class="grid grid-cols-1 gap-4">
              <div class="col-span-2"></div>
              <div class="col-span-1 flex justify-end -mr-4">
                <button id="button" type="submit" class="inline-flex items-center px-4 py-2 text-black text-sm font-medium rounded-md border btn-outline" name="submit" value="submit">
                   Search Information
                </button>
              </div>
            </div>
          </form>

          </div>
          <form method="dialog" class="modal-backdrop">
            <button>close</button>
          </form>
        </dialog>           
        </div>
        <!-- Display Filtered Lawyers -->
        <section class="w-full flex justify-center pb-20 my-20">
            <div class="grid lg:grid-cols-3 gap-8 container w-4/5">
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="card lg:h-[450px] bg-gray-700 border-2 border-slate-300 p-6 rounded-xl">
                    <figure class="flex justify-center mt-6">
                        <img src="./images 2/<?php echo $row['image']; ?>" alt="" class="w-32 h-32 rounded-full object-cover" />
                    </figure>
                    <div class="text-center mt-10">
                        <h2 class="text-3xl font-extrabold font-garamond text-white pb-1">
                            <?php echo $row['first_Name']; ?> <?php echo $row['last_Name']; ?>
                        </h2>
                        <p class="text-[#b5b0b0] font-poppins text-sm pt-2 pb-1">
                            Specialist in <?php echo $row['speciality']; ?>
                        </p>
                        <p class="text-[#b5b0b0] font-poppins text-xs pb-5">
                            <?php echo $row['practise_Length']; ?>
                        </p>
                        <div class="flex justify-center mt-6">
                            <a href="lawyers_info.php?u_id=<?php echo $row["u_id"]; ?>">
                                <button class="btn btn-outline text-white border-white">For More Info</button>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
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
