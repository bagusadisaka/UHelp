<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>U-Help | Click and Sit</title>
    <link rel="icon" type="image/gif" href="/assets/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-100 font-font-poppins">
    <header>
        <div id="navbar">
            <nav class="w-full h-24 flex items-center border-b-4 border-yellow-new bg-white shadow-lg fixed z-50">
                <div class="logo-container absolute left-6">
                    <a href="#">
                        <img class="logo-pict w-44" src="/assets/logo.jpg" alt="UHelp Logo">
                    </a>
                </div>
                <div class="features-container w-1/5 m-auto">
                    <ul class="flex flex-row justify-around text-green-new text-2xl text-center">
                        <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                            <a href="#">Click and Sit</a>
                        </li>
                        <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                            <a href="#">Sharetificate</a>
                        </li>
                    </ul>
                </div>
                <div class="profile-container absolute right-8">
                    <a href="#">
                        <img class="logo-pict w-16 rounded-full" src="/assets/profil.jpg" alt="Profile Picture">
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div id="general">
            <div id="history button" class="absolute z-10 right-[40vw] top-[20vw]">
                <a href="/clickandsit/fill">
                    <img src="/assets/clickandsit/clickandsit/fill/historyButton.png">
                </a>
            </div>

            <div id="history" class="absolute z-10 h-full w-[40vw] m-auto bg-white border-l-[0.5vw] border-yellow-new shadow sm:p-[1.25vw] md:p-[2.5vw] mb-[3vw] right-[0vw]">
                <div id="text">
                    <label for="destination title" class=" mt-[5vw] mb-[2vw] text-center block font-font-poppins font-semibold text-[2.5vw] text-[#3F487F]">History</label>
                </div>

                <div id="card template 1" class="flex flex-row w-full m-auto bg-green-new rounded-[2vw] shadow sm:p-[1.25vw] md:p-[2vw] mb-[3vw]">
                    <div id="left (destination. time, day)">
                        <div id="text">
                            <label for="destination title" class="block mb-[0.75vw] font-font-poppins font-bold text-[1.5vw] text-white">Anggrek - Grand Indonesia</label>
                            <h5 class="mb-[0.75vw] font-font-poppins font-semibold text-[1vw] text-white">16:30 - 18:15</h5>
                            <h5 class="font-font-poppins font-semibold text-[1vw] text-white">Today, 6 April 2023</h5>
                        </div>
                    </div>

                    <div id="right (booked text)">
                        <h5 id="booked text" class="mt-[4.5vw] ml-[3vw] font-font-poppins font-semibold text-[1.5vw] text-yellow-new">
                            Booked
                        </h5>
                    </div>
                </div>

                <div id="card template 2" class="flex flex-row w-full m-auto bg-green-new rounded-[2vw] shadow sm:p-[1.25vw] md:p-[2vw] mb-[3vw]">
                    <div id="left (destination. time, day)">
                        <div id="text">
                            <label for="destination title" class="block mb-[0.75vw] font-font-poppins font-bold text-[1.5vw] text-white">Wisma Asia - Madura</label>
                            <h5 class="mb-[0.75vw] font-font-poppins font-semibold text-[1vw] text-white">7:00 - 8:00</h5>
                            <h5 class="font-font-poppins font-semibold text-[1vw] text-white">Today, 6 April 2023</h5>
                        </div>
                    </div>

                    <div id="right (booked text)">
                        <h5 id="booked text" class="mt-[4.5vw] ml-[7vw] font-font-poppins font-semibold text-[1.5vw] text-yellow-new">
                            Booked
                        </h5>
                    </div>
                </div>
            </div>

            <div id="content" class="pt-[5vw] blur-[0.1vw]">
                <div id="ornament">
                    <div id="right ornament" class="absolute z-10 right-[0vw] top-[7vw]">
                        <img src="/assets/clickandsit/clickandsit/fill/rightOrnament.png">
                    </div>

                    <div id="left ornament" class="absolute z-10 top-[5vw]">
                        <img src="/assets/clickandsit/clickandsit/fill/leftOrnament.png">
                    </div>

                    <div id="history button" class="absolute z-10 right-[0vw] top-[20vw]">
                        <a href="/history">
                            <img src="/assets/clickandsit/clickandsit/fill/historyButton.png">
                        </a>
                    </div>
                </div>

                <div id="header available template" class="w-full m-auto sm:p-[1.25vw] md:p-[3vw]">
                    <h1 class="font-semibold text-[2.5vw] text-dark-blue-new text-center">Available Template</h1>
                </div>

                <div id="card template 1" class="flex flex-row w-1/2 m-auto bg-yellow-new rounded-[2vw] shadow sm:p-[1.25vw] md:p-[2.5vw] mb-[3vw]">
                    <div id="left (destination. time, day, icon)">
                        <div id="text and icon" class="flex flex-row">
                            <div>
                                <label for="destination title" class="block mb-[0.75vw] font-font-poppins font-bold text-[1.5vw] text-[#3F487F]">Anggrek - Grand Indonesia</label>
                                <h5 class="mb-[1.5vw] font-font-poppins font-semibold text-[1vw] text-[#3F487F]">16:30 WIB - 18:15 WIB </h5>
                            </div>

                            <div id="edit icon" class="mt-[0.35vw] ml-[0.75vw]">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="w-[1.5vw] h-[1.5vw] fill-[#3F487F] opacity-75">
                                        <path
                                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                        <path
                                            d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                            </div>
                        </div>

                        <div id="schedule" class="inline-flex rounded-md shadow-sm" role="group">
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Mon</a>
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Tue</a>
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Wed</a>
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Thr</a>
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Fri</a>
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Sat</a>
                        </div>
                    </div>

                    <div id="right (toggle)">
                        <label for="themeSwitcherTwo" class="themeSwitcherTwo relative inline-flex cursor-pointer select-none items-center left-[12vw] top-[2.5vw]">
                            <input type="checkbox" name="themeSwitcherTwo" id="themeSwitcherTwo" class="sr-only">
                            <span class="label flex items-center text-[1.3vw] font-semibold text-dark-blue-new">
                            Off
                            </span>
                            <span class="slider mx-[0.83vw] flex h-[2.92vw] w-[5.47vw] items-center rounded-full bg-[#AFB1B6] p-[0.2vw] duration-200">
                            <span class="dot h-[2.1875vw] w-[2.1875vw] rounded-full bg-white duration-200"></span>
                            </span>
                        </label>
                    </div>
                </div>

                <div id="card template 2" class="flex flex-row w-1/2 m-auto bg-yellow-new rounded-[2vw] shadow sm:p-[1.25vw] md:p-[2.5vw] mb-[3vw]">
                    <div id="left (destination. time, day, icon)">
                        <div id="text and icon" class="flex flex-row">
                            <div>
                                <label for="destination title" class="block mb-[0.75vw] font-font-poppins font-bold text-[1.5vw] text-[#3F487F]">Madara - Uchiha</label>
                                <h5 class="mb-[1.5vw] font-font-poppins font-semibold text-[1vw] text-[#3F487F]">15:30 WIB - 16:15 WIB </h5>
                            </div>

                            <div id="edit icon" class="mt-[0.35vw] ml-[0.75vw]">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="w-[1.5vw] h-[1.5vw] fill-[#3F487F] opacity-75">
                                        <path
                                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                        <path
                                            d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                            </div>
                        </div>

                        <div id="schedule" class="inline-flex rounded-md shadow-sm" role="group">
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Mon</a>
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Tue</a>
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Wed</a>
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Thr</a>
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Fri</a>
                            <a class="text-[#539064] font-semibold text-[1vw] py-1 w-[3vw] h-[2vw] text-center bg-white border-[0.15vw] border-[#539064] rounded-lg shadow hover:bg-[#539064] mr-[1vw]">Sat</a>
                        </div>
                    </div>

                    <div id="right (toggle)">
                        <label for="themeSwitcherTwo" class="themeSwitcherTwo relative inline-flex cursor-pointer select-none items-center left-[12vw] top-[2.5vw]">
                            <input type="checkbox" name="themeSwitcherTwo" id="themeSwitcherTwo" class="sr-only">
                            <span class="label flex items-center text-[1.3vw] font-semibold text-dark-blue-new">
                            Off
                            </span>
                            <span class="slider mx-[0.83vw] flex h-[2.92vw] w-[5.47vw] items-center rounded-full bg-[#AFB1B6] p-[0.2vw] duration-200">
                            <span class="dot h-[2.1875vw] w-[2.1875vw] rounded-full bg-white duration-200"></span>
                            </span>
                        </label>
                    </div>
                </div>

                <div id="add schedule" class="flex justify-center">
                    <a href="/createTemplate">
                        <button class="bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-2xl font-bold w-[15vw] py-[0.83vw] rounded-full m-auto shadow-md">
                            + Add Schedule
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#92AA68]">
        <div id="footer" class="mx-auto w-full p-4 py-6 pt-[3vw] max-w-screen-2xl mt-[10vw]">
            <h5 class="self-center text-[1.5vw] font-semibold whitespace-nowrap text-yellow-new font-shadow mb-3 ">U-Help</h5>
            <div id="upper white line" class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <h5 class="w-[18vw] text-white text-[1vw]">Thoughful marketing for growing dental practices.</h5>
                </div>

                <div class="grid gap-8 sm:gap-6 sm:grid-cols-2 ml-[4vw]">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="event-title flex flex-col">
                            <h5 class="w-[28vw] text-[1vw] text-white mb-[1vw]">DENTAL MARKETING INSIGHTS FOR CLEVER DENTISTS DIRECT TO YOUR INBOX</h5>
                            <div class="flex flex-row w-[28vw]">
                                <input type="text" class="placeholder-white placeholder-opacity-75 border px-3 w-[18vw] border-white bg-transparent rounded-lg text-[0.8vw] focus:ring-yellow-new focus:border-yellow-new text-white" placeholder="YOUR EMAIL " required>
                                <button class="px-5 ml-[1vw] bg-yellow-new rounded-lg text-white shadow-lg">SUBSCRIBE </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="grid gap-8 sm:gap-6 sm:grid-cols-2">
                    <div class="w-[16vw]">
                        <h2 class="mb-6 text-[1vw] font-semibold text-white uppercase">FOLLOW US</h2>
                        <ul class="text-white font-medium text-[0.8vw]">
                            <div id="you tube account" class="flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-[0.3vw]"
                                    fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                                </svg>
                                <li class="mb-4">
                                    <a href="https://www.youtube.com/@anderiesnotanto4368" class="hover:underline">U-Help Company</a>
                                </li>
                            </div>
                            <div id="instagram account" class="flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-[0.3vw]"
                                    fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                                <li>
                                    <a href="https://www.instagram.com/uhelp.company/" class="hover:underline">uhelp.company</a>
                                </li>
                            </div>
                        </ul>
                    </div>

                    <div class="w-[16vw] ml-[1.5vw]">
                        <h2 class="mb-6 text-[1vw] font-semibold text-white uppercase">CONTACT US</h2>
                        <ul class="text-white font-medium flex flex-row">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-[0.3vw]"
                                fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                            <li class="mb-4 text-[0.8vw]">
                                <a href="https://wa.me/+6281287966089?text=I'm%20interested%20in%20your%20U-Help%20company.%20" class="hover:underline">+6281287966089</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-white sm:mx-auto mt-[3vw]" />
            <div id="under white line" class="sm:flex sm:items-center sm:justify-between">
                <span class="text-[1vw] text-white sm:text-center">© 2023 <a href="" class="hover:underline">U-Help</a>. Education Lecture Helper, Bogor. All Rights Reserved.</span>
                <div id="right bottom text" class="flex space-x-6 sm:justify-center sm:mt-0 text-[1vw] text-white">
                    <a href="" class="hover:underline uppercase">PRIVACY POLICY</a>
                    <a href="" class="hover:underline uppercase">TERMS & CONDITIONS</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>






