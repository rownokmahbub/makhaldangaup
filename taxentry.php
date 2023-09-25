<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
    header('Location:index.php');
}
?>
<?php
include 'dbconnect.php';



?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ট্যাক্স ডাটা এন্ট্রি </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {

                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>



<body>
    <div class="flex flex-col px-5 md:px-20  md:h-screen justify-center  gap-5 items-center bg-slate-300 ">

        <div class='grid grid-cols-2 gap-2 items-center'>
            <section class='px-5 hidden md:flex py-5 mx-auto bg-purple-500 text-white justify-center rounded-2xl w-52 text-lg font-semibold'>
                <h3 class="">মোট হোল্ডার:</h3>
                <?php
                $query = "SELECT COUNT(*), SUM(totaltax) FROM taxentry";
                $result = mysqli_fetch_array(mysqli_query($con, $query));
                $count = $result['COUNT(*)'];
                $tax = $result['SUM(totaltax)'];

                echo $count;


                ?>
            </section>
            <div class='px-5 hidden py-5 mx-auto bg-green-500 justify-center items-center text-white rounded-2xl w-52 md:flex text-lg font-semibold'>
                <h3 class="">মোট ট্যাক্স :</h3>
                <?php
                $query = "SELECT COUNT(*), SUM(totaltax) FROM taxentry";
                $result = mysqli_fetch_array(mysqli_query($con, $query));
                $count = $result['COUNT(*)'];
                $tax = $result['SUM(totaltax)'];


                echo $tax;

                ?>
            </div>
        </div>

        <div class="px-10 py-10 bg-white mx-auto w-full rounded-xl">
            <div class="flex flex-col md:flex-row gap-4 md:gap-0 justify-between items-center">
                <a href="./userhome.php" class="text-center mb-3 font-semibold flex gap-3 items-center sticky top-0 left-0  ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H6M12 5l-7 7 7 7" />
                    </svg>
                    Back</a>
                <a href="./taxentrytable.php" class="text-center mb-3 font-semibold bg-cyan-900 px-4 py-2.5 flex gap-3 items-center sticky top-0 left-0  text-white rounded-xl shadow-lg hover:bg-slate-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                    </svg>
                    Last Data</a>

            </div>

            <p class="font-semibold text-xl mb-4 text-center">ট্যাক্স ডাটা এন্ট্রি ফরম</p>




            <form action="taxentryreg.php" method="POST">
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-5">

                        <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="holdingno" placeholder='হোল্ডিং নম্বর' required>
                        <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="name" placeholder='নাম' required>
                        <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="fname" placeholder='পিতার নাম/স্বামীর নাম' required>
                        <div class="w-full">

                            <select class="px-2 py-2 bg-white z-40 border border-gray-300 rounded-xl w-full" name="gram">
                                <option disabled selected value="গ্রাম" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">গ্রাম
                                </option>
                                <option value="মাখালডাঙ্গা" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">মাখালডাঙ্গা
                                </option>
                                <option value="দীননাখপুর" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full"> দীননাখপুর
                                </option>
                                <option value="গাইতঘাট" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">গাইতঘাট
                                </option>
                                <option value="কুকিয়া চাদপুর" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">কুকিয়া চাদপুর
                                </option>
                                <option value="উকতো" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">উকতো
                                </option>
                                <option value="শ্রীকোল" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">শ্রীকোল
                                </option>
                                <option value="হানুরবাড়াদী" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">হানুরবাড়াদী
                                </option>
                                <option value="গাড়াবাড়ীয়া" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full"> গাড়াবাড়ীয়া
                                </option>
                                <option value="জাফরপুর" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">জাফরপুর
                                </option>
                                <option value="ঠাকুরপুর" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full"> ঠাকুরপুর
                                </option>
                             



                            </select>


                        </div>

                        <select class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full" name="ward">
                            <option disabled selected value="ওয়ার্ড" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">ওয়ার্ড</option>
                            <option value="১" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">১
                            </option>
                            <option value="২" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">২
                            </option>
                            <option value="৩" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৩
                            </option>
                            <option value="৪" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৪
                            </option>
                            <option value="৫" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৫
                            </option>
                            <option value="৬" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৬
                            </option>
                            <option value="৭" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৭
                            </option>
                            <option value="৮" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৮
                            </option>
                            <option value="৯" class="px-2 py-2 bg-white border border-gray-300 rounded-xl w-full">৯
                            </option>

                        </select>

                        <input class='px-2 py-2 bg-white border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="tax" placeholder='ট্যাক্স' required>



                    </div>




                </div>
                <div class="flex justify-center items-center w-full mt-5">
                    <input class='h-12 px-6 font-medium tracking-wide
text-white transition duration-200 rounded-xl shadow-md bg-purple-400
hover:bg-purple-700 focus:shadow-outline focus:outline-none cursor-pointer' type="submit" value="জমা দিন">
                </div>

            </form>

        </div>



    </div>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>