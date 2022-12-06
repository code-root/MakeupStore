<?php
include 'header.php';
include 'nav.php'; ?>
    <div class="carousel relative container mx-auto" style="max-width:1600px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('1back.jpeg');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href=""><?php echo (cookie_value == "ar_AR")?'تسوق الان':'Shop now'; ?></a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('2back.jpeg');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#"><?php echo (cookie_value == "ar_AR")?'تسوق الان':'Shop now'; ?></a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('3back.jpeg');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#soq"><?php echo (cookie_value == "ar_AR")?'تسوق الان':'Shop now'; ?></a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>

        </div>
    </div>

    <!-- Alternatively if you want to just have a single hero
<section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">
	<div class="container mx-auto"><div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
			<h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
			<a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">products</a></div></div>
</section> -->


    <section class="bg-white py-8" id="soq">
   
    <div class="container mx-auto">
  <div class="flex flex-col sm:flex-row justify-between mx-4 md:mx-0 lg:-mx-2 flex-wrap">
   
  <?php $sql = "SELECT * FROM category";
                $result = $conn->query($sql);
                if ($result->num_rows == 0) { echo " 0 results " ; } else { while($row = $result->fetch_assoc()) { ?>
  <div class="rounded overflow-hidden shadow-lg flex-1 bg-white sm:mx-2 md:mx-1 lg:mx-2 w-full sm:w-1/3 lg:pt-0 border-b-4 border-blue-500 mb-10 flex flex-col">
      <img src="Upload/category/<?=$row['img']?>" alt="<?php echo (cookie_value == "ar_AR")?$row['name']:$row['name_en']; ?>" class="" />
      <div class="p-4 md:p-6 bg-white flex flex-col flex-1">
      <a href="category.php?lang=<?=cookie_value?>&code=<?=$row['id']?>&name=<?php echo (cookie_value == "ar_AR")?$row['name']:$row['name_en']; ?>">  <p class="text-blue-500 font-semibold text-xs mb-1 leading-none" style=" font-size: 30px; text-align: center;"><?php echo (cookie_value == "ar_AR")?$row['name']:$row['name_en']; ?></p> </a> 
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
//                window.location.href = "ticket.php?lang=<?=cookie_value?>?orderId="+id; 
//             } else { $(".re").html(data.msg); }
//            } 
//        });
//      });
//  });
 
 </script>

</body>

</html>