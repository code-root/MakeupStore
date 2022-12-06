<?php  include '../layout/nav.php'; ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                            <h3 class="text-gray-700 text-3xl font-medium">Page</h3>

                            <?php 

                            $sql = "SELECT * FROM page";
                            $result = $conn->query($sql);

                            if ($result->num_rows == 0) {
                            // output data of each row
                            echo 'Page 0 '; 
                               exit;
                            }  ?>
                        
              <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">edit</th>

                            </tr>
                        </thead>
                        <tbody>
                    <?php while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full" src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="" />
                                        </div>

                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap"><?=$row['name']?> / <?=$row['name_en']?>   </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap"> <a href="page-edit.php?id=<?=$row['id']?>"> Edit  </a>  </p>
                                </td>


                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                    <!-- <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        <span class="text-xs xs:text-sm text-gray-900">Showing 1 to 4 of 50 Entries</span>

                        <div class="inline-flex mt-2 xs:mt-0">
                            <button class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">Prev</button>
                            <button class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">Next</button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>