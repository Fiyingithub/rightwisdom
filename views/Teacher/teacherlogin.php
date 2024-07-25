<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    <!-- <link rel="stylesheet" href="./src/output.css"> -->
    <script src="../../Helpers/Tailwind/tailwind.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Rancho&display=swap" rel="stylesheet">
</head>
<body>
    <div class="w-[100vw] h-[100vh] flex">
        <div class="hidden lg:block w-[50vw] h-[100vh] bg-[#F97903] text-center">
            <div class="mt-20">
                <h1 class="text-6xl font-[600] text-white">Right Wisdom School</h1><br>
                <p class="text-white text-4xl font-[400]" style="font-family: 
                Rancho;">Building a whole child</p>
                
            </div>

            <img class="h-[490px] w-[490px] mt-[40px] mx-[auto]" src="../Helpers/asset/c7fd297b-8381-4d3c-a795-f52f7ee2220a(1).png" alt="book image">
        </div>

        <div class="lg:w-[50vw] w-[100vw] h-[100vh] bg-white md:pt-32 pt-24 lg:px-20 px-4">
            <h1 class="text-center lg:text-4xl text-2xl font-[700]">Teacher Login</h1><br><br><br>

            <form action="../../controllers/teacherlogin.php" method="post">
                <div class="w-[100%] flex gap-1 lg:ml-2 lg:w-[98%] lg:h-[55px] md:w-[100%] rounded-lg mt-2 lg:mt-0 h-[50px] border-2 border-[#F97903] placeholder:text-gray-400 pl-4 text-lg placeholder:text-[15px] font-[500]">
                    <img class="w-[20px] h-[20px] mt-[14px]" src="../Helpers/asset/email (2).png" alt="user">
                    <input class="outline-none flex-1" type="email" name="email" required placeholder="Email address">
                </div><br><br>    
        
                <div class="w-[100%] flex gap- lg:ml-2 lg:w-[98%] lg:h-[55px] md:w-[100%] rounded-lg mt-2 lg:mt-0 h-[50px] border-2 border-[#F97903] placeholder:text-gray-400 pl-4 text-lg placeholder:text-[15px] font-[500]">
                    <img class="w-[24px] h-[22px] mt-[14px]" src="../Helpers/asset/lock.png" alt="user">
                    <input class="outline-none flex-1" type="password" name="surname" required id="" placeholder="Password">
                </div><br><br>

                <div class="flex justify-between lg:px-2">
                    <div class="">
                        <input class="border-[#F97903] w-4 h-4" type="checkbox" name="" id="">
                        <b>Remember me</b>
                    </div>

                    <div class="text-[#F97903] font-[700]">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>

                <button name="login" class="w-[180px] lg:w-[220px] h-[50px] bg-[#F97903] text-white rounded-[10px] text-lg font-[600] mt-20 lg:mx-[30%] md:ml-[35vw] ml-[25%]">Login</button>
            </form>
        </div>
    </div>
</body>
</html>