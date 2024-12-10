<?php
	session_start();
	if ($_SESSION['login'] == TRUE && $_SESSION['status'] == 'Active') {
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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
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
        .font-family-karla { font-family: karla; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #D1D5DB; }
        .active-nav-link { background: #0E675C; }
        .nav-item:hover { background: #6abab0b0; }
        .account-link:hover { background: #0E675C; }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				function drawChart() {
					
					var data = google.visualization.arrayToDataTable([
					['Role','Number'],
					<?php
						
						$con = connect();
						$query="SELECT count(*) as number,role FROM user where  NOT role='Admin'  GROUP BY role";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo "['".$row["role"]."',".$row["number"]."],";
						}
					?>
					]);
					var options = {
						'title':'Percentage of Registererd User & Lawyer',
						'legend':'left',
						'is3D':true,
						
					};
					
					var chart = new google.visualization.PieChart(document.getElementById('total'));
					
					chart.draw(data, options);
				}
			</script>
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				function drawChart() {
					
					var data = google.visualization.arrayToDataTable([
					['Speciality','Number'],
					<?php
						
						$con = connect();
						$query="SELECT count(speciality) as number,speciality FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id GROUP BY speciality";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo "['".$row["speciality"]."',".$row["number"]."],";
						}
					?>
					]);
					var options = {
						'title':'Percentage of Registererd Lawyers Speciality',
						'legend':'left',
						'is3D':true,
						
					};
					
					var chart = new google.visualization.PieChart(document.getElementById('total2'));
					
					chart.draw(data, options);
				}
			</script>
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				function drawChart() {
					
					var data = google.visualization.arrayToDataTable([
					['Degree','Number'],
					<?php
						
						$con = connect();
						$query="SELECT count(degree) as number,degree FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id GROUP BY degree";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo "['".$row["degree"]."',".$row["number"]."],";
						}
					?>
					]);
					var options = {
						'title':'Percentage of Registererd Lawyers Degree',
						'legend':'left',
						'is3D':true,
						
					};
					
					var chart = new google.visualization.PieChart(document.getElementById('total3'));
					
					chart.draw(data, options);
				}
			</script>
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				function drawChart() {
					
					var data = google.visualization.arrayToDataTable([
					['Practise Length','Number'],
					<?php
						
						$con = connect();
						$query="SELECT count(practise_Length) as number,practise_Length FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id GROUP BY practise_Length";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo "['".$row["practise_Length"]."',".$row["number"]."],";
						}
					?>
					]);
					var options = {
						'title':'Percentage of Experience Lawyers ',
						'legend':'left',
						'is3D':true,
						
					};
					
					var chart = new google.visualization.PieChart(document.getElementById('total4'));
					
					chart.draw(data, options);
				}
			</script>
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				function drawChart() {
					
					var data = google.visualization.arrayToDataTable([
					['Name','Number'],
					<?php
						
						$con = connect();
						$query="SELECT count(booking.lawyer_id) as number,user.first_name as name FROM booking,lawyer,user WHERE booking.lawyer_id=lawyer.lawyer_id and user.u_id=lawyer.lawyer_id GROUP BY booking.lawyer_id";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo "['".$row["name"]."',".$row["number"]."],";
						}
					?>
					]);
					var options = {
						'title':'Percentage of Most Experience Lawyers ',
						'legend':'left',
						'is3D':true,
						
					};
					
					var chart = new google.visualization.PieChart(document.getElementById('total5'));
					
					chart.draw(data, options);
				}
			</script>
</head>
<body class="bg-gray-100 font-family-karla flex">
    <aside class="relative h-screen w-96 hidden sm:block shadow-xl bg-gray-800">
        <div class="p-10 mb-10 border-b border-gray-500">
            <a class="text-white text-base font-bold font-garamond hover:text-gray-300">Welcome,</a>
                    <h1 class="text-4xl font-garamond font-bold text-white dark:text-gray-800">Admin</h1>      
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <h3 class="mb-4 ml-6 text-sm font-medium text-[#cbd1d3]">MENU</h3>
            
            <a href="a_dashboard.php" class="flex items-center opacity-75 hover:opacity-100 text-white gap-2.5 py-4 pl-6 nav-item">
                <svg
                    class="fill-current"
                    width="24"
                    height="20"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                        fill=""
                    />
                    <path
                        d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                        fill=""
                    />
                    <path
                        d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                        fill=""
                    />
                    <path
                        d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                        fill=""
                    />
                </svg>
                Dashboard
            </a>
            
            <a href="a_lawyer.php" class="flex items-center text-white opacity-75 hover:opacity-100 gap-2.5 py-4 pl-6 nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                <path d="M20.7739 18C21.5232 18 22.1192 17.5285 22.6543 16.8691C23.7498 15.5194 21.9512 14.4408 21.2652 13.9126C20.5679 13.3756 19.7893 13.0714 18.9999 13M17.9999 11C19.3806 11 20.4999 9.88071 20.4999 8.5C20.4999 7.11929 19.3806 6 17.9999 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M3.2259 18C2.47659 18 1.88061 17.5285 1.34548 16.8691C0.250028 15.5194 2.04861 14.4408 2.73458 13.9126C3.43191 13.3756 4.21052 13.0714 4.99994 13M5.49994 11C4.11923 11 2.99994 9.88071 2.99994 8.5C2.99994 7.11929 4.11923 6 5.49994 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M8.08368 15.1112C7.0619 15.743 4.38286 17.0331 6.01458 18.6474C6.81166 19.436 7.6994 20 8.8155 20H15.1843C16.3004 20 17.1881 19.436 17.9852 18.6474C19.6169 17.0331 16.9379 15.743 15.9161 15.1112C13.52 13.6296 10.4797 13.6296 8.08368 15.1112Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15.4999 7.5C15.4999 9.433 13.9329 11 11.9999 11C10.0669 11 8.49988 9.433 8.49988 7.5C8.49988 5.567 10.0669 4 11.9999 4C13.9329 4 15.4999 5.567 15.4999 7.5Z" stroke="currentColor" stroke-width="1.5" />
            </svg>
                Lawyers
            </a>            
            <a href="a_user.php" class="flex items-center text-white opacity-75 hover:opacity-100 gap-2.5 py-4 pl-6 nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                <path d="M18.6161 20H19.1063C20.2561 20 21.1707 19.4761 21.9919 18.7436C24.078 16.8826 19.1741 15 17.5 15M15.5 5.06877C15.7271 5.02373 15.9629 5 16.2048 5C18.0247 5 19.5 6.34315 19.5 8C19.5 9.65685 18.0247 11 16.2048 11C15.9629 11 15.7271 10.9763 15.5 10.9312" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M4.48131 16.1112C3.30234 16.743 0.211137 18.0331 2.09388 19.6474C3.01359 20.436 4.03791 21 5.32572 21H12.6743C13.9621 21 14.9864 20.436 15.9061 19.6474C17.7889 18.0331 14.6977 16.743 13.5187 16.1112C10.754 14.6296 7.24599 14.6296 4.48131 16.1112Z" stroke="currentColor" stroke-width="1.5" />
                <path d="M13 7.5C13 9.70914 11.2091 11.5 9 11.5C6.79086 11.5 5 9.70914 5 7.5C5 5.29086 6.79086 3.5 9 3.5C11.2091 3.5 13 5.29086 13 7.5Z" stroke="currentColor" stroke-width="1.5" />
            </svg>
                Users
            </a> 
            <a href="l_booking.php" class="flex items-center text-white opacity-75 hover:opacity-100 gap-2.5 py-4 pl-6 nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                <path d="M17 15.8462C17 14.8266 17.8954 14 19 14C20.1046 14 21 14.8266 21 15.8462C21 16.2137 20.8837 16.5561 20.6831 16.8438C20.0854 17.7012 19 18.5189 19 19.5385V20M18.9902 22H18.9992" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16 22H6.59087C5.04549 22 3.81631 21.248 2.71266 20.1966C0.453365 18.0441 4.1628 16.324 5.57757 15.4816C8.12805 13.9629 11.2057 13.6118 14 14.4281" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z" stroke="currentColor" stroke-width="1.5" />
            </svg>
               Booked Lawyer
            </a>           
            <a href="add_lawyer.php" class="flex items-center text-white active-nav-link gap-2.5 py-4 pl-6 nav-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                    <path d="M12 7.5C12 9.433 10.433 11 8.5 11C6.567 11 5 9.433 5 7.5C5 5.567 6.567 4 8.5 4C10.433 4 12 5.567 12 7.5Z" stroke="currentColor" stroke-width="1.5" />
                    <path d="M13.5 11C15.433 11 17 9.433 17 7.5C17 5.567 15.433 4 13.5 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M13.1429 20H3.85714C2.83147 20 2 19.2325 2 18.2857C2 15.9188 4.07868 14 6.64286 14H10.3571C11.4023 14 12.3669 14.3188 13.1429 14.8568" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M19 14V20M22 17L16 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                Add Lawyers
            </a>                                   
            <a href="a_settings.php" class="flex items-center text-white opacity-75 hover:opacity-100 gap-2.5 py-4 pl-6 nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"  fill="none">
                <path d="M15.5 12C15.5 13.933 13.933 15.5 12 15.5C10.067 15.5 8.5 13.933 8.5 12C8.5 10.067 10.067 8.5 12 8.5C13.933 8.5 15.5 10.067 15.5 12Z" stroke="currentColor" stroke-width="1.5" />
                <path d="M21.011 14.0965C21.5329 13.9558 21.7939 13.8854 21.8969 13.7508C22 13.6163 22 13.3998 22 12.9669V11.0332C22 10.6003 22 10.3838 21.8969 10.2493C21.7938 10.1147 21.5329 10.0443 21.011 9.90358C19.0606 9.37759 17.8399 7.33851 18.3433 5.40087C18.4817 4.86799 18.5509 4.60156 18.4848 4.44529C18.4187 4.28902 18.2291 4.18134 17.8497 3.96596L16.125 2.98673C15.7528 2.77539 15.5667 2.66972 15.3997 2.69222C15.2326 2.71472 15.0442 2.90273 14.6672 3.27873C13.208 4.73448 10.7936 4.73442 9.33434 3.27864C8.95743 2.90263 8.76898 2.71463 8.60193 2.69212C8.43489 2.66962 8.24877 2.77529 7.87653 2.98663L6.15184 3.96587C5.77253 4.18123 5.58287 4.28891 5.51678 4.44515C5.45068 4.6014 5.51987 4.86787 5.65825 5.4008C6.16137 7.3385 4.93972 9.37763 2.98902 9.9036C2.46712 10.0443 2.20617 10.1147 2.10308 10.2492C2 10.3838 2 10.6003 2 11.0332V12.9669C2 13.3998 2 13.6163 2.10308 13.7508C2.20615 13.8854 2.46711 13.9558 2.98902 14.0965C4.9394 14.6225 6.16008 16.6616 5.65672 18.5992C5.51829 19.1321 5.44907 19.3985 5.51516 19.5548C5.58126 19.7111 5.77092 19.8188 6.15025 20.0341L7.87495 21.0134C8.24721 21.2247 8.43334 21.3304 8.6004 21.3079C8.76746 21.2854 8.95588 21.0973 9.33271 20.7213C10.7927 19.2644 13.2088 19.2643 14.6689 20.7212C15.0457 21.0973 15.2341 21.2853 15.4012 21.3078C15.5682 21.3303 15.7544 21.2246 16.1266 21.0133L17.8513 20.034C18.2307 19.8187 18.4204 19.711 18.4864 19.5547C18.5525 19.3984 18.4833 19.132 18.3448 18.5991C17.8412 16.6616 19.0609 14.6226 21.011 14.0965Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
                Settings
            </a>                                   
        </nav>       
    </aside>
    <div class="w-full flex flex-col h-screen overflow-y-auto">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-4 px-6 hidden sm:flex">
            <div class="w-1/2">
            <h1 class="mb-36 lg:mb-0 -ml-10 lg:-ml-0 lg:text-4xl font-garamond flex multicolor-text"><img src="images/logo (2).png" alt="" class="lg:w-14 w-14 -mt-1">Justice Portal</h1>
            </div>
            <div class=" w-1/2 flex justify-end">
                    <a href="logout.php" class="block px-4 py-2 font-semibold ">Sign Out</a>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-gray-800 py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">User</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="a_dashboard.php" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-regular fa-user mr-3"></i>
                Lawyers                   
                </a>
                <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-solid fa-question mr-3"></i>    
                Users
                </a>
                <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Add Users
                </a>
                <a href="logout.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>
        <!-- main start -->
        <main>
        <div class="lg:mx-10 mx-auto max-w-screen-2xl my-5 p-4 md:p-6 2xl:p-10">
            <div class="mx-auto max-w-242.5">
              <!-- Breadcrumb Start -->
              <div
                class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
                >
                <h2 class="text-title-md2 text-2xl font-bold text-black dark:text-white">
                  Add Lawyers
                </h2>

                <nav>
                  <ol class="flex items-center gap-2">
                    <li>
                      <a class="font-medium" href="user_dashboard.php">Dashboard /</a>
                    </li>
                    <li class="text-[#0E675C]">Add Lawyers</li>
                  </ol>
                </nav>
              </div>
              <!-- Breadcrumb End -->                
                <!-- ====== Lawyers Section Start -->
               <div class="grid grid-cols-5 gap-8">
                <div class="col-span-5 xl:col-span-3">
                  <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                  >
                    <div
                      class="border-b border-stroke px-7 py-4 dark:border-strokedark"
                    >
                      <h3 class="font-medium text-black dark:text-white">
                        Personal Information
                      </h3>
                    </div>
                    <div class="p-7">
                    <form action="lawyer_registation.php"  method="post" enctype="multipart/form-data"  id="validateForm">
                        <!-- f name -->
                        <div class="mb-6 flex flex-col gap-5 sm:flex-row">
                          <div class="w-full sm:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="fname"
                              >First Name</label
                            >
                            <div class="relative">
                              <span class="absolute left-4 top-4">
                                <svg
                                  class="fill-current"
                                  width="20"
                                  height="20"
                                  viewBox="0 0 20 20"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <g opacity="0.8">
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M3.72039 12.887C4.50179 12.1056 5.5616 11.6666 6.66667 11.6666H13.3333C14.4384 11.6666 15.4982 12.1056 16.2796 12.887C17.061 13.6684 17.5 14.7282 17.5 15.8333V17.5C17.5 17.9602 17.1269 18.3333 16.6667 18.3333C16.2064 18.3333 15.8333 17.9602 15.8333 17.5V15.8333C15.8333 15.1703 15.5699 14.5344 15.1011 14.0655C14.6323 13.5967 13.9964 13.3333 13.3333 13.3333H6.66667C6.00363 13.3333 5.36774 13.5967 4.8989 14.0655C4.43006 14.5344 4.16667 15.1703 4.16667 15.8333V17.5C4.16667 17.9602 3.79357 18.3333 3.33333 18.3333C2.8731 18.3333 2.5 17.9602 2.5 17.5V15.8333C2.5 14.7282 2.93899 13.6684 3.72039 12.887Z"
                                      fill=""
                                    />
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M9.99967 3.33329C8.61896 3.33329 7.49967 4.45258 7.49967 5.83329C7.49967 7.214 8.61896 8.33329 9.99967 8.33329C11.3804 8.33329 12.4997 7.214 12.4997 5.83329C12.4997 4.45258 11.3804 3.33329 9.99967 3.33329ZM5.83301 5.83329C5.83301 3.53211 7.69849 1.66663 9.99967 1.66663C12.3009 1.66663 14.1663 3.53211 14.1663 5.83329C14.1663 8.13448 12.3009 9.99996 9.99967 9.99996C7.69849 9.99996 5.83301 8.13448 5.83301 5.83329Z"
                                      fill=""
                                    />
                                  </g>
                                </svg>
                              </span>
                              <input
                                class="w-full rounded border border-stroke bg-gray py-3 pl-12 pr-4.5 font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                type="text"
                                name="first_Name"
                                id="first_Name"
                                placeholder="First Name"
                                />                             
                            </div>
                          </div>
                          <!-- l name -->
                          <div class="w-full sm:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="lname"
                              >Last Name</label
                            >
                              <input
                                class="w-full rounded border border-stroke bg-gray py-3 pl-6 pr-4.5 font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                type="text"
                                name="last_Name"
                                id="l_Name"
                                placeholder="Last Name"/>                          
                            </div>
                        </div>
                        <!-- email -->
                    <div class="mb-6 flex flex-col gap-5 sm:flex-row">
                        <div class="w-full sm:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="email"
                            >Email</label
                          >
                          <input
                              class="w-full rounded border border-stroke bg-gray px-5 py-3 font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="email"
                              name="email"
                              id="email"
                              placeholder="jarin@gmail.com"
                            />                                                     
                        </div>
                        <!-- contact -->
                        <div class="w-full sm:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="num"
                            >Contact Number</label
                          >
                          <input
                              class="w-full rounded border border-stroke bg-gray px-5 py-3 font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="contact_number"
                              id="contact_number"
                              placeholder="+880 123456789"
                            />                                                     
                        </div>
                    </div>                  
                        <!-- image -->
                        <div class="mb-6">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="num"
                            >Image</label
                          >
                          <input
                              class="w-full rounded border border-stroke bg-gray px-5 py-3 font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="file"
                              name="fileToUpload"
                              id="image"
                              oninput="CheckValue(this);"
                              placeholder="Image"
                            />                                                     
                        </div>
                    <!-- Address -->
                    <div class="mb-6">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="address"
                            >Address</label
                          >
                            <input
                              class="w-full rounded border border-stroke bg-gray py-3 pl-6 pr-4.5 font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="full_address"
                              id="full_address"
                              placeholder="Address"
                            />
                        </div>
                    <!-- Country -->
                    <div class="mb-6 flex flex-col gap-5 sm:flex-row">
                          <div class="w-full sm:w-1/2">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="city">City</label>
                              <select id="city" name="city" class="w-full rounded border border-stroke bg-gray px-5 py-3    font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary">
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
                          <div class="w-full sm:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="zip"
                              >Zip Code</label>
                              <input type="text" name="zip_code" id="zip_code" class="w-full rounded border border-stroke bg-gray px-5 py-3 font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary" placeholder="Enter zip code" />
                        </div>
                    </div>
                        <!-- education -->
                    <div class="mb-6">
                    <h3 class="font-medium text-black dark:text-white">
                       Educational Information
                      </h3>
                    </div>
                        <!-- Institution -->
                        <div class="mb-6">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="institute"
                            >University</label
                          >
                          <input
                              class="w-full rounded border border-stroke bg-gray px-5 py-3 font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="university_College"
                              id="institute"
                              oninput="CheckValue(this);"
                              placeholder="Institute Name"
                            />                                                     
                        </div>
                        <!-- degree -->
                        <div class="mb-6 flex flex-col gap-5 sm:flex-row">
                          <div class="w-full sm:w-1/2">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="degree">Degree</label>
                              <select id="degree" name="degree" class="w-full rounded border border-stroke bg-gray px-5 py-3    font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary">
                                <option value="" selected>Choose...</option>
                                <option value="LLB">LLB</option>
                                <option value="LLM">LLM</option>
                              </select>
                          </div>
                          <!-- passing year -->
                          <div class="w-full sm:w-1/2">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="pyear">Passing Year</label>
                              <select id="passing_year" name="passing_year" class="w-full rounded border border-stroke bg-gray px-5 py-3    font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary">
                                <option value="" selected>Choose...</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>                               
                                <option value="2007">2007</option>                               
                                <option value="2008">2008</option>                               
                                <option value="2009">2009</option>                               
                                <option value="2010">2010</option>                               
                                <option value="2011">2011</option>                               
                                <option value="2012">2012</option>                               
                                <option value="2013">2013</option>                               
                                <option value="2014">2014</option>                               
                                <option value="2015">2015</option>                               
                                <option value="2016">2016</option>                               
                                <option value="2017">2017</option>                               
                                <option value="2018">2018</option>                               
                                <option value="2019">2019</option>                               
                                <option value="2020">2020</option>                               
                                <option value="2021">2021</option>                               
                                <option value="2022">2022</option>                               
                                <option value="2023">2023</option>                               
                                <option value="2024">2024</option>                               
                              </select>
                        </div>
                   
                        <!-- length -->
                        <div class="w-full sm:w-1/2">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="practise">Length of Practice</label>
                              <select id="practise" name="practise_Length" class="w-full rounded border border-stroke bg-gray px-5 py-3    font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary">
                                <option value="" selected>Choose...</option>
                                <option value="1-5 years">1-5 years</option>
                                <option value="6-10 years">6-10 years</option>
                                <option value="11-15 years">11-15 years</option>
                                <option value="16-20 years">16-20 years</option>
                                <option value="Most Senior">Most Senior</option>
                              </select>
                          </div>
                        </div> 
                          <!-- handle cases a lawyer can choose 5 category at max-->
                        <div class="mb-6">
                          <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="speciality">Types of case handle</label>
                              <div class="grid grid-col-1 lg:grid-cols-3 gap-1">
                              <div class="flex items-center">
                                  <input id="crime" type="checkbox" name="case_handle[]" value="Criminal matter" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="crime" class="ml-2 text-sm font-medium text-gray-900">Criminal Matter</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="civil" type="checkbox" name="case_handle[]" value="Civil matter" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="civil" class="ml-2 text-sm font-medium text-gray-900">Civil Matter</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="writ" type="checkbox" name="case_handle[]" value="Writ Jurisdiction" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="writ" class="ml-2 text-sm font-medium text-gray-900">Writ Jurisdiction</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="com" type="checkbox" name="case_handle[]" value="Company law" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="com" class="ml-2 text-sm font-medium text-gray-900">Company Law</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="con" type="checkbox" name="case_handle[]" value="Contract law" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="con" class="ml-2 text-sm font-medium text-gray-900">Contract Law</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="comm" type="checkbox" name="case_handle[]" value="Commercial matter" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="comm" class="ml-2 text-sm font-medium text-gray-900">Commercial Matter</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="cons" type="checkbox" name="case_handle[]" value="Construction law" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="cons" class="ml-2 text-sm font-medium text-gray-900">Construction Law</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="it" type="checkbox" name="case_handle[]" value="Information Technology" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="it" class="ml-2 text-sm font-medium text-gray-900">Information Technology</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="fam" type="checkbox" name="case_handle[]" value="Family Law" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="fam" class="ml-2 text-sm font-medium text-gray-900">Family Law</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="rel" type="checkbox" name="case_handle[]" value="Religious Matter" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="rel" class="ml-2 text-sm font-medium text-gray-900">Religious Matter</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="inv" type="checkbox" name="case_handle[]" value="Investment Matter" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="inv" class="ml-2 text-sm font-medium text-gray-900">Investment Matter</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="lab" type="checkbox" name="case_handle[]" value="Labour Law" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="lab" class="ml-2 text-sm font-medium text-gray-900">Labour Law</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="prop" type="checkbox" name="case_handle[]" value="Property Law" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="prop" class="ml-2 text-sm font-medium text-gray-900">Property Law</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="tax" type="checkbox" name="case_handle[]" value="Taxation Matter" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="tax" class="ml-2 text-sm font-medium text-gray-900">Taxation Matter</label>
                              </div>
                              <div class="flex items-center">
                                  <input id="oth" type="checkbox" name="case_handle[]" value="Others" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                  <label for="oth" class="ml-2 text-sm font-medium text-gray-900">Others</label>
                              </div>
                          </div>
                        </div>
                        <!-- Speciality -->
                        <div class="mb-6">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="practise">Speciality</label>
                              <select id="practise" name="speciality" class="w-full rounded border border-stroke bg-gray px-5 py-3    font-medium text-black focus:border-gray-800 focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary">
                              <option value=" " selected>Choose...</option>
                              <option value="Criminal Law">Criminal Law</option>
                              <option value="Civil Law">Civil Law</option>
                              <option value="Writ Jurisdiction">Writ Jurisdiction</option>
                              <option value="Company Law">Company Law</option>
                              <option value="Contract Law">Contract Law</option>
                              <option value="Commercial Law">Commercial Law</option>
                              <option value="Construction Law">Construction Law</option>
                              <option value="IT Law">IT Law</option>
                              <option value="Family Law">Family Law</option>
                              <option value="Religious Law">Religious Law</option>
                              <option value="Investment Law">Investment Law</option>
                              <option value="Labour Law">Labour Law</option>
                              <option value="Property Law">Property Law</option>
                              <option value="Taxation Law">Taxation Law</option>
                              </select>
                          </div>
                        <!-- button -->                     
                        <div class="flex justify-end gap-4">
                          <button
                            class="flex justify-center rounded bg-gradient-to-r from-[#0E675C] to-black px-6 py-2 font-medium text-white hover:bg-opacity-90" name="post"
                            type="submit" value="Register"
                          >
                            Register
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
               
              </div>
              <!-- ====== lawyers Section End -->                           
            </div>
          </div>
        </main>
         <!-- main end -->
    </div>
    
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
<?php
	} else {
		header('location:login.php?deactivate');
	}
?>