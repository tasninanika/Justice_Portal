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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
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
        .font-montserrat{
          font-family: "Montserrat", sans-serif;
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
                <li><a href="about.php">About Us <img src="images/arrow.svg" alt=""></a></li>
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
	</header>
	<!-- header section end -->
    <!-- main section start -->
    <main class="my-20 bg-gray-100">
      <!-- heading -->
      <section class="container lg:w-4/5 lg:mx-auto py-10">
        <div class="text-center">
          <h2 class="text-5xl font-extrabold font-garamond text-[#414040]">Our Services</h2>
          <p class="text-[#707070] font-poppins my-6 ">Whether it is a company matter at RJSC, your monthly VAT return submission, Income TAX return submission, any property-related issues, or, defending your rights at any Court, Legal Advice BD, is always ready to provide you with the best possible legal solution. However, in a nutshell, we have the following services to offer you as our valuable clients.</p>
        </div>
     
        <!-- first -->
        <section>
            <div class="hero">
              <div class="hero-content flex-col lg:flex-row lg:gap-20">
              <img
                src="images/business-law.jpg"
                class="lg:w-[400px] lg:h-96 rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-7xl font-extrabold font-montserrat text-[#CECECE]">#1</h1>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2">Business Setup, Startup, And FDI</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                Navigating the complexities of starting a business in Bangladesh can be daunting. At Justice Portal, we simplify the process, providing comprehensive support for business setups, aiding startups in understanding regulatory requirements, and assisting both local and foreign investors with Foreign Direct Investment (FDI) opportunities. Our seasoned team ensures that your business gets off the ground seamlessly, always compliant with local laws and positioned for success.
                </p>
                <button class="btn bg-gradient-to-r from-black to-[#0E675C] hover:bg-[#B68C5A] border-none text-white rounded-2xl px-7" onclick="showDetails(1)">View Details</button>
                <dialog id="my_modal_1" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                    <div id="show-details-container-1">

                    </div>
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  
                  </div>
                </dialog>
              </div>
            </div>
          </div>
        </section> 
        <!-- second -->
        <section>
            <div class="hero">
              <div class="hero-content flex-col lg:flex-row lg:gap-20">
              <div>
                <h1 class="text-7xl font-extrabold font-montserrat text-[#CECECE]">#2</h1>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2">Criminal Law Prosecution and Defense</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                We handle everything from providing legal representation in criminal cases to advising on regulatory and compliance issues. In today's environment, every individual and business should have reliable legal counsel for both serious and minor criminal matters. That's why we bring you some of the best criminal defense lawyers in Bangladesh at our law firm.  Our lawyers can assist you in any kind of Criminal Prosecution by advising and representing you in criminal courts.
                </p>
                <button class="btn bg-gradient-to-r from-black to-[#0E675C] hover:bg-[#B68C5A] border-none text-white rounded-2xl px-7" onclick="showDetails(2)">View Details</button>
                <dialog id="my_modal_2" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                    <div id="show-details-container-2">

                    </div>
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  
                  </div>
                </dialog>
              </div>
              <img
                src="images/criminal-law.jpg"
                class="lg:w-[400px] lg:h-96 rounded-lg shadow-2xl" />
            </div>
          </div>
        </section> 
        <!-- third -->
        <section>
            <div class="hero">
              <div class="hero-content flex-col lg:flex-row lg:gap-20">
              <img
                src="images/child-law.jpg"
                class="lg:w-[400px] lg:h-96 rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-7xl font-extrabold font-montserrat text-[#CECECE]">#3</h1>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2">Child Support</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                We handle everything from providing legal representation in child support cases to advising on related regulatory and compliance issues. In today’s environment, every individual should have reliable legal counsel for both serious and minor child support matters. That’s why we bring you some of the best child support attorneys in Bangladesh at our law firm.
                </p>
                <button class="btn bg-gradient-to-r from-black to-[#0E675C] hover:bg-[#B68C5A] border-none text-white rounded-2xl px-7" onclick="showDetails(3)">View Details</button>
                <dialog id="my_modal_3" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                    <div id="show-details-container-3">

                    </div>
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  
                  </div>
                </dialog>
              </div>
            </div>
          </div>
        </section> 
        <!-- fourth -->
        <section>
            <div class="hero">
              <div class="hero-content flex-col lg:flex-row lg:gap-20">
              <div>
                <h1 class="text-7xl font-extrabold font-montserrat text-[#CECECE]">#4</h1>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2">Educational Matter</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                We handle everything from providing legal representation in education law cases to advising on regulatory and compliance issues. In today’s environment, every educational institution and individual should have reliable legal counsel for both serious and minor education-related matters. That’s why we bring you some of the best education law attorneys in Bangladesh at our law firm.
                </p>
                <button class="btn bg-gradient-to-r from-black to-[#0E675C] hover:bg-[#B68C5A] border-none text-white rounded-2xl px-7" onclick="showDetails(4)">View Details</button>
                <dialog id="my_modal_4" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                    <div id="show-details-container-4">

                    </div>
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  
                  </div>
                </dialog>
              </div>
              <img
                src="images/educational-law.jpg"
                class="w-[400px] h-96 rounded-lg shadow-2xl" />
            </div>
          </div>
        </section> 
        <!-- fifth -->
        <section>
            <div class="hero">
              <div class="hero-content flex-col lg:flex-row lg:gap-20">
              <img
                src="images/divorce-law.jpg"
                class="w-[500px] h-96 rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-7xl font-extrabold font-montserrat text-[#CECECE]">#5</h1>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2">Expert Divorce Legal Solutions</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                We handle everything from providing legal representation in divorce cases to advising on related regulatory and compliance issues. In today’s environment, every individual going through a divorce should have reliable legal counsel for both complex and straightforward matters. That’s why we bring you some of the best divorce attorneys in Bangladesh at our law firm.
                </p>
                <button class="btn bg-gradient-to-r from-black to-[#0E675C] hover:bg-[#B68C5A] border-none text-white rounded-2xl px-7" onclick="showDetails(5)">View Details</button>
                <dialog id="my_modal_5" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                    <div id="show-details-container-5">

                    </div>
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  
                  </div>
                </dialog>
              </div>
            </div>
          </div>
        </section> 
        <!-- sixth -->
        <section>
            <div class="hero">
              <div class="hero-content flex-col lg:flex-row lg:gap-20">
              <div>
                <h1 class="text-7xl font-extrabold font-montserrat text-[#CECECE]">#6</h1>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2">Tax Related Issues</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                To keep you hassle-free from the complications of paying taxes and dealing with the procedures, Justice Portal is here to fulfill your needs! Our income tax lawyer in Bangladesh is unbeatable in terms of dealing the tax-related issues.So you can be sure that we can provide you with the best service with the best lawyer in Dhaka. Here are the services we have to offer you on your tax matters
                </p>
                <button class="btn bg-gradient-to-r from-black to-[#0E675C] hover:bg-[#B68C5A] border-none text-white rounded-2xl px-7" onclick="showDetails(6)">View Details</button>
                <dialog id="my_modal_6" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                    <div id="show-details-container-6">

                    </div>
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  
                  </div>
                </dialog>
              </div>
              <img
                src="images/tax-law.jpg"
                class="w-[400px] h-96 rounded-lg shadow-2xl" />
            </div>
          </div>
        </section> 
      </section>
    </main>
    <!-- main section end -->
     <!-- foooter -->
    <footer class="footer p-10 md:p-5  lg:p-20 bg-base-200 text-base-content bg-slate-950">
        <nav>
          <img src="images/logo (2).png" alt="" class="w-56 lg:-mt-10"> 
          <p class="font-poppins text-[#CFCFCF] w-64 h-32 lg:-mt-5">Justice Portal: Dhaka’s premier law firm, dedicated to delivering expert legal counsel and unparalleled client service since 2018.</p>
        </nav> 
        <nav>
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
          <fieldset class="form-control w-80 md:w-40">
            <label class="label">
              <span class="label-text font-poppins text-[#CFCFCF] w-56 md:w-32 h-20 mb-4">Subscribe for our latest & Articles. We Won’t Give You Spam Mails</span>
            </label> 
            <div class="join flex flex-col mx-auto gap-2 md:gap-2 lg:gap-0 md:flex-col  md:w-40 lg:w-auto lg:flex-row">
              <input type="text" placeholder="Email Address" class="input border-none join-item font-poppins md:rounded" /> 
              <button class="btn bg-button-color border-none rounded-xl"><img src="images/arrow2.svg" alt=""></button>
            </div>
          </fieldset>
        </form>
    </footer>
    <script src="js/service.js"></script>

</body>