<?php  include 'layout/nav.php'; ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">

                            <h3 class="text-gray-700 text-3xl font-semibold">Edit Products</h3>
    
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
          
        if (isset($_GET['id']) ) {

            $id_Products = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

            $sql = "SELECT * FROM products where id = '$id_Products' ";
            $result = $conn->query($sql);

            if ($result->num_rows == 0) {

                echo ' <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                <div class="flex justify-center items-center w-12 bg-blue-500">
                    <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
                    </svg>
                </div>
            
                <div class="-mx-3 py-2 px-4">
                    <div class="mx-3">
                        <span class="text-blue-500 font-semibold">Info</span>
                        <p class="text-gray-600 text-sm"> This product is not available !</p>
                    </div>
                </div>
            </div>';
                exit;
            } 

            $row = $result->fetch_assoc();

          }

      } else {

        // echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=AddProducts.php">';
        // exit;

      }
              if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		      if (!isset($_POST['name']) == ''  & !isset($_POST['Details']) == '' && !isset($_POST['price']) == '' ) {
		   
		       $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
		       $id_Products = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
		       $Details = filter_var($_POST['Details'], FILTER_SANITIZE_STRING);
		       $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
               
               $img_up = 0;
               
               if( !$_FILES['fileToUpload']['name'] == '') {
               
                $img_up = 1;

		           $filename = $_FILES['fileToUpload']['name'];
		           $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
		           $new_file_name = strtotime(date('Y-m-d')) .  'IMG'  . rand(1,100) . $ext;
		           $path= "../../Upload/product/". $new_file_name;
		           $uploadOk = 1;
		           $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
		         // Check if file already exists
		         if (file_exists($filename)) {
		             $MasgSt = "Sorry, file already exists.";
		             $uploadOk = 0;
		         }
		         // Check file size
		         if ($_FILES["fileToUpload"]["size"] > 5000000) {
		             $MasgSt = "Sorry, your file is too large.";
		             $uploadOk = 0;
		         }
		         // Allow certain file formats
		         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		           $MasgSt = "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
		             $uploadOk = 0;
		         //   exit;
		         }
		         // Check if $uploadOk is set to 0 by an error
		         if ($uploadOk == 0) {
		           $MasgSt = "Sorry, there was an error uploading your file Img .";
                   // if everything is ok, try to upload file
		         } else {
                    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $path);              
		       }
            }

            if ($img_up == 0 ) {

        $sql = "UPDATE products SET name = '$name' , price = '$price' , Details = '$Details'   WHERE id='$id_Products' ";
                
            }else {

        $sql = "UPDATE products SET  name = '$name' , price = '$price' ,img ='$new_file_name'  , Details = '$Details'  WHERE id='$id_Products'";

            }

            if ($conn->query($sql) === TRUE) {

                $MasgSt = '<span class="text-green-500 font-semibold"> تم تعديل المنتج بنجاح </span>';
            } else {
                $MasgSt = 'حدث خطأ';

            }

        }else {
    $MasgSt = " 2 يرجى ملئ كافة المدخلات  ";               
	}
}  
?>
    <div class="mt-8">
        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-lg text-gray-700 font-semibold capitalize"> Edit Products </h2>
                
               <?php  if (isset($MasgSt)) {
                            echo '
                <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                <div class="flex justify-center items-center w-12 bg-blue-500">
                    <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
                    </svg>
                </div>
                        <div class="-mx-3 py-2 px-4">
                            <div class="mx-3">
                                <span class="text-blue-500 font-semibold">Info</span>
                                <h3 class="text-gray-600 text-sm"> ' .$MasgSt . '</h3>
                                 </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <a href="order.php" class="px-6 py-3 bg-green-600 rounded-md text-white font-medium tracking-wide hover:bg-green-500 ml-3" > الرجوع لكافة المنتجات  </a>
                            ';
                            
                            exit;
                            }?>

                <form action="" method="POST" enctype="multipart/form-data" >

               <a href="../../Upload/product/<?=$row['img']?>" target="_blank" >  <img src="../../Upload/product/<?=$row['img']?>" height="160" width="160"> </a>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">

                        <div>
                            <label class="text-gray-700" for="username">name Products</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" value="<?=$row['name']?>" name="name" type="text">
                            <input  value="<?=$row['id']?>"  hidden name="id" type="text">
                        </div>

                        <div>
                            <label class="text-gray-700" for="emailAddress">Details </label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600"  value="<?=$row['Details']?>" name="Details" type="text">
                        </div>

                        <div>
                            <label class="text-gray-700" for="password">Img</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600"  type="file" name="fileToUpload" accept="image/png, image/jpeg">
                        </div>

                        <div>
                            <label class="text-gray-700" for="passwordConfirmation">Price</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600"  value="<?=$row['price']?>" name="price" type="number">
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
                        <input type="submit" value="add" class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700"> </input>
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