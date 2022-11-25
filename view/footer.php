        <div class="w-10/12 mx-auto my-10">
            <footer>
                <div class="grid grid-cols-[75%_25%]">
                    <div class="grid grid-cols-[50%_25%_25%]">
                        <div>
                            <p>Nhung diem den hap dan</p>
                            <div class="grid grid-cols-2 my-3 py-4">
                                <?php foreach ($diadiem as $key => $value) { ?>
                                    <a class="hover:text-red-500" href="">
                                    <p><?php echo $value['name_address'] ?></p>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>

                        <div>
                            <p class="">cong ty</p>
                            <div class="my-3 py-4">
                                <p><a href="">ve chung toi</a></p>
                                <p><a href="">ve chung toi</a></p>
                                <p><a href="">ve chung toi</a></p>
                                <p><a href="">ve chung toi</a></p>
                            </div>
                        </div>
                        <div>
                            <p class="">Cong dong</p>
                            <div class="my-3 py-4">
                                <p><a href="">gia dinh</a></p>
                                <p><a href="">gia dinh</a></p>
                                <p><a href="">gia dinh</a></p>
                                <p><a href="">gia dinh</a></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img class="w-7/12 float-right " src="image/<?php echo $setting['logo'] ?>" alt="">
                        <div class="float-right">
                            <p class="text-orange-400 italic "><?php echo $setting['address'] ?></p>
                            <div class="float-right">
                                <p class="float-right"><?php echo $setting['tel'] ?></p>
                                <p class=""><?php echo $setting['email'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="grid grid-cols-3">
                    <p>© 2022 Zourney.All rights reserved.</p>
                    <div class="flex justify-center">
                        <a href="">thg oat con</a>
                        <a href="">thg oat con</a>
                        <a href="">thg oat con</a>
                    </div>
                    <div class="w-full h-full flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                    </div>

                </div>
            </footer>
        </div>
    </div>
</body>

</html>