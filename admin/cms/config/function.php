<?php
error_reporting(0);
if($_SERVER['HTTP_HOST']=="localhost"){
$domain = "http://localhost/dms/admin/cms"; ////// Root of Domain
$baseurl = "http://localhost/dms/admin/cms/modules"; ////// Member Panel URL
$adminurl = "http://localhost/dms/admin/cms"; ////// Admin Panel URL
$fronturl = "http://localhost/dms"; ////// Admin Panel URL
$companyurl="http://localhost/dms/company";
}
else{
	$domain = "http://techorion.in/dms2/admin/cms"; ////// Root of Domain
$baseurl = "http://techorion.in/dms2/admin/cms/modules"; ////// Member Panel URL
$adminurl = "http://techorion.in/dms2/admin/cms"; ////// Admin Panel URL
$fronturl = "http://techorion.in/dms2"; ////// Admin Panel URL
$companyurl="http://techorion.in/dms2/company";
	
}
date_default_timezone_set("Asia/Kolkatta");
$tm = time();


//error_reporting(off);
	if($_SERVER['HTTP_HOST']=="localhost"){
		$dbname = "drivermanagementsystem";
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		
		
	}else{
$dbname = "i3510527_wp2";
$dbhost = "localhost";
$dbuser = "i3510527_wp2";
$dbpass = "}~WeBlon4O%d";

	}



function connectdb()
{
    global $dbname, $dbuser, $dbhost, $dbpass;
    $conms = @mysql_connect($dbhost,$dbuser,$dbpass); //connect mysql
    if(!$conms) return false;
    $condb = @mysql_select_db($dbname);
    if(!$condb) return false;
    return true;
}

function attempt($username, $password)
{
$mdpass = md5($password);
$data = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE email='".$username."' and password='".$mdpass."'"));

	if ($data[0] == 1) {
		# set session
		$_SESSION['username'] = $username;
		return true;
	} else {
		return false;
	}
}



function attemptadmin($username, $password)
{
$mdpass = md5($password);
$data = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM admin WHERE username='".$username."' and password='".$mdpass."'"));

	if ($data[0] == 1) {
		# set session
		$_SESSION['username'] = $username;
		return true;
	} else {
		return false;
	}
}



function you_valid($usssr)
{

$aa = mysql_fetch_array(mysql_query("SELECT verstat FROM users WHERE mid='".$usssr."'"));

	if ($aa[0]==0){
		return true;
	}
}




function is_user()
{
	if (isset($_SESSION['username']))
		return true;
}

function redirect($url)
{
	header('Location: ' .$url);
	exit;
}




/////////////-------------PRINT


function printBV($mid)
{

$cbv = mysql_fetch_array(mysql_query("SELECT lbv, rbv FROM member_bv WHERE mid='".$mid."'"));
$rid = mysql_fetch_array(mysql_query("SELECT refid FROM users WHERE mid='".$mid."'"));
$rnm = mysql_fetch_array(mysql_query("SELECT username FROM users WHERE mid='".$rid[0]."'"));

echo "<b>Referred By:</b> $rnm[0] <br>";
echo "<b>Current BV:</b> L-$cbv[0] | R-$cbv[1] <br>";
}


function printBelowMember($mid)
{
$bmbr = mysql_fetch_array(mysql_query("SELECT lpaid, rpaid, lfree, rfree FROM member_below WHERE mid='".$mid."'"));
echo "<b>Paid Member Below:</b> L-$bmbr[0] | R-$bmbr[1] <br>";
echo "<b>Free Member Below:</b> L-$bmbr[2] | R-$bmbr[3] <br>";
}


/////////////-------------PRINT














/////////////////////////// UPDATE BV




    function updateDepositBV($mid='', $deposit_amount=0)
    {
   

   $formid=$mid;
      
      
  while($mid!=""||$mid!="0")
        {
            if(isMemberExists($mid))
            {
                $posid=getParentId($mid);
                if($posid=="0")
                break;
                
                $position=getPositionParent($mid);   

$currentBV = mysql_fetch_array(mysql_query("SELECT lbv, rbv FROM member_bv WHERE mid='".$posid."'"));
                   
//echo "$posid - $position ----<br/> ";
                        
                if($position=="L")
                {
                    $new_lbv=$currentBV[0]+$deposit_amount; 
                    $new_rbv=$currentBV[1]; 
                }
                else
                {
                    $new_lbv=$currentBV[0]; 
                    $new_rbv=$currentBV[1]+$deposit_amount;
                }   
                


mysql_query("UPDATE member_bv SET lbv='".$new_lbv."', rbv='".$new_rbv."' WHERE mid='".$posid."'");





                $mid =$posid;
                
            } else {
                break;
            }
                
        }//while       
        return 0;   
        
    }  









    function isMemberExists($mid='0')
    {
$count = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE mid='".$mid."'"));

        if ($count[0] == 1){
         return true;
     }else{
        return false;       
    }

    }  


    function getParentId($mid ="")
    {


$count = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE mid='".$mid."'"));
$posid = mysql_fetch_array(mysql_query("SELECT posid FROM users WHERE mid='".$mid."'"));




        if ($count[0] == 1){
         return $posid[0];
     }else{
        return 0;       
    }


        
    } 





    function getPositionParent($mid ="")
    {

$count = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE mid='".$mid."'"));
$position = mysql_fetch_array(mysql_query("SELECT position FROM users WHERE mid='".$mid."'"));




        if ($count[0] == 1){
         return $position[0];
     }else{
        return 0;       
    }

        
    }  



############################# LAST CHILD


    
    function getLastChildOfLR($parentUserName="",$position='')
    { 
        $parentid= mysql_fetch_array(mysql_query("SELECT mid FROM users WHERE username='".$parentUserName."'"));
        $childid= getTreeChildId($parentid[0], $position); 
        if($childid!="-1"){
           $mid=$childid;
                } else {
           $mid=$parentid[0];
                }
        $flag=0;
        while($mid!=""||$mid!="0")
        {
            if(isMemberExists($mid))
            {   
                $nextchildid= getTreeChildId($mid, $position);
                if($nextchildid=="-1")
                {
                    $flag=1;
                    break;
                } else {
                                    $mid = $nextchildid;
                                }
                 
            }//if
            
            else
                break;
                
        }//while
        return $mid;    
    }  


    function getTreeChildId($parentid="",$position="")
    {



$cou = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM users WHERE posid='".$parentid."' AND position='".$position."'"));
$cid = mysql_fetch_array(mysql_query("SELECT mid FROM users WHERE posid='".$parentid."' AND position='".$position."'"));


        if ($cou[0] == 1){
         return $cid[0];
     }else{
        return -1;       
    }
     
  }  



############################# LAST CHILD




///////////////////////// UPDATE BELOW MEMBER



    function updateMemberBelow($mid='', $type='')
    {
   

 $formid=$mid;
      
      
  while($mid!=""||$mid!="0")
        {
            if(isMemberExists($mid))
            {
                $posid=getParentId($mid);
                if($posid=="0")
                break;
                
                $position=getPositionParent($mid);   

$currentCount = mysql_fetch_array(mysql_query("SELECT lpaid, rpaid, lfree, rfree FROM member_below WHERE mid='".$posid."'"));


$new_lpaid = $currentCount[0];
$new_rpaid = $currentCount[1];
$new_lfree = $currentCount[2];
$new_rfree = $currentCount[3];

                        
                if($position=="L")
                {

                    if($type=='FREE'){
                            $new_lfree = $new_lfree+1;
                    }else{
                            $new_lpaid = $new_lpaid+1;
                    }

                }
                else
                {

                    if($type=='FREE'){
                            $new_rfree = $new_rfree+1;
                    }else{
                            $new_rpaid = $new_rpaid+1;
                    }
                }   
                


mysql_query("UPDATE member_below SET lpaid='".$new_lpaid."', rpaid='".$new_rpaid."', lfree='".$new_lfree."', rfree='".$new_rfree."' WHERE mid='".$posid."'");





                $mid =$posid;
                
            } else {
                break;
            }
                
        }//while       
        return 0;   
        
    }  







///////////////////////// TREE AUTH

    function treeeee($mid='', $uid='')
    {
   

 $formid=$mid;
      
      
  while($mid!=""||$mid!="0")
        {
            if(isMemberExists($mid))
            {
                $posid=getParentId($mid);
                if($posid=="0")
                break;
                
                $position=getPositionParent($mid);   


                if($posid==$uid){
                    return true;
                }




                $mid =$posid;
                
            } else {
                break;
            }
                
        }//while       
        return 0;   
        
    }  















    function updatePaid($mid)
    {
   

 $formid=$mid;
      
      
  while($mid!=""||$mid!="0")
        {
            if(isMemberExists($mid))
            {
                $posid=getParentId($mid);
                if($posid=="0")
                break;
                
                $position=getPositionParent($mid);   

$currentCount = mysql_fetch_array(mysql_query("SELECT lpaid, rpaid, lfree, rfree FROM member_below WHERE mid='".$posid."'"));


$new_lpaid = $currentCount[0];
$new_rpaid = $currentCount[1];
$new_lfree = $currentCount[2];
$new_rfree = $currentCount[3];

                        
                if($position=="L")
                {

                            $new_lfree = $new_lfree-1;
                            $new_lpaid = $new_lpaid+1;

                }
                else
                {

                            $new_rfree = $new_rfree-1;
                            $new_rpaid = $new_rpaid+1;
                }   
                


mysql_query("UPDATE member_below SET lpaid='".$new_lpaid."', rpaid='".$new_rpaid."', lfree='".$new_lfree."', rfree='".$new_rfree."' WHERE mid='".$posid."'");





                $mid =$posid;
                
            } else {
                break;
            }
                
        }//while       
        return 0;   
        
    }  















function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

function urlmod($txt){

	$string = strtolower($txt);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    $url = $string;


	return $url;
}

define('ENCRYPTION_KEY', 'd0a7e7997b6d5fcd55f4b5');
// Encrypt Function
function mc_encrypt($encrypt, $key){
    $encrypt = serialize($encrypt);
    $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
    $key = pack('H*', $key);
    $mac = hash_hmac('sha128', $encrypt, substr(bin2hex($key), -32));
    $passcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $encrypt.$mac, MCRYPT_MODE_CBC, $iv);
    $encoded = base64_encode($passcrypt).'|'.base64_encode($iv);
    return $encoded;
}
// Decrypt Function
function mc_decrypt($decrypt, $key){
    $decrypt = explode('|', $decrypt.'|');
    $decoded = base64_decode($decrypt[0]);
    $iv = base64_decode($decrypt[1]);
    if(strlen($iv)!==mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC)){ return false; }
    $key = pack('H*', $key);
    $decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $decoded, MCRYPT_MODE_CBC, $iv));
    $mac = substr($decrypted, -64);
    $decrypted = substr($decrypted, 0, -64);
    $calcmac = hash_hmac('sha256', $decrypted, substr(bin2hex($key), -32));
    if($calcmac!==$mac){ return false; }
    $decrypted = unserialize($decrypted);
    return $decrypted;
}

$data = 'Mohni';
 $encrypted_data = mc_encrypt($data, ENCRYPTION_KEY);

 $decrypt=mc_decrypt($encrypted_data, ENCRYPTION_KEY);

//seperate numeric from string
 $str="nov234desc";
 $numbers = preg_replace('/[^0-9]/', '', $str);
$letters = preg_replace('/[^a-zA-Z]/', '', $str);


$getLoggedIn=mysql_fetch_assoc(mysql_query("select * from admin where Admin_Id='".$_SESSION['Admin_Id']."'"));

$loginNm=$getLoggedIn['Name'];
$profilePic=$getLoggedIn['Admin_Pic'];

?>