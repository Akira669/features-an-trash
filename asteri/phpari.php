<?php 
		require_once('vendor/autoload.php');
/*
		echo "conectando...\n";

		$ariConnector = new phpari('hello world');
		try{
			$connect = $ariConnector->channels()->channel_list();
			print_r($connect);
			echo "\n...No paso nada...\n";
		} catch (Exception $e){
			echo "Error: ". $e->getMessage();
		}
*/
	try{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://192.168.20.250:444/admin");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$header = array (
			'Token: a8c65fc29fd6f0921b9e12a359febd1108f69fee'
		);

		$header2 = array(
			'Token: 69358ca8841936bbcc67c13b0f5514ce5be068a9'
		);

		curl_setopt($ch,CURLOPT_HTTPHEADER, $header);
		$outpu = curl_exec($ch);
		curl_close($ch);

		echo $outpu;
	} catch (Exception $e){
		echo "Error: ".$e->getMessage();
	}
?>