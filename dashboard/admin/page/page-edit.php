
<?php  include '../layout/nav.php'; ?>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">

                            <h3 class="text-gray-700 text-3xl font-semibold">Edit Products</h3>
    
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
          
        if (isset($_GET['id']) ) {

            $pageID = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

            $sql = "SELECT * FROM page where id = '$pageID' ";
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

		      if (!isset($_POST['name']) == ''  & !isset($_POST['mes']) == '' ) {
                $pageID = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
		       $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		       $name_en = filter_var($_POST['name_en'], FILTER_SANITIZE_STRING);
		       $mes = $_POST['mes'];
		       $txt_en = $_POST['txt_en '];
               $sql = "UPDATE page SET  name = '$name' , name_en = '$name_en' , txt = '$mes' , txt_en = '$txt_en' WHERE id='$pageID' ";
            if ($conn->query($sql) === TRUE) {

                $MasgSt = '<span class="text-green-500 font-semibold"> تم تعديل بنجاح </span>';
            } else {
                $MasgSt = 'حدث خطأ';

            }

        }
}  
?>
             <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

                    <!-- include summernote css/js -->
                    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <div class="mt-8">
        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-lg text-gray-700 font-semibold capitalize"> Edit Page </h2>
                
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
                            <a href="index.php" class="px-6 py-3 bg-green-600 rounded-md text-white font-medium tracking-wide hover:bg-green-500 ml-3" > الرجوع لكافة الصفحات  </a>
                            ';
                            
                            exit;
                            }?>

                <form action="" method="POST" enctype="multipart/form-data" >
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">

                        <div>
                            <label class="text-gray-700" for="username">name Page</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" value="<?=$row['name']?>" name="name" type="text">
                           
                        </div>

                        <div>
                            <label class="text-gray-700" for="username">name_en</label>
                            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" value="<?=$row['name_en']?>" name="name" type="text">
                           
                        </div>

                    
                    </div>
                    <div>
                            <label class="text-gray-900" for="">ar </label>
                            <textarea name="mes" class="summernote"><?=$row['txt']?></textarea>
                        </div>

                     
                        <div>
                            <label class="text-gray-900" for="">en</label>
                            <textarea name="txt_en" class="summernote"><?=$row['txt_en']?></textarea>
                        </div> 


                    <div class="flex justify-end mt-4">
                        <input type="submit" value="sve" class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700"> </input>
                    </div>
                </form>
            </div>
        </div>
    </div>
              </div>

              <script>
          $(document).ready(function() {
                 $('.summernote').summernote({
                    height: 200,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: true                 // set focus to editable area after initializing summernote
                });
});
</script>
                </main>
            </div>
        </div>
    </body>
</html>