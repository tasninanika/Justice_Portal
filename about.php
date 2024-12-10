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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
     <header class="container lg:mx-auto my-10">
        <div class=" navbar bg-base-100">
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
		<!-- banner section -->
		<div class="hero min-h-screen my-16" style="background-image:  linear-gradient(rgb(30, 59, 42), rgba(23, 2, 2, 0.204)), url(images/slider-3.jpg);">
            <div class="hero-overlay" style="background-image: url(images/Rectangle 7.png)"></div>
            <div class="hero-content text-center text-neutral-content">
              <div class="mx-auto my-5">
                <p class="mb-5 text-lg font-poppins font-medium text-[#FFF]">ABOUT US</p>
                <img src="images/atorny.png" alt="" class="max-w-32 lg:max-w-lg mx-auto mb-5">
                <h1 class="mb-5 text-4xl lg:text-7xl font-extrabold font-garamond multicolor-text1">Justice Portal</h1>
               <p class="mb-5 text-base lg:text-lg font-poppins text-[#E7E7E7]  lg:px-24">Since our inception in 2018, Justice Portal has steadily risen to become a beacon of legal excellence in Dhaka. With consistent appearances before various benches in Dhaka Metropolitan & District Court, Tribunals, and the Supreme Court of Bangladesh, our reputation for tenacity, expertise, and professionalism is unparalleled.</p> 
              </div> 
            </div>
      </div>		
	</header>
	<!-- header section end -->
    <!-- main section start -->
     <main class="my-20 ">
      <div class="lg:mx-36 mx-auto">
        <!-- first -->
        <section>
            <div class="hero">
              <div class="hero-content flex-col lg:flex-row lg:gap-24 lg:mb-10">
              <div>
                <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-10 lg:pb-16">Mission                </h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                At <span><a href="index.php" class="text-[#0E675C] hover:text-[#B68C5A]">Justice Portal</a></span>, our mission is to provide comprehensive, top-tier legal solutions that cater to each client’s unique needs. Founded in 2018, we’ve always upheld the principles of justice, integrity, and commitment, ensuring every client feels valued, understood, and represented to the highest degree.</p>
              </div>
              <img src="images/about1.jpg" class=" rounded-lg shadow-2xl" />
            </div>
          </div>
        </section> 
        <!-- second -->
        <section>
            <div class="hero">
              <div class="hero-content flex-col-reverse lg:flex-row lg:gap-24">
              <img src="images/about2.jpg" class="rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-10 lg:pb-16">Vision</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                To be the foremost legal advisory firm in Dhaka and across Bangladesh, setting the benchmark for excellence in legal counsel and driving the principles of transparency, dedication, and innovation in every case we handle.
                </p>
              </div> 
            </div>
          </div>
        </section> 
      </div>
      <!-- team -->
        <section class="my-24 bg-gray-100 py-20">
          <div>
            <h2 class="text-5xl font-extrabold font-garamond text-[#414040] text-center mb-24">Our Team</h2>
          </div>
          <div class="flex flex-col lg:flex-row lg:justify-center lg:items-center lg:gap-20 gap-5">
             <!-- first card -->
            <div class="card lg:w-96 lg:h-[500px] border-slate-300 border-2">
              <figure class="mt-12">
                <img
                  src="images/member4.png" alt="" />
              </figure>
              <div class="card-body text-center">
                <h2 class="text-3xl font-extrabold font-garamond text-[#414040] text-center pb-1">Advocate Rashna Imam              </h2>
                <p class="text-[#707070] font-poppins text-xs pb-5">Corporate & commercial, constitutional law litigation, foreign investment</p>
                <p class="text-[#707070] font-poppins ">We pride ourselves on our diverse team of seasoned legal professionals, each bringing unique expertise. This diverse skill set ensures that no matter the nature of the legal challenge.</p>
              </div>
            </div>
           <!-- second card -->
            <div class="card  lg:w-96 lg:h-[500px] border-slate-300 border-2">
              <figure class="mt-12">
                <img
                  src="images/member1.png" alt="" />
              </figure>
              <div class="card-body text-center">
                <h2 class="text-3xl font-extrabold font-garamond text-[#414040] text-center pb-1">Advocate Nashir Ahmed</h2>
                <p class="text-[#707070] font-poppins text-xs pb-5">Civil and Corporate Law, criminal law</p>
                <p class="text-[#707070] font-poppins ">We pride ourselves on our diverse team of seasoned legal professionals, each bringing unique expertise. This diverse skill set ensures that no matter the nature of the legal challenge.</p>
              </div>
            </div>
          </div>
         <!-- third card  -->
          <div class="mt-16 lg:flex lg:justify-center lg:items-center">
            <div class="card  lg:w-96 lg:h-[500px] border-slate-300 border-2">
                <figure class="mt-12">
                  <img
                    src="images/member2.png" alt="" />
                </figure>
                <div class="card-body text-center">
                  <h2 class="text-3xl font-extrabold font-garamond text-[#414040] text-center pb-1">Advocate Tania Amir</h2>
                  <p class="text-[#707070] font-poppins text-xs pb-5">Corporate & commercial, vat & tax, education, divorce law</p>
                  <p class="text-[#707070] font-poppins ">We pride ourselves on our diverse team of seasoned legal professionals, each bringing unique expertise. This diverse skill set ensures that no matter the nature of the legal challenge.</p>
                </div>
              </div>
          </div>
        </section>
      <!-- clients -->
        <section class="my-24 mx-40">
          <div>
            <h2 class="text-5xl font-extrabold font-garamond text-[#414040] text-center mb-16">Our Clients</h2>
          </div>
          <p class="text-[#707070] font-poppins text-justify pb-7">We have represented a diverse clientele, from local startups and entrepreneurs to multinational corporations. Our client-centric approach has garnered trust and appreciation, fostering long-term partnerships. We are always committed to providing tailored solutions that resonate with our client’s unique needs and aspirations.</p>
          <div class="relative">
             <div class="carousel gap-10 mx-10 ">
                <div class="carousel-item">
                  <img
                    src="images/client1.jpg"
                    alt="" />
                </div>
                <div class="carousel-item">
                  <img
                    src="images/client2.jpg"
                    alt="" />
                </div>
                <div class="carousel-item">
                  <img
                    src="images/client3.jpg"
                    alt="" />
                </div>
                <div class="carousel-item">
                  <img
                    src="images/client4.jpg"
                    alt="" />
                </div>
                <div class="carousel-item">
                  <img
                    src="images/client5.jpg"
                    alt="" />
                </div>
                <div class="carousel-item">
                  <img
                    src="images/client6.jpg"
                    alt="" />
                </div>
                <div class="carousel-item">
                  <img
                    src="images/client7.jpg"
                    alt="" />
                </div>
              </div>
          </div>
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
	</body>
</html>