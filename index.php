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
     
        .card1 {
          box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.25);
          transition: .2s all;
          cursor: pointer;
        }

        .card1 > span {
          display: block;
        }

        .cont:hover .card1 {
          filter: blur(3px);
          opacity: .5;
          transform: scale(.98);
          box-shadow: none;
          color:white;
        }

        .cont:hover .card1:hover {
          transform: scale(1);
          filter: blur(0px);
          opacity: 1;
          box-shadow: 0 8px 20px 0px rgba(0, 0, 0, 0.125);
          /* background: #0E675C; */
          color: white;
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
		<div class="hero min-h-screen my-16" style="background-image:  linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.204)), url(images/banner.jpg);">
            <div class="hero-overlay" style="background-image: url(images/Rectangle 7.png)"></div>
            <div class="hero-content text-center text-neutral-content">
              <div class="mx-auto">
                <h1 class="mb-5 text-7xl font-extrabold font-garamond text-[#FFF]">We Provide Effective <br> Legal Solutions</h1>
                <p class="mb-5 lg:px-40 font-poppins text-[#E7E7E7]">Want to get the best legal service in Bangladesh? Then, the Justice Portal should be your ultimate destination. Being an all-in-one law firm in Chattogram, we provide all types of legal consultancy and Advocacy in Bangladesh. Just contact us and inform your legal issues, and we will be ready to provide you with a convenient legal solution.</p>
                <a class="btn lg:text-lg font-semibold font-poppins btn-outline text-white lg:w-80" href="lawyers_card.php">Find Lawyers</a>
              </div>
            </div> 
      </div>		
	</header>
	<!-- header section end -->
	<!-- main section -->
	<main class="container lg:w-4/5 lg:mx-auto my-20">
      <!-- legal practice -->
    <section>
        <div class="text-center">
          <h2 class="text-5xl font-extrabold font-garamond text-[#414040]">The Legal Practice Area</h2>
          <p class="text-[#707070] font-poppins my-6 ">Legal practice involves advising clients on legal matters, representing them in legal proceedings,<br> and ensuring compliance with laws and regulations.</p>
        </div>
       <!-- legal cards -->
        <div class="my-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
          <!-- card-1 -->
          <div class="card lg:w-96 h-[470px] border-b rounded-none">
            <figure class="px-10 pt-14">
              <img src="images/business1.png" alt="Business Law" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title font-garamond text-3xl font-extrabold text-[#414040]">Business Law</h2>
              <p class="w-64 mt-4 font-poppins text-[#707070]">To simplify compliance with business tax regulations and legal procedures, the Justice Portal is your go-to solution for efficient management.</p>
              <div class="card-actions">
               <button><a href="service.php"><img src="images/Frame1.png" alt=""></a></button>
              </div>
            </div>
          </div>
          <!-- card-2 -->
          <div class="card lg:w-96 h-[470px] border bg-[#f3f3f3af] rounded-none">
            <figure class="px-10 pt-14">
              <img src="images/criminal2.png" alt="Business Law" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title font-garamond text-3xl font-extrabold text-[#414040]">Criminal Law</h2>
              <p class="w-64 mt-4 font-poppins text-[#707070]">To simplify the complexities of navigating criminal law and handling legal procedures, the Justice Portal is here to assist you every step of the way!</p>
              <div class="card-actions">
              <button><a href="service.php"><img src="images/Frame1.png" alt=""></a></button>
              </div>
            </div>
          </div>
          <!-- card-3 -->
          <div class="card lg:w-96 h-[470px] border-b rounded-none">
            <figure class="px-10 pt-14">
              <img src="images/child1.png" alt="Business Law" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title font-garamond text-3xl font-extrabold text-[#414040]">Child Support</h2>
              <p class="w-64 mt-4 font-poppins text-[#707070]">To ensure a smooth experience with child-related legal matters and obligations, the Justice Portal is here to managing all procedures effectively.</p>
              <div class="card-actions">
              <button><a href="service.php"><img src="images/Frame1.png" alt=""></a></button>
              </div>
            </div>
          </div>
          <!-- card-4 -->
          <div class="card lg:w-96 h-[470px] rounded-none">
            <figure class="px-10 pt-14">
              <img src="images/education1.png" alt="Business Law" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title font-garamond text-3xl font-extrabold text-[#414040]">Education Law</h2>
              <p class="w-64 mt-4 font-poppins text-[#707070]">To facilitate compliance with educational legal requirements, the Justice Portal is your best solution for managing all educational law matters.</p>
              <div class="card-actions">
              <button><a href="service.php"><img src="images/Frame1.png" alt=""></a></button>
              </div>
            </div>
          </div>
          <!-- card-5 -->
          <div class="card lg:w-96 h-[470px] border-l border-r rounded-none">
            <figure class="px-10 pt-14">
              <img src="images/divorce1.png" alt="Business Law" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title font-garamond text-3xl font-extrabold text-[#414040]">Divorce Law</h2>
              <p class="w-64 mt-4 font-poppins text-[#707070]">To simplify the complexities of divorce proceedings and legal requirements, the Justice Portal here to resolve all aspects of divorce law efficiently.</p>
              <div class="card-actions">
              <button><a href="service.php"><img src="images/Frame1.png" alt=""></a></button>
              </div>
            </div>
          </div>
          <!-- card-6 -->
          <div class="card lg:w-96 h-[470px] rounded-none">
            <figure class="px-10 pt-14">
              <img src="images/tax1.png" alt="Business Law" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title font-garamond text-3xl font-extrabold text-[#414040]">Tax Law</h2>
              <p class="w-64 mt-4 font-poppins text-[#707070]">To keep you hassle-free from the complications of paying taxes and dealing with the procedures, Justice portal is here to fulfill your needs!</p>
              <div class="card-actions">
              <button><a href="service.php"><img src="images/Frame1.png" alt=""></a></button>
              </div>
            </div>
          </div>
        </div>
    </section>
   <!-- Clients review -->
    <section class="my-24">
        <div class="text-center">
          <h2 class="font-garamond text-5xl font-extrabold text-[#414040]">What Our Clients Say</h2>
        </div>
        <!-- review -->
       <div class="my-28 cont grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        <!-- review 1 -->
       <div class="card card1 bg-base-100 lg:w-[350px] shadow-xl px-10 py-10">
          <div class="h-12 w-12">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#0c4013" d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/></svg>
          </div>
            <p class="font-poppins text-[#707070] mt-2">Starting a tech business in Bangladesh came with its set of legal challenges. Legal Advice BD, under the guidance of Advocate Nashir Ahmed Kushol, was instrumental in smoothing out the legal intricacies for us. Their expertise in business setup, especially for startups like ours, was invaluable. We deeply appreciate the dedication and professionalism shown by the entire team.
            <h2 class="font-bold font-poppins text-[#707070] mt-4">Ayesha Akhtar</h2>
            <p class="font-poppins text-[#707070]">CEO of DhakaTech Solutions</p>
        </div>
        <!-- review 2 -->
       <div class="-mt-6 ">
       <div class="card card1 bg-base-200 lg:w-[350px] shadow-2xl px-10 py-10">
          <div class="h-12 w-12">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#0c4013" d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/></svg>
          </div>
            <p class="font-poppins text-[#707070] mt-2">In our line of work, property disputes can often arise. Advocate Nashir Ahmed Kushol and his team at Legal Advice BD have consistently provided us with impeccable legal counsel, ensuring our interests are always protected. Their meticulous approach and understanding of property law are unparalleled in Dhaka.</p>
            <h2 class="font-bold font-poppins text-[#707070] mt-4">Rafiqul Islam</h2>
            <p class="font-poppins text-[#707070]">Director at Dynamic</p>
        </div>
       </div>
        <!-- review 3 -->
        <div class="card card1 bg-base-100 lg:w-[350px] shadow-xl px-10 py-10">
          <div class="h-12 w-12">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#0c4013" d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/></svg>
          </div>
            <p class="font-poppins text-[#707070] mt-2">Customs and VAT regulations can be a complex maze, especially in the import business. Legal Advice BD's team, with their comprehensive knowledge and proactive approach, has been our guiding light. Their advice has been pivotal in ensuring our operations remain compliant and efficient. Highly recommended for businesses looking for top-tier legal support.</p>
            <h2 class="font-bold font-poppins text-[#707070] mt-4">Tamanna Rahman
            </h2>
            <p class="font-poppins text-[#707070]">CFO, Bengal Importers Group
            </p>
        </div>
       </div>
    </section>
  <!-- FAQ -->
      <section class="my-24">
        <div class="text-center">
          <h2 class="font-garamond text-4xl lg:text-5xl md:text-5xl font-extrabold text-[#414040]">Why Should you Choose us as <br> Your Legal Support?</h2>
          <p class="font-poppins text-[#707070] text-sm lg:text-base md:text-base my-8">Choosing the right lawyer for your legal matters is the biggest challenge, no doubt.? The possibility of winning is quite influenced by your decision to choose the right lawyer. When it’s about services and expert lawyers, Legal Advice BD should be your first choice: Our clients is out top priority.</p>
        </div>
        <!-- qus -->
        <div class="hero min-h-screen">
          <div class="hero-content flex-col lg:flex-row-reverse lg:gap-4">
              <img src="images/faq.png" class=" rounded-lg " />
            <div class="mt-10 lg:-ml-5">
              <!-- first qus -->
              <div class="collapse collapse-plus bg-base-200 p-6 mb-7">
                <input type="radio" name="my-accordion-3" checked="checked" /> 
                <div class="collapse-title text-2xl font-extrabold font-garamond text-[#414040]">
                  1. Experienced Lawyers?
                </div>
                <div class="collapse-content font-poppins text-[#707070]"> 
                  <p>Our team is comprised of experienced lawyers and experts in related laws. They also hold modern technology-based knowledge which makes us one step ahead of others.</p>
                </div>
              </div>
              <!-- second qus -->
              <div class="collapse collapse-plus bg-base-200 p-6 mb-7">
                <input type="radio" name="my-accordion-3" checked="checked" /> 
                <div class="collapse-title text-2xl font-extrabold font-garamond text-[#414040]">
                  2. Proper Legal Guidance?
                </div>
                <div class="collapse-content font-poppins text-[#707070]"> 
                  <p>As a law firm, we always prioritizes your needs and carries a client-centric approach. We have experienced lawyers in different fields. We provide the best lawyers in Dhaka who can help you according to your problem, and you can have personalized legal guidance.</p>
                </div>
              </div>
              <!-- third qus -->
              <div class="collapse collapse-plus bg-base-200 p-6 mb-7">
                <input type="radio" name="my-accordion-3" checked="checked" /> 
                <div class="collapse-title text-2xl font-extrabold font-garamond text-[#414040]">
                  3. Prioritizing the Client?
                </div>
                <div class="collapse-content font-poppins text-[#707070]"> 
                  <p>We prioritize the needs of our clients. We understand your situation and are determined to give you the best service in the country. Here you will have proper guidance to solve your litigation or any other issues.</p>
                </div>
              </div>
              <!-- fourth qus -->
              <div class="collapse collapse-plus bg-base-200 p-6 mb-7">
                <input type="radio" name="my-accordion-3" checked="checked" /> 
                <div class="collapse-title text-2xl font-extrabold font-garamond text-[#414040]">
                  4. Professionalism?
                </div>
                <div class="collapse-content font-poppins text-[#707070]"> 
                  <p>Professionalism is our main motto. Clients can get the best services from us without any fear of scamming. We provide true advice to our clients and are dedicated to our profession.</p>
                </div>
              </div>
            </div>
          </div>
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
