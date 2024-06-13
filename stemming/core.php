<?php 
	
	function cek_katadasar($word){
		$kata = file("katadasar.txt");
		foreach($kata as $item){
			if(trim($item)==$word){
				return true;
				break;
			}
		}
		return false;
	}
	
	function stem($kata){
		//plural menjadi singular 
		$plural = explode("-",$kata);
		$word = $plural[0];
		
		if(cek_katadasar($kata)==false){
			$prefixes = file("prefix.txt");
			//membuang prefix 
			$after_prefix = "";
			foreach($prefixes as $item){
				if(substr($word,0,explode("|",$item)[1])==explode("|",$item)[0]){
					if(explode("|",$item)[2]==""){
						$after_prefix = substr($word,explode("|",$item)[1],strlen($word));
					}
					else{
						$after_prefix = trim(explode("|",$item)[2])."".substr($word,explode("|",$item)[1],strlen($word));
					}
					break;
				}else{
					$after_prefix = $word;
				}
			}
			//suffix 
			
			if(cek_katadasar($after_prefix)==true){
				return $after_prefix;
			}else{
				//kan 
				if(substr($after_prefix,strlen($after_prefix)-3,3)=="kan"){
					return substr($after_prefix,0,strlen($after_prefix)-3);
				}
				//an 
				if(substr($after_prefix,strlen($after_prefix)-2,2)=="an"){
					return substr($after_prefix,0,strlen($after_prefix)-2);
				}
				//nya 
				if(substr($after_prefix,strlen($after_prefix)-3,3)=="nya"){
					return substr($after_prefix,0,strlen($after_prefix)-3);
				}
				//mu
				if(substr($after_prefix,strlen($after_prefix)-2,2)=="mu"){
					return substr($after_prefix,0,strlen($after_prefix)-2);
				}
				//pun
				if(substr($after_prefix,strlen($after_prefix)-3,3)=="pun"){
					return substr($after_prefix,0,strlen($after_prefix)-3);
				}
				//i
				if(substr($after_prefix,strlen($after_prefix)-1,1)=="i"){
					return substr($after_prefix,0,strlen($after_prefix)-1);
				}
			}
		}else{return $kata;}
	}
	
	
?>