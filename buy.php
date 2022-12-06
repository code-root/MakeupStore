<?php 
     session_start();

    $isUserLoggedIn = isset($_SESSION['username']  ) ? true : false;
    $customerId = $isUserLoggedIn && is_numeric($_SESSION['customerId']) ? intval($_SESSION['customerId']) : 0;


        if (!$isUserLoggedIn) {    

    $message= '<h4 class="block text-sm text-left text-red-600 bg-red-200 border border-red-400 h-12 flex items-center p-4 rounded-sm">
      لم تقم بتسجيل الدخول سجل الدخول  
        <a href="dashboard/">   من هنا   </a>
       وعاود المحاولة  
      </h4> ' ;
    echo json_encode(['code'=>100, 'msg'=>$message]);
    exit;
        }

        include 'dashboard/conn.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    $id_pro = filter_var($_POST['id_pro'], FILTER_VALIDATE_INT);

    if ($id_pro == '' ) {

     $message="This Id does not exist";
     echo json_encode(['code'=>100, 'msg'=>$message]);
     exit;
    };

      $sql = "SELECT id FROM products where id = '$id_pro'";

                $result = $conn->query($sql);
                if ($result->num_rows == 0 ) { 

                    $message="This products does not exist";
                    echo json_encode(['code'=>100, 'msg'=>$message]);
                    exit;
                }else {

                    $sql = "INSERT INTO orders (id_products, id_user, date , Status)
                    
                        VALUES ('$id_pro', '$customerId', now() , 1 )";

                        if ($conn->query($sql) === TRUE) {
                            $last_id = $conn->insert_id;

                            echo json_encode(['code'=>'done', 'id'=>$last_id]);
                        }

                        $conn->close();
                }

        } else {
            $msg = 'You do not have permission to view the content';
            echo json_encode(['code'=>'You do not have powers', 'Message'=>$msg]);
            exit; 
        }
