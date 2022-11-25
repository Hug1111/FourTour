<!-- background -->
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


        <!-- content -->
          
            <section>
                <div class="">
                <div class="">
                    <div class="my-10">
                        <p class="font-medium text-base text-center pt-16">CHOOSE YOUR EXPERIENCE</p>
                    </div>
                    <div class="text-center my-12">
                        <p class="font-medium text-4xl">TOP NHỮNG ĐIỂM ĐẾN HÀNG </p>
                        <p class="font-medium text-4xl pt-2"> ĐẦU VIỆT NAM</p>
                    </div>
                </div>
                <div class="">
                <div class="pt-12 flex justify-center">
                    <?php foreach ($danhmuc_diadiem_top_up as $key => $value) { ?>
                    <button class="w-5/12 h-72 pr-4 relative">
                        <a href="index.php?act=chitietdiemden&id=<?php echo $value['id_address'] ?>">
                        <img class="w-full h-full rounded-md" src="image/<?php echo $value['image_dd'] ?>" alt="">
                        <div class="absolute top-8 left-64   ">
                        <p class=" px-2 py-2  text-white font-medium text-2xl"><?php echo $value['name_address'] ?></p>
                        </div>
                        </a>
                    </button>
                   <?php } ?>
                    


                </div>  
                <div class="flex justify-center pt-8 pb-10">
                    <?php foreach($danhmuc_diadiem_top_dow as $key => $value) {  ?>
                    <button class="w-3/12 h-72 relative mx-5">
                        <a href="index.php?act=chitietdiemden&id=<?php echo $value['id_address'] ?>">
                         <img class="w-full h-full rounded-md" src="image/<?php echo $value['image_dd'] ?>" alt="">
                         <div class="absolute top-8 left-8  " >
                            <p class=" px-2 py-2 text-white font-medium text-2xl"><?php echo $value['name_address']  ?></p>
                         </div>
                        </a>
                    </button>
                    <?php  } ?>
                    
                </div>
            </div>
            </div>

            <div class="flex justify-center pt-8 pb-10">
                <?php foreach($danhmuc_diadiem_top_dow_1 as $key => $value) { ?>
                <button class="w-5/12 h-72 pr-4 relative">
                    <a href="index.php?act=chitietdiemden&id=<?php echo $value['id_address'] ?>">
                   <img class="w-full h-full rounded-md" src="image/<?php echo $value['image_dd']  ?>" alt="">
                   <div class="absolute top-8 left-64    ">
                   <p class=" px-2 py-2  text-white font-medium text-2xl"><?php echo $value['name_address']  ?></p>
                   </div>
                   </a>
                </button>
                <?php }  ?>
                
            </div>
             </section>
          

        <!-- content -->
        <!--Hỗ Trợ Khách Hàng-->
        
        <div class="grid grid-cols-2 w-full h-[150px] mx-auto my-20">
            <div class="border bg-gray-200 p-10">
            <h1 class="text-xl">Đăng ký nhận bản tin của chúng tôi</h1>
            <p class="text-sm text-gray-500 pt-3">Tiết kiệm tới 50% cho các chuyến tham quan và chuyến đi.
            Nhận quyền truy cập ngay vào giá thấp hơn.</p>
            <div class="flex pt-3">
            <input class="w-[270px] h-10 rounded-md " type="text" placeholder="Nhập Địa Chỉ Gmail Của Bạn">
            <button>
            <p class="w-[90px] h-10 border p-2 bg-orange-600 text-white rounded-md">Đăng Kí</p>
            </button>
            </div>
            </div>
            <div class="border bg-gray-400 p-10">
            <h1 class="text-xl">Hỗ trợ khách hàng 24/7</h1>
            <p class="text-sm text-gray-500 pt-3">Liên hệ với chúng tôi ngay bây giờ để có tất cả các câu hỏi liên quan đến
            tour du lịch của bạn được trả lời.</p>
            <div class=" flex pt-3">
            <i class="fas fa-user"></i>
            <i class="fas fa-user"></i>
            <i class="fas fa-user"></i>
            <i class="fas fa-user"></i>
            <div class="ml-5">
            <a href="">
            <p class="p-2 bg-orange-600 text-white rounded-md ">Liên Hệ Ngay</p>
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