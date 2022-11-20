<div class="w-11/12 mx-auto my-0">
                    <p class="text-2xl my-3">Thêm Slider mới</p>
                    <form action="index.php?act=add_slider" method="post"  enctype="multipart/form-data"  class="w-2/3">
                        <table class="w-full bg-slate-100 rounded-lg">
                            <tr>
                                <td>
                                    <p class="px-2 text-lg">Tên Slider</p>
                                    <input class="px-2 py-[2px] border w-11/12 mx-2" type="text" name="name">
                                    <p class="text-sm text-red-400 mx-2">moi nhap ten</p>
                                </td>
                                <td>
                                    <p class="px-2 text-lg">Url</p>
                                    <input class="px-2 py-[2px] border w-11/12 mx-2" type="text" name="url">
                                    <p class="text-sm text-red-400 mx-2 ">moi nhap ten</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="px-2 text-lg">Image</p>
                                    <input class="text-sm ml-2" type="file" name="img">
                                    <p class="text-sm text-red-400 mx-2">moi nhap ten</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="px-2 text-lg">Mo ta</p>
                                    <textarea name="moTa" id="" class="w-11/12 mx-7" cols="50" rows="5"></textarea>
                                    
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
                                <a href="index.php?act=slider">List</a>
                            </button>
                        </div>

                    </form>
                    <p><?php echo isset($tb)?$tb:'' ?></p>
                </div>