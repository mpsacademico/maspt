<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$trs = array("json","xml");
$cl = isset($_GET['cl']) ? $_GET['cl'] : NULL; //código localidade
$tr = isset($_GET['tr']) ? $_GET['tr'] : NULL; //tipo retorno
$ca = isset($_GET['ca']) ? $_GET['ca'] : NULL; //chave de acesso

if(is_null($tr) || empty($tr)){
	$tr = "json";
}else{
	$tr = strtolower($tr);
	if(!in_array($tr, $trs)){
		echo "de";
		die;
	}
}

if(!is_null($cl)){
$dados = file_get_contents("http://servicos.cptec.inpe.br/apptempo/".$cl);
	if(!is_null($tr)){	
		if(strcmp($tr,"xml")==0){
			header("Content-type: text/xml");
			echo $dados;
		}elseif(strcmp($tr,"json")==0){
			header("Content-type: application/json");
			$xml = simplexml_load_string($dados);
			$json = json_encode($xml);
			echo $json;
		}
	}else{

	}
}


else{
	echo "Nenhuma localidade informada!";
}

?>
