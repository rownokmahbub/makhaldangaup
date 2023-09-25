<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div
        class="flex flex-col items-center justify-center px-4 pt-16 pb-28 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
        <div class="flex flex-col items-center max-w-2xl md:px-8">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <a href='./userhome.php'
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                        <img class="w-20" src="./Assets/logo.png" alt="">
                    </a>
                </div>
                <h2
                    class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135"
                                    height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
                        </svg>
                        ভিডব্লিউবি তথ্য যোগ করুণ
                </h2>
                <form method='POST' action='./vwbreg.php' class="space-y-5 flex flex-col items-start justify-start">
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="slno" id="" placeholder='ক্রমিক নং'>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="name" id="" placeholder='নাম'>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="fname" id="" placeholder='পিতা/স্বামীর নাম '>

                        <select class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full" name="gram">
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
                    <select
                        class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full"
                        name="ward">
                        <option disabled selected value="ওয়ার্ড"
                            class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full">
                            ওয়ার্ড</option>
                        <option value="১"
                            class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full">
                            ১
                        </option>
                        <option value="২"
                            class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full">
                            ২
                        </option>
                        <option value="৩"
                            class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full">
                            ৩
                        </option>
                        <option value="৪"
                            class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full">
                            ৪
                        </option>
                        <option value="৫"
                            class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full">
                            ৫
                        </option>
                        <option value="৬"
                            class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full">
                            ৬
                        </option>
                        <option value="৭"
                            class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full">
                            ৭
                        </option>
                        <option value="৮"
                            class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full">
                            ৮
                        </option>
                        <option value="৯"
                            class="px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full">
                            ৯
                        </option>

                    </select>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="voterid" id="" placeholder='ভোটার আইডি '>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="cokro" id="" placeholder='চক্র'>

                    <div class="flex gap-3 justify-center items-center w-full">
                        <button
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600 duration-300 transition'
                            value="upload" name="submit" type="submit">জমা দিন</button>
                       
                    </div>


                </form>

            </div>


        </div>

    </div>
</body>

</html>