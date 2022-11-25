<div class="w-11/12 mx-auto my-0">
                    <p class="text-2xl my-3">Danh sach thong ke</p>
                    <div class="w-full">
                        <p class="text-xl my-1">Thong ke theo dia diem</p>
                        <div class="max-h-[400px]">
                            <canvas id="myChart"></canvas>
                          </div>
                          
                          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                          
                          <script>
                            const ctx = document.getElementById('myChart');
                          
                            new Chart(ctx, {
                              type: 'bar',
                              data: {
                                labels: <?php echo json_encode($address)?>,
                                datasets: [{
                                  label: '# of Votes',
                                  data: <?php echo json_encode($tour)?>,
                                  borderWidth: 1
                                }]
                              },
                              options: {
                                scales: {
                                  y: {
                                    beginAtZero: true
                                  }
                                }
                              }
                            });
                          </script>
                           
                        <!-- <table class="w-full border-collapse border border-slate-400 ">
                          
                            
                         
                            <tr class="w-full grid grid-cols-[5%_20%_7.5%_7.5%_20%_20%_20%] bg-blue-500 text-white">
                                <th class="border border-slate-400">id</th>
                                <th class="border border-slate-400">Dia diem</th>
                                <th class="border border-slate-400">So tour</th>
                                <th class="border border-slate-400">So binh luan</th>
                                <th class="border border-slate-400">gia thap nhat</th>
                                <th class="border border-slate-400">gia cao nhat</th>
                                <th class="border border-slate-400">gia trung binh</th>
                            </tr>
                            <?php 
                          $i=1;
                          foreach ($load_thongke as $key => $value) { ?>
                            <tr class="w-full grid grid-cols-[5%_20%_7.5%_7.5%_20%_20%_20%] bg-white">
                                <td class="border border-slate-400 text-center"><?php echo $i ?></td>
                                <td class="border border-slate-400 px-2"><?php echo $value['address'] ?></td>
                                <td class="border border-slate-400 px-2"><?php echo $value['Counttour'] ?></td>
                                <td class="border border-slate-400">.......</td>
                                <td class="border border-slate-400 px-2"><?php echo $value['minprice'] ?></td>
                                <td class="border border-slate-400 px-2"><?php echo $value['maxprice'] ?></td>
                                <td class="border border-slate-400 px-2"><?php echo $value['avgprice'] ?></td>
                            </tr>
                            <?php $i++; } ?>
                        </table> -->
                        <p class="text-xl my-1">Thong ke theo loai Tour</p>
                        <div class="max-h-[400px] max-w-[1000px]">
                            <canvas class="w-full h-full" id="myChart1"></canvas>
                          </div>
                        <script>
                            const ctx2 = document.getElementById('myChart1');
                          
                          new Chart(ctx2, {
                            type: 'bar',
                            data: {
                              labels: <?php echo json_encode($loai) ?>,
                              datasets: [{
                                label: '# of Votes',
                                data: <?php echo json_encode($tour_loai) ?>,
                                borderWidth: 1
                              }]
                            },
                            options: {
                              scales: {
                                y: {
                                  beginAtZero: true
                                }
                              }
                            }
                          });
                        </script>
                        
                        <!-- <table class="w-full border-collapse border border-slate-400 ">
                            <tr class="w-full grid grid-cols-[5%_20%_7%_8%_20%_20%_20%] bg-blue-500 text-white">
                                <th class="border border-slate-400">id</th>
                                <th class="border border-slate-400">Loai</th>
                                <th class="border border-slate-400">So tour</th>
                                <th class="border border-slate-400">So binh luan</th>
                                <th class="border border-slate-400">gia thap nhat</th>
                                <th class="border border-slate-400">gia cao nhat</th>
                                <th class="border border-slate-400">gia trung binh</th>
                            </tr>
                            <?php $i=1; 
                            
                            foreach ($load_thongke_loai as $key => $value) { ?>
                            <tr class="w-full grid grid-cols-[5%_20%_7%_8%_20%_20%_20%] bg-white">
                                <td class="border border-slate-400 text-center"><?php echo $i?></td>
                                <td class="border border-slate-400 px-2"><?php echo $value['address'] ?></td>
                                <td class="border border-slate-400 px-2"><?php echo $value['Counttour'] ?></td>
                                <td class="border border-slate-400">.........</td>
                                <td class="border border-slate-400 px-2"><?php echo $value['minprice']  ?></td>
                                <td class="border border-slate-400 px-2"><?php echo $value['maxprice']  ?></td>
                                <td class="border border-slate-400 px-2"><?php echo $value['avgprice']  ?></td>
                            </tr>
                            <?php $i++;} ?>
                        </table> -->
                    </div>
                </div>