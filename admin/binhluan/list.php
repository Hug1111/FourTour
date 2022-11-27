<div class="w-11/12 mx-auto my-0">
                    <p class="text-2xl my-3">Danh sach bình luận</p>
                    <div>
                        <form action="index.php?act=binh_luan" method="post" class="w-4/12 grid grid-cols-[70%_30%] border rounded-xl">
                            <select class="px-2 py-1 border rounded-l-xl" name="kyw" id="">
                                <option value="">Tìm bài viết</option>
                                <?php foreach ($list_b as $key => $value) { ?>
                                <option value="<?php echo $value['id_blog']; ?>"><?php echo $value['title']; ?></option>
                                <?php } ?>
                            </select>
                            <button class="px-2 py-1 bg-blue-300 rounded-r-xl" type="submit" name="btn_search">Search</button>
                        </form>
                        <table class="w-full my-4">
                            <tr class="grid grid-cols-[5%_10%_15%_20%_40%_10%] ">
                                <th class="border border-collapse py-1 rounded-tl-xl">ID</th>
                                <th  class="border border-collapse py-1">ID_Blog</th>
                                <th  class="border border-collapse py-1">User</th>
                                <th  class="border border-collapse py-1">Ngay dang</th>
                                <th  class="border border-collapse py-1">Noi dung</th>
                                <th  class="border border-collapse py-1  rounded-tr-xl">Thao tác</th>
                            </tr>
                            <?php foreach ($list_bl as $key => $value) { ?>
                            <tr class="grid grid-cols-[5%_10%_15%_20%_40%_10%]">
                                <td  class="border border-collapse text-center"><?php echo $value['id_bl']?></td>
                                <td  class="border border-collapse text-center"><?php echo $value['id_blog'] ?></td>
                                <td  class="border border-collapse text-center"><?php echo $value['id_user'] ?></td>
                                <td  class="border border-collapse text-center"><?php echo $value['ngayDang']?></td>
                                <td  class="border border-collapse px-2"><?php echo $value['noidung']?></td>
                                <td  class="border border-collapse text-center">
                                    <button class="bg-blue-300 rounded-xl py-1 px-3"><a href="index.php?act=del_bl&id=<?php echo $value['id_bl'] ?>">Xóa</a></button>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>