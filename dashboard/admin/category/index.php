<?php  include '../layout/nav.php'; ?>
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-semibold">عرض الفئات</h3>
      
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> صورة </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> إسم الفئة </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"> نبذة عن الفذة</th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                </tr>
            </thead>
            <tbody class="bg-white">
            <?php 
                    $sql = "SELECT * FROM category ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
                   <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="../../../Upload/category/<?=$row['img']?>" alt="" />
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="ml-4">
                            <div class="text-sm leading-5 font-medium text-gray-900"> </div>
                            <div class="text-sm leading-5 text-gray-500"> <?=$row['name']?> /<?=$row['name_en']?>   </div>
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">  <?=$row['title']?> </div>
                    </td>
                </tr>
                   <?php  } } else {  echo "0 results";  }
                    ?>
            </tbody>
        </table>
    </div>
    </div>
</main>
</div>
</div>
</body>

</html>