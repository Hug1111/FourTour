<div class="w-11/12 mx-auto my-0">
                    <p class="text-2xl my-3">Danh sach Slider</p>
                    <div class="py-3 rounded-t-xl">
                        <div class="w-full">
                            <div class="w-2/12  my-0 flex  items-center bg-blue-300 p-1 rounded-xl justify-center">
                                <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                </svg>
                                <a href="index.php?act=add_slider">Them moi</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <table class="w-full border-collapse border border-slate-400 ">
                            <tr class="w-full grid grid-cols-[5%_20%_20%_30%_15%_10%] bg-blue-500 text-white">
                                <th class="border border-slate-400">id</th>
                                <th class="border border-slate-400">Ten Slider</th>
                                <th class="border border-slate-400">Image</th>
                                <th class="border border-slate-400">Mo ta</th>
                                <th class="border border-slate-400">Url</th>
                                <th class="border border-slate-400">action</th>
                            </tr>
                            <?php  foreach ($list_sl as $key => $value) { ?>
                            
                            <tr class="w-full grid grid-cols-[5%_20%_20%_30%_15%_10%]">
                                <td class="border border-slate-400 text-center"><?php echo $value['id_slider'] ?></td>
                                <td class="border border-slate-400 px-2 text-center"><?php echo $value['name_slider'] ?></td>
                                <td class="border border-slate-400"><img
                                        class="max-w-[200px] max-h-[100px] mx-auto my-1"
                                        src="../image/<?php echo $value['image_sl'] ?>" alt=""></td>
                                <td class="border border-slate-400 px-2"><?php echo $value['moTa'] ?></td>
                                <td class="border border-slate-400 px-2"><?php echo $value['url'] ?></td>
                                <td class="flex flex-col border border-slate-400">
                                    <a class="flex items-center bg-blue-300 w-2/3 justify-center m-1 rounded-xl hover:bg-blue-500 hover:text-white hover:fill-white"
                                        href="index.php?act=edit_sl&id=<?php echo $value['id_slider'] ?>"><svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                        </svg>Sua</a>
                                    <a class="flex items-center bg-blue-300 w-2/3 justify-center m-1 rounded-xl hover:bg-blue-500 hover:text-white hover:fill-white"
                                        href="index.php?act=del_sl&id=<?php echo $value['id_slider'] ?>" onclick="return confirm('Ban co chac chan xoa khong ?')"><svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                        </svg>Xoa</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>