<?php
include 'header.php';
include 'nav.php';

              
if (isset($_GET['id']) ) {
    $pageID = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT * FROM page where id = '$pageID' ";
    $result = $conn->query($sql);
  }
        ?>

  <!--Title-->
	<div class="text-center pt-16 md:pt-32">
   <?php  if ($result->num_rows == 0) {
		

echo '<p class="text-sm md:text-base text-green-500 font-bold">الرئيسية <span class="text-gray-900">/</span>     </p>
 <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
<div class="flex justify-center items-center w-12 bg-blue-500">
    <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
    </svg>
</div>

<div class="-mx-3 py-2 px-4">
    <div class="mx-3">
        <span class="text-blue-500 font-semibold">Info</span>
        <p class="text-gray-600 text-sm"> This Page is not available !</p>
    </div>
</div>
</div>';
include 'footer.php';
exit;
} 

$row = $result->fetch_assoc(); ?>
		<p class="text-sm md:text-base text-green-500 font-bold"><?php echo (cookie_value == "ar_AR")?'الرئيسية':'Home Page'; ?> <span class="text-gray-900">/</span><?=$row['name']?></p>
		<h1 class="font-bold break-normal text-3xl md:text-5xl"><?=$row['name']?></h1>
	</div>
</div>
    <section  class=" bg-white   pt-16 md:pt-32" id="soq" style="    padding-top: 10rem;">
        <hr>
    <div class="container max-w-9xl mx-auto -mt-32"> 
<div class="mx-0 sm:mx-6" ><?php echo (cookie_value == "ar_AR")?$row['txt']:$row['txt_en']; ?> </div>
  
    </div>    
    
 </section>
    <?php include 'footer.php'; ?>
</body>

</html>