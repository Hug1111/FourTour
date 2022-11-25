<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="w-full">
        <div class="bg-stone-700 fixed h-full">
            <aside>
                <!-- User -->
                <div class="w-4/5 mx-auto my-3 flex items-center">
                    <div class="w-10 h-10">
                        <img class="w-full h-full  border-2 border-white rounded-full"
                            src="../image/180521329_202943214769929_9081131797797772812_n.jpg" alt="">
                    </div>
                    <div class="ml-4">
                        <p>Dung Tuan</p>
                        <p>
                            <a class="hover:text-blue-300" href="../index.php">Xem website</a>
                        </p>
                    </div>
                </div>
                <!-- Chuc nang -->
                <div>
                    <p class="text-start px-7 py-2 text-lg uppercase bg-stone-800 text-gray-400">Chuc nang he thong</p>
                    <!-- Menu -->
                    <div class=" flex flex-col py-2 px-7 h-full text-white">
                        <div class="flex items-center py-2 px-2 hover:border-b-2">
                            <i class="fas fa-home"></i>
                            <a class="px-1 hover:text-blue-300 " href="index.php">Trang chu</a>
                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fas fa-sliders-h"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=slider">Slider</a>
                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fas fa-users"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=tai_khoan">Tai khoan</a>
                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fas fa-gift"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=uu_dai">Uu dai</a>

                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fas fa-map"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=dia_diem">Dia diem</a>
                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fas fa-list"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=tour">Thong tin tour</a>

                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fas fa-table"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=the_loai">The loai</a>
                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fab fa-servicestack"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=dich_vu">Dich vu</a>

                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fas fa-star"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=danh_gia">Danh gia</a>

                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fas fa-dolly-flatbed"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=bill">Don hang</a>
                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fas fa-th-large"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=binh_luan">Binh luan</a>

                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fa-solid fa-blog"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=blog">Blog</a>

                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fa-solid fa-chart-pie"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=thong_ke">Thong ke</a>

                        </div>
                        <div class="flex items-center py-2 px-2  hover:border-b-2">
                            <i class="fa-solid fa-arrows-spin"></i>
                            <a class="px-1 hover:text-blue-300" href="index.php?act=setting">Setting</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <div class="ml-[253px] w-5/6">
            <article>
                <!-- Info web -->
                <div class="flex justify-end text-white bg-blue-500 py-4">
                    <p class="flex items-center px-2">
                        <svg class="w-4 h-4 mr-1 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M188.8 39.3c13.8 8.5 19.6 26.8 13.6 42.7L174.2 156c-5.3 14-18.5 22.5-32.4 21l-42.6-4.6c-17.4 54.1-17.4 113.2 0 167.3l42.6-4.6c13.9-1.5 27.1 7 32.4 21L202.4 430c6.1 15.9 .3 34.2-13.6 42.7l-56.4 34.8c-12.4 7.7-28 5.4-38.1-5.5C-31.4 366.1-31.4 145.9 94.3 10C104.4-.9 120.1-3.1 132.5 4.5l56.4 34.8zm218.4-5.5C471.2 86.6 512 166.6 512 256s-40.8 169.4-104.7 222.2c-10.2 8.4-25.3 7-33.8-3.2s-7-25.3 3.2-33.8C430.1 397.1 464 330.5 464 256s-33.9-141.1-87.3-185.2c-10.2-8.4-11.7-23.6-3.2-33.8s23.6-11.7 33.8-3.2zm-64.4 71.4C387.4 140.4 416 194.8 416 256s-28.6 115.6-73.1 150.8c-10.4 8.2-25.5 6.4-33.7-4s-6.4-25.5 4-33.7C346.6 342.7 368 301.8 368 256s-21.4-86.7-54.8-113.1c-10.4-8.2-12.2-23.3-4-33.7s23.3-12.2 33.7-4zm-65.4 71C303.1 193.5 320 222.8 320 256s-16.9 62.5-42.5 79.7c-11 7.4-25.9 4.5-33.3-6.5s-4.5-25.9 6.5-33.3c12.9-8.7 21.3-23.3 21.3-39.9s-8.4-31.2-21.3-39.9c-11-7.4-13.9-22.3-6.5-33.3s22.3-13.9 33.3-6.5z" />
                        </svg>
                        Ho tro :1900 2003
                    </p>
                    <p class="flex items-center px-2">
                        <svg class="w-4 h-4 mr-1 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                        </svg>
                        fourtour@pavietnam.vn
                    </p>
                    <p class="flex items-center px-2">
                        <svg class="w-4 h-4 mr-1 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M256 112c-48.6 0-88 39.4-88 88C168 248.6 207.4 288 256 288s88-39.4 88-88C344 151.4 304.6 112 256 112zM256 240c-22.06 0-40-17.95-40-40C216 177.9 233.9 160 256 160s40 17.94 40 40C296 222.1 278.1 240 256 240zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-46.73 0-89.76-15.68-124.5-41.79C148.8 389 182.4 368 220.2 368h71.69c37.75 0 71.31 21.01 88.68 54.21C345.8 448.3 302.7 464 256 464zM416.2 388.5C389.2 346.3 343.2 320 291.8 320H220.2c-51.36 0-97.35 26.25-124.4 68.48C65.96 352.5 48 306.3 48 256c0-114.7 93.31-208 208-208s208 93.31 208 208C464 306.3 446 352.5 416.2 388.5z" />
                        </svg>
                        FourTour
                    </p>
                    <p class="flex items-center px-2">
                        <svg class="w-4 h-4 mr-1 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M352 96h64c17.7 0 32 14.3 32 32V384c0 17.7-14.3 32-32 32H352c-17.7 0-32 14.3-32 32s14.3 32 32 32h64c53 0 96-43 96-96V128c0-53-43-96-96-96H352c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-7.5 177.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H160v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z" />
                        </svg>
                        <a class="hover:text-blue-900" href="">Dang xuat</a>
                    </p>
                </div>