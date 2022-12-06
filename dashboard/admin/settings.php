<?php  include 'layout/nav.php'; ?>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <h3 class="text-gray-700 text-3xl font-semibold">settings</h3>
                <?php
                
            $sql = "SELECT * FROM settings where id = '1' ";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
 
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
                    @ $instagram = filter_var($_POST['instagram'], FILTER_SANITIZE_STRING);
                    @ $Facebook = filter_var($_POST['Facebook'], FILTER_SANITIZE_STRING);
                    @ $snapchat = filter_var($_POST['snapchat'], FILTER_SANITIZE_STRING);
                    @ $wa = filter_var($_POST['wa'], FILTER_SANITIZE_STRING);
                 
   
       
                $sql = "UPDATE `settings` SET `instagram` = '$instagram'  , `facebook` = '$Facebook' ,  `snapchat` = '$snapchat' ,  `wa` = '$wa'  WHERE id = 1";
                if ($conn->query($sql) === TRUE) {
                    $MasgSt = '<span class="text-green-500 font-semibold"> تم التعديل بنجاح  </span>';
                }
                                
                            
                        }


                 ?>
                <div class="mt-8">
                    <div class="mt-4">
                        <div class="p-6 bg-white rounded-md shadow-md">
                            <h2 class="text-lg text-gray-700 font-semibold capitalize">تعديل حسابات السوشل ميديا</h2>
                            <?php if (isset($MasgSt)) {
                                echo ' <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                        <div class="flex justify-center items-center w-12 bg-blue-500">
                            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/></svg> </div>
                                <div class="-mx-3 py-2 px-4"><div class="mx-3"><span class="text-blue-500 font-semibold">Info</span><h3 class="text-gray-600 text-sm"> ' . $MasgSt . '</h3></div></div></div>';
                            } ?>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">

                         

                                    <div>
                                        <label class="text-gray-700" for="">Facebook</label>
                                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" value="<?=$row['facebook']?>" name="Facebook" type="txt">
                                    </div>

                                    <div>
                                        <label class="text-gray-700" for="">snapchat </label>
                                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600"  value="<?=$row['snapchat']?>"  name="snapchat" type="txt">
                                    </div>

                                    
                                    <div>
                                        <label class="text-gray-700" for="">instagram</label>
                                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600"  value="<?=$row['instagram']?>" name="instagram" type="txt">
                                    </div>

                                    <div>
                                        <label class="text-gray-700" for="">واتس اب</label>
                                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600"  value="<?=$row['wa']?>" name="wa" type="txt">
                                    </div>

                                </div>

                                <div class="flex justify-end mt-4">
                                    <input type="submit" value="save" class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700"> </input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               </div>
            </main>
        </div>
    </div>
</body>
</html>