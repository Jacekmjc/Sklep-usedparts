<?php
session_start();
include_once("config.php");
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	foreach($_POST as $key => $value){ 
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
    }
	
	unset($new_product['type']);
	unset($new_product['return_url']); 
	
 
    $statement = $mysqli->prepare("SELECT rodzaj, kategoria, nazwa_produktu, cena FROM products WHERE kod_produktu=? LIMIT 1");
    $statement->bind_param('s', $new_product['kod_produktu']);
    $statement->execute();
    $statement->bind_result($rodzaj, $kategoria, $nazwa_produktu, $cena);
	
	while($statement->fetch()){
		
		$new_product["rodzaj"] = $rodzaj;
		$new_product["kategoria"] = $kategoria;
        $new_product["nazwa_produktu"] = $nazwa_produktu; 
        $new_product["product_cena"] = $cena;
        
        if(isset($_SESSION["produkt_koszyk"])){  
            if(isset($_SESSION["produkt_koszyk"][$new_product['kod_produktu']])) 
            {
                unset($_SESSION["produkt_koszyk"][$new_product['kod_produktu']]); 
            }           
        }
        $_SESSION["produkt_koszyk"][$new_product['kod_produktu']] = $new_product; 
    } 
}



if(isset($_POST["ilosc"]) || isset($_POST["usun_kod"]))
{
	
	if(isset($_POST["ilosc"]) && is_array($_POST["ilosc"])){
		foreach($_POST["ilosc"] as $key => $value){
			if(is_numeric($value)){
				$_SESSION["produkt_koszyk"][$key]["ilosc"] = $value;
			}
		}
	}
	
	if(isset($_POST["usun_kod"]) && is_array($_POST["usun_kod"])){
		foreach($_POST["usun_kod"] as $key){
			unset($_SESSION["produkt_koszyk"][$key]);
		}	
	}
}


$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; 
header('Location:'.$return_url);

?>
