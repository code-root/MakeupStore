<?php
include 'header.php';
include 'nav.php';

if (isset($_GET['code']) &&  isset($_GET['name'])  ) {
    $code = $_GET['code'] ; 
    $name = $_GET['name'] ; 
}else {

 echo '<meta http-equiv="refresh" content="0.5;url=index.php" />';
  exit;
}
?>





  
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#"><?php echo (cookie_value == "ar_AR")?'قسم ':'Category : '?> <?=$name?>  </a>
                        <div class="re"> </div>
                    <div class="flex items-center" id="store-nav-content">
                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                       <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"> <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" /> </svg></a>
                        <a class="pl-3 inline-block no-underline hover:text-black" href="#"><svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" /></svg></a>
                    </div></div>
            </nav>
        </div>


              <section class="bg-white py-8" id="soq">
   
              <div class="container mx-auto">
            <div class="flex flex-col sm:flex-row justify-between mx-4 md:mx-0 lg:-mx-2 flex-wrap">
             
            <?php
                            $sql = "SELECT * FROM products where categoryID = '$code'  ";
                           $result = $conn->query($sql);
                           if ($result->num_rows == 0) { 
                               echo '<meta http-equiv="refresh" content="5;url=../index.php" />';
                           } else { while($row = $result->fetch_assoc()) {
                                ?>
            <div class="rounded overflow-hidden shadow-lg flex-1 bg-white sm:mx-2 md:mx-1 lg:mx-2 w-full sm:w-1/3 lg:pt-0 border-b-4 border-blue-500 mb-10 flex flex-col">
                <img src="Upload/product/<?=$row['img']?>" alt="<?php echo (cookie_value == "ar_AR")?$row['name']:$row['name_en']; ?>" class="" />
                <div class="p-4 md:p-6 bg-white flex flex-col flex-1">
                <a href="<?=$row['url']?>">  <p class="text-blue-500 font-semibold text-xs mb-1 leading-none" style=" font-size: 30px; text-align: center; "><?php echo (cookie_value == "ar_AR")?$row['name']:$row['name_en']; ?></p> </a> 
                </div>
              </div>
              <?php } }?> 
            </div>
           </div>
             </section>

    <!-- <section class="bg-white py-8" id="ad">

        <div class="container py-8 px-6 mx-auto">

            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">من نحن 
		</a>

            <p class="mt-8 mb-8"> موقع Market for sale 
                <br>
            <p class="mb-8"> لبيع المستلزمات الشخصية .</p>

        </div>

    </section> -->

    <?php include 'footer.php'; ?>
    <script type="text/javascript">
//  $(document).ready(function() {
//      $('.buy').click(function(e){
//       var id = $(this).val();
//        e.preventDefault();
//        $.ajax({
//            type: "POST",
//            url: "buy.php",
//            dataType: "json",
//            data: { id_pro:id },
//           success : function(data){
//             if (data.code == "done"){
//              alert('تم شراء المنتج بنجاح جاري تحويلك .. ');
//                 var id = data.id;
//                window.location.href = "ticket.php?orderId="+id; 
//             } else { $(".re").html(data.msg); }
//            } 
//        });
//      });
//  });
 
 </script>

</body>

</html>