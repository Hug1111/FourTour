
<div class="w-11/12 mx-auto my-0">
                    <p class="text-2xl my-3">Chi tiet tai khoan</p>
                    <div class="w-full grid grid-cols-[30%_70%]">
                        <div class="w-full bg-slate-300 py-3  flex justify-center rounded-l-xl">
                            <img class="max-w-[300px] max-h-[200px]"
                                src="../image/<?php echo $tour['image_t'] ?>" alt="">
                        </div>
                        <div class="text-xl w-full">
                            <table class="w-full">
                                <tr class="grid grid-cols-[30%_70%] bg-slate-200 rounded-tr-xl">
                                    <td class="border border-slate-400 px-2 py-2 ">Mã Tour</td>
                                    <td class="border border-slate-400 px-2 py-2 w-full rounded-tr-xl">T-<?php echo $tour['id_tour'] ?></td>
                                </tr>
                                <tr class="grid grid-cols-[30%_70%]  bg-slate-200">
                                    <td class="border border-slate-400 px-2 py-2">Đại điểm</td>
                                    <td class="border border-slate-400 px-2 py-2"><?php echo ($tour['id_address']==$diadiem['id_address']?$diadiem['name_address']:'Dang cap nhat') ?></td>
                                </tr>
                                <tr class="grid grid-cols-[30%_70%] ">
                                    <td class="border border-slate-400 px-2 py-2">Địa chỉ</td>
                                    <td class="border border-slate-400 px-2 py-2"><?php echo $tour['address_tour'] ?>
                                    </td>
                                </tr>

                                <tr class="grid grid-cols-[30%_70%] ">
                                    <td class="border border-slate-400 px-2 py-2">Tên Tour</td>
                                    <td class="border border-slate-400 px-2 py-2"><?php echo $tour['name_tour'] ?></td>
                                </tr>
                                <tr class="grid grid-cols-[30%_70%]  bg-slate-200">
                                    <td class="border border-slate-400 px-2 py-2">The loai</td>
                                    <td class="border border-slate-400 px-2 py-2"><?php echo ($tour['id_loai']==$loai['id_loai']?$loai['name']:'Dang cap nhat') ?></td>
                                </tr>
                                <tr class="grid grid-cols-[30%_70%]  bg-slate-200">
                                    <td class="border border-slate-400 px-2 py-2">Giá</td>
                                    <td class="border border-slate-400 px-2 py-2"><?php echo $tour['price'] ?></td>
                                </tr>
                                <tr class="grid grid-cols-[30%_70%] ">
                                    <td class="border border-slate-400 px-2 py-2">Số ngày đi</td>
                                    <td class="border border-slate-400 px-2 py-2"><?php echo $tour['soNgay'] ?></td>
                                </tr>
                                <tr class="grid grid-cols-[30%_70%]  bg-slate-200 ">
                                    <td class="border border-slate-400 px-2 py-2">Số lượng</td>
                                    <td class="border border-slate-400 px-2 py-2 "><?php echo $tour['soLuong'] ?></td>
                                </tr>
                                <tr class="grid grid-cols-[30%_70%]  bg-slate-200 ">
                                    <td class="border border-slate-400 px-2 py-2">Lượt đặt</td>
                                    <td class="border border-slate-400 px-2 py-2 "><?php echo $tour['luotDat'] ?></td>
                                </tr>
                                <tr class="grid grid-cols-[30%_70%]  bg-slate-200 ">
                                    <td class="border border-slate-400 px-2 py-2">Mô tả</td>
                                    <td class="border border-slate-400 px-2 py-2 "><?php echo $tour['moTa'] ?></td>
                                </tr>
                                <tr class="grid grid-cols-[30%_70%]  bg-slate-200 rounded-br-xl">
                                    <td class="border border-slate-400 px-2 py-2">Mã giảm giá</td>
                                    <td class="border border-slate-400 px-2 py-2 rounded-br-xl"><?php echo $tour['giamGia'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <button
                        class="w-32 mt-4 flex items-center justify-center bg-blue-500 p-2 border rounded-full hover:bg-blue-200 hover:text-white hover:fill-white">
                        <svg class="w-5 h-5 mr-2 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M109.3 288L480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288z" />
                        </svg>
                        <a href="index.php?act=tour">Quay lại</a>
                    </button>
                </div>
                