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
    <title>Student Profile</title>
    <!-- <link rel="stylesheet" href="./src/output.css"> -->
    <script src="../../Helpers/Tailwind/tailwind.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Rancho&display=swap" rel="stylesheet">
</head>
<body class="bg-[#F9C18E]">
    <div class="w-[100vw] h-[100vh] flex gap-4">
        <div class=" w-[20vw] h-[100vh] bg-[#F97903] text-center pt-4">
            <div class="w-[75px] h-[75px] border-2 border-orange-300 rounded-[300px] bg-white text-2xl text-[#F97903] font-[700] pt-[20px] mx-[auto]" style="text-shadow: 2px 2px  #D9700E;">RWS</div>

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

        <!-- -------Main Page-------- -->


        <div class="lg:w-[78vw] w-[100vw] h-[100vh] pt-4">
            <div class="w-[78vw] h-[70px] pl-8 gap-12 flex  items-center rounded-md bg-[white] shadow-md">
                <div class="flex gap-1">
                    <img class="w-8 h-8" src="../../Helpers/asset/protection.png" alt="">
                <h1 class="text-xl font-[700]">Student</h1>
                </div>

                <div class="flex gap-4 items-center w-[40vw] h-[50px] border-2 border-[#F97903] rounded-[25px] shadow-md">
                    <form action="">
                        <input class="outline-none bg-transparent w-[35vw] h-[50px] pl-8" type="search" placeholder="Search..." name="" id="">
                    </form>
                    <img class="w-4 h-4 cursor-pointer" src="../../Helpers/asset/search.png" alt="search">
                </div>

                <div class="flex items-center gap-6">
                   <div class="flex gap-4">
                       <img class="w-6 h-6 cursor-pointer" src="../../Helpers/asset/mail.png" alt="notification">
                       <img class="w-6 h-6 cursor-pointer" src="../../Helpers/asset/notification.png" alt="notification">
                   </div>

                  <div class="flex gap-2 items-center">
                        <img class="w-8 h-8  cursor-pointer rounded-[50px]" src="../../Helpers/asset/fantasy-domik-.jpg" alt="">

                        <div class="text-center">
                            <b><?php echo $mySurname; ?></b>
                            <p>Student</p>
                        </div>
                  </div>
                    
                </div>
            </div><br>

            <div class=" w-[78vw] h-[83vh] rounded-br-lg rounded-bl-lg bg-white pt-4 pl-4">
                <div class="flex gap-8">
                   <div class="">
                        <img class="w-[230px] h-[230px] rounded-[8px]" src="../../Helpers/asset/fantasy-domik-.jpg" alt="profile-pic">
                    
                       <div class="flex justify-center items-center mt-2 text-xl gap-2">
                           <p class="font-[600]">Active</p>
                           <p class="w-[9px] h-[9px] mt-1 bg-green-700 rounded-[50px]"></p>
                       </div>
                   </div>

                    <div class="w-[80%]">
                        <div class="flex items-center pr-4 justify-between">
                            <div class="text-center">
                                <b class="text-2xl"><?php echo $mySurname; ?></b>
                                <p>Student</p>
                              
                            </div>
                            
                           <div class="flex gap-4">
                              <div class="flex w-[120px] h-[40px] rounded-[30px] bg-white border shadow-xl justify-center items-center cursor-pointer">
                                  <b class="pl-[11px] ">Subject</b>
                                  <p class="bg-[#F97903] text-center w-[30px] h-[100%] text-white pt-2 rounded-tr-[20px] ml-[20px] rounded-br-[20px]">9</p>
                              </div>
                              <div class="flex gap-4 w-[120px] h-[40px] rounded-[30px] bg-white border shadow-xl justify-center items-center cursor-pointer">
                                   <b class="pl-[11px] ">Sport</b>
                                   <p class="bg-[#F97903] text-center w-[30px] h-[100%] text-white pt-2 rounded-tr-[20px] ml-[20px] rounded-br-[20px]">7</p>
                               </div>
                           </div>
                        </div><hr class="w-[100%] h-8 mt-10">

                        <div class="flex gap-4 pr-4">
                            <div class="w-[170px] h-[100px] bg-[#F97903] rounded-lg pt-2 text-center">
                                <div class="flex justify-center mb-2 items-center">
                                    <img class="w-10 h-10" src="../../Helpers/asset/elearning.png" alt="elearning">
                                    <h1 class="text-xl text-white font-[500]">Class</h1>
                                </div>
                                <p class="text-white">SSS1</p>
                            </div>

                            <div class="w-[170px] h-[100px] bg-[#F97903] rounded-lg pt-2 text-center">
                                <div class="flex justify-center mb-2 items-center">
                                    <img class="w-10 h-10" src="../../Helpers/asset/science.png" alt="science">
                                    <h1 class="text-xl text-white font-[500]">Attendance</h1>
                                </div>
                                <p class="text-white">85% (13Weeks)</p>
                            </div>

                            <div class="w-[170px] h-[100px] bg-[#F97903] rounded-lg pt-4 text-center">
                                <div class="flex gap-2 justify-center mb-4 items-center">
                                    <img class="w-8 h-8" src="../../Helpers/asset/date-of-birth.png" alt="date-of-birth">
                                    <h1 class="text-xl text-white font-[500]">Birth Date</h1>
                                </div>
                                <p class="text-white">Jan 07,2000</p>
                            </div>

                            <div class="w-[170px] h-[100px] bg-[#F97903] rounded-lg pt-2 text-center">
                                <div class="flex justify-center mb-2 items-center">
                                    <img class="w-10 h-10" src="../../Helpers/asset/elearning.png" alt="elearning">
                                    <h1 class="text-xl text-white font-[500]">Best Score in</h1>
                                </div>
                                <p class="text-white">Mathematics (90%)</p>
                            </div>

                            <div class="w-[170px] h-[100px] bg-[#F97903] rounded-lg pt-2 text-center">
                                <div class="flex justify-center mb-2 items-center">
                                    <img class="w-10 h-10" src="../../Helpers/asset/elearning.png" alt="elearning">
                                    <h1 class="text-xl text-white font-[500]">Class Teacher</h1>
                                </div>
                                <p class="text-white">Mrs Juliana</p>
                            </div>
                        </div>
                    </div>
                </div><br>


               <div class="w-[100%] h-[50%]">
                  <div class="flex gap-4">
                      <div class="w-[32%] h-[42vh] rounded-lg bg-white border shadow-2xl  shadow-gray-400">
                          <div class="flex justify-center items-center mt-4">
                               <img class="w-6 h-6" src="../../Helpers/asset/user (2).png" alt="">
                              <h1 class="text-lg text-[#F97903] font-[500]">Personal Information</h1>
                          </div><br>

                          <div class="flex justify-between px-6 mt-4">
                              <div class="">
                                  <h1 class="text-lg text-[#F97903]">Gender</h1>
                                  <p>Male</p>
                              </div>

                              <div class="">
                                  <h1 class="text-lg text-[#F97903]">Age</h1>
                                  <p>10</p>
                              </div>
                          </div><hr class="w-[100%] mt-4">

                          <div class="px-6 mt-4">
                              <h1 class="text-lg text-[#F97903]">Address</h1>
                              <p>10 Alfred Olaiya Ikeja Lagos State.</p>
                           </div>
                      </div>

                      <div class="w-[32%] h-[42vh] rounded-lg bg-white border shadow-2xl shadow-gray-400">
                           <div class="flex justify-center items-center gap-2 mt-4">
                               <img class="w-6 h-6" src="../../Helpers/asset/parental-control.png" alt="">
                               <h1 class="text-lg text-[#F97903] font-[500]">Guardian Information</h1>
                           </div><br>

                           <div class=" px-6 mt-4">
                               <div class="">
                                   <h1 class="text-lg text-[#F97903]">Father/Mother's Name</h1>
                                   <p>Mr Adebowale Adekoya</p>
                               </div>
                           </div><hr class="w-[100%] mt-4">

                           <div class="px-6 mt-4">
                               <h1 class="text-lg text-[#F97903]">Contact</h1>
                               <p>08142896576</p>
                           </div><hr class="w-[100%] mt-4">

                           <div class="px-6 mt-4">
                               <h1 class="text-lg text-[#F97903]">Occupation</h1>
                               <p>Data Scientist</p>
                           </div><hr class="w-[100%] mt-4">
                       </div>

                       <div class="w-[32%] h-[42vh] rounded-lg bg-white border shadow-2xl shadow-gray-400">
                        <div class="flex justify-center items-center gap-2 mt-4">
                            <img class="w-6 h-6" src="../../Helpers/asset/parental-control.png" alt="">
                            <h1 class="text-lg text-[#F97903] font-[500]">Academic Information</h1>
                        </div><br>

                        <div class=" px-6 mt-4">
                            <div class="">
                                <h1 class="text-lg text-[#F97903]">Previous Term Grades</h1>
                                <p>B2 (69%)</p>
                            </div>
                        </div><hr class="w-[100%] mt-4">

                        <div class="px-6 mt-4">
                            <h1 class="text-lg text-[#F97903]">Best Performed Subject</h1>
                            <p>Mathematics</p>
                        </div><hr class="w-[100%] mt-4">

                        <div class="px-6 mt-4">
                            <h1 class="text-lg text-[#F97903]">Weak Subject</h1>
                            <p>Yoruba</p>
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
                        <th class="px-4 py-2">Sun</th>
                        <th class="px-4 py-2">Mon</th>
                        <th class="px-4 py-2">Tue</th>
                        <th class="px-4 py-2">Wed</th>
                        <th class="px-4 py-2">Thu</th>
                        <th class="px-4 py-2">Fri</th>
                        <th class="px-4 py-2">Sat</th>
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

       
       
    </script>


</body>
</html>