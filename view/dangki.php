<div class="w-full">
            <div class="grid grid-cols-[50%_50%] bg-emerald-300 p-2">
                <div class="p-20">
                    <img class="pl-12 py-16" src="image/<?php echo $setting['logo'] ?>" alt="">
                    <div class="text-2xl text-white">
                        <h1 class="pl-8">Công ty Du Dịch uy tín số 1 Việt Nam</h1>
                        <h1>Chỉ cần bạn muốn đi chúng tôi sẽ đưa bạn đến.</h1>
                    </div>
                </div>
                <div class="w-5/6 mx-auto my-1 rounded-xl border py-2 shadow-lg bg-white">
                    <p class="text-3xl p-2">Form dang ki</p>
                    <form action="index.php?act=dangki" method="post">
                        <div class="my-2.5 px-2">
                            <p>Ho va ten</p>
                            <input
                                class="w-full focus:border-none px-2 py-[3px] my-1 rounded-2xl border shadow-lg shadow-bac-400/25"
                                type="text" name="name">
                        </div>
                        <div class="my-2.5 px-2">
                            <p>Dia chi</p>
                            <input
                                class="w-full focus:border-none px-2 py-[3px] my-1 rounded-2xl border shadow-lg shadow-bac-400/25"
                                type="text" name="address">
                        </div>
                        <div class="my-2.5 px-2">
                            <p>So dien thoai</p>
                            <input
                                class="w-full focus:border-none px-2 py-[3px] my-1 rounded-2xl border shadow-lg shadow-bac-400/25"
                                type="text" name="tel">
                        </div>
                        <div class="my-2.5 px-2">
                            <p>Username</p>
                            <input
                                class="w-full focus:border-none px-2 py-[3px] my-1 rounded-2xl border shadow-lg shadow-bac-400/25"
                                type="text" name="username">
                        </div>
                        <div class="my-2.5 px-2">
                            <p>Password</p>
                            <input
                                class="w-full focus:border-none px-2 py-[3px] my-1 rounded-2xl border shadow-lg shadow-bac-400/25"
                                type="text" name="pass">
                        </div>
                        <div class="my-2.5 px-2">
                            <p>Repassword</p>
                            <input
                                class="w-full focus:border-none px-2 py-[3px] my-1 rounded-2xl border shadow-lg shadow-bac-400/25"
                                type="text" name="repass">
                        </div>
                        <div class="my-2.5 px-2">
                            <p>Email</p>
                            <input
                                class="w-full focus:border-none px-2 py-[3px] my-1 rounded-2xl border shadow-lg shadow-bac-400/25"
                                type="text" name="email">
                        </div>
                        <button type="submit" name="btn_signup"
                            class="block w-1/3 mx-auto text-xl text-white text bg-red-400 hover:bg-red-600 px-10 py-2 rounded-full my-2">Sign
                            up</button>
                    </form>
                    <?php if (isset($tb)) {
                    echo $tb.'<p class="flex items-center justify-center text-white bg-red-400 hover:bg-red-600 px-10 py-2 rounded-full "><a href="index.php?act=dangnhap">Dang nhap</a></p>';
                    } ?>
                </div>
                
            </div>
        </div>
        