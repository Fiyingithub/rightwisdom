<?php
session_start();

if(!isset($_SESSION['firstname']) || !isset($_SESSION['surname']))
{
    header("location:studentlogin.php");
}

$myFirstname = $_SESSION['firstname'];
$mySurname= $_SESSION['surname'];

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <!-- <link rel="stylesheet" href="../src/output.css"> -->
    <script src="../../Helpers/Tailwind/tailwind.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Rancho&display=swap" rel="stylesheet">
</head>
<body class="md:bg-[#F9C18E] bg-white">
    <div class="w-[100vw] h-[100vh] flex flex-wrap gap-4">
        <div class="hidden md:block md:w-[20vw] w-[80vw] h-[100] bg-[#F97903] text-center pt-4" id="sidebar">
           <div class="">
               <img class="md:hidden w-6 h-6 ml-4" src="../../Helpers/asset/left-arrow.png" alt="back-arrow" onclick="closeSide()">
               <div class="w-[75px] h-[75px] border-2 border-orange-300 rounded-[300px] bg-white text-2xl text-[#F97903] font-[700] pt-[20px] mx-[auto]" style="text-shadow: 2px 2px  #D9700E;">RWS</div>
           </div>

            <h1 class="text-4xl font-[600] my-4 text-white" style="text-shadow: 2px 2px 2px black;">Right Wisdom <br> School</h1><br><br>

            <div class="">
                <div class="flex gap-2 items-center justify-center">
                    <img class="w-6 h-6" src="../../Helpers/asset/dashboard.png" alt="dashboard-image">
                    <a href="student-dashboard.html" class="text-3xl font-[500] text-white">Dashboard</a>
                    
                </div><br>
        
                <div class="">
                    <a href="studentprofile.html">
                        <div class="flex gap-2 justify-center items-center -ml-8 cursor-pointer">
                            <img class="w-6 h-6" src="../../Helpers/asset/user (3).png" alt="dashboard-image">
                            <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" >Profile</p>
                            
                        </div>
                    </a>
        
                </div><br>
        
                <div class="">
                   <a href="#">
                      <div class="flex gap-[8px] justify-center items-center ml-[3px] cursor-pointer">
                           <img class="w-8 h-8" src="../../Helpers/asset/science.png" alt="Guardian image">
                           <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" >Attendance</p>
                          
                      </div>
                   </a>
                </div><br>
        
                <div class="">
                   <a href="#">
                      <div class="flex gap-[8px] justify-center items-center -ml-4 cursor-pointer">
                           <img class="w-6 h-6" src="../../Helpers/asset/exam (1).png" alt="dashboard-image">
                           <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" >Class List</p>
                           
                      </div>
                   </a>
                </div><br>
        
                <div class="">
                    <a href="#">
                       <div class="flex gap-2 justify-center items-center -ml-8 cursor-pointer">
                            <img class="w-6 h-6" src="../../Helpers/asset/teared-book.png" alt="dashboard-image">
                            <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" >Subject</p>
                            
                       </div>
                    </a>
                </div><br>
        
                <div class="">
                    <a href="#">
                       <div class="flex gap-[8px] justify-center items-center -ml-2 cursor-pointer">
                            <img class="w-6 h-6" src="../../Helpers/asset/class-timetable.png" alt="dashboard-image">
                            <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" >Timetable</p>
                            
                       </div>
                    </a>
                </div><br>
        
                <div class="">
                    <a href="cbtexam.html">
                       <div class="flex gap-2 justify-center items-center -ml-12 cursor-pointer">
                            <img class="w-[30px] h-[30px]" src="../../Helpers/asset/exam.png" alt="dashboard-image">
                            <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" >Exam</p>
                            
                       </div>
                    </a>
                </div><br>
        
                <div class="">
                    <a href="view-result-by-student.html">
                       <div class="flex gap-2 justify-center items-center -ml-8 cursor-pointer">
                            <img class="w-[30px] h-[30px]" src="../../Helpers/asset/score.png" alt="dashboard-image">
                            <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" >Results</p>
                           
                       </div>
                    </a>
                </div><br>
                
                <div class="flex justify-center ml-[-40px] gap-2 items-center">
                    <img class="w-6 h-6" src="/asset/exit (1).png" alt="exit">
                    <a href="#" class="text-white  hover:font-[700] hover:text-xl font-[700]">Logout</a>
                </div>
            </div>
        </div>

        <!-- -------Main Page--  ------ -->


        <div class="lg:w-[78vw] w-[100vw] h-[1700px] md:h-[100vh] md:pt-4">
            <div class="md:w-[78vw] w-[100vw] md:h-[70px] h-[80px] md:pl-8 md:px-0 px-4 md:gap-12 gap-4 flex  items-center md:rounded-md bg-[white] md:shadow-md" id="navbar">

                <img class="md:hidden w-6 h-6" src="../../Helpers/asset/menu.png" alt="" onclick="menuImage()">

                <div class="flex gap-1">
                    <img class="w-8 h-8" src="../../Helpers/asset/protection.png" alt="">
                <h1 class="text-xl font-[700]">Student</h1>
                </div>

                <div class="flex md:gap-4 items-center w-[60%] md:w-[45vw] h-[50px] border-2 border-[#F97903] rounded-[25px] shadow-md">
                    <form action="">
                        <input class="outline-none bg-transparent w-[96%] md:w-[40vw] h-[50px] lg:pl-8 pl-4" type="search" placeholder="Search..." name="" id="">
                    </form>
                    <img class="w-4 h-4 mr-4 md:mr-0 cursor-pointer" src="../../Helpers/asset/search.png" alt="search">
                </div>

                <div class="hidden md:flex items-center gap-6">
                   <div class="flex gap-4">
                       <img class="w-6 h-6 cursor-pointer" src="../../Helpers/asset/mail.png" alt="notification">
                       <img class="w-6 h-6 cursor-pointer" src="../../Helpers/asset/notification.png" alt="notification">
                   </div>

                  <div class="flex gap-2 items-center">
                        <!-- <img class="w-8 h-8  cursor-pointer rounded-[50px]" src="../../Helpers/asset/fantasy-domik-.jpg" alt=""> -->

                        <div class="flex gap-2 items-center">
                            <img class="w-8 h-8  cursor-pointer rounded-[50px]" src="../../Helpers/asset/fantasy-domik-.jpg" alt="">
    
                            <div class="text-center">
                                <b><?php echo $myFirstname . ' ' . $mySurname; ?></b>
                                <p>Student</p>
                            </div>
                       </div>
                  </div>
                    
                </div>
            </div><br class="hidden md:block">

            <div class=" md:w-[78vw] w-[100vw] h-[630px] rounded-br-lg rounded-bl-lg md:bg-white pt-2 pl-4" id="mainpage">
                <div class="md:flex gap-4 ">
                    <div class="w-[55%] h-[100%]">

                        <div class="flex gap-10 md:w-[100%] pt-10 h-[250px] shadow- pl-6">
                            <h1 class="md:font-[600] text-2xl pt-4">Welcome back, <b><?php echo $myFirstname . ' ' . $mySurname; ?>!</b></h1>
                            <!-- <img class="h-[150px] w-[150px]" src="/asset/books.png" alt="book image"> -->
                        </div><br class="hidden md:block">

                        <div class="md:mt-[20px] -mt-6">
                            <div class="flex flex-wrap gap-[53px]">
                                <a href="#">
                                    <div class="md:w-[180px] w-[92vw] h-[120px] bg-[#F97903] rounded-lg pt-4 hover:shadow transition-ease-in hover:scale-105 ">
                                        <img class="h-[50px] mx-[auto] w-[50px]" src="../../Helpers/asset/science.png" alt="book image">
                                        <h1 class="text-center text-white font-[500]">Attendance</h1>
                                    </div>
                                </a>

                                <a href="#">
                                    <div class="md:w-[180px] w-[92vw] h-[120px] bg-[#F97903] rounded-lg pt-[16px] hover:shadow transition-ease-in hover:scale-105 ">
                                        <img class="h-[48px] mx-[auto] w-[47px]" src="../../Helpers/asset/exam (1).png" alt="book image">
                                        <h1 class="text-center text-white font-[500]">Class List</h1>
                                    </div>
                                </a>

                                <a href="#">
                                    <div class="md:w-[180px] w-[92vw] h-[120px] bg-[#F97903] rounded-lg pt-[12px] hover:shadow transition-ease-in hover:scale-105 ">
                                        <img class="h-[50px] mx-[auto] w-[50px]" src="../../Helpers/asset/teared-book.png" alt="book image">
                                        <h1 class="text-center text-white font-[500]">Subject</h1>
                                    </div>
                                </a>
                                
                            </div><br><br><br class="hidden md:block">

                            <div class="flex flex-wrap gap-[53px]">
                                <a href="#">
                                    <div class="md:w-[180px] w-[92vw] h-[120px] bg-[#F97903] rounded-lg pt-4 hover:shadow transition-ease-in hover:scale-105 ">
                                        <img class="h-[50px] mx-[auto] w-[50px]" src="../../Helpers/asset/class-timetable.png" alt="book image">
                                        <h1 class="text-center text-white font-[500]">Timetable</h1>
                                    </div>
                                </a>

                                <a href="#">
                                    <div class="md:w-[180px] w-[92vw] h-[120px] bg-[#F97903] rounded-lg pt-4 hover:shadow transition-ease-in hover:scale-105 ">
                                        <img class="h-[50px] mx-[auto] w-[50px]" src="../../Helpers/asset/exam.png" alt="book image">
                                        <h1 class="text-center text-white font-[500]">Exam</h1>
                                    </div>
                                </a>

                                <a href="#">
                                    <div class="md:w-[180px] w-[92vw] h-[120px] bg-[#F97903] rounded-lg pt-4 hover:shadow transition-ease-in hover:scale-105 ">
                                        <img class="h-[50px] mx-[auto] w-[50px]" src="../../Helpers/asset/score.png" alt="book image">
                                        <h1 class="text-center text-white font-[500]">Results</h1>
                                    </div>
                                </a>
                                
                            </div><br class="md:hidden"><br class="md:hidden">
                        </div>
                    </div>

                    <div class="md:px-4 pr-4 md:pr-0 pt-4 bg-white rounded-md md:shadow-xl mr-4 h-[78vh] md:w-[33vw] w-[100%]">
                        <h2 class="text-2xl font-bold mb-4">Calendar</h2>
                        <div id="calendar" class="overflow-x-auto"></div><br>

                        <div class="">
                            <b>School Activity</b>
                            <div class="mt-4 ml-8">
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 bg-gray-200 rounded-md">
                                        <img class="w-4 h-6 mx-[auto] pt-1" src="../../Helpers/asset/notification.png" alt="notification">
                                    </div>
    
                                    <div class="">
                                        <h1 class="text-[15px] font-[500]">Eng- Vocabulary test</h1>
                                        <p class="text-[13px] text-gray-600">All Wednessdays</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-4 mt-4">
                                    <div class="w-8 h-8 bg-gray-200 rounded-md">
                                        <img class="w-4 h-6 mx-[auto] pt-1" src="../../Helpers/asset/notification.png" alt="notification">
                                    </div>
    
                                    <div class="">
                                        <h1 class="text-[15px] font-[500]">Eng- Essay</h1>
                                        <p class="text-[13px] text-gray-600">All Fridays</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-4 mt-4">
                                    <div class="w-8 h-8 bg-gray-200 rounded-md">
                                        <img class="w-4 h-6 mx-[auto] pt-1" src="../../Helpers/asset/notification.png" alt="notification">
                                    </div>
    
                                    <div class="">
                                        <h1 class="text-[15px] font-[500]">Eng- Speaking Class</h1>
                                        <p class="text-[13px] text-gray-600">All Wednessdays</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>








    <script>

        function teach(){
          let add=  document.getElementById("add");
          let view= document.getElementById("view");
          
          if(add.style.display === "none"){
               add.style.display = "block";
            }
          else{
               add.style.display = "none";
            }
       
          if(view.style.display === "none"){
               view.style.display = "block";
            }
          else{
               view.style.display = "none";
            }
        }

       
        function parent(){
         let guard=  document.getElementById("guard");
          
          if(guard.style.display === "none"){
               guard.style.display = "block";
            }
          else{
               guard.style.display = "none";
            }
       
        }

        function student(){
        //   let addstudent=  document.getElementById("addStudent");
          let viewstudent= document.getElementById("viewStudent");
       
          if(viewstudent.style.display === "none"){
               viewstudent.style.display = "block";
            }
          else{
               viewstudent.style.display = "none";
            }
        }



        function generateCalendar(year, month) {
            const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];
        
            const daysInMonth = new Date(year, month, 0).getDate();
            const firstDayOfMonth = new Date(year, month - 1, 1).getDay(); // 0 = Sunday, 1 = Monday, ..., 6 = Saturday

            let html = `
            <h3 class="text-xl font-semibold mb-2">${monthNames[month - 1]} ${year}</h3>
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="md:px-4 py-2">Sun</th>
                        <th class="md:px-4 py-2">Mon</th>
                        <th class="md:px-4 py-2">Tue</th>
                        <th class="md:px-4 py-2">Wed</th>
                        <th class="md:px-4 py-2">Thu</th>
                        <th class="md:px-4 py-2">Fri</th>
                        <th class="md:px-4 py-2">Sat</th>
                    </tr>
                </thead>
                <tbody>
        `;
        
        let dayCount = 1;
        const today = new Date();
        const currentYear = today.getFullYear();
        const currentMonth = today.getMonth() + 1;
        const currentDate = today.getDate();

        for (let i = 0; i < 6; i++) {
            html += "<tr>";
            for (let j = 0; j < 7; j++) {
                if (i === 0 && j < firstDayOfMonth) {
                    html += "<td class='border px-4 py-2'></td>";
                } else if (dayCount > daysInMonth) {
                    html += "<td class='border px-4 py-2'></td>";
                } else {
                    if (year === currentYear && month === currentMonth && dayCount === currentDate) {
                        html += `<td class="border px-4 py-2 bg-blue-800">${dayCount}</td>`;
                    } else {
                        html += `<td class="border px-4 py-2">${dayCount}</td>`;
                    }
                    dayCount++;
                }
            }
            html += "</tr>";
        }
        html += `
                </tbody>
            </table>
        `;
        document.getElementById("calendar").innerHTML = html;
    }

    // Display current month by default
    const today = new Date();
    generateCalendar(today.getFullYear(), today.getMonth() + 1); // Note: getMonth() returns 0-based index


    function menuImage(){
        let sidebar = document.getElementById("sidebar");
        let mainpage = document.getElementById("mainpage");
        let navbar = document.getElementById("navbar");
        
        document.getElementById("sidebar").classList.remove("hidden");
        document.getElementById("navbar").classList.add("hidden");
        document.getElementById("mainpage").classList.add("hidden");
    }

    function closeSide(){
        let sidebar = document.getElementById("sidebar");
        let mainpage = document.getElementById("mainpage");
        let navbar = document.getElementById("navbar");
        
        
        document.getElementById("sidebar").classList.add("hidden");
        document.getElementById("navbar").classList.remove("hidden");
        document.getElementById("mainpage").classList.remove("hidden");
    }

       
       
    </script>


</body>
</html>