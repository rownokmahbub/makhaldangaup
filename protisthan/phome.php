<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
    header('Location:../login2.php');
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="style.css">



</head>

<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50">
    <div
        class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
        <div class="flex flex-col items-center max-w-2xl md:px-8">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <a href='../adminhome.php'
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                         <img class="w-20" src="../Assets/logo.png" alt="">
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
                        শিক্ষা প্রতিষ্ঠানের তথ্য যোগ করুণ
                </h2>
                <form method='POST' action='./shikkhareg.php' class="space-y-5 flex flex-col items-start justify-start">
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="name" id="" placeholder='শিক্ষা প্রতিষ্ঠানের নাম যোগ  করুন...'>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        name='sdhoron'>
                        <option selected disabled>শিক্ষা প্রতিষ্ঠানের ধরন </option>
                        <option value='কলেজ'>কলেজ</option>
                        <option value="মাধ্যমিক বিদ্যালয়">মাধ্যমিক বিদ্যালয়</option>
                        <option value="নিম্ন মাধ্যমিক বিদ্যালয়">নিম্ন মাধ্যমিক বিদ্যালয়</option>
                        <option value="প্রাথমিক বিদ্যালয়">প্রাথমিক বিদ্যালয়</option>
                        <option value="মাদ্রাসা">মাদ্রাসা</option>
                        <option value="স্বাস্থ্য কেন্দ্র">স্বাস্থ্য কেন্দ্র</option>

                    </select>

                    <div class="flex gap-3 justify-center items-center w-full">
                        <button
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600 duration-300 transition'
                            value="upload" name="submit" type="submit">Create</button>
                        <a href='./edit/pedit.php'
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                            </svg>
                            Edit</a>
                    </div>


                </form>

            </div>


        </div>

    </div>

    <div
        class="flex flex-col items-center justify-center px-4 pt-16 pb-28 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
        <div class="flex flex-col items-center max-w-2xl md:px-8">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <a href='../adminhome.php'
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                         <img class="w-20" src="../Assets/logo.png" alt="">
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
                        ইউনিয়নের প্রতিষ্ঠানের তথ্য যোগ করুণ
                </h2>
                <form method='POST' action='./uprotisthanreg.php'
                    class="space-y-5 flex flex-col items-start justify-start">
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="name" id="" placeholder='ইউনিয়নের প্রতিষ্ঠানের নাম যোগ  করুন...'>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        name='udhoron'>
                        <option selected disabled>প্রতিষ্ঠানের ধরন </option>
                        <option value='ডাকঘর'>ডাকঘর</option>
                        <option value='গ্রাম'>গ্রাম</option>
                        <option value='মৌজা'>মৌজা</option>
                        <option value='হাট বাজার'>হাট বাজার</option>
                        <option value='পুলিশ ক্যাম্প'>পুলিশ ক্যাম্প</option>
                        <option value='ভূমি অফিস'>ভূমি অফিস</option>
                        <option value='মসজিদ'>মসজিদ</option>
                        <option value='ঈদগাহ'>ঈদগাহ</option>
                        <option value='এনজিও সংস্থা'>এনজিও সংস্থা</option>
                        <option value='কবরস্থান'>কবরস্থান</option>
                        <option value='মন্দির'>মন্দির</option>
                        <option value='শ্মশান'>শ্মশান</option>


                    </select>

                    <div class="flex gap-3 justify-center items-center w-full">
                        <button
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600 duration-300 transition'
                            value="upload" name="submit" type="submit">Create</button>
                        <a href='./edit/pedit.php'
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                            </svg>
                            Edit</a>
                    </div>


                </form>

            </div>


        </div>

    </div>

    <div
        class="flex flex-col items-center justify-center px-4 pt-16 pb-28 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
        <div class="flex flex-col items-center max-w-2xl md:px-8">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <a href='../adminhome.php'
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                         <img class="w-20" src="../Assets/logo.png" alt="">
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
                        মৌজার তথ্য যোগ করুণ
                </h2>
                <form method='POST' action='./moujareg.php' class="space-y-5 flex flex-col items-start justify-start">
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="name" id="" placeholder='মৌজার নাম'>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="number" id="" placeholder='মৌজার নাম্বার '>
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

                    <div class="flex gap-3 justify-center items-center w-full">
                        <button
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600 duration-300 transition'
                            value="upload" name="submit" type="submit">Create</button>
                        <a href='./edit/pedit.php'
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                            </svg>
                            Edit</a>
                    </div>


                </form>

            </div>


        </div>

    </div>

    <div
        class="flex flex-col items-center justify-center px-4 pt-16 pb-28 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
        <div class="flex flex-col items-center max-w-2xl md:px-8">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <a href='../adminhome.php'
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                         <img class="w-20" src="../Assets/logo.png" alt="">
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
                        গ্রামের তথ্য যোগ করুণ
                </h2>
                <form method='POST' action='./gramreg.php' class="space-y-5 flex flex-col items-start justify-start">
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
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="pname" id="" placeholder='পুরুষের সংখা '>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="mname" id="" placeholder='নারীর সংখা '>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="total" id="" placeholder='মোট সংখা '>
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

                    <div class="flex gap-3 justify-center items-center w-full">
                        <button
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600 duration-300 transition'
                            value="upload" name="submit" type="submit">Create</button>
                        <a href='./edit/pedit.php'
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                            </svg>
                            Edit</a>
                    </div>


                </form>

            </div>


        </div>

    </div>
    <div
        class="flex flex-col items-center justify-center px-4 pt-16 pb-28 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
        <div class="flex flex-col items-center max-w-2xl md:px-8">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <a href='../adminhome.php'
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                         <img class="w-20" src="../Assets/logo.png" alt="">
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
                        সদস্য তালিকা তথ্য যোগ করুণ
                </h2>
                <form method='POST' action='./sodosshoreg.php' class="">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="slno" id="" placeholder='ক্রমিক নং'>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="name" id="" placeholder='নাম'>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="podobi" id="" placeholder='পদবি'>
                  
                        <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="joggota" id="" placeholder='শিক্ষাগত যোগ্যতা'>
                        <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="date" name="birthdate" id="" placeholder='জন্ম তারিখ '>
                        <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="mobileno" id="" placeholder='মোবাইল নং'>
                        <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="word" id="" placeholder='ওয়ার্ড নং'>
                        <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="voterid" id="" placeholder='ভোটার আইডি '>

                    </div>
           
            
                    <div class="flex gap-3 justify-center items-center w-full mt-5">
                        <button
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600 duration-300 transition'
                            value="upload" name="submit" type="submit">Create</button>
                        <a href='./edit/pedit.php'
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                            </svg>
                            Edit</a>
                    </div>

                </form>

            </div>


        </div>

    </div>
    
    <div
        class="flex flex-col items-center justify-center px-4 pt-16 pb-28 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
        <div class="flex flex-col items-center max-w-2xl md:px-8">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <a href='../adminhome.php'
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                         <img class="w-20" src="../Assets/logo.png" alt="">
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
                        কর্মচারী তালিকা তথ্য যোগ করুণ
                </h2>
                <form method='POST' action='./kormoreg.php' class="">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="slno" id="" placeholder='ক্রমিক নং'>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="name" id="" placeholder='নাম'>
                    <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="podobi" id="" placeholder='পদবি'>
                  
                        <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="joggota" id="" placeholder='শিক্ষাগত যোগ্যতা'>
                        <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="date" name="birthdate" id="" placeholder='জন্ম তারিখ '>
                        <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="mobileno" id="" placeholder='মোবাইল নং'>
                        <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="word" id="" placeholder='ওয়ার্ড নং'>
                        <input
                        class='bg-gray-50 border border-gray-300 text-sky-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'
                        type="text" name="voterid" id="" placeholder='ভোটার আইডি '>

                    </div>
           
            
                    <div class="flex gap-3 justify-center items-center w-full mt-5">
                        <button
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600 duration-300 transition'
                            value="upload" name="submit" type="submit">Create</button>
                        <a href='./edit/pedit.php'
                            class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                            </svg>
                            Edit</a>
                    </div>

                </form>

            </div>


        </div>

    </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="style.js"></script>
</body>

</html>