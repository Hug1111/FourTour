<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Four tour</title>
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="website icon" type="png" href="image/FOUR TOUR.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <?php 
    require 'model/pdo.php';
    require 'model/diadiem.php';
    require 'model/tour.php';
    $diadiem=select_all_dd();
    $cate=select_all_t();
    ?>
    <div class="w-full">
        <div class="container mx-auto my-0 uppercase">
            <header class="hover:bg-slate-500 hover:text-red-400 bg-transparent z-10">
                <div class="grid grid-cols-[25%_50%_25%]">
                    <!-- Logo -->
                    <div>
                        <img class="w-6/12 mx-auto my-0" src="image/Screenshot_20221109_030423.png" alt="">
                    </div>
                    <!-- Menu -->
                    <div>
                        <ul class="w-full h-full my-auto flex justify-center items-center">
                            <li class="px-4 flex-col">
                                <a href="home.html">Home</a>
                                <p class="w-1 mx-auto my-2 rounded-full text-center h-1 bg-orange-300"></p>
                            </li>
                            <li class="px-4 flex-col group/item"><a href="tour.html">Tour</a>
                                <p
                                    class="group/edit invisible group-hover/item:visible w-1 mx-auto my-2 rounded-full text-center h-1 bg-orange-300">
                                </p>
                            </li>
                            <li class="px-4 flex-col group/item relative flex h-full justify-center"><a
                                    href="Destination.html">Destination</a>
                                <p
                                    class="group/edit invisible group-hover/item:visible w-1 mx-auto my-2 rounded-full text-center h-1 bg-orange-300">
                                </p>
                                <ul
                                    class="block absolute top-20 bg-white  text-black group/edit invisible group-hover/item:visible group/item  group-hover:opacity-100 transition-all duration-500 border border-gray-200 rounded-lg">
                                    <?php foreach ($diadiem as $key => $value) {
                                        $list=data_tree($cate,$value['id_address']);
                                        ?>
                                        <li class="sub-dropdown px-7 py-2"><a href=""
                                            class="group-hover:invisible"><?php echo $value['name_address'] ?></a>
                                        <div class="h-full">
                                            <ul
                                                class="sub-dropdown-content absolute left-full top-full bg-white w-max  invisible transition-all duration-400 border border-gray-200 rounded-lg">
                                                <?php foreach ($list as $key => $value) { ?>
                                                    <li><a href="" class="menu-sub-item"><?php echo  $value['name_tour']  ?></a></li>
                                               <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <?php } ?>
                                    
                                    <!-- <li class="sub-dropdown  px-7 py-2"><a href=""
                                            class="group-hover:invisible">dropdown</a>
                                        <div class="">
                                            <ul
                                                class="sub-dropdown-content absolute left-full top-full bg-white w-max  invisible transition-all duration-400 border border-gray-200 rounded-lg">
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sub-dropdown  px-7 py-2"><a href=""
                                            class="group-hover:invisible">dropdown</a>
                                        <div class="h-full">
                                            <ul
                                                class="sub-dropdown-content absolute left-full top-full bg-white w-max  invisible transition-all duration-400 border border-gray-200 rounded-lg">
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sub-dropdown px-7 py-2"><a href="" class="group-hover:invisible">chau
                                            a</a>
                                        <div class="h-full">
                                            <ul
                                                class="sub-dropdown-content absolute left-full top-full bg-white w-max  invisible transition-all duration-400 border border-gray-200 rounded-lg">
                                                <li><a href="" class="menu-sub-item">thg oat con</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                                <li><a href="" class="menu-sub-item">Sub dropdown menu</a></li>
                                            </ul>
                                        </div>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="px-4 flex-col group/item"><a href="blog.html">Blog</a>
                                <p
                                    class="group/edit invisible group-hover/item:visible w-1 mx-auto my-2 rounded-full text-center h-1 bg-orange-300">
                                </p>
                            </li>
                            <li class="px-4 flex-col group/item"><a href="">Page</a>
                                <p
                                    class="group/edit invisible group-hover/item:visible w-1 mx-auto my-2 rounded-full text-center h-1 bg-orange-300">
                                </p>
                            </li>
                            <li class="px-4 flex-col group/item"><a href="">Contact</a>
                                <p
                                    class="group/edit invisible group-hover/item:visible w-1 mx-auto my-2 rounded-full text-center h-1 bg-orange-300">
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- Icon -->
                    <div class="flex justify-center items-center pb-3">
                        <div class="m-3">
                            <span>0382610702</span>
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="m-3"><i class="fas fa-search"></i></div>
                        <div class="m-3 group/item">
                            <i class="far fa-user"></i>
                            <div
                                class="absolute top-20 right-5 border border-gray-200 rounded-b-xl invisible group-hover/item:visible transition-all duration-400">
                                <div>
                                    <a class="px-3 py-4" href="">Dang nhap</a>
                                </div>
                                <div>
                                    <a class="px-3 py-4" href="">Dang ki</a>
                                </div>
                                <div>
                                    <a class="px-3 py-4" href="">xem trang ca nhan</a>
                                </div>
                                <div>
                                    <a class="px-3 py-4" href="">Dat tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner -->

            </header>
        </div>
</body>

</html>