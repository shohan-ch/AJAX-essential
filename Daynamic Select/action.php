<?php
 $name = $_POST['value'];
 $dhk = array("Dhaka","Gazipur","Uttara","Tongi");
 $syl =array("Sylhet","Habiganj","Moulibazar","Shunamganj");
 $kul =array("Netrokuna","Kishuganj","Feni","Damail");
 $chit = array("Agarabad","Notun Bridge","Bangshal","Rajlokki");
 sort($syl);
 sort($dhk);
 sort($kul);
 sort($chit);


 if($name =="dhaka"){
     foreach($dhk as $dh){
         echo"<option>$dh</option>";
     }
 }

 elseif($name =="sylhet"){
     foreach($syl as $sy){
         echo"<option>$sy</option>";

     }

 }
 elseif($name == "kulna"){
    foreach($kul as $ku){
        echo"<option>$ku</option>";

    }

}
elseif($name == "chittagong"){
    foreach($chit as $chi){
        echo"<option>$chi</option>";

    }

}






?>