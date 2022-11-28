<div class="w-11/12 mx-auto my-0">
    <p class="text-2xl my-3">Đặt tour</p>
    <div>
        <table class="w-full my-4">
            <tr class="grid grid-cols-[5%_12%_15%_4%_15%_10%_3%_10%_10%_6%_10%] ">
                <th class="border border-slate-500 py-1 rounded-tl-xl">ID</th>
                <th  class="border border-slate-500 py-1">Tên người đặt</th>
                <th  class="border border-slate-500 py-1">Tên tour</th>
                <th  class="border border-slate-500 py-1">Số lượng</th>
                <th  class="border border-slate-500 py-1">Địa chỉ</th>
                <th  class="border border-slate-500 py-1">Ngày đi</th>
                <th  class="border border-slate-500 py-1">Số ngày</th>
                <th  class="border border-slate-500 py-1">Thành tiền</th>
                <th  class="border border-slate-500 py-1">PTTT</th>
                <th  class="border border-slate-500 py-1">Trạng thái</th>
                <th  class="border border-slate-500 py-1  rounded-tr-xl"></th>
            </tr>
            <?php foreach ($list_bill as $key => $value) { 
                $user = select_user_id($value['id_user']);
                $tour = select_t_one($value['id_tour']);
                ?>
                
            <tr class="grid grid-cols-[5%_12%_15%_4%_15%_10%_3%_10%_10%_6%_10%] ">
                <td  class="border border-slate-500 py-1 text-center"><?php echo $value['id_bill'] ?></td>
                <td  class="border border-slate-500 py-1 px-2"><?php echo $user['name'] ?></td>
                <td  class="border border-slate-500 "><?php echo $tour['name_tour'] ?></td>
                <td  class="border border-slate-500 py-1 text-center"><?php echo $value['soLuong'] ?></td>
                <td  class="border border-slate-500 py-1 px-2"><?php echo $value['address'] ?></td>
                <td  class="border border-slate-500 py-1 px-2 text-center"><?php echo $value['time_start'] ?></td>
                <td  class="border border-slate-500 py-1 px-2 text-center"><?php echo $tour['soNgay'] ?></td>
                <td  class="border border-slate-500 py-1 px-2"><?php echo $value['thanhTien'] ?></td>
                <td  class="border border-slate-500  py-1 px-2"><?php echo $value['pttt'] ?></td>
                <td  class="border border-slate-500  py-1 px-2"><?php echo $value['trangThai'] ?></td>
                <td  class="border border-slate-500 text-center grid grid-cols-1 p-3 space-y-2">
                    
                    <a class="flex items-center bg-blue-300 justify-center m-1 rounded-xl hover:bg-blue-500 hover:text-white hover:fill-white" href="index.php?act=huy&id=<?php echo $value['id_bill'] ?>"><svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>Hủy</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>