<?php
//sender
$from = 'johnikems10thousand@gmail.com';
echo '<script>alert'.$from.'</script>';
$fromName = 'Precision Slim:';

//attachment file path
// $file = $messageImg;
$dir = "uploadImageDir/";
if(!empty($_FILES)){
  	$imgExtenstion= explode('.', preg_replace('/\s+/', '_', $_FILES["file"]["name"]));
	$imgName= $imgExtenstion[0].'_'.time().'.'.$imgExtenstion[1];
	if(move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$imgName))
		$messageImg= "https://www.precisionslim.com/wp-content/themes/precisionslim/uploadImageDir/".$imgName;
  	else
		$messageImg= null;
}
else{
	$messageImg= null;
}

//recipient
    $to= 'johnikems10thousand@gmail.com';
    $subject= 'Appionment Booked';
	$allData= json_decode($_POST['myData'], true);
    $message = '<html><body><h2 style="color: #000; text-transform: capitalize;">'.$allData[4]['ans'][0].' has Taken the Quick Quiz on "Precision Sim"</h2>';
        foreach($allData as $key=> $myD){
            if($key == 4){
                $message= $message.'<h4 style="color: #eb6834; margin: 30px 0 10px;">Question #'.($key+1).': '.$myD['que'].'</h4> <div style="display: flex; color: #000;"> <p width="10%" style="margin: 0; color: #000;">Answer: </p> <div width="85%" style="margin-left: 10px; color: #000;">';
                $message= $message.'<p style="margin: 0;">Name: '.$myD['ans'][0].'</p>';
                $message= $message.'<p style="margin: 0;">Email: '.$myD['ans'][1].'</p>';
                $message= $message.'<p style="margin: 0;">Phone: '.$myD['ans'][2].'</p>';
              	$message= $message.'</div></div>';
            }
            else if($key == 0 || $key == 1){
                $message= $message.'<h4 style="color: #eb6834; margin: 30px 0 10px;">Question #'.($key+1).': '.$myD['que'].'</h4><div style="display: flex; color: #000;"> <p width="10%" style="margin: 0; color: #000;">Answer: </p> <div width="85%" style="margin-left: 10px;  color: #000;"> <p style="margin: 0; text-transform: capitalize">'.$myD['ans'].'</p> </div> </div>';
            }
            else if($key == 5){
                $message= $message.'<h4 style="color: #eb6834; margin: 30px 0 10px;">Question #'.($key+1).': '.$myD['que'].'</h4> <div style="display: flex; color: #000;"> <p width="10%" style="margin: 0; color: #000;">Answer: </p> <div width="85%" style="margin-left: 10px;  color: #000;">';
                if((count($myD['ans'])) > 1){
                    if($myD['ans'][0] == 'Contact Me'){
                        foreach($myD['ans'] as $k=> $v){
                            if($k == 0){
                                $message= $message.'<p style="margin: 0; color: #000;">1) Want to '.$v.'</p>';
                            }
                            else if($k == 1){
                                $message= $message.'<p style="margin: 0; color: #000;">2) '.$v[0].' : '.$v[1].' '.$v[2].'</p>';
                            }
                            else if($k == 2){
                                $days= '';
                                foreach($v as $i=> $val){
                                    if((count($v)-1) != $i)
                                    	$days= $days.' '.$val.',';
                                    else
                                    	$days= $days.' '.$val;
                                }
                                $message= $message.'<p style="margin: 0; color: #000;">3) Available Days:'.$days.'</p>';
                            }
                        }
                    }
                    else if($myD['ans'][0] == 'Video Conference'){
                        foreach($myD['ans'] as $k=> $v){
                            if($k == 0){
                                $message= $message.'<p style="margin: 0; color: #000;">1) Want to '.$v.'</p>';
                            }
                            else if($k == 1){
                                $message= $message.'<p style="margin: 0; color: #000;">2) '.$v.' : '.$myD['ans'][2].'</p>';
                            }
                            else if($k == 3){
                                $message= $message.'<pstyle="margin: 0; color: #000;">3) Time: '.$v[0].' : '.$v[1].' '.$v[2].'</p>';
                            }
                            else if($k == 4){
                                $days= '';
                                foreach($v as $i=> $val){
                                    if((count($v)-1) != $i)
                                    $days= $days.' '.$val.',';
                                    else
                                    $days= $days.' '.$val;
                                }
                                $message= $message.'<p style="margin: 0; color: #000;">4) Available Days:'.$days.'</p>';
                            }
                            
                        }
                    }
                }
                else{
                    $message= $message.'<p style="margin: 0; color: #000;">Want to '.$myD['ans'][0].'</p>';
                }
              	$message= $message."</div></div>";
                // $message= $message.'<p style="margin: 0; color: #000;">Want to '.(count($myD['ans']) > 1).'</p>';
            }
            else{
                $message= $message.'<h4 style="color: #eb6834; margin: 30px 0 10px;">Question #'.($key+1).': '.$myD['que'].'</h4> <div style="display: flex; color: #000;"> <p width="10%" style="margin: 0; color: #000;">Answer: </p> <div width="85%" style="margin-left: 10px;  color: #000;">';
                foreach($myD['ans'] as $k=> $v){
                    $message= $message.'<p style="margin: 0; color: #000;">'.($k+1).') '.$v.'</p>';
                }
              $message= $message."</div></div>";
            }
        }
	if($messageImg!= null)
    	$message= $message."<br> <a href='".$messageImg."'> <img src='".$messageImg."' height='auto' width='100px' /> </a> </body><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0310'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0310'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0310'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0310'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>";
	else
		$message= $message."</body><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0310'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0310'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0310'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script><script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0310'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>";

//email body content
$htmlContent = $message;

//attachment file path
$file = $messageImg;

//header for sender info
$headers = "From: $fromName"." <".$from.">";

//boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//multipart boundary 
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparing attachment
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

// echo $message;

//send email
$mail = @mail($to, $subject, $message, $headers, $returnpath); 

//email sending status
echo $mail?json_encode('mail sent'):"<h1>Mail sent failed.</h1>";