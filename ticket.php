<?php 
 session_start();
include 'header.php';
function exit_code ($message) {

    echo '<META HTTP-EQUIV="refresh" CONTENT="3;URL= ' .  'dashboard/">';
   echo json_encode(['code'=>100, 'msg'=>$message]);
   
}
    $isUserLoggedIn = isset($_SESSION['username']  ) ? true : false;
    $customerId = $isUserLoggedIn && is_numeric($_SESSION['customerId']) ? intval($_SESSION['customerId']) : 0;

    $exit_code = 0;

        if (!$isUserLoggedIn) {    
            $message= '<h4 class="block text-sm text-left text-red-600 bg-red-200 border border-red-400 h-12 flex items-center p-4 rounded-sm">
            لم تقم بتسجيل الدخول سجل الدخول  
              <a href="dashboard/">   من هنا   </a>
             وعاود المحاولة  
            </h4> ' ;
            echo exit_code ($message);
            $exit_code = 1;
        }


        if (!$_SERVER['REQUEST_METHOD'] == 'GET') { 
            $message= 'error GET Does not exist orderId' ;
            echo exit_code ($message);
            $exit_code = 1;
    }else {

        if(!$_GET['orderId']) {
          $message= 'error Url Does not exist orderId' ;
            echo exit_code ($message);
            $exit_code = 1;
        }
}

            if ($_GET['orderId'] == '' ) {

                $message="This Id does not exist";
                echo exit_code ($message);
                $exit_code = 1;
         
            };

            $servername = "localhost:3308";
            $username = "root";
            $password = "";
            $dbname = "shop"; 
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $conn->set_charset('utf8');


                $idOrder = filter_var($_GET['orderId'], FILTER_VALIDATE_INT); 

                $sql = "SELECT id , id_products , id_user , date  FROM orders where id = '$idOrder' ";
                $result = $conn->query($sql);
                if ($result->num_rows  == 0) {

                    $message="This Id does not exist <2>";
                    echo exit_code ($message);
                    $exit_code = 1;
                }
         
                if ($exit_code == 0 ) {

                    $row = $result->fetch_assoc();

                    $id_products = $row['id_products'];
                    $id_user = $row['id_user'];

                    $sql_pro = "SELECT name  FROM products where id = '$id_products' ";
                    $result_pro = $conn->query($sql_pro);
                    $rowName_pro = $result_pro->fetch_assoc();
                    $name_pro = $rowName_pro['name'];

                    $sql_user = "SELECT Full_name , username   FROM users where id = '$id_user' ";
                    $result_user = $conn->query($sql_user);
                    $User_Re = $result_user->fetch_assoc();
                    $Full_Nmae = $User_Re['Full_name'];
                    $username = $User_Re['username'];

                    include 'nav.php';

?>

<section class="bg-white mt-20" dir="rtl">
            <div class="max-w-2xl px-6 text-center mx-auto">
            <span class="bg-indigo-600 text-white rounded px-1">  Id Order #<?=$idOrder?>   </span>
                <h2 class="text-3xl font-semibold text-gray-800">مرحبا بك  <span class="bg-indigo-600 text-white rounded px-1"> <?=$Full_Nmae?> </span> ( <?=$username?>)</h2>
                <p class="text-gray-600 mt-4">
                تهانيئا لقد قمت شراء "<?=$name_pro?>" بنجاح إذهب لصفحة القيادة لرؤية جميع المشتريات 
            </p>
        تاريخ الشراء  <?=$row['date']?>
        <a href="index.php" > إضغط هنا للرجوع للصفحة الرئيسية  </a>
                <div class="flex items-end justify-center mt-16">
                   <img src="https://i.pinimg.com/originals/0d/e4/1a/0de41a3c5953fba1755ebd416ec109dd.gif">
                </div>
            </div>
        </section>
    <?php include 'footer.php';
 

    } 
   
   ?>

    