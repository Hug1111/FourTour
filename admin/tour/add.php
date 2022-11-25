<div class="w-11/12 mx-auto my-0">
                    <p class="text-2xl my-3">Thêm Tour mới</p>
                    <form action="index.php?act=add_t" method="post" enctype="multipart/form-data" class="w-2/3">
                        <table class="w-full bg-slate-100 rounded-lg">
                            <tr>
                                <td>
                                    <p class="px-2 text-lg">Tên Tour</p>
                                    <input class="px-2 py-[2px] border w-11/12 mx-2" type="text" name="name" value="<?php echo isset($name)?$name:''  ?>">
                                    <p class="text-sm text-red-400 mx-2"><?php echo !empty(eror_user($name))?eror_user($name):'Da xac nhan' ?></p>
                                </td>
                                <td>
                                    <p class="px-2 text-lg">Dia chi</p>
                                    <input class="px-2 py-[2px] border w-11/12 mx-2" type="text" name="address_tour" value="<?php echo isset($address_t)?$address_t:''  ?>">
                                    <p class="text-sm text-red-400 mx-2 "><?php echo !empty(eror_user($address_t))?eror_user($address_t):'Da xac nhan' ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="px-2 text-lg">Gia</p>
                                    <input class="px-2 py-[2px] border w-11/12 mx-2" type="number" name="price" value="<?php echo isset($price)?$price:''  ?>">
                                    <p class="text-sm text-red-400 mx-2"><?php echo !empty(eror_user($price))?eror_user($price):'Da xac nhan' ?></p>
                                </td>
                                <td>
                                    <p class="px-2 text-lg">Dia diem</p>
                                    <select  class="px-2 py-[2px] border w-11/12 mx-2"  name="diadiem" id="">
                                        <?php foreach ($list_dd as $key => $value) { ?>
                                            <option value="<?php echo $value['id_address'] ?>"><?php echo $value['name_address'] ?></option>                                        
                                        <?php } ?>    
                                    </select>
                                    <p class="text-sm text-red-400 mx-2">moi nhap ten</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="px-2 text-lg">So luong nguoi tham gia</p>
                                    <input class="px-2 py-[2px] border w-11/12 mx-2" type="number" name="soluong" value="<?php echo isset($soLuong)?$soLuong:'' ?>">
                                    <p class="text-sm text-red-400 mx-2"><?php echo !empty(eror_user($soLuong))?eror_user($soLuong):'Da xac nhan' ?></p>
                                </td>
                                <td>
                                    <p class="px-2 text-lg">So ngay di</p>
                                    <input class="px-2 py-[2px] border w-11/12 mx-2" type="text" name="soNgay" value="<?php echo isset($soNgay)?$soNgay:'' ?>">
                                    <p class="text-sm text-red-400 mx-2"><?php echo !empty(eror_user($soNgay))?eror_user($soNgay):'Da xac nhan' ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="px-2 text-lg">Image</p>
                                    <input class="text-sm ml-2" type="file" name="file">
                                    <p class="text-sm text-red-400 mx-2">moi nhap ten</p>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <p class="px-2 text-lg">Ma giam gia</p>
                                    <select  class="px-2 py-[2px] border w-11/12 mx-2"  name="giamGia" id="">
                                        <option value="0">khong co</option>
                                        <?php foreach ($list_ud as $key => $value) { ?>
                                            <option value="<?php echo $value['id_UD'] ?>"><?php echo $value['name'] ?></option>
                                        <?php }?>
                                    </select>
                                    <p class="text-sm text-red-400 mx-2">moi nhap ten</p>
                                </td>
                                <td>
                                    <p class="px-2 text-lg">The loai</p>
                                    <select  class="px-2 py-[2px] border w-11/12 mx-2"  name="loai" id="">
                                    <?php foreach ($list_tl as $key => $value) { ?>
                                        <option value="<?php echo $value['id_loai'] ?>"><?php echo $value['name'] ?></option>                                        
                                    <?php } ?> 
                                    </select>
                                    <p class="text-sm text-red-400 mx-2">moi nhap ten</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="px-2 text-lg">Mo ta</p>
                                    <textarea name="moTa" id="" class="w-11/12 mx-7" cols="50" rows="5"><?php echo isset($moTa)?$moTa:'' ?></textarea>
                                    <p class="text-sm text-red-400 mx-2"><?php echo !empty(eror_user($moTa))?eror_user($moTa):'Da xac nhan' ?></p>
                                </td>
                            </tr>
                        </table>
                        <div class="flex">
                            <button type="submit" name="btn_insert"
                                class="w-28 mt-4 flex items-center justify-center bg-blue-500 p-2 border rounded-full hover:bg-blue-200 hover:text-white hover:fill-white">
                                <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                </svg>
                                Thêm
                            </button>
                            <button type="reset"
                                class="w-28 mt-4 flex items-center justify-center bg-blue-500 p-2 border rounded-full hover:bg-blue-200 hover:text-white hover:fill-white">
                                <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                                </svg>
                                Reset
                            </button>
                            <button
                                class="w-28 mt-4 flex items-center justify-center bg-blue-500 p-2 border rounded-full hover:bg-blue-200 hover:text-white hover:fill-white">
                                <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                                </svg>
                                <a href="index.php?act=tour">List</a>
                            </button>
                        </div>

                    </form>
                <?php echo isset($tb)?$tb:'' ?>
                </div>