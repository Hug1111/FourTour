<!-- <div>
                <div class="text-center pt-20 ">
                    <p class="font-medium text-4xl ">ĐÀ NẴNG</p>
                </div>
                <div class="flex mt-20 ">
                    <div class="w-4/6 pl-28">
                        <p class="font-medium text-3xl">Chi Tiết Điểm Đến</p>
                        <div class="mt-6">
                            <p>Dọc theo bờ biển là đường Trần Phú, con đường xinh đẹp nhiều người biết đến, cũng là nơi tập trung những công trình kiến trúc quan trọng của thành phố. Bờ biển Nha Trang với bãi cát trắng trải dài, uốn cong tạo nên một dáng vóc thành phố ôm lấy biển xanh. Không chỉ đẹp về mặt cảnh sắc tự nhiên, biển Nha Trang còn hấp dẫn du khách bởi khí hậu nơi đây ấm áp quanh năm, tràn ngập ánh nắng. Sự tuyệt diệu cúa thiên nhiên ban tặng cho bãi biển cát trắng mịn tinh khiết</p>
                        </div>
                        <div class="flex mt-10">
                            <div class="w-3/6">
                            <div class="h-6/6 w-5/6 pt-2">
                                <img class="w-full h-full" src="image/nhatranggggg.jpg" alt="">
                            </div>
                            </div>
                            <div class="w-3/6 ">
                                <p> Tuyến đường Trần Phú – Nha Trang đã được người Pháp phát hiện từ hơn 100 năm trước. Vào những năm 1900, người Pháp bắt đầu quan tâm đến Nha Trang nơi có nhiều tiềm năng phát triển du lịch nghỉ dưỡng. Ngày nay, bãi biển Nha Trang được cả thế giới đón nhận với nhiều tình cảm đặc biệt và ngày càng nổi tiếng. Qua năm tháng, cùng với tốc độ phát triển đô thị, ngày nay, con đường Trần Phú đã trở nên nhộn nhịp, sôi động bậc nhất Việt Nam. Bãi biển dọc theo đường Trần Phú có nhiều bãi biển nhỏ tạo nên một quần thể bãi biển đa dạng và phong phú các loại hình hoạt động dịch vụ du lịch.

                                    Bờ biển thành phố Nha Trang với dải cát vàng</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-2/6 ml-2">
                        <p class="font-medium text-3xl">Ảnh Mô Tả</p>
                        <div>
                            <div class="flex mt-7">
                                <div class="w-2/6 h-2/6 mx-2">
                                   <img class="w-full h-full rounded-md" src="../image/8d1f7b4d-99b8-4be3-9c43-ab67b36d0eab.jpg" alt="">
                                </div>
                                <div class="w-2/6 h-2/6 mx-2">
                                    <img class="w-full h-full rounded-md" src="../image/8d1f7b4d-99b8-4be3-9c43-ab67b36d0eab.jpg" alt="">
                                 </div>
                                 <div class="w-2/6 h-2/6 mx-2">
                                    <img class="w-full h-full rounded-md" src="../image/8d1f7b4d-99b8-4be3-9c43-ab67b36d0eab.jpg" alt="">
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
                            <td class="pl-20 pb-10" >300 km</td>
                        </tr>
                        
                        
                    </table>
                </div>
            </div> -->
            <div class="w-full">
                <div class="text-center pt-20 ">
                    <p class="font-medium text-4xl "><?php echo $diadiem_id['name_address']  ?></p>
                </div>
                <div class="w-10/12 mx-auto grid grid-cols-[75%_25%] mt-20">
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
                            <div class="w-3/6">
                                <p> <?php echo $diadiem_id['noidung2'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="m-2">
                        <p class="font-medium text-3xl">Ảnh Mô Tả</p>
                        <div>
                            <div class="flex mt-7">
                                <div class="w-2/6 h-2/6 mx-2">
                                   <img class="w-full h-full rounded-md" src="image/tour-hn2.jpeg" alt="">
                                </div>
                                <div class="w-2/6 h-2/6 mx-2">
                                    <img class="w-full h-full rounded-md" src="image/tour-hn2.jpeg" alt="">
                                 </div>
                                 <div class="w-2/6 h-2/6 mx-2">
                                    <img class="w-full h-full rounded-md" src="image/tour-hn2.jpeg" alt="">
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