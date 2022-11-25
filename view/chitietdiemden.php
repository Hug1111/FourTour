            <div>
                <div class="text-center pt-20 ">
                    <p class="font-medium text-4xl "><?php echo $diadiem_id['name_address']  ?></p>
                </div>
                <div class="flex mt-20 ">
                    <div class="w-4/6 pl-28">
                        <p class="font-medium text-3xl">Chi Tiết Điểm Đến</p>
                        <div class="mt-6">
                            <p><?php echo $diadiem_id['noidung1'] ?></p>
                        </div>
                        <div class="flex mt-10">
                            <div class="w-3/6">
                            <div class="h-6/6 w-5/6 pt-2">
                                <img class="w-full h-full" src="image/<?php echo $diadiem_id['image_dd'] ?>" alt="">
                            </div>
                            </div>
                            <div class="w-3/6 ">
                                <p> <?php echo $diadiem_id['noidung2'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="w-2/6 ml-2">
                        <p class="font-medium text-3xl">Ảnh Mô Tả</p>
                        <div>
                            <div class="flex mt-7">
                                <div class="w-2/6 h-2/6 mx-2">
                                   <img class="w-full h-full rounded-md" src="image/<?php echo $diadiem_id['chitietanh'] ?>" alt="">
                                </div>
                                <div class="w-2/6 h-2/6 mx-2">
                                    <img class="w-full h-full rounded-md" src="image/<?php echo $diadiem_id['chitietanh2'] ?>" alt="">
                                 </div>
                                 <div class="w-2/6 h-2/6 mx-2">
                                    <img class="w-full h-full rounded-md" src="image/<?php echo $diadiem_id['chitietanh3'] ?>" alt="">
                                 </div>
                                
                            </div>
                            

                        </div>
                    </div>
                </div>
                <div class="ml-28 mt-16 ">
                    <table border="1">
                        <tr>
                            <td class="pb-10 font-medium ">Nước </td>
                            <td class="pl-20 pb-10">Việt Nam</td>
                        </tr>
                        <tr>
                            <td class="pb-10 font-medium">Loại Tiền</td>
                            <td class="pl-20 pb-10" >VND</td>
                        </tr>
                        <tr>
                            <td class="pb-10 font-medium">Khoảng Cách</td>
                            <td class="pl-20 pb-10" ><?php echo $diadiem_id['socay'] ?></td>
                        </tr>
                        
                        
                    </table>
                </div>
            </div>