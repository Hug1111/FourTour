<div>
            <div>
                <div class="slideshow-container z-[-1]">
                    <!-- Full-width images with number and caption text -->
                    <?php foreach ($slider as $key => $value) { ?>
                    <div class="mySlides fade">
                        <img class="w-full h-full" src="image/<?php echo $value['image_sl'] ?>"
                            style="width:100%">
                    </div>
                    <?php } ?>
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>
            <div>
                <div class="flex justify-center my-3 ">
                    <div class="border border-gray-300 rounded-md mx-2">
                        <div class="flex mx-4 my-2">
                            <i class="fa-regular fa-paper-plane text-xl my-1 mx-2"></i>
                            <p class="font-medium text-xl">Where</p>
                            <select name="" id="">
                                <option value="">- All Where -</option>
                                <?php foreach ($diadiem as $key => $value) { ?>
                                    <option value="<?php echo $value['id_address'] ?>"><?php echo $value['name_address'] ?></option>
                                <?php } ?>
                                
                            </select>
                        </div>
                    </div>

                    <div class="border border-gray-300 rounded-md mx-2">
                        <div class="flex mx-4 my-2">
                            <i class="fa-regular fa-flag text-xl my-1 mx-2"></i>
                            <p class="font-medium text-xl">Type</p>
                            <select name="" id="">
                                <option value="">-All Type-</option>
                                <?php foreach ($theloai as $key => $value) { ?>
                                    <option value="<?php echo $value['id_loai'] ?>"><?php echo $value['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-md mx-2">
                        <div class="flex mx-4 my-2">
                            <i class="fa-regular fa-calendar-days text-xl my-1 mx-2"></i>
                            <p class="font-medium text-xl">Day</p>
                            <select name="" id="">
                                <option value="">1 Ngay</option>
                                <option value="">2 Ngay</option>
                                <option value="">3 Ngay</option>
                            </select>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-md mx-2 bg-orange-400 hover:bg-blue-600">
                        <div class="mx-4 my-2">
                            <button name="submit">
                                <p class="font-medium text-2xl">Search</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content  -->
        <section>
            <div class="text-center my-20">
                <div class="my-8">
                    <p class="font-medium">EXPLORE OUR TOURS</p>
                </div>
                <div>
                    <p class="font-medium text-5xl">New and Most</p>
                    <p class="font-medium text-5xl py-3">Popular Tours</p>
                </div>
            </div>
        </section>

        <section>
            <div class="flex justify-center mb-24">
            <?php foreach ($tournew as $key => $value) { ?>  
                <div class="relative px-4">
                    <div class="w-72 h-96 relative">
                        <img class="w-full h-full rounded-md" src="image/<?php echo $value['image_t'] ?>" alt="">
                        <div class="flex absolute top-5 right-5 text-white ">
                            <p class="font-medium">From</p>
                            <p class="font-medium text-lg mx-1">$<?php echo $value['price'] ?></p>
                        </div>
                        <div class="absolute bottom-52 left-6 text-gray-300">
                            <p class="font-normal text-base "><?php echo $value['name_address'] ?></p>
                        </div>
                        <div class="absolute bottom-36 left-6 text-white">
                            <p class="font-normal text-2xl "><?php echo $value['name_tour'] ?></p>
                        </div>
                        <div class="absolute bottom-24 left-6 text-white flex  ">

                            <i class="fa-regular fa-clock text-base py-1 "></i>
                            <div class="">
                                <p class="font-normal text-base px-2  "><?php echo $value['soNgay'] ?> Days</p>
                            </div>
                            <div class="flex mx-2 my-1 ">
                                <i class="fa-regular fa-star px-1 text-yellow-400"></i>
                                <i class="fa-regular fa-star text-yellow-400 "></i>
                                <i class="fa-regular fa-star px-1 text-yellow-400"></i>
                                <i class="fa-regular fa-star text-yellow-400   "></i>
                                <i class="fa-regular fa-star px-1 text-yellow-400"></i>
                            </div>
                            <div class="">
                                <p>4.8/5</p>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-5 left-8 border border-white text-white rounded-sm hover:bg-orange-500  ">
                            <a href="index.php?act=tour&id=<?php $value['id_tour'] ?>">
                                <p class="font-medium text-lg px-10 py-3">T??m Hi???u Th??m</p>
                            </a>
                        </div>

                    </div>
                </div>
                <?php } ?>

            </div>
        </section>


        <section>
            <div class="bg-gray-200">
                <div class="">
                    <div class="my-10">
                        <p class="font-medium text-base text-center pt-16">CHOOSE YOUR EXPERIENCE</p>
                    </div>
                    <div class="text-center my-12">
                        <p class="font-medium text-4xl">TOP NH???NG ??I???M ?????N H??NG </p>
                        <p class="font-medium text-4xl pt-2"> ?????U VI???T NAM</p>
                    </div>
                </div>
                <div class="">
                    <div class="pt-12 flex justify-center">
                        <?php foreach ($danhmuc_diadiem_top_up as $key => $value) { ?>
                        <div class="w-5/12 h-72 pr-4 relative">
                            <a href="">
                            <img class="w-full h-full rounded-md" src="image/<?php echo $value['image_dd'] ?>" alt="">
                            <p class="absolute top-8 left-64 text-white font-medium text-2xl"><?php echo $value['name_address'] ?></p>
                            </a>
                        </div>
                        <?php } ?>
                        
                    </div>
                    <div class="flex justify-center pt-8 pb-28">
                        <?php foreach ($danhmuc_diadiem_top_dow as $key => $value) { ?>
                            
                            <div class="w-3/12 h-72 relative mx-5">
                            <a href="">
                                <img class="w-full h-full rounded-md" src="image/<?php echo $value['image_dd'] ?>" alt="">
                                <p class="absolute top-8 left-8 text-white font-medium text-2xl"><?php echo $value['name_address'] ?></p>
                                </a>
                            </div>
                            
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="pb-24">
                <div class="text-center my-16">
                    <p class="text-2xl font-medium">WHY CHOOSE US</p>
                </div>
                <div class="flex">
                    <div class="w-5/12 h-5/6 ml-28">
                        <img class="w-full h-full rounded-md" src="image/team2.jpg" alt="">
                    </div>
                    <div class="">
                        <div class="text-center px-24 pt-10 ">
                            <p class="text-4xl font-medium">Kinh nghi???m c???a ch??ng t??i ????p </p>
                            <p class="text-4xl font-medium">???ng c??c ti??u chu???n ch???t </p>
                            <p class="text-4xl font-medium">l?????ng cao</p>
                        </div>
                        <div
                            class=" justify-center text-center border border-gray-400 rounded-md py-6 px-2 my-7 mx-28 text-blue-600 ">
                            <p class="font-normal text-base">Ch??ng t??i ???? ph???c v??? r???t nhi???u kh??ch h??ng qua ????</p>
                            <p class="font-normal text-base">???? ????c k???t nh???ng tr???i nghi???m ????? ????a</p>
                            <p class="font-normal text-base">ra ch???t l?????ng ph???c v??? t???t nh???t gi??p</p>
                            <p class="font-normal text-base"> b???n c?? m???t chuy???n ??i ?? ngh??a</p>
                        </div>
                        <div class="flex px-32 py-3">
                            <i class="fa-solid fa-check text-3xl   "></i>
                            <p class="text-xl font-medium px-4">H?????ng D???n Vi??n Chuy??n Nghi???p </p>
                        </div>
                        <div class="flex px-32 py-3">
                            <i class="fa-solid fa-check text-3xl   "></i>
                            <p class="text-xl font-medium px-4">Linh Ho???t V?????t Tr???i </p>
                        </div>
                        <div class="flex px-32 py-3">
                            <i class="fa-solid fa-check text-3xl   "></i>
                            <p class="text-xl font-medium px-4">Ch???t L?????ng D???ch V??? T???t </p>
                        </div>
                        <div class="flex px-32 py-3">
                            <i class="fa-solid fa-check text-3xl   "></i>
                            <p class="text-xl font-medium px-4">H??? Tr??? Ngay Khi G???p S??? C??? </p>
                        </div>
                        <div class="px-40 ">
                            <a href="">
                                <div class="border border-gray-400 rounded-md bg-gray-500  hover:bg-orange-500  ">
                                    <p class="text-2xl font-medium px-36 py-2">Li??n H??? Ngay</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="bg-gray-200">
                <div class=" py-20 ">
                    <div class="text-center my-24">
                        <div>
                            <p class="font-medium text-lg">T??m Ki???m B???ng Danh M???c</p>
                        </div>
                        <div class="my-14">
                            <p class="font-medium text-5xl">T??m c???m h???ng cho chuy???n</p>
                            <p class="font-medium text-5xl py-2">??i ti???p theo c???a b???n</p>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <?php foreach ($theloai_top5 as $key => $value) { ?>
                        <div class="border border-gray-600 rounded-md mx-5">
                            <div class="text-center px-4">
                                <i class="fa-solid fa-mountain-sun text-5xl pt-6"></i>
                                <div class="my-16">
                                    <a href="index.php?act=tour/##" class="hover:text-red-500">
                                    <p class="font-medium text-xl"><?php echo $value['name'] ?></p>
                                    </a>
                                </div>
                                <div class="flex mb-3 mx-8">
                                    <p>From</p>
                                    <p class="text-orange-500 font-medium text-lg px-1">FourTour</p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="flex">

                <div class="mt-20 ml-56">
                    <div>
                        <p class="font-medium text-base">TI???T KI???M KHI ?????T NGAY</p>
                    </div>
                    <div class="mt-8">
                        <p class="font-medium text-4xl">??u ????i du l???ch </p>
                        <p class="font-medium text-4xl"> v??o ph??t cu???i</p>
                    </div>

                    <div class="my-8">
                        <div class="relative px-4">
                            <div class="w-72 h-96 relative">
                                <img class="w-full h-full rounded-md" src="image/phuquoc.jpg" alt="">
                                <div class="flex absolute top-5 right-5 text-white   ">
                                    <p class="font-medium">From</p>
                                    <p class="font-medium text-lg mx-1">$<?php echo $tour_uudai['price'] ?></p>
                                </div>
                                <div class="absolute bottom-52 left-6 text-gray-300">
                                    <p class="font-normal text-base "><?php echo $tour_uudai['name_address'] ?></p>
                                </div>
                                <div class="absolute bottom-36 left-6 text-white">
                                    <p class="font-normal text-2xl "><?php echo $tour_uudai['name_tour'] ?></p>
                                </div>
                                <div class="absolute bottom-24 left-6 text-white flex  ">

                                    <i class="fa-regular fa-clock text-base py-1 "></i>
                                    <div class="">
                                        <p class="font-normal text-base px-2  "><?php echo $tour_uudai['soNgay'] ?> Days</p>
                                    </div>
                                    <div class="flex mx-2 my-1 ">
                                        <i class="fa-regular fa-star px-1 text-yellow-400"></i>
                                        <i class="fa-regular fa-star text-yellow-400 "></i>
                                        <i class="fa-regular fa-star px-1 text-yellow-400"></i>
                                        <i class="fa-regular fa-star text-yellow-400   "></i>
                                        <i class="fa-regular fa-star px-1 text-yellow-400"></i>
                                    </div>
                                    <div class="">
                                        <p>5/5</p>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-5 left-8 border border-white text-white rounded-sm hover:bg-orange-500  ">
                                    <a href="">
                                        <p class="font-medium text-lg px-10 py-3">T??m Hi???u Th??m</p>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="w-5/12 h-4/5 ml-96 my-10 relative ">
                    <img class="w-full h-full " src="image/banner.jpg" alt="">
                    <div class="absolute top-20 left-40 text-white">
                        <p class="text-7xl">Discover</p>
                        <p class="text-2xl absolute left-2"> New Experiences in PH?? QU???C</p>
                        <div class="flex absolute top-36">
                            <p class="text-9xl text-orange-500">40</p>
                            <div class="my-8">
                                <p class="text-4xl text-orange-500">%</p>
                                <p class="text-4xl text-orange-500">OFF</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-40 left-40">
                        <div class="border border-gray-400 rounded-md bg-blue-700 hover:bg-red-600 ">
                            <a href="">
                                <p class="font-medium text-xl mx-6 my-4 text-white ">?????T NGAY <i
                                        class="fa-solid fa-arrow-right text-xl"></i></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="bg-gray-300 mt-10">
                <div class="pb-28">
                    <div class="text-center py-24">
                        <div>
                            <p class="text-base font-medium">????NH GI?? C???A KH??CH H??NG</p>
                        </div>
                        <div class="mt-10">
                            <p class="text-5xl font-medium">Du kh??ch c???a ch??ng t??i </p>
                            <p class="text-5xl font-medium pt-1">n??i g?? v??? chuy???n ??i</p>
                        </div>
                    </div>
                    <div class="flex py-20">
                        <div class="w-3/12 h-2/6 ml-14 mt-32">
                            <img class="w-full h-full rounded-md" src="image/decor.jpg" alt="">
                        </div>
                        <div class="px-3 text-center mt-52">
                            <p class="text-lg font-normal">???Customer service was professional. Highly recommend.
                                Absolutely </p>
                            <p class="text-lg font-normal">Just the right amount of time spent snorkeling and one</p>
                            <p class="text-lg font-normal"> of the most beautiful beaches I have ever seen.???</p>
                            <div class="ml-52 mt-12">
                                <div class="flex mx-2 my-1 ">
                                    <i class="fa-regular fa-star px-1 text-yellow-400"></i>
                                    <i class="fa-regular fa-star text-yellow-400 "></i>
                                    <i class="fa-regular fa-star px-1 text-yellow-400"></i>
                                    <i class="fa-regular fa-star text-yellow-400   "></i>
                                    <i class="fa-regular fa-star px-1 text-yellow-400"></i>
                                </div>
                            </div>
                            <div class="ml-2 mt-12">
                                <p class="font-medium text-lg">T?? ?????P TRAI</p>
                                <p>H?? N???i - Vi???t Nam</p>
                            </div>
                        </div>

                        <div class="w-3/12 h-2/6 ml-16   ">
                            <img class="w-full h-full rounded-md" src="image/decor2.jpg" alt="">
                            <div class="h-72 w-60 mt-20 ml-20 ">
                                <img class="w-full h-full rounded-md" src="image/tem2.jpg" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div>
                <div class="my-20">
                    <div class="text-center">
                        <p class="text-5xl font-medium">BLOG V??? DU L???CH M???I NH???T</p>
                    </div>
                </div>
                <div class="my-14">

                    <div class="mx-7 text-center">
                        <a href="" class="hover:text-blue-500 underline">
                            <p class="text-3xl font-medium">V?? Sao B???n n??n ??i leo </p>
                            <p class="text-3xl font-medium"> n??i m???i th??ng</p>
                        </a>
                        <div class="mx-40 my-6 ">
                            <p class="text-base font-normal">??i???u ?????u ti??n, quan tr???ng nh???t l?? s???c kh???e v?? th??? l???c ?????
                                th???c hi???n m???t h??nh tr??nh leo b??? t??? m???t ng??y ?????n tu???n tr??n nhi???u ?????a h??nh kh??c nhau nh??ng
                                ch??? y???u l?? d???c cao, qua r???ng. Qu??ng ???????ng ??i c??ng t??? h??ng ch???c ?????n h??ng tr??m ki-l??-m??t,
                                t??y theo m???i n??i b???n l???a ch???n.

                                Tinh th???n t???t v?? n??? l???c kh??ng ng???ng. ????y l?? y???u t??? quan tr???ng nh???t v?? m???t chuy???n ??i t???i
                                c??c n??i m???i, ngay c??? v???i n??i ???? t???ng leo th?? c??ng lu??n c?? nh???ng bi???n c??? b???t ng??? t??? th???i
                                ti???t, ?????a h??nh, s???c kh???e. B???n c???n s???n s??ng d??? t??nh cho t??nh hu???ng x???u nh???t, s???n s??ng
                                ??????ng ?????u, ????? m???t, v?????t qua b???ng ?? ch??, s??? c??? g???ng, ????i khi l?? l?? l???m, li???u l??nh ????? ?????n
                                ????ch cu???i c??ng.


                                ???????ng m??n xuy??n r???ng tr??c chinh ph???c ?????nh Putaleng (Tam ???????ng ??? Lai Ch??u)
                                Nh???ng s??? chu???n b??? kh??c c??ng r???t quan tr???ng nh??: Kh??? n??ng t??m hi???u th??ng tin v?? x??c ?????nh
                                gi???i h???n c???a b???n th??n ????? l???a ch???n quy???t ?????nh c?? tham gia hay kh??ng m???t chuy???n trekking;
                                kh??? n??ng th???u hi???u, c???ng t??c, h???p t??c theo nh??m; k??? n??ng x??c ?????nh ph????ng h?????ng, t??m
                                ???????ng ??i (n???u b??? b??? l???i ho???c l???c); k??? n??ng l???a ch???n, chu???n b??? ????? ?????c sao cho ????? m?? g???n
                                nh??? nh???t; c??c k??? n??ng v??? di chuy???n, b??i, d???ng l???u, n???u ??n???; chu???n b??? ????? d??ng c?? nh??n
                                mang theo (t??y theo m???i chuy???n t???i nh???ng n??i c??? th??? song th?????ng s??? c???n ??o ???m, kh??n nh???,
                                v???t d???ng c?? nh??n cho sinh ho???t, m???t ??t thu???c men, ????? ??n nh???, c??c thi???t b??? ch???p h??nh,
                                quay phim???).</p>
                        </div>

                    </div>


                </div>
            </div>
        </section>

        <!--H??? Tr??? Kh??ch H??ng-->

        <div class="grid grid-cols-2 w-full h-[150px] mx-auto my-20">
            <div class="border bg-gray-200 p-10">
                <h1 class="text-xl">????ng k?? nh???n b???n tin c???a ch??ng t??i</h1>
                <p class="text-sm text-gray-500 pt-3">Ti???t ki???m t???i 50% cho c??c chuy???n tham quan v?? chuy???n ??i.
                    Nh???n quy???n truy c???p ngay v??o gi?? th???p h??n.</p>
                <div class="flex pt-3">
                    <input class="w-[270px] h-10 rounded-md " type="text" placeholder="Nh????p ??i??a Chi?? Gmail Cu??a Ba??n">
                    <button>
                        <p class="w-[90px] h-10 border p-2 bg-orange-600 text-white rounded-md">????ng Ki??</p>
                    </button>
                </div>
            </div>
            <div class="border bg-gray-400 p-10">
                <h1 class="text-xl">H??? tr??? kh??ch h??ng 24/7</h1>
                <p class="text-sm text-gray-500 pt-3">Li??n h??? v???i ch??ng t??i ngay b??y gi??? ????? c?? t???t c??? c??c c??u h???i li??n
                    quan ?????n
                    tour du l???ch c???a b???n ???????c tr??? l???i.</p>
                <div class=" flex pt-3">
                    <i class="fas fa-user"></i>
                    <i class="fas fa-user"></i>
                    <i class="fas fa-user"></i>
                    <i class="fas fa-user"></i>
                    <div class="ml-5">
                        <a href="">
                            <p class="p-2 bg-orange-600 text-white rounded-md ">Li??n H???? Ngay</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script>
        let slideIndex = 0;
        showSlides();
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>