<?php  include '../layout/nav.php'; ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                            <h3 class="text-gray-700 text-3xl font-medium">PRODUCTS Table</h3>

                            <div class="mt-8">
                                <?php 
                            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                                if (isset ($_GET['id'])) {

                                    $productsId = filter_var($_GET['id'], FILTER_VALIDATE_INT);
                                    $sql = "DELETE FROM products WHERE id=$productsId";
                                    if ($conn->query($sql) === TRUE) {
                                      echo "Record deleted successfully";
                                    } 
                                }
               
                                
                   } ?>

        <div class="flex flex-col mt-6">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name Products </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Details </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Price </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">تعديل</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">حذف</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100"> </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            <?php 
                            $sql = "SELECT * FROM products";
                            $result = $conn->query($sql);

                            if ($result->num_rows == 0) {

                                echo "0 results";
                                exit;
                            }
                                while($row = $result->fetch_assoc()) { ?>

                        <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="../../../Upload/product/<?=$row['img']?>" alt="" />
                                        </div>

                                        <div class="ml-4">
                                            <div class="text-sm leading-5 font-medium text-gray-900"><?=$row['name']?> /<?=$row['name_en']?> </div>
                                            <div class="text-sm leading-5 text-gray-500"><?=$row['date']?></div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900"><?=$row['url']?></div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"><?=$row['price']?></span>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500"> -- </td>

                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="edit.php?id=<?=$row['id']?>" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="?id=<?=$row['id']?>" class="text-indigo-600 hover:text-indigo-900">حذف</a>
                                </td>
                            </tr>
                            <?php 
                            } 
                        ?>
                        </tbody>
                    </table>
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