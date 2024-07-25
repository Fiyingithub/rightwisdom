<?php
session_start();

if(!isset($_SESSION['surname']))
{
    header("location:teacherlogin.php");
}

$mySession= $_SESSION['surname'];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- <link rel="stylesheet" href="../src/output.css"> -->
    <script src="../../Helpers/Tailwind/tailwind.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Rancho&display=swap" rel="stylesheet">
</head>
<body class="md:bg-[#F9C18E] bg-white">
    <div class="w-[100vw] h-[100vh] md:flex gap-4">
    <div class="hidden md:block md:w-[20vw] w-[80vw] h-[100vh] bg-[#F97903] text-center pt-4" id="sidebar">
           <div class="">
               <img class="md:hidden w-6 h-6 ml-4" src="../../Helpers/asset/left-arrow.png" alt="back-arrow" onclick="closeSide()">
               <div class="w-[75px] h-[75px] border-2 border-orange-300 rounded-[300px] bg-white text-2xl text-[#F97903] font-[700] pt-[20px] mx-[auto]" style="text-shadow: 2px 2px  #D9700E;">RWS</div>
           </div>

            <h1 class="text-4xl font-[600] my-4 text-white" style="text-shadow: 2px 2px 2px black;">Right Wisdom <br> School</h1><br><br>

            <div class="">
                <div class="flex gap-2 items-center justify-center">
                    <img class="w-6 h-6" src="../../Helpers/asset/dashboard.png" alt="dashboard-image">
                    <a href="../Teacher/teacherdashboard.php" class="text-3xl font-[500] text-white">Dashboard</a>
                    
                </div><br>

                <div class="">
                    <div class="flex gap-2 justify-center items-center cursor-pointer">
                        <img class="w-6 h-6" src="../../Helpers/asset/lecture.png" alt="dashboard-image">
                        <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" onclick="teach()">Student</p>
                        <img class="w-[18px] mt-[5px] ml-6 h-[18px] rounded-[50px] font-[700] bg-white" src="../../Helpers/asset/greater-than.png" alt="greater-than">
                    </div>

                    <div class="text-xl font-[500] mt-[10px]">
                        <div class="flex gap-2 justify-center items-center hover:font-[700] hover:text-lg" style="display: none;" id="add">
                            <b class="text-4xl text-white font-[700]">∙</b>
                            <a class=" text-white -mt-8" href="../Teacher/addstudent.php">Add Student</a>
                       </div>
                       <div class="flex justify-center gap-2 items-center hover:font-[700] hover:text-lg ml-10" style="display: none;" id="view">
                        <b class="text-4xl mt-10 text-white font-[700]">∙</b>
                        <a class=" text-white -mt-8" href="../Teacher/view-students.php">View Students</a>
                           
                       </div>
                    </div>
                </div><br>

                <div class="">
                    <div class="flex gap-2 justify-center items-center cursor-pointer">
                        <img class="w-6 h-6" src="../../Helpers/asset/family.png" alt="Guardian image">
                        <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" onclick="parent()">Guardian</p>
                        <img class="w-[18px] mt-[5px] ml-4 h-[18px] rounded-[50px] font-[700] bg-white" src="../../Helpers/asset/greater-than.png" alt="greater-than">
                    </div>

                    <div class="text-xl font-[500] mt-[10px]">
                        <div class="flex gap-2 justify-center items-center hover:font-[700] hover:text-lg" style="display: none;" id="guard">
                            <b class="text-4xl text-white font-[700]">∙</b>
                            <a class=" text-white -mt-8" href="../Teacher/guardian.php">Add Guardian</a>
                       </div>
                    </div>
                </div><br>

                <div class="flex -ml-1 justify-center gap-2 items-center">
                    <img class="w-6 h-6" src="../../Helpers/asset/exam (2).png" alt="exit">
                    <a href="view-result-for-teacher.html" class="text-white text-xl  hover:font-[700] hover:text-2xl font-[700]">Result</a>
                    <img class="w-[18px] mt-[5px] ml-10 h-[18px] rounded-[50px] font-[700] bg-white" src="../../Helpers/asset/greater-than.png" alt="greater-than">
                </div><br>

                <div class="flex -ml-1 justify-center gap-2 items-center">
                    <img class="w-6 h-6" src="../../Helpers/asset/exam (2).png" alt="exit">
                    <a href="#" class="text-white text-xl  hover:font-[700] hover:text-2xl font-[700]">Subject</a>
                    <img class="w-[18px] mt-[5px] ml-8 h-[18px] rounded-[50px] font-[700] bg-white" src="../../Helpers/asset/greater-than.png" alt="greater-than">
                </div><br>
                
                <div class="flex justify-center ml-[-70px] gap-2 items-center">
                    <img class="w-6 h-6" src="../../Helpers/asset/exit (1).png" alt="exit">
                    <a href="../Teacher/logout.php" class="text-white  hover:font-[700] hover:text-xl font-[700]">Logout</a>
                </div>
            </div>
        </div>

        <!-- -------Main Page-------- -->

        <div class="lg:w-[78vw] w-[100vw] h-[950px] md:h-[100vh] md:pt-4">
        <div class="md:w-[78vw] w-[100vw] md:h-[70px] h-[80px] md:pl-8 md:px-0 px-4 md:gap-12 gap-4 flex  items-center md:rounded-md bg-[white] md:shadow-md" id="navbar">
                <img class="md:hidden w-6 h-6" src="../../Helpers/asset/menu.png" alt="" onclick="menuImage()">
                <div class="flex gap-1">
                    <img class="w-8 h-8" src="../../Helpers/asset/protection.png" alt="">
                    <h1 class="text-xl font-[700]">Teacher</h1>
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

                  <div class="hidden md:flex gap-1 items-center">
                        <img class="w-8 h-8  cursor-pointer rounded-[50px]" src="../../Helpers/asset/fantasy-domik-.jpg" alt="">

                        <div class="text-center">
                            <b>Mr <?php echo"$mySession"?></b>
                            <p>Class teacher</p>
                        </div>
                  </div>
                    
                </div>
            </div><br class="hidden md:block">
        
            <div class=" md:w-[78vw] h-[630px] rounded-br-lg rounded-bl-lg bg-white md:shadow-2xl md:pl-12 md:px-0 px-4 pt-20" id="mainpage">
        
                <div class="mx-[auto] w-[400px] text-center h-[300px] pt-20 shadow-2xl ">
                    <p>Are you sure you want to <br> <b>Logout</b> </p>
                    
                    <div class="flex justify-center mt-20 gap-10 ">

                        <form action="../../controllers/teacherlogout.php" method="post">
                            <button type="submit" class=" hover:font-[700] hover:text-xl" name="submit">Yes</button>
                        </form>

                        <a href="../Teacher/teacherdashboard.php" class="hover:font-[700] hover:text-xl">No</a>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
        
    </div>




  

</body>
</html>