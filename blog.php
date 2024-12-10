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
        
        .icon-hover:hover {
            color: #B68C5A; 
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
                    <li><a class="mt-0.5" href = "index.php">Home</a></li>
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
		<div class="hero min-h-screen my-16" style="background-image:  linear-gradient(rgb(30, 59, 42), rgba(23, 2, 2, 0.204)), url(images/slider-2.jpg);">
            <div class="hero-overlay" style="background-image: url(images/Rectangle 7.png)"></div>
            <div class="hero-content text-center text-neutral-content">
              <div class="mx-auto">
                <p class="mb-5 text-xl lg:text-2xl font-poppins font-medium text-[#FFF]">BLOG</p>
                <img src="images/atorny.png" alt="" class="max-w-32 lg:max-w-lg mx-auto mb-5">
                <p class="mb-5 text-base lg:text-lg text-justify lg:px-24 font-poppins text-[#E7E7E7]">The law firm routinely advises businesses and government agencies on commercial matters. This prestigious firm in Bangladesh focuses primarily on commercial and civil landscape as its primary practice areas.We counsel clients on the law applicable to their disputes and on dispute resolution strategies. If these disputes progress to formal proceedings, we will compose the required legal documents and represent our client at any trial or other hearings.</p>
              </div> 
            </div>
      </div>		
	</header>
	<!-- header section end -->
    <!-- main section -->
     <main class="bg-gray-100 py-14">
         <!-- first -->
         <section>
            <div class="hero">
              <div class="hero-content flex-col lg:flex-row lg:gap-20 border-b-2 pb-9">
              <img
                src="images/business1-law.jpg"
                class=" lg:h-96 rounded-lg shadow-2xl" />
              <div>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-5">How does FDI influence the setup and growth of startups</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                Bangladesh offers promising opportunities for investment, especially in the energy, pharmaceutical, and information technology sectors as well as in labor-intensive industries. The Government of Bangladesh actively seeks foreign investment, particularly in energy and infrastructure projects, and offers a range of investment incentives under its industrial policy and export- oriented growth strategy, with few formal distinctions between foreign and domestic private investors.The Justice Portal are considered by many to be leading & specialist legal services provider with regards to business setup, entity formation and entity support. The team has excellent knowledge, experience and....</p>
                <a class="border-none bg-none text-[#0E675C] hover:text-[#B68C5A] block text-right" onclick="my_modal_2.showModal()">Read More »</a>
                <dialog id="my_modal_2" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  <!-- modal -->
                  <div class="px-5">
                    <!-- 1st -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">How does FDI influence the setup and growth of startups</h1>
                    <p class="pb-2 text-[#707070d0] text-xs text-justify font-poppins">Last updated by <span><a href="index.php" class="text-[#0E675C] hover:text-[#B68C5A]">justiceportal</a></span> on July 1, 2024</p>
                    <div class="flex gap-2">
                      <img src="images/member4.png" alt="" class="w-6 h-6 mt-1">
                      <p class="pb-8 text-[#707070d0] text-xs text-justify font-poppins">By Jarin Tasnin Anika <br>
                       Managing Partner</p>
                    </div>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Bangladesh offers promising opportunities for investment, especially in the energy, pharmaceutical, and information technology sectors as well as in labor-intensive industries.</p> 
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">The Government of Bangladesh actively seeks foreign investment, particularly in energy and infrastructure projects, and offers a range of investment incentives under its industrial policy and export-oriented growth strategy, with few formal distinctions between foreign and domestic private investors.</p>
                    <p class="pb-6 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">Foreign Direct Investment (FDI)</span> has long been recognized as a crucial driver of economic growth and development. For startups, which often face significant challenges in securing capital, accessing advanced technologies, and entering new markets, FDI can be a game-changer.</p> 
                    <img src="images/business-blog1.jpg" alt="" class="mx-auto my-10">
                    <!-- 2nd -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-5 mx-auto">Business Setup: Foundations for Success</h1>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">Setting up a business is a multifaceted process that involves careful planning, strategic decision-making, and thorough understanding of various theoretical frameworks.</p>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">Business setup</span> theory encompasses the principles and methodologies that guide entrepreneurs through the initial stages of establishing a new venture. This blog delves into key components of business setup theory, exploring the essential elements that contribute to the successful launch and growth of a business.</p>
                    <!-- 1 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2 mx-auto">Feasibility Analysis</h2>
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto">Conducting comprehensive market research is crucial for understanding the demand for your product or service, identifying target customers, and analyzing competitors. This research helps entrepreneurs make informed decisions and develop effective marketing strategies. </li> 
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"> A <span class="font-semibold">SWOT</span> analysis (Strengths, Weaknesses, Opportunities, Threats) helps in evaluating the internal and external factors that can impact the business. By identifying these factors, entrepreneurs can capitalize on strengths and opportunities while mitigating weaknesses and threats.</li> 
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"> Assessing the financial feasibility of a business involves estimating startup costs, projecting revenues and expenses, and determining the break-even point. This analysis ensures that the business idea is financially viable and sustainable.</li>
                    <!-- 2 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2 mx-auto"> Business Planning</h2>
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto">The <span class="font-semibold">Business Model</span> Canvas is a strategic tool that outlines the key components of a business, including value propositions, customer segments, revenue streams, and cost structures. It provides a clear and concise framework for developing and communicating the business model.</li> 
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"> A detailed business plan serves as a roadmap for the business, outlining goals, strategies, and action plans. It typically includes sections on the executive summary, company description, market analysis, organizational structure, product line, marketing and sales strategies, and financial projections.</li>
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"> Choosing the appropriate legal structure for the business is critical as it affects taxation, liability, and regulatory requirements. <span class="font-semibold">Common legal structures</span> include sole proprietorship, partnership, limited liability company (LLC), and corporation.</li>
                    <!-- 3 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2 mx-auto"> Resource Allocation</h2>
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto">Recruiting and retaining skilled employees is essential for the success of a business. <span class="font-semibold">Entrepreneurs</span> must develop strategies for attracting talent, fostering a positive work environment, and providing opportunities for professional development.</li> 
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"> Securing adequate funding is a major challenge for startups. Entrepreneurs can explore various funding options such as personal savings, bank loans, venture capital, angel investors, and crowdfunding.</li> 
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"> Setting up the physical infrastructure, such as office space, equipment, and technology, is necessary for the smooth operation of the business. Efficient management of these resources can enhance productivity and reduce costs.</li>
                    <!-- 4 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2 mx-auto"> Marketing and Sales</h2>
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto">Developing a comprehensive marketing strategy involves identifying the target audience, creating a unique value proposition, and selecting appropriate marketing channels. Effective marketing strategies help in building brand awareness and attracting customers.</li> 
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto">A robust sales strategy outlines the methods and processes for selling products or services. It includes setting sales targets, defining sales processes, and training the sales team to achieve desired outcomes.</li> 
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto">Implementing a <span class="font-semibold">CRM</span> system helps businesses manage interactions with customers, improve customer satisfaction, and build long-term relationships. A strong CRM strategy can lead to increased customer loyalty and repeat business.</li>
                    <!-- 5 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2 mx-auto"> Operational Management</h2>
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto">Efficient supply chain management ensures the smooth flow of goods and services from suppliers to customers. It involves procurement, production, distribution, and logistics management.</li> 
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto">Maintaining high-quality standards is crucial for customer satisfaction and brand reputation. Implementing quality control processes and continuous improvement practices helps in delivering consistent and reliable products or services.</li> 
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto">Identifying and mitigating risks is essential for business continuity. Entrepreneurs should develop risk management plans that include strategies for dealing with financial risks, operational risks, market risks, and legal risks.</li>
                    <img src="images/business-blog2.jpg" alt="" class="mx-auto my-12">
                    <!-- FDI -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-5 mx-auto">Several ways in which FDI influences startups</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">Foreign Direct Investment (FDI)</span> plays a significant role in the setup and growth of startups by providing essential capital, resources, and opportunities for expansion.</p>
                    <!-- 1 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 mx-auto">1. Capital Infusion</h2>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-3 pb-2 mx-auto">Access to Funds:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">One of the most direct and immediate benefits of FDI for startups is the influx of capital. This capital is vital for covering initial setup costs, research and development, product development, marketing, and other operational expenses. With sufficient funding, startups can accelerate their growth and reduce the time needed to bring their products or services to market.</p>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-2 pb-2 mx-auto">Reduced Financial Constraints:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">Startups</span> often struggle with financial constraints that can limit their ability to innovate and expand. FDI helps alleviate these constraints by providing the financial backing needed to pursue ambitious projects and strategic initiatives without constantly worrying about cash flow.</p>
                    <!-- 2 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 mx-auto">2. Technological Advancement</h2>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-3 pb-2 mx-auto">Access to Advanced Technology:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">Foreign investors</span> often bring with them advanced technologies and innovative practices from their home countries. Startups can leverage these technologies to enhance their productivity, streamline operations, and develop cutting-edge products that differentiate them from competitors.</p>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-2 pb-2 mx-auto">Knowledge Transfer:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">FDI</span> facilitates the transfer of knowledge and expertise. Foreign investors typically share best practices, managerial skills, and technical know-how, which can significantly improve the startup's operational efficiency and innovation capabilities. This exchange of knowledge is particularly beneficial in sectors where technology and innovation are critical.</p>
                    <!-- 3 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 mx-auto">3. Market Expansion</h2>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-3 pb-2 mx-auto">Entry into New Markets:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">One of the significant advantages of FDI is the ability to tap into international markets. Foreign investors often have extensive networks and distribution channels that startups can leverage to expand their reach. This access to new markets can lead to increased sales, revenue diversification, and reduced dependence on the domestic market.</p>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-2 pb-2 mx-auto">Competitive Advantage:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">The backing of a <span class="font-semibold">foreign investor</span> can provide startups with a competitive edge. It can enhance the startup's reputation and credibility, making it easier to attract customers, partners, and additional investors. This advantage is particularly valuable in industries where trust and brand recognition are crucial.</p>
                    <!-- 4 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 mx-auto">4. Strategic Partnerships</h2>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-3 pb-2 mx-auto">Collaboration Opportunities:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">FDI opens doors to strategic partnerships and alliances. Startups can collaborate with foreign investors and their networks to co-develop products, enter new markets, and share resources. These partnerships can lead to mutually beneficial outcomes and drive innovation.</p>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-2 pb-2 mx-auto">Joint Ventures:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Foreign investors may engage in joint ventures with startups, combining resources and expertise to pursue common goals. Joint ventures can provide startups with the financial strength and market access needed to undertake large-scale projects and compete on a global stage.</p>
                    <!-- 5 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 mx-auto">5. Enhanced Infrastructure</h2>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-3 pb-2 mx-auto">Development of Local Ecosystem:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">The presence of foreign investors often leads to the development of better infrastructure. Improved logistics, supply chains, and communication networks benefit not only the startup but also the broader business environment. This development can create a more conducive ecosystem for other startups to flourish.</p>
                    <h3 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-2 pb-2 mx-auto">Supportive Services:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">FDI attracts related businesses and services, such as legal, accounting, and marketing firms, which provide crucial support to startups. These services help startups navigate the complexities of business operations and compliance, allowing them to focus on growth and innovation.</p>
                    <!-- 6 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 mx-auto">6. Regulatory and Policy Impact</h2>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-3 pb-2 mx-auto">Favorable Policies:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Governments often implement favorable policies to attract FDI, such as tax incentives, grants, and simplified regulatory procedures. Startups can benefit directly from these incentives, reducing their operational costs and regulatory burdens.</p>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-2 pb-2 mx-auto">Improved Standards:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Foreign investors bring higher standards of corporate governance, transparency, and ethical practices. Startups adopting these standards can enhance their operational efficiency, build stronger relationships with stakeholders, and reduce the risk of legal issues.</p>
                    <!-- 7 -->
                    <h2 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 mx-auto">7. Talent Acquisition and Development</h2>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-3 pb-2 mx-auto">Attracting Skilled Talent:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">FDI helps startups attract skilled professionals by offering competitive salaries and benefits backed by foreign investment. This influx of talent can significantly enhance the startup's capabilities and drive innovation.</p>
                    <h3 class="text-xl font-extrabold text-[#000F23] font-montserrat pt-2 pb-2 mx-auto">Training and Development:</h3>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Foreign investors often invest in training and development programs for local employees, helping to build a more skilled and knowledgeable workforce. This investment in human capital is critical for the long-term success and growth of startups.</p>
                    <img src="images/business-blog3.jpg" alt="" class="mx-auto my-10">
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-5 mx-auto">Final Words</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">FDI significantly influences the setup and growth of startups by providing essential financial resources, advanced technologies, market access, and strategic partnerships. It also enhances infrastructure, regulatory environments, and talent acquisition, creating a robust foundation for startups to thrive. However, it is crucial for startups to strategically manage their relationship with foreign investors to align their goals and maintain control over their business direction. By leveraging the benefits of FDI, startups can achieve sustainable growth, innovation, and global competitiveness. If you’re facing any problems with the company registration process, visit <span class="text-[#0E675C] hover:text-[#B68C5A] font-bold"><a href="index.php">Justice Portal</a></span> today!</p>
                  </div>  
                  </div>
                </dialog>
              </div>
            </div>
          </div>
        </section> 
        <!-- second -->
         <section>
            <div class="hero mt-5 ">
              <div class="hero-content flex-col lg:flex-row lg:gap-20 border-b-2 pb-9">
              <img
                src="images/company-law.jpg"
                class="lg:w-96 lg:h-96 rounded-lg shadow-2xl"/>
              <div>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-5">
                How to Register a Company in Bangladesh</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                Many people might think that the process of registering a company in Bangladesh is quite complicated. Worried about the company registration process? Justice Portal is here to help! Feel free to contact us for professional assistance with registering your company. With careful planning and the right resources, you can successfully register your company and embark on a rewarding entrepreneurial journey in Bangladesh....
                </p>
                <a class="border-none bg-none text-[#0E675C] hover:text-[#B68C5A] block text-right" onclick="my_modal_3.showModal()">Read More »</a>
                <dialog id="my_modal_3" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  <!-- modal -->
                  <div class="px-5 mx-auto">
                    <!-- 1st -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">How to Register a Company in Bangladesh</h1>
                    <p class="pb-2 text-[#707070d0] text-xs text-justify font-poppins">Last updated by <span><a href="index.php" class="text-[#0E675C] hover:text-[#B68C5A]">justiceportal</a></span> on July 6, 2024</p>
                    <div class="flex gap-2">
                      <img src="images/member4.png" alt="" class="w-6 h-6 mt-1">
                      <p class="pb-8 text-[#707070d0] text-xs text-justify font-poppins">By Jarin Tasnin Anika <br>
                       Managing Partner</p>
                    </div>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Many people might think that the process of registering a company in Bangladesh is quite complicated. Worried about the company registration process? Justice portal is here to help!</p> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Feel free to contact us for professional assistance with registering your company. With careful planning and the right resources, you can successfully register your company and embark on a rewarding entrepreneurial journey in Bangladesh.</p>
                    <img src="images/company-blog1.jpg" alt="" class="mx-auto my-10">
                    <!-- 1st -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-6 mx-auto">Choosing the Right Company Structure</h1>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    It is important to choose a company type suitable for the business needs before beginning the registration process. Here’s a closer look at the common options available in Bangladesh:</p> 
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Private Limited Company (PLC)</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Start-up firms prefer this because it is more flexible. It also protects the shareholders’ assets to a certain extent. Even if your firm’s operations are risky, your personal assets won’t be affected. PLCs need to have at least two shareholders and two directors, who may be the same people.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Public Limited Company (Listed Company)</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">This structure applies to relatively big companies that require funds from the market through an offer of shares in the stock exchange. This type of company has more restrictions than the former one, and at least seven shareholders and three directors are needed.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">One Person Company (OPC)</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">This legal reform was adopted in 2013. OPCs allow one person to set up and operate a business, making it a great option for individuals who want the privilege of limited liability. This structure lets you have a separate legal entity from your business.</p>
                    <!-- 2nd -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-6 mx-auto"> Register a Company in Bangladesh</h1> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">The company registration process in Bangladesh has five key stages. They all have their own set of requirements:</p>
                    <img src="images/company-blog2.jpg" alt="" class="mx-auto my-10">
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2 mx-auto"> 1. Name Clearance – Securing Your Brand Identity</h1> 
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-2 pb-3 mx-auto"> The First Hurdle: Protecting Your Identity</h1> 
                    <p class="pb-3 text-[#707070] text-justify font-poppins mx-auto">Firstly, you have to get the name clearance certificate from the Registrar of Joint Stock Companies and Firms (RJSC). It also ensures that the chosen company name does not exist in the government records, common in some countries.</p>
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-3 pb-3 mx-auto"> Embrace Technology</h1> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">The official website of the <span> <a class="text-[#0E675C] hover:text-[#B68C5A] font-semibold">RJSC</a></span> is given where you can submit your selected company name through an online portal.</p>
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-3 pb-3 mx-auto"> Minimal Fee</h1> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">After applying online, the applicants are required to deposit 200 taka in a prescribed bank.</p>
                    <!-- 3 --> 
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2 mx-auto"> 2. Documentation and Bank Account – Laying the Foundation</h1> 
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-2 pb-3 mx-auto"> Essential Documents:</h1> 
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">Memorandum of Association (MoA):</span> This document will have the core objectives of your business, the specific activities you plan to undertake, and the overall scope of your company’s authority.</li>                    
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">Articles of Association (AoA):</span> Your company’s legal framework and day-to-day management will be in the AoA. This will include important details like how meetings will be conducted, the voting rights of shareholders, and the processes for electing directors. The AoA makes sure everyone understands their roles and responsibilities within the company.</li>
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">Shareholder and Director Information:</span> You should have all the available information on all the shareholders and directors of the company. This should include their full names, nationality, telephone numbers, electronic mail addresses, and photocopies of their National Identity Card. If they’re foreign shareholders, keep the passport copies.</li>
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">Registered Office Address:</span> You need a suitable location and the necessary paperwork for your registered office address. Make sure to provide and confirm this address during the registration process.</li>
                    <li class="pb-3 text-[#707070] text-justify font-poppins mx-auto"><span class="font-semibold">Temporary Bank Account:</span> If there are any foreign shareholders in any company, you need to keep a temporary bank account. This account lets you deposit the paid-up capital, which is the minimum amount of capital that the company is required to put into the business.</li>
                    <!-- 4 -->
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2 mx-auto"> 3. Online Submission and Fees – Streamlining the Process                    </h1> 
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-2 pb-3 mx-auto"> Leveraging Technology                    </h1> 
                    <p class="pb-3 text-[#707070] text-justify font-poppins mx-auto">The RJSC’s online portal allows for the convenient electronic submission of all the prepared documents. This eliminates the need for physical submissions, simplifying the registration process.</p>
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-2 pb-3 mx-auto"> Government Fees                    </h1> 
                    <p class="pb-3 text-[#707070] text-justify font-poppins mx-auto">Pay the necessary government fees associated with registration through the online portal. These fees are typically determined by the authorized share capital of the company.</p>
                    <!-- 5 -->
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2 mx-auto"> 4. Verification and Approval – Ensuring Compliance                    </h1> 
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-2 pb-3 mx-auto"> Encashment Certificate                    </h1> 
                    <p class="pb-3 text-[#707070] text-justify font-poppins mx-auto">After submitting your application to the RJSC, the authorities will closely examine the encashment certificate, which proves that paid-up capital was deposited to the temporary bank account (for companies with non-resident shareholders).</p>
                    <!-- 6 -->
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-2 mx-auto"> 5. Incorporation and Beyond – Embarking on Your Business Journey<h1>                     
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-2 pb-3 mx-auto"> Celebrating Success                    </h1> 
                    <p class="pb-3 text-[#707070] text-justify font-poppins mx-auto">After satisfactory scrutiny, the RJSC will then provide a Certificate of Incorporation. This document gives your company a legal entity status and authorizes it to work in Bangladesh as a legal entity.</p>
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-2 pb-3 mx-auto"> Beyond Registration                    </h1> 
                    <p class="pb-3 text-[#707070] text-justify font-poppins mx-auto">As highlighted above, company registration is only the beginning of the process. Depending on your business field, you might require other licenses from local authorities or taxation with the assistance of the<span><a class="text-[#0E675C] hover:text-[#B68C5A] font-semibold"> National Board of Revenue</a></span>.</p>
                    <!-- 7 -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-6 mx-auto"> Benefits of Registering Your Company                    </h1> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Formalizing your business through registration offers a multitude of advantages that can empower your company’s growth:</p>
                    <img src="images/company-blog3.jpg" alt="" class="mx-auto my-10">
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-2 pb-3 mx-auto"> Enhanced Credibility                    </h1> 
                    <p class="pb-3 text-[#707070] text-justify font-poppins mx-auto">A registered company creates an image and a professional one hence developing confidence among clients, partners, and potential investors. This can make you stand out in the marketplace since the other players may not have access to the information you do.</p>
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-3 pb-3 mx-auto"> Limited Liability                    </h1> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">There is usually limited liability in almost all structures of a company so that shareholders risk their business assets but their ones are safe. This gives a certain form of insurance or cushion concerning the financial aspect for the owners.</p>
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-3 pb-3 mx-auto"> Access to Funding                    </h1> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">If your company is registered, you can easily get loans, investments, and other financial facilities. The longer your business has been in operation, the higher your chances are of getting funding from banks and other financial institutions.</p>
                    <h1 class="text-lg font-extrabold text-[#000F23] font-montserrat pt-3 pb-3 mx-auto"> Legal Recognition                    </h1> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Registration gives your company a legal personality and lets it operate legally in Bangladesh. Now you can make contracts, own properties, and perform other activities in the business aspect easily.</p>
                    <!-- 8 -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">Final Words                    </h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Remember, registering your company is an investment in your business’s future. It establishes a strong foundation for success, allowing you to operate with confidence and unlock your full growth potential. If you’re facing any problems with the company registration process, visit <span><a class="text-[#0E675C] hover:text-[#B68C5A] font-semibold">Justice Portal</a></span>  today!</p> 
                  </div>  
                  </div>
                </dialog>
              </div>
            </div>
          </div>
        </section>
        <!-- third -->
        <section>
            <div class="hero mt-5 ">
              <div class="hero-content flex-col lg:flex-row lg:gap-20 border-b-2 pb-9">
              <img
                src="images/criminal1-law.jpg"
                class="lg:w-96 lg:h-96 rounded-lg shadow-2xl"/>
              <div>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-5">Roles And Responsibilities Of Criminal Prosecutors And Defense Attorney</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                The Justice Portals are considered by many to be leading & specialist legal services provider with regards to specialist advisory, drafting and advocacy services in relation to Criminal Prosecution & Defense. Our lawyers can assist you in any kind of Criminal Prosecution by advising and representing you in criminal courts. In the realm of law and justice, criminal defense and prosecution represent two distinct sides of the legal process, each with its own objectives, strategies, and responsibilities. Let's delve into what defines these roles and how they shape the course of....
                </p>
                <a class="border-none bg-none text-[#0E675C] hover:text-[#B68C5A] block text-right" onclick="my_modal_4.showModal()">Read More »</a>
                <dialog id="my_modal_4" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  <!-- modal -->
                  <div class="px-5 mx-auto">
                    <!-- 1st -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">Roles And Responsibilities Of Criminal Prosecutors And Defense Attorney                    </h1>
                    <p class="pb-2 text-[#707070d0] text-xs text-justify font-poppins">Last updated by <span><a href="index.php" class="text-[#0E675C] hover:text-[#B68C5A]">justiceportal</a></span> on June 13, 2024</p>
                    <div class="flex gap-2">
                      <img src="images/member4.png" alt="" class="w-6 h-6 mt-1">
                      <p class="pb-8 text-[#707070d0] text-xs text-justify font-poppins">By Jarin Tasnin Anika <br>
                       Managing Partner</p>
                    </div>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    The Justice Portals are considered by many to be leading & specialist legal services provider with regards to specialist advisory, drafting and advocacy services in relation to Criminal Prosecution & Defense.</p> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Our lawyers can assist you in any kind of Criminal Prosecution by advising and representing you in criminal courts. In the realm of law and justice, criminal defense and prosecution represent two distinct sides of the legal process, each with its own objectives, strategies, and responsibilities. Let's delve into what defines these roles and how they shape the course.</p>
                    <img src="images/criminal1-blog.jpg" alt="" class="mx-auto my-10">
                    <!-- 2nd -->
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    In the criminal justice system, prosecutors and defense attorneys play crucial roles in ensuring that justice is served. Both are essential to the fair administration of justice, but their responsibilities and objectives differ significantly.</p> 
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">This blog will delve into the distinct roles and responsibilities of criminal prosecutors and defense attorneys, highlighting their importance in upholding the law and protecting individual rights.</p> 
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">The Role of Criminal Prosecutors                    </h1>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Representing the Government</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Criminal prosecutors, often referred to as district attorneys (DAs) or state attorneys, represent the government in prosecuting criminal cases. Their primary responsibility is to enforce the law and ensure that individuals who violate it are held accountable.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Investigating Crimes</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Prosecutors work closely with law enforcement agencies to investigate crimes. They review police reports, gather evidence, and may direct further investigations to build a strong case against the accused.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Charging Decisions</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">One of the most critical roles of a prosecutor is deciding whether to file charges against an individual. This decision is based on the evidence available and whether it is sufficient to prove the defendant's guilt beyond a reasonable doubt.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Presenting the Case in Court</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Prosecutors present the case against the defendant in court. This involves calling witnesses, presenting evidence, cross-examining defense witnesses, and making legal arguments to persuade the judge or jury of the defendant's guilt.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Pursuing Justice</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">While prosecutors aim to secure convictions, their ultimate responsibility is to pursue justice. This means they must act ethically, disclose exculpatory evidence (evidence that may exonerate the defendant), and ensure that the defendant's rights are protected throughout the legal process.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Sentencing Recommendations</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">If a defendant is convicted, prosecutors often make sentencing recommendations to the judge. These recommendations are based on the severity of the crime, the defendant's criminal history, and other relevant factors.</p>
                    <!-- 3 -->
                    <img src="images/criminal2-blog.jpg" alt="" class="mx-auto my-10">
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">The Role of Defense Attorneys                    </h1>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Protecting the Defendant's Rights</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Defense attorneys, also known as public defenders or private defense lawyers, represent individuals accused of crimes. Their primary responsibility is to protect the constitutional rights of the defendant and ensure they receive a fair trial.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Providing Legal Counsel</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Defense attorneys provide legal counsel to their clients, advising them on their rights, the charges they face, potential defenses, and the likely outcomes of their case. They also help clients navigate the complexities of the legal system.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Investigating the Case</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Defense attorneys conduct their own investigations to uncover evidence that may support the defendant's innocence or mitigate their culpability. This may involve interviewing witnesses, reviewing police procedures, and gathering expert testimony.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Developing a Defense Strategy</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Based on their investigation, defense attorneys develop a strategy to defend their client. This may involve challenging the prosecution's evidence, presenting alternative theories of the crime, or negotiating plea bargains.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Representing the Defendant in Court</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Defense attorneys represent their clients in court, presenting evidence and arguments to challenge the prosecution's case. They cross-examine prosecution witnesses, call their own witnesses, and make legal motions to protect their client's rights.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Ensuring Fair Sentencing</h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">If the defendant is convicted, defense attorneys advocate for fair and reasonable sentencing. They present mitigating factors, such as the defendant's background and circumstances, to persuade the judge to impose a lighter sentence.</p>
                    <img src="images/criminal3-blog.jpg" alt="" class="mx-auto my-10">                    
                    <!-- 8 -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">Final Words                    </h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">The roles of criminal prosecutors and defense attorneys are fundamental to the criminal justice system. Prosecutors work to enforce the law and seek justice for victims, while defense attorneys ensure that the rights of the accused are protected.</p> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Both roles require a deep understanding of the law, ethical conduct, and a commitment to justice. Together, they help maintain a balanced and fair legal system that upholds the principles of due process and the rule of law.</p>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Understanding these roles can provide valuable insight into how the criminal justice system operates and the importance of each party in achieving justice.</p>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Remember, it establishes a strong foundation for success, allowing you to operate with confidence and unlock your full growth potential. If you’re facing any problems with the criminal law process, visit <span><a class="text-[#0E675C] hover:text-[#B68C5A] font-semibold">Justice Portal</a></span>  today!</p> 
                  </div>  
                  </div>
                </dialog>
              </div>
            </div>
          </div>
        </section> 
        <!-- fourth -->
        <section>
            <div class="hero mt-5 ">
              <div class="hero-content flex-col lg:flex-row lg:gap-20 border-b-2 pb-9">
              <img
                src="images/child2-law.jpg"
                class="lg:w-96 lg:h-96 rounded-lg shadow-2xl"/>
              <div>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-5">Child Custody After Divorce in Bangladesh: Legal Considerations</h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                Separating from your spouse isn’t just about dividing your resources but also figuring out who or how your kid, if you have any, will be taken care of. Child custody after divorce in Bangladesh is as challenging as in most other countries. In this article, we will examine the procedure and legal considerations you need to take to figure out child custody. Above all else, you need to consider your child’s interest.....
                </p>
                <a class="border-none bg-none text-[#0E675C] hover:text-[#B68C5A] block text-right" onclick="my_modal_5.showModal()">Read More »</a>
                <dialog id="my_modal_5" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  <!-- modal -->
                  <div class="px-5 mx-auto">
                    <!-- 1st -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">Child Custody After Divorce in Bangladesh: Legal Considerations                    </h1>
                    <p class="pb-2 text-[#707070d0] text-xs text-justify font-poppins">Last updated by <span><a href="index.php" class="text-[#0E675C] hover:text-[#B68C5A]">justiceportal</a></span> on June 9, 2024</p>
                    <div class="flex gap-2">
                      <img src="images/member4.png" alt="" class="w-6 h-6 mt-1">
                      <p class="pb-8 text-[#707070d0] text-xs text-justify font-poppins">By Jarin Tasnin Anika <br>
                       Managing Partner</p>
                    </div>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Separating from your spouse isn’t just about dividing your resources but also figuring out who or how your kid, if you have any, will be taken care of. Child custody after divorce in Bangladesh is as challenging as in most other countries.</p> 
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">In this article, we will examine the procedure and legal considerations you need to take to figure out child custody. Above all else, you need to consider your child’s interest.</p> 
                    <img src="images/child1-blog.jpg" alt="" class="mx-auto my-10">
                    <!-- 2nd -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Legal Framework in Bangladesh                    </h1>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Child custody is the legal journey where a court makes decisions about who will be responsible for a child’s everyday life and important choices after their parents separate or get a divorce.</p>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">In Bangladesh, the rules for child custody are guided by the Muslim Personal Law (Shariat) Application Act, 1937, and the Family Courts Ordinance, 1985.</p>
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Types of Child Custody                    </h1>
                    <!-- 3rd -->
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">In Bangladesh, child custody can be divided into primary options. The two options are:</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Physical Custody:</span> Physical custody refers to the privilege of having the child live with you. It involves the day-to-day care, upbringing, and residence of the child.</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Legal Custody:</span> Legal custody applies to the right to make crucial decisions regarding the child’s life, including choices related to education, religion, and medical care.                    </p>
                    <!-- 4th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Exploring Joint and Sole Custody in Bangladesh                    </h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">In Bangladesh, child custody arrangements commonly fall under joint custody, where both parents share equal physical and legal custody rights. This means they collaborate on daily care and decision-making responsibilities.</p>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">However, the court might opt for sole custody in certain situations, granting all custody rights to one parent. This decision is made with the paramount consideration of the child’s best interests, ensuring a stable and supportive environment for their well-being.</p>
                    <!-- 5th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Legal Procedures                    </h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Since you have a clearer understanding of child custody law in Bangladesh, we will go through the process of doing it now. This procedure involves court hearings and, in some cases, mediation. Please keep in mind parents need to be aware of the steps involved and the documentation required to present their case effectively. We will break the process down to make it easier for you to follow.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">The First Step                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">The initial phase of the child custody process involves submitting a formal petition to the Family Court. This crucial document should encompass specific details, such as:</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Identifying Information:</span> Providing the names and addresses of both parents and the child. This essential information ensures clarity and accuracy in legal proceedings.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold"> Timeline of Marriage and Separation:</span> Including significant dates, such as the commencement of the marriage and the date of separation. A clear timeline helps establish the context and duration of the relationship.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Explanation for Divorce or Separation:</span> Detailing the reasons behind the divorce or separation. This section allows the court to understand the circumstances leading to the custody dispute.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Proposed Custody Arrangement:</span> Outlining the suggested custody plan. Presenting the desired arrangement gives the court insight into the parents’ preferences and intentions for the child’s future.                    </p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">The Second Step                    </h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Following the submission of the petition, the other parent will be given a chance to respond. Suppose the parents cannot reach an agreement on the custody arrangement amicably. In that case, the case will proceed to a trial for a legal resolution.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">The Trial                    </h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">During the trial, the court will attentively listen to evidence presented by parents and any pertinent witnesses involved in the case. After considering the factors mentioned earlier, the court will decide on custody. The decision-making process hinges on carefully evaluating the information presented during the trial.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">The Final Step                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Following the proceedings, the court will issue a written order outlining specific details of the custody arrangement. This comprehensive document will encompass:</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold"> Time Allocation for Parents:</span> Clearly specifying the allocated time for each parent to spend with the child. This ensures a fair distribution of parenting responsibilities and time-sharing.</p> 
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">  Decision-Making Authority:</span> Defining the decisions that each parent is authorized to make on behalf of the child. This includes aspects such as education, healthcare, and other essential choices affecting the child’s well-being. The written order is a legal guide for both parents, ensuring clarity and adherence to the established terms.                    </p> 
                    <!-- 6th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Factors Influencing Custody Decisions                    </h1>
                    <img src="images/child3-blog.jpg" alt="" class="mx-auto my-10">
                    <p class="pb-6 text-[#707070] text-justify font-poppins mx-auto">The court’s decision will be based on numerous factors besides the evidence and testimonials. Here are just five of the most important ones:</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Considering the Child’s Desires:</span> Consider the child’s preferences, especially if they are mature enough to communicate their wishes effectively. Acknowledging and respecting their desires becomes a crucial aspect in determining custody arrangements.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Prioritizing the Child’s Health and Happiness:</span> Placing paramount importance on both the physical and emotional welfare of the child. Ensuring their well-being and happiness becomes a primary consideration, influencing custody decisions for the betterment of the child.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Evaluating the Home Environment Stability:</span> Assessing the stability of the living environment where the child will reside. A secure and consistent home environment is essential for the child’s development. It significantly contributes to the court’s decision-making process.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Assessing Parental Capability to Provide:</span> Examining the capability of each parent to fulfill the child’s financial and emotional needs. The court considers the ability of parents to provide a supportive and nurturing environment that encompasses the child’s overall development.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Promoting Cooperative Parenting:</span> Emphasizing the willingness of each parent to collaborate and cooperate with the other. A healthy and cooperative co-parenting relationship is vital in determining the child’s best interests and promoting a harmonious post-divorce environment.                    </p>
                    <!-- 7th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Challenges in Child Custody Cases                    </h1>
                    <p class="pb-6 text-[#707070] text-justify font-poppins mx-auto">Cultural and societal factors can make child custody cases more complicated. Understanding the impact of parental misconduct on a child’s well-being can also be challenging. Successfully dealing with these difficulties requires a good grasp of legal processes and strategies.</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Emotional and Legal Challenges:</span> Custody issues are tough to solve during a divorce or breakup, even if it’s friendly. It’s essential to understand the family law court system, know your rights, and use effective strategies to navigate these challenges                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Special Needs Consideration: </span> Disputes about children with special needs are increasingly common in custody cases. Practical strategies are essential for managing these issues effectively.                    </p>
                    <!-- 8th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Role of Legal Professionals                    </h1>
                    <p class="pb-6 text-[#707070] text-justify font-poppins mx-auto">Both child custody and divorce require the aid of professionals who practice law. With their help, you can proceed with your court case and present yourself strongly. They will also make it easier for you to understand what needs to be done and followed. For the best chance to figure out child custody after divorce in Bangladesh, consider Litigation services from us.</p>
                    <img src="images/child2-blog.jpg" alt="" class="mx-auto my-10">                    
                    <!-- last -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">Final Words                    </h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">In the end, managing child custody after divorce in Bangladesh requires you to consider many factors and present the best case you can with the help of experienced lawyers. You must understand your legal options and proceed carefully through Bangladesh’s court system. There are many challenges you need to overcome to get the best result. </p> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Our guide into the process has helped you make the best decisions. If you need any more legal help, then contact <span><a class="text-[#0E675C] hover:text-[#B68C5A] font-semibold">Justice Portal</a></span> immediately. We are always available to make your life as smooth as possible legally.</p>
                  </div>  
                  </div>
                </dialog>
              </div>
            </div>
          </div>
        </section>
        <!-- fifth -->
        <section>
            <div class="hero mt-5 ">
              <div class="hero-content flex-col lg:flex-row lg:gap-20 border-b-2 pb-9">
              <img
                src="images/educational2-law.jpg"
                class="lg:w-96 lg:h-96 rounded-lg shadow-2xl"/>
              <div>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-5">Navigating Education Law: Protecting Rights and Ensuring Equity
                </h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                Education law encompasses a broad array of legal issues that affect schools, teachers, students, and parents. It addresses the rights and responsibilities within the educational system and seeks to ensure that everyone has access to fair and equitable education. In this blog, we'll explore the key aspects of education law, its impact on the education system, and the challenges it seeks to address......
                </p>
                <a class="border-none bg-none text-[#0E675C] hover:text-[#B68C5A] block text-right" onclick="my_modal_7.showModal()">Read More »</a>
                <dialog id="my_modal_7" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  <!-- modal -->
                  <div class="px-5 mx-auto">
                    <!-- 1st -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">Navigating Education Law: Protecting Rights and Ensuring Equity                    </h1>
                    <p class="pb-2 text-[#707070d0] text-xs text-justify font-poppins">Last updated by <span><a href="index.php" class="text-[#0E675C] hover:text-[#B68C5A]">justiceportal</a></span> on June 9, 2024</p>
                    <div class="flex gap-2">
                      <img src="images/member4.png" alt="" class="w-6 h-6 mt-1">
                      <p class="pb-8 text-[#707070d0] text-xs text-justify font-poppins">By Jarin Tasnin Anika <br>
                       Managing Partner</p>
                    </div>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Education law encompasses a broad array of legal issues that affect schools, teachers, students, and parents. It addresses the rights and responsibilities within the educational system and seeks to ensure that everyone has access to fair and equitable education.</p> 
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">In this blog, we'll explore the key aspects of education law, its impact on the education system, and the challenges it seeks to address.</p> 
                    <img src="images/education-blog1.jpg" alt="" class="mx-auto my-10">
                    <!-- 2nd -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Understanding Education Law                    </h1>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Education law encompasses a broad range of legal issues related to the provision and administration of education.</p>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">It covers public and private educational institutions at all levels, from primary and secondary schools to colleges and universities. Key areas of education law include:</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto"> Constitutional Rights in Education</h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">The U.S. Constitution guarantees certain rights that are relevant to education, such as the right to free speech, freedom of religion, and equal protection under the law. These rights ensure that students can express their views, practice their religion, and receive equal treatment regardless of their race, gender, or disability.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto"> Federal and State Legislation</h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Federal laws, such as the Individuals with Disabilities Education Act (IDEA), Title IX, and the Every Student Succeeds Act (ESSA), set standards and provide funding to support equal access to education and protect against discrimination. State laws also play a significant role in governing education policies, curriculum standards, and teacher qualifications.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto"> Special Education</h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Special education law focuses on the rights of students with disabilities to receive a free appropriate public education (FAPE). Under IDEA, schools are required to provide individualized education programs (IEPs) tailored to the unique needs of each student with a disability, ensuring they have access to the same educational opportunities as their peers.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto"> Anti-Discrimination Policies</h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Title IX of the Education Amendments of 1972 prohibits discrimination based on sex in any education program or activity receiving federal financial assistance. This law addresses issues such as sexual harassment, gender equity in athletics, and equal opportunities in educational programs.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto"> Student Rights and Discipline</h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Education law also covers students' rights regarding disciplinary actions. Schools must follow due process when disciplining students, ensuring that disciplinary measures are fair and proportionate. This includes providing students with notice of the allegations against them and an opportunity to present their side of the story.</p>
                    <img src="images/education-blog2.jpg" alt="" class="mx-auto my-10">
                    <!-- 3rd -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Protecting Rights and Ensuring Equity                    </h1>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Education law is instrumental in protecting students' rights and promoting equity within the educational system. Here are some key ways it achieves these goals:</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto"> Addressing Discrimination and Harassment</h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Education law provides mechanisms to address and resolve issues of discrimination and harassment in schools. This includes protecting students from bullying, sexual harassment, and discriminatory practices based on race, gender, religion, or disability. By enforcing anti-discrimination laws, schools create safer and more inclusive learning environments.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto"> Ensuring Equal Access to Education</h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Laws such as IDEA and Title IX ensure that all students, regardless of their background or abilities, have access to quality education. These laws require schools to provide necessary accommodations and support services to students with disabilities, as well as to eliminate barriers to participation for all students.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto"> Promoting Accountability and Transparency</h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Education laws establish standards for accountability and transparency in the administration of education. This includes requirements for reporting student performance, funding allocation, and compliance with federal and state regulations. Such measures help ensure that schools are held accountable for providing equitable and effective education.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto"> Supporting Educational Equity Initiatives</h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Education law supports initiatives aimed at reducing disparities in educational outcomes. Programs that address the achievement gap, provide resources for underserved communities, and promote diversity in schools are essential for fostering educational equity. Legal frameworks help sustain these initiatives and ensure their implementation.</p>
                    <!-- 4th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Challenges and Future Directions                    </h1>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Despite significant progress, challenges remain in achieving full equity in education. Issues such as school funding disparities, unequal access to advanced coursework, and systemic biases continue to affect educational outcomes for marginalized groups. Addressing these challenges requires ongoing efforts from educators, policymakers, and legal advocates.</p>
                    <img src="images/education-blog3.jpg" alt="" class="mx-auto my-10">                   
                    <!-- last -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">Final Words                    </h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">In the end, Education law plays a vital role in protecting the rights of students and ensuring equity within the educational system. By addressing discrimination, ensuring equal access to education, promoting accountability, and supporting equity initiatives, education law helps create a more just and inclusive educational landscape.</p> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">As we continue to navigate the complexities of education law, it is essential to remain committed to the principles of fairness, justice, and equal opportunity for all students. Our guide into the process has helped you make the best decisions. If you need any more legal help, then contact <span><a class="text-[#0E675C] hover:text-[#B68C5A] font-semibold">Justice Portal</a></span> immediately. We are always available to make your life as smooth as possible legally.</p>
                  </div>  
                  </div>
                </dialog>
              </div>
            </div>
          </div>
        </section> 
        <!-- sixth -->
        <section>
            <div class="hero mt-5">
              <div class="hero-content flex-col lg:flex-row lg:gap-20 border-b-2 pb-9">
              <img
                src="images/divorce2-law.jpg"
                class="lg:w-96 lg:h-96 rounded-lg shadow-2xl"/>
              <div>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-5">How to Get Divorce in Bangladesh
                </h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                Every year, thousands of Bangladeshi people go for divorce. According to reports, the divorce rate per 1,000 individuals surged from 0.7% in 2021 to 1.4% in 2023. But the majority of these divorces aren’t done following the laws. It encompasses various aspects, including asset division, child custody, spousal support, and more. Understanding the basics of divorce law can help individuals navigate the complexities of this often challenging process. So, how to get a divorce in Bangladesh? In this article, we’ll walk you through the process! If you need more information on getting a divorce in Bangladesh, contact Justice Portal!......
                </p>
                <a class="border-none bg-none text-[#0E675C] hover:text-[#B68C5A] block text-right" onclick="my_modal_8.showModal()">Read More »</a>
                <dialog id="my_modal_8" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  <!-- modal -->
                  <div class="px-5 mx-auto">
                    <!-- 1st -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">How to Get Divorce in Bangladesh                    </h1>
                    <p class="pb-2 text-[#707070d0] text-xs text-justify font-poppins">Last updated by <span><a href="index.php" class="text-[#0E675C] hover:text-[#B68C5A]">justiceportal</a></span> on June 9, 2024</p>
                    <div class="flex gap-2">
                      <img src="images/member4.png" alt="" class="w-6 h-6 mt-1">
                      <p class="pb-8 text-[#707070d0] text-xs text-justify font-poppins">By Jarin Tasnin Anika <br>
                       Managing Partner</p>
                    </div>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Every year, thousands of Bangladeshi people go for divorce. According to reports, the divorce rate per 1,000 individuals surged from 0.7% in 2021 to 1.4% in 2023. But the majority of these divorces aren’t done following the laws.</p> 
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">So, how to get a divorce in Bangladesh? In this article, we’ll walk you through the process! If you need more information on getting a divorce in Bangladesh, contact Justice Portal!</p> 
                    <img src="images/divorce-blog1.jpg" alt="" class="mx-auto my-10">
                    <!-- 2nd -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Understanding the Laws for Divorce in Bangladesh                    </h1>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Divorce in Bangladesh depends on the religion followed by the couple. The three main legal frameworks are:</p>
                    <li class="pb-2 text-[#707070] text-justify font-poppins mx-auto">The Muslim Family Laws Ordinance, 1961                    </li>
                    <li class="pb-2 text-[#707070] text-justify font-poppins mx-auto">The Dissolution of Muslim Marriages Act, 1939                    </li>
                    <li class="pb-2 text-[#707070] text-justify font-poppins mx-auto">The Special Marriage Act, 1974                    </li>
                    <!-- 3rd -->  
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Initiating the Process: Grounds for Divorce                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Both spouses can seek divorce in Bangladesh. Here’s a breakdown of the common grounds for divorce under each legal framework:</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">For Muslim Spouses:</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Talaq:</span> A husband can initiate divorce by saying “talaq” (divorce) verbally or in writing to his wife. But he can only do that following certain processes. The husband should report it to the chairman of the Union Parishad or any other official person.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Khula:</span> A wife is entitled to go to court to seek the dissolution of the marriage if her husband has not been providing the basic needs of the marriage. If he is abusive or has a long-term illness, the wife has the right to separate.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Mutual Consent:</span> Both spouses can agree to a mutually consented divorce through a court process.                    </p>
                    <!-- 4th -->
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">For Non-Muslim Spouses under the Special Marriage Act                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Adultery:</span>  If one spouse commits adultery.</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Cruelty:</span>  If either partner becomes physically or verbally assaultive to the other, then s/he must not be allowed to continue with the stay.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Desertion:</span> If one of the spouses deserts the other for an uninterrupted time and lasts for at least three years.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Imprisonment:</span>  Such events include cases where one of the spouses is given a term of imprisonment of over seven years.</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Insanity:</span>  If one spouse is suffering from any disease and the same is of incurable insanity wherein the circumstances continue for at least three years.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Living Separately:</span>   If the spouses have not been living together for at least 3 years and have agreed to this or 2 years without agreeing to do so.                    </p>
                    <!-- 5th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Practical Steps to File for Divorce in Bangladesh                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Here’s how you can easily file a divorce –</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Seek Legal Advice:</span>  Talk to a lawyer who’s an expert in family law. Now, you can understand your rights and options.                     </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Documentation:</span>  Gather all necessary documents, marriage certificates, evidence of grounds for divorce, and financial records. You need proper records for a smooth legal process.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">File the Petition:</span>  You have to submit the divorce petition to the appropriate court or authority. This petition should clearly state the grounds for divorce and include all relevant documents.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Attend Court Hearings:</span>  You are required to attend all the legal cases and sit at the courts. This will give an affidavit, and whenever the judge asks something, testify.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Follow Court Orders:</span>  Comply with all maintenance orders tendered by the court as far as the custody of children or the distribution of property is concerned. Lack of compliance has repercussions which are usually stated from a legal point of view.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Emotional Support:</span>  Some organizations you can contact include support groups or counselors. Counseling services include emotional support that enables the client to endure stress and make proper decisions.                    </p>
                    <!-- 6th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">How to Get a Divorce in Bangladesh                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">The specific steps of a divorce depend on the legal framework. Here’s a general outline of the process:</p>
                    <img src="images/divorce-blog2.jpg" alt="" class="mx-auto my-10">
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Consultation:</span>  Firstly, consult with a lawyer who specializes in family law. He can guide you on your own case. Here, you will find out the governing legal statutes and what actions you should take.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Notice and Reconciliation Efforts:</span>   The court may give a notice of divorce to the other spouse. In certain circumstances, the problems mentioned above must be tried to be resolved before filing a legal divorce.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Court Proceedings:</span>  If you and your spouse fail to solve the problem as a couple, it is recommended to file a petition for divorce to the right court. The court may give a notice of divorce to the other spouse. In certain circumstances, the problems mentioned above must be tried to be resolved before filing a legal divorce.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Finalization:</span>  The parties to a divorce case have to obtain a copy of the decision which must be a certified copy. This document acts as evidence in a legal matter that the couple has decided to go their separate ways.                    </p>
                    <!-- 6th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Handling a Divorce: How to Deal with Difficult Times                    </h1>
                    <p class="pb-6 text-[#707070] text-justify font-poppins mx-auto">This help guide is designed to help you understand how to cope with these difficult times and what to do during these times.</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Bangladesh National Legal Aid Services Trust:</span>  You can get free legal aid if you’re a low-income person looking for divorce advice.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">NGOs focused on Women’s Rights:</span>  There are many NGOs in Bangladesh that are involved in working for women’s rights and helping women with their legal as well as financial troubles after divorce. Legal advice or counseling can be given to one.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Therapists and Counselors:</span>  Remember you are always able to consult with a professional therapist or counselor! This will help you to address the psychological aspects that come with the condition.                    </p>
                    <!-- 7th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Some Legal and Social Considerations for Divorce                    </h1>
                    <p class="pb-6 text-[#707070] text-justify font-poppins mx-auto">After getting a divorce, you should keep some social and legal aspects in mind. Here’s what you need to consider –</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Legal Considerations                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Child Custody:</span> You need to take proper care of your children after divorce. Courts make sure that the decision is in the child’s favor. They keep the child’s age, health, and emotional ties to each parent in mind. For more detailed information on child custody, you can refer to Child Custody After Divorce in Bangladesh                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Maintenance and Alimony:</span> The spouse and children may receive financial support. The amount depends on the financial status and needs of the parties. It can include monthly allowances or a lump-sum payment.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Division of Property:</span> The marital property is equally distributed. Courts ensure a fair division based on contributions and needs. This includes both assets and liabilities acquired during the marriage.                    </p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Social  Considerations                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Stigma and Social Pressure:</span> Divorce can carry a social stigma, especially for women. This can affect their social standing and prospects. Sometimes you might need social support and counseling to cope with societal pressures.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Emotional Impact:</span> Divorce can be emotionally stressful for both you and your spouse. Feel free to seek counseling or help from support groups!                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Future Relationships:</span> You need to form new relationships and social circles to rebuild your life after divorce. Make sure to take time to heal and adjust before entering new relationships.                    </p>
                    <!-- 8th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Role of Legal Professionals                    </h1>
                    <p class="pb-6 text-[#707070] text-justify font-poppins mx-auto">Both child custody and divorce require the aid of professionals who practice law. With their help, you can proceed with your court case and present yourself strongly. They will also make it easier for you to understand what needs to be done and followed. For the best chance to figure out child custody after divorce in Bangladesh, consider Litigation services from us.</p>
                    <img src="images/divorce-blog3.jpg" alt="" class="mx-auto my-10">                    

                    <!-- last -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">Final Words                    </h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Getting a divorce in Bangladesh involves navigating a complex legal landscape influenced by religious and statutory laws. Understanding the specific procedures under different personal laws is crucial for a smooth and legally compliant divorce process.</p> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Since this process can be challenging for many, we recommend taking professional help from <span><a class="text-[#0E675C] hover:text-[#B68C5A] font-semibold">Justice Portal</a></span>.</p>
                  </div>  
                  </div>
                </dialog>
              </div>
            </div>
          </div>
        </section> 
        <!-- seventh -->
        <section>
            <div class="hero mt-5">
              <div class="hero-content flex-col lg:flex-row lg:gap-20">
              <img
                src="images/tax2-law.jpg"
                class="lg:w-96 lg:h-96 rounded-lg shadow-2xl"/>
              <div>
                <h1 class="text-3xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-5">How to Submit Tax Returns in Bangladesh
                </h1>
                <p class="pb-6 text-[#707070] text-justify font-poppins">
                Paying taxes is one of the biggest duties that every Bangladeshi citizen has to follow once they are of age and have an income. It’s like voting when you are over 18 years of age. This duty, in fact, falls under the Income Tax Ordinance (ITO) of 1984.It includes rules, policies, and laws that oversee how taxes are imposed, collected, and managed by the government.To ensure that you are able to submit tax returns in Bangladesh properly while following the law, Justice Portal will show you the process. We will share all the latest information about submitting tax returns and the process in detail.......
                </p>
                <a class="border-none bg-none text-[#0E675C] hover:text-[#B68C5A] block text-right" onclick="my_modal_9.showModal()">Read More »</a>
                <dialog id="my_modal_9" class="modal modal-middle">
                  <div class="modal-box w-11/12 max-w-5xl">
                  <form method="dialog">
                    <button class="btn btn-xs btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  <!-- modal -->
                  <div class="px-5 mx-auto">
                    <!-- 1st -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">How to Submit Tax Returns in Bangladesh?                    </h1>
                    <p class="pb-2 text-[#707070d0] text-xs text-justify font-poppins">Last updated by <span><a href="index.php" class="text-[#0E675C] hover:text-[#B68C5A]">justiceportal</a></span> on July 18, 2024</p>
                    <div class="flex gap-2">
                      <img src="images/member4.png" alt="" class="w-6 h-6 mt-1">
                      <p class="pb-8 text-[#707070d0] text-xs text-justify font-poppins">By Jarin Tasnin Anika <br>
                       Managing Partner</p>
                    </div>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Paying taxes is one of the biggest duties that every Bangladeshi citizen has to follow once they are of age and have an income. It’s like voting when you are over 18 years of age. This duty, in fact, falls under the Income Tax Ordinance (ITO) of 1984.</p> 
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">To ensure that you are able to submit tax returns in Bangladesh properly while following the law, Justice Portal will show you the process. We will share all the latest information about submitting tax returns and the process in detail.</p> 
                    <img src="images/tax-blog1.jpg" alt="" class="mx-auto my-10">
                    <!-- 2nd -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">Who Needs To Submit Tax Returns in Bangladesh?                    </h1>
                    <p class="pb-4 text-[#707070] text-justify font-poppins mx-auto">
                    Before we get into how to submit tax returns in Bangladesh you need to know if you are someone who needs to do so. Anyone, man or woman, whose income is more than Tk 3,00,000 and Tk 3,50,000 needs to pay taxes.</p>
                    <p class="pb-6 text-[#707070] text-justify font-poppins mx-auto">Here is a simple table that shows who doesn’t need to submit tax returns more clearly:</p>
                    <div class="overflow-x-auto">
                    <table class="table border-2">
                      <!-- head -->
                      <thead>
                        <tr class="text-lg font-extrabold text-[#707070] font-montserrat pt-4 pb-4 mx-auto">
                          <th>Tax-Exempted Income Categories</th>
                          <th>For FY 2022 – 2023</th>
                          <th>Planned FY 2023-2024</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- row 1 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>Male taxpayer</td>
                          <td>BDT 300,000</td>
                          <td>BDT 350,000</td>
                        </tr>
                        <!-- row 2 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>Women and Senior citizens 65+ years</td>
                          <td>BDT 350,000	</td>
                          <td>BDT 400,000                          </td>
                        </tr>
                        <!-- row 3 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>Physically Challenged persons*</td>
                          <td>BDT 450,000</td>
                          <td>BDT 475,000                          </td>
                        </tr>
                        <!-- row 4 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>War-wounded gazette freedom fighter</td>
                          <td>BDT 475,000</td>
                          <td>BDT 500,000                          </td>
                        </tr>
                        <!-- row 5 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>Third gender taxpayers</td>
                          <td>BDT 350,000	</td>
                          <td>BDT 475,000                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <p class="pb-5 pt-5 text-[#707070] text-justify font-poppins mx-auto">* Parents and guardians of physically challenged children or dependents will have their income tax limit increased by BDT 50,000 for every child or dependent.</p>
                    <!-- 3rd -->  
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">When To Submit Tax Returns in Bangladesh?                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Generally, you will need to submit tax returns in Bangladesh between July 1 and November 30 of every fiscal year. However, the National Board of Revenue or NBR can extend the deadline. For FY 2023-24 the deadline was extended to January 31, 2024.</p>
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">What Is The Rate of Income Tax in Bangladesh?                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">As stated by the NBR, you must submit tax returns in Bangladesh once your income meets a certain limit. There are, of course, particular exceptions to the rule. These exceptions have a higher limit before they must submit tax returns.</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">The default limit in Bangladesh is an excess of income beyond BDT 3,00,000. Those with an income less than BDT 3,00,000 then still need to submit tax returns, but they can be filed under ‘zero return’ to avoid fines and penalties.</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">The amount of tax return you need to submit will be a certain percentage of your income. Here is a table that shows the percentage you need to pay:</p>
                    <div class="overflow-x-auto">
                    <table class="table border-2">
                      <!-- head -->
                      <thead>
                        <tr class="text-lg font-extrabold text-[#707070] font-montserrat pt-4 pb-4 mx-auto">
                          <th>Total Income</th>
                          <th>FY 2022 – 2023 Tax Rates (%)                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- row 1 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>Up to first Tk. 3,00,000</td>
                          <td>0%                          </td>
                        </tr>
                        <!-- row 2 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>For next Tk. 1,00,000	</td>
                          <td>5%                       </td>
                        </tr>
                        <!-- row 3 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>For next Tk. 3,00,000	</td>
                          <td>10%</td>
                        </tr>
                        <!-- row 4 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>For next Tk. 4,00,000	</td>
                          <td>15%</td>
                        </tr>
                        <!-- row 5 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>For next Tk. 5,00,000	</td>
                          <td>20%</td>
                        </tr>
                        <!-- row 6 -->
                        <tr class=" text-[#707070] text-justify font-poppins">
                          <td>For the rest of the amount</td>
                          <td>25%</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <!-- 4th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-8 pb-4 mx-auto">Required Documents To Submit Tax Returns in Bangladesh                    </h1>
                    <img src="images/tax-blog2.jpg" alt="" class="mx-auto my-10">
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Before we start the process of submitting tax returns in Bangladesh, you need to know which documents you will need. Here is the basic list you should collect:</p>
                    <li class="pb-2 text-[#707070] text-justify font-poppins mx-auto">eTIN</li>
                    <li class="pb-2 text-[#707070] text-justify font-poppins mx-auto">NID copy</li>
                    <li class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Property details(if any)</li>
                    <li class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Tax-free income certificates(if any)</li>
                    <li class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Previous years return</li>
                    <li class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Investment details(if any)</li>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">If you are employed, then you also need the following:</p>
                    <li class="pb-2 text-[#707070] text-justify font-poppins mx-auto">Salary certificates</li>
                    <li class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Bank statements</li>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">You might require additional documents, but you should consult with your <span><a class="text-[#0E675C] hover:text-[#B68C5A] font-semibold">income tax lawyer</a></span> for assistance.</p>        
                    <!-- 5th -->
                    <h1 class="text-4xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-4 mx-auto">How To Submit Tax Returns In Bangladesh?                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">It’s time to go over how to submit tax returns in Bangladesh. The process can be done in two ways; offline or online. Right now, we will be going over the online process as it’s hassle-free.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 1: Register on the E-Return System                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">To submit tax returns, you will need to visit the <span><a class="text-[#0E675C] hover:text-[#B68C5A] font-semibold">National Board of Revenue (NBR) website </a></span> and create an account using the e-return system. While you register, you will also need to input your Tax Identification Number (TIN), biometrically registered mobile number, and captcha.</p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">To verify that you have registered properly, you need to enter the OTP provided and set a password for future logins.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 2: Login to the System                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">With the registration complete you should log in to the e-return system with your TIN, password, and captcha. After you have logged in you should go over to the ‘Return Submission’ option on the dashboard.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 3: Provide Tax Assessment Information                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Once there, you will need to fill in the required tax assessment information, including income year, income source, heads of income, and return scheme. For those who are exempt from submitting tax returns in Bangladesh they need to provide the relevant amount and your resident status. </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Click “Save and Continue” to proceed.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 4: Enter Income Information                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">For those that must pay their taxes they need to give details about your income sources, tax rebates, and asset and liability information.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 5: Income Details                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Next up, tax payers need to list their income sources under ‘Heads of Income’, such as salaries, securities interest, or house property income. </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Be specific if your sole income source is your salary or if you have income from other sources. </p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 6: Other Sources Income Details                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Those with other income sources must give details of income from other sources, including foreign or tax-exempt income. </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Add the relevant information such as income source, payment authority, and related expenses.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 7: Complete Additional Information                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">With your income information added you need to submit your primary income source location, eligibility for rebates, and any special circumstances like being a war-wounded gazette freedom fighter or having a disability.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 8: Submit Investment Details                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">After that you need to input information like deposit premium service (DPS) or life insurance premium. This information will help to determine your total eligible investment for rebates.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 9: Input Expenditure Information                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">Now you need to give all the details of your expenditures. </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">If your total assets go beyond BDT 40 lakh, complete the IT10B form; otherwise, specify your total annual expenses without it.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 10: Tax and Payment                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">State and add any source tax and advance tax payments already made, which will be deducted from your total tax liability.</p>
                    <h1 class="text-2xl font-extrabold text-[#000F23] font-montserrat pt-4 pb-6 mx-auto">Step 11: Review and Submit                    </h1>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">You have reached the end of your tax return application. Now all you need to do is review all the information provided and submit your tax return. </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">At this stage you can choose to submit it online or offline:</p>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Offline or Paper Return:</span> Print the form and submit it to the relevant Income Tax Circle Office.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto"><span class="font-bold">Online Income Tax Return:</span> Submit electronically through the e-return system. Once submitted, no changes are possible.                    </p>
                    <p class="pb-5 text-[#707070] text-justify font-poppins mx-auto">If you are successful with your submission, you’ll get a confirmation message along with a Reference ID and Acknowledgment Receipt for your records.</p>
                    <img src="images/tax-blog3.jpg" alt="" class="mx-auto my-10">                    

                    <!-- last -->
                    <h1 class="text-5xl font-extrabold text-[#000F23] font-montserrat pt-6 pb-3 mx-auto">Final Words                    </h1>
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">So that’s how you submit tax returns in Bangladesh, or at least you can do it online. As Bangladeshi citizens, it’s our duty to pay taxes as this boosts our economy. Therefore, every single one of us should learn the process of filing tax returns. </p> 
                    <p class="pb-2 text-[#707070] text-justify font-poppins mx-auto">With the advancement and integration of technology and the internet the process of submitting tax returns is easier and more straightforward. But if you do encounter any issues you should contact <span><a class="text-[#0E675C] hover:text-[#B68C5A] font-semibold">Justice Portal</a></span> income tax lawyers. We are available at all times to help you overcome any issues you might have.</p>
                  </div>  
                  </div>
                </dialog>
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
    <!-- footer end -->
    <script src="https://kit.fontawesome.com/00a1039bda.js" crossorigin="anonymous"></script>
 </body>    
</html>