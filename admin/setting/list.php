<div class="w-11/12 mx-auto my-0">
                    <p class="text-3xl my-3">Setting</p>
                    <div class="w-full grid grid-cols-[60%_40%]">
                        <form class="w-full" action="index.php?act=setting" enctype="multipart/form-data" method="post">
                            <div class="pt-2">
                                <p class="px-2 text-xl">Tên website</p>
                                <input class="px-2 py-[2px] border rounded-lg border-slate-700 w-11/12 mx-2" type="text"
                                    placeholder="Tên website"value="<?php echo isset($getdata['website_url'])?$getdata['website_url']:''  ?>"  name="name">
                            </div>
                            <div class="pt-2">
                                <p class="px-2 text-xl">Logo</p>
                                <input class="text-sm ml-2" type="file" name="file">
                            </div>
                            <div class="pt-2">
                                <p class="px-2 text-xl">Địa chỉ</p>
                                <input class="px-2 py-[2px] border rounded-lg border-slate-700 w-11/12 mx-2" type="text"
                                    placeholder="Địa chỉ" name="address" value="<?php echo isset($getdata['address'])?$getdata['address']:'' ?>">
                            </div>
                            <div class="pt-2">
                                <p class="px-2 text-xl">Số điện thoại</p>
                                <input class="px-2 py-[2px] border rounded-lg border-slate-700 w-11/12 mx-2" type="text"
                                    placeholder="Số điện thoại" name="tel" value="<?php echo isset($getdata['tel'])?$getdata['tel']:'' ?>">
                            </div>
                            <div class="pt-2">
                                <p class="px-2 text-xl">Email</p>
                                <input class="px-2 py-[2px] border rounded-lg border-slate-700 w-11/12 mx-2" type="text"
                                    placeholder="Email" name="email" value="<?php echo isset($getdata['email'])?$getdata['email']:'' ?>">
                            </div>
                            <div class="pt-2">
                                <p class="px-2 text-xl">Facebook</p>
                                <input class="px-2 py-[2px] border rounded-lg border-slate-700 w-11/12 mx-2" type="text"
                                    placeholder="Facebook"name="fb" value="<?php echo isset($getdata['facebook'])?$getdata['facebook']:'' ?>">
                            </div>
<input type="hidden" name="img" value="<?php echo isset($getdata['logo'])?$getdata['logo']:'' ?>">
                            <div class="flex space-x-3 ml-2">
                                <button type="submit" name="btn_insert"
                                    class="w-28 mt-4 flex items-center justify-center bg-blue-500 p-2 border rounded-full hover:bg-blue-800 hover:text-white hover:fill-white hover:border-stone-800 ">
                                    <!-- <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> -->
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <!-- <path
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg> -->
                                    Lưu
                                </button>
                                <button type="submit" name="btn_update"
                                    class="w-28 mt-4 flex items-center justify-center bg-blue-500 p-2 border rounded-full hover:bg-blue-800 hover:text-white hover:fill-white hover:border-stone-800">
                                    <!-- <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> -->
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <!-- <path
                                            d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                                    </svg> -->
                                    <a href="index.php?act=setting&id=1">Sua</a>
                                </button>
                                <button type="reset"
                                    class="w-28 mt-4 flex items-center justify-center bg-blue-500 p-2 border rounded-full hover:bg-blue-800 hover:text-white hover:fill-white hover:border-stone-800">
                                    <!-- <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> -->
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <!-- <path
                                            d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                                    </svg> -->
                                    Reset
                                </button>
                            </div>
                        </form>
                        <div>  
                            <div class="w-full">
                                <table class="w-full">
                                    <tr class="grid grid-cols-[30%_70%] p-2">
                                        <td>Logo</td>
                                        <td>
                                                <img class="max-w-[300px] max-h-[100px]" src="../image/<?php echo $setting["logo"]?>" alt="">
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-[30%_70%] p-2">
                                        <td>Ten Website</td>
                                        <td>
                                            <?php echo $setting['website_url'] ?>
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-[30%_70%] p-2">
                                        <td>Dia chi</td>
                                        <td><?php echo $setting['address'] ?></td>
                                    </tr>
                                    <tr class="grid grid-cols-[30%_70%] p-2">
                                        <td>
                                            so dien thoai
                                        </td>
                                        <td>
                                            <?php echo $setting['tel'] ?>
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-[30%_70%] p-2">
                                        <td>
                                            email
                                        </td>
                                        <td>
                                            <?php echo $setting['email'] ?>
                                        </td>
                                    </tr>
                                    <tr class="grid grid-cols-[30%_70%] p-2">
                                        <td>
                                            Facebook
                                        </td>
                                        <td><?php echo $setting['facebook'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                        