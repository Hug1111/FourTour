
<div class="w-11/12 mx-auto my-0">
                    <p class="text-2xl my-3">Danh sach tai khoan</p>
                    <div class=" py-3 rounded-t-xl">
                        <div class="grid grid-cols-[75%_25%] items-center mb-3 ">
                            <form action="">
                                <div class="flex items-center">
                                    <input class="py-1 w-64 px-3 rounded-l-2xl border-2" placeholder="Nhap tu khoa tim kiem"
                                        type="text">
                                    <button class="py-2 px-3 bg-slate-200 rounded-r-2xl border-2">
                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                            <div class="w-full flex justify-end">
                                <div class="w-2/3  my-0 flex  items-center bg-blue-300 p-1 rounded-xl justify-center">
                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                    <a href="index.php?act=add_user">Them moi</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="w-full">
                        <table class="w-full border-collapse border border-slate-400 ">
                            <tr class="w-full grid grid-cols-[5%_20%_15%_15%_20%_10%_5%_10%] bg-blue-500 text-white">
                                <th class="border border-slate-400">id</th>
                                <th class="border border-slate-400">Name</th>
                                <th class="border border-slate-400">Tel</th>
                                <th class="border border-slate-400">Image</th>
                                <th class="border border-slate-400">Username</th>
                                <th class="border border-slate-400">Pass</th>
                                <th class="border border-slate-400">Role</th>
                                <th class="border border-slate-400">action</th>
                            </tr>
                            <?php 
                                  foreach ($list_user as $key => $value) { ?>

                            <tr class="w-full grid grid-cols-[5%_20%_15%_15%_20%_10%_5%_10%] bg-white">
                            <td class="border border-slate-400 text-center"><?php echo $value['id_user']?></td>
                            <td class="border border-slate-400 px-2"><?php echo $value['name'] ?></td>
                            <td class="border border-slate-400 px-2"><?php echo $value['tel'] ?></td>
                            <td class="border border-slate-400"><img class="max-w-[100px] max-h-[100px] mx-auto my-1" src="../image/<?php echo $value['image_nd'] ?>"   alt=""> </td>
                            <td class="border border-slate-400 px-2"><?php echo $value['username']?></td>
                            <td class="border border-slate-400 px-2"><?php echo $value['pass'] ?></td>
                            <td class="border border-slate-400 text-center"><?php echo $value['rolr']?> </td>
                            <td class="flex flex-col border border-slate-400">
                                <a class="flex items-center bg-blue-300 w-2/3 justify-center m-1 rounded-xl hover:bg-blue-500 hover:text-white hover:fill-white" href="index.php?act=edit_user&id=<?php echo $value['id_user'] ?>"><svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>Sua</a>
                                <a class="flex items-center bg-blue-300 w-2/3 justify-center m-1 rounded-xl hover:bg-blue-500 hover:text-white hover:fill-white" onclick="return confirm('Ban co muon xoa thanh vien nay khong ?')" href="index.php?act=del_user&id=<?php echo $value['id_user'] ?>"><svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>Xoa</a>
                                <a class="m-1 bg-blue-300 text-center rounded-xl hover:bg-blue-500 hover:text-white" href="index.php?act=chitiet_user&id=<?php echo $value['id_user'] ?>">Xem chi tiet</a>
                            </td>
                        </tr>
                            <?php } ?>
                            
                        </table>
                    </div>
                </div>