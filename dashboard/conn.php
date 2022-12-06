<?php 

$db = 1 ;
function db ($db) {
        if ($db == 1) {
        
            $servername = "localhost:3308";
            $username = "root";
            $password = "";
            $dbname = "shop"; 
            
        } else {
            $servername = "localhost";
            $username = "meznxnzc_sofaapiuser";
            $password = 'sofa100200';
            $dbname = "meznxnzc_sofaapi";

        }
     @ $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            $eror_msg =  'Failed to connect to MySQL';
            $message =  'An unexpected error occurred .. Please contact the management of the Smart Agent  Development to fix the problem';
            $nu =  '+201001995914';
            echo json_encode(['error'=>$eror_msg,'msg'=>$message , 'number' => $nu ]);
            exit();
          }else{ 
            $conn->set_charset('utf8');
            return $conn; 
          }
  }
       
  define('IsConn', $db);
  $conn = db (IsConn);
  if (IsConn == 1) {
  $URL_IS = 'http://localhost/Makeup/';
  }else {
  $URL_IS = 'https://mezna-store.com/';
  }
  define('URL', $URL_IS);
  
  function url_ajax() {
    return URL . "controller/ajax/";
  }

  function url_ajaxD() {
    return URL . "dashboard/ajax/";
  }

  function dashboard() {
    return URL . "dashboard/admin/";
  }

  function admin() {
    return URL . "dashboard/";
  }
  
  
  function url_assets() {
    return URL . "assets/";
  }
  
$dashboard = dashboard();
$admin = admin();


function categoryGET($categoryID) {
  $conn = db (IsConn);
  if (isset($categoryID) != null ) {
    $categorySQL = "SELECT id , name  FROM category where id = $categoryID";
    $REcategory = $conn->query($categorySQL);
    if ($REcategory->num_rows > 0) {
      $row = $REcategory->fetch_assoc();
      return '<option value="'.$row['id'].'" selected >'.$row['name'].'</option> ';
    }else {
      return '<option value="" selected disabled  >إختر الفئة</option> ';
    }
  }

} 
            
  function chack_login () {

  @  $isUserLoggedIn = isset($_SESSION['username']  ) ? true : false;
  @   $customerId = $isUserLoggedIn && is_numeric($_SESSION['customerId']) ? intval($_SESSION['customerId']) : 0;
  @   $status = $_SESSION['status'];

        if (!$isUserLoggedIn) {    
            
            echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL= ' .  '../login.php">';
            exit;

        }


    if (isset($status)) {

        $url =  $_SERVER['REQUEST_URI'];
        $url =  substr($url,-15 , 5);
      
        if ($status == '2' ) {
           
            if ($url == '/user' or $url == 'dashb') {

                echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL= ' .  '../admin/index.php">';
                exit;
            }
        
        } 

           
        if ($status == '0') {
        
            if ($url == 'admin' ) {  

                echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL= ' .  '../user/index.php">';
                exit;
            }

            if (!$url == '/user' or !$url == 'dashb') { 

            echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL= ' .  '../user/index.php">';
            exit;

            }

        }  

        if ($status == '1') {
        
            echo 'حسابك معطل  مخالف للمحتوى ! ';
            exit;
        
        
        } 

    }else {

        $message= 'error !' ;
        echo json_encode(['code'=>200, 'msg'=>$message]);
        exit;
    }
  }



 $lang=isset($_GET['lang'])?$_GET['lang']:'';
if($lang == 'ar_AR'){
   
	$cookie_value = "ar_AR";
  $pageLanguage ='ar';
  $_SESSION['cookie_value'] = $cookie_value ;
  // setcookie("cookie_value", $cookie_value, time()+3600000);  /* expire in 1 hour */     


}else{
  $pageLanguage='en';
  $cookie_value='en_US';
  $_SESSION['cookie_value'] = $cookie_value ;
//  setcookie("cookie_value", $cookie_value, time()+3600000);  /* expire in 1 hour */     


}
define('cookie_value' ,$_SESSION['cookie_value'])  ;

   ?>