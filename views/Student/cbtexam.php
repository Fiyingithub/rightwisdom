<?php
session_start();

if(!isset($_SESSION['surname']))
{
    header("location:studentlogin.php");
}

// $myFirstname = $_SESSION['firstname'];
$mySurname= $_SESSION['surname'];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBT Exam</title>
    <!-- <link rel="stylesheet" href="./src/output.css"> -->
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
                    <a href="../Student/student-dashboard.php" class="text-3xl font-[500] text-white">Dashboard</a>
                    
                </div><br>
        
                <div class="">
                    <a href="../Student/studentprofile.php">
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
                    <a href="../Student/cbtexam.php">
                       <div class="flex gap-2 justify-center items-center -ml-12 cursor-pointer">
                            <img class="w-[30px] h-[30px]" src="../../Helpers/asset/exam.png" alt="dashboard-image">
                            <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" >Exam</p>
                            
                       </div>
                    </a>
                </div><br>
        
                <div class="">
                    <a href="../Student/view-result-by-student.php">
                       <div class="flex gap-2 justify-center items-center -ml-8 cursor-pointer">
                            <img class="w-[30px] h-[30px]" src="../../Helpers/asset/score.png" alt="dashboard-image">
                            <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" >Results</p>
                           
                       </div>
                    </a>
                </div><br>
                
                <div class="flex justify-center ml-[-40px] gap-2 items-center">
                    <img class="w-6 h-6" src="../../Helpers/asset/exit (1).png" alt="exit">
                    <a href="../Student/logout.php" class="text-white  hover:font-[700] hover:text-xl font-[700]">Logout</a>
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

                   <div class="text-center">
                        <b><?php echo $mySurname; ?></b>
                        <p>Student</p>
                    </div>
                    
                </div>
            </div><br class="hidden md:block">

            <div class=" md:w-[78vw] w-[100vw] h-[630px] rounded-br-lg rounded-bl-lg md:bg-white pt-2 pl-8" id="mainpage">
                <div class="">
                    <div class="">
                        <div class="flex gap-10 pl-6">
                            <h1 class="md:font-[600] text-2xl pt-4">Welcome, <b>Adekoya Adegbenga!</b></h1>
                        </div><br>

                        <div class="flex gap-8 flex-wrap max-h-[450px] overflow-auto">
                            <div class="w-[350px] h-[250px] rounded-md border border-gray-300 bg-orange-400">
                                <div class="flex justify-between items-center w-[100%] h-[70px] bg-white px-4">
                                    <p class="font-[500]">CHEMISTRY</p>
                                    <div class="w-[70px] rounded-md h-[30px] bg-red-500 p-1 text-center font-[500]">
                                        Done
                                    </div>
                                </div>

                               <div class="px-4 mt-2">
                                   <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Subject:<p>Chemistry</p> </p>
                                   </div>

                                   <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Class:<p>SS1</p> </p>
                                  </div>

                                  <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Department:<p>Science</p> </p>
                                   </div><br>
                               </div><hr>
                               <div class="w-[150px] cursor-pointer mx-4 mt-4 pl-4 font-[500] rounded-md h-[30px] bg-white">
                                    <a href="#">Start Exam</a>
                               </div>
                            </div>

                            <div class="w-[350px] h-[250px] rounded-md border border-gray-300 bg-orange-400">
                                <div class="flex justify-between items-center w-[100%] h-[70px] bg-white px-4">
                                    <p class="font-[500]">PHYSICS</p>
                                    <div class="w-[70px] rounded-md h-[30px] bg-red-500 p-1 text-center font-[500]">
                                        Done
                                    </div>
                                </div>

                               <div class="px-4 mt-2">
                                   <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Subject:<p>Physics</p> </p>
                                   </div>

                                   <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Class:<p>SS1</p> </p>
                                  </div>

                                  <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Department:<p>Science</p> </p>
                                   </div><br>
                               </div><hr>
                               <div class="w-[150px] cursor-pointer mx-4 mt-4 pl-4 font-[500] rounded-md h-[30px] bg-white">
                                    <a href="#">Start Exam</a>
                               </div>
                               
                            </div>

                            <div class="w-[350px] h-[250px] rounded-sm border border-gray-300 bg-orange-400">
                                <div class="flex justify-between items-center w-[100%] h-[70px] bg-white px-4">
                                    <p class="font-[500]">BIOLOGY</p>
                                    <div class="w-[70px] rounded-md h-[30px] bg-red-500 p-1 text-center font-[500]">
                                        Done
                                    </div>
                                </div>

                               <div class="px-4 mt-2">
                                   <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Subject:<p>Biology</p> </p>
                                   </div>

                                   <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Class:<p>SS1</p> </p>
                                  </div>

                                  <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Department:<p>Science</p> </p>
                                   </div><br>
                               </div><hr>
                               <div class="w-[150px] cursor-pointer mx-4 mt-4 pl-4 font-[500] rounded-md h-[30px] bg-white">
                                    <a href="#">Start Exam</a>
                               </div>
                            </div>

                            <div class="flex gap-8 flex-wrap">
                            <div class="w-[350px] h-[250px] rounded-md border border-gray-300 bg-orange-400">
                                <div class="flex justify-between items-center w-[100%] h-[70px] bg-white px-4">
                                    <p class="font-[500]">MATHEMATICS</p>
                                    <div class="w-[70px] rounded-md h-[30px] bg-green-500 p-1 text-center font-[500]">
                                        Active
                                    </div>
                                </div>

                               <div class="px-4 mt-2">
                                   <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Subject:<p>Mathematics</p> </p>
                                   </div>

                                   <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Class:<p>SS1</p> </p>
                                  </div>

                                  <div class="flex gap-2 text-white">
                                      <p class="font-[500]">Department:<p>Science</p> </p>
                                   </div><br>
                               </div><hr>
                               <div class="w-[150px] cursor-pointer mx-4 mt-4 pl-4 font-[500] rounded-md h-[30px] bg-white">
                                    <a href="#">Start Exam</a>
                               </div>
                            </div>

                            <div class="flex gap-8 flex-wrap">
                                <div class="w-[350px] h-[250px] rounded-md border border-gray-300 bg-orange-400">
                                    <div class="flex justify-between items-center w-[100%] h-[70px] bg-white px-4">
                                        <p class="font-[500]">ENGLISH_ LANGUAGE</p>
                                        <div class="w-[70px] rounded-md h-[30px] bg-green-500 p-1 text-center font-[500]">
                                            Active
                                        </div>
                                    </div>
    
                                   <div class="px-4 mt-2">
                                       <div class="flex gap-2 text-white">
                                          <p class="font-[500]">Subject:<p>English-Language</p> </p>
                                       </div>
    
                                       <div class="flex gap-2 text-white">
                                          <p class="font-[500]">Class:<p>SS1</p> </p>
                                      </div>
    
                                      <div class="flex gap-2 text-white">
                                          <p class="font-[500]">Department:<p>Science</p> </p>
                                       </div><br>
                                   </div><hr>
                                   <div class="w-[150px] cursor-pointer mx-4 mt-4 pl-4 font-[500] rounded-md h-[30px] bg-white">
                                        <a href="#">Start Exam</a>
                                   </div>
                                </div>
                            </div>

                            <div class="flex gap-8 flex-wrap">
                                <div class="w-[350px] h-[250px] rounded-md border border-gray-300 bg-orange-400">
                                    <div class="flex justify-between items-center w-[100%] h-[70px] bg-white px-4">
                                        <p class="font-[500]">AGRIC-SCI</p>
                                        <div class="w-[70px] rounded-md h-[30px] bg-green-500 p-1 text-center font-[500]">
                                            Active
                                        </div>
                                    </div>
    
                                   <div class="px-4 mt-2">
                                       <div class="flex gap-2 text-white">
                                          <p class="font-[500]">Subject:<p>Agric-Sci</p> </p>
                                       </div>
    
                                       <div class="flex gap-2 text-white">
                                          <p class="font-[500]">Class:<p>SS1</p> </p>
                                      </div>
    
                                      <div class="flex gap-2 text-white">
                                          <p class="font-[500]">Department:<p>Science</p> </p>
                                       </div><br>
                                   </div><hr>
                                   <div class="w-[150px] cursor-pointer mx-4 mt-4 pl-4 font-[500] rounded-md h-[30px] bg-white">
                                        <a href="#">Start Exam</a>
                                   </div>
                                </div>
                            </div>

                            <div class="flex gap-8 flex-wrap">
                                <div class="w-[350px] h-[250px] rounded-md border border-gray-300 bg-orange-400">
                                    <div class="flex justify-between items-center w-[100%] h-[70px] bg-white px-4">
                                        <p class="font-[500]">GEOGRAPHY</p>
                                        <div class="w-[70px] rounded-md h-[30px] bg-green-500 p-1 text-center font-[500]">
                                            Active
                                        </div>
                                    </div>
    
                                   <div class="px-4 mt-2">
                                       <div class="flex gap-2 text-white">
                                          <p class="font-[500]">Subject:<p>Geography</p> </p>
                                       </div>
    
                                       <div class="flex gap-2 text-white">
                                          <p class="font-[500]">Class:<p>SS1</p> </p>
                                      </div>
    
                                      <div class="flex gap-2 text-white">
                                          <p class="font-[500]">Department:<p>Science</p> </p>
                                       </div><br>
                                   </div><hr>
                                   <div class="w-[150px] cursor-pointer mx-4 mt-4 pl-4 font-[500] rounded-md h-[30px] bg-white">
                                        <a href="#">Start Exam</a>
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