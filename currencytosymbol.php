<?php
function c2s($curr){
	$currs=array("ALL","AFN","ARS","AWG","AUD","AZN","BSD","BBD","BYN","BZD","BMD","BOB","BAM","BWP","BGN","BRL","BND","KHR","CAD","KYD","CLP","CNY","COP","CRC","HRK","CUP","CZK","DKK","DOP","XCD","EGP","SVC","EUR","FKP","FJD","GHS","GIP","GTQ","GGP","GYD","HNL","HKD","HUF","ISK","INR","IDR","IRR","IMP","ILS","JMD","JPY","JEP","KZT","KPW","KRW","KGS","LAK","LBP","LRD","MKD","MYR","MUR","MXN","MNT","MZN","NAD","NPR","ANG","NZD","NIO","NGN","NOK","OMR","PKR","PAB","PYG","PEN","PHP","PLN","QAR","RON","RUB","SHP","SAR","RSD","SCR","SGD","SBD","SOS","ZAR","LKR","SEK","CHF","SRD","SYP","TWD","THB","TTD","TRY","TVD","UAH","GBP","USD","UYU","UZS","VEF","VND","YER","ZWD");
    $symbol=array("Lek","؋","$","ƒ","$","₼","$","$","Br","BZ$","$","$b","KM","P","лв","R$","$","៛","$","$","$","¥","$","₡","kn","₱","Kč","kr","RD$","$","£","$","€","£","$","¢","£","Q","£","$","L","$","Ft","kr","₹","Rp","﷼","£","₪","J$","¥","£","лв","₩","₩","лв","₭","£","$","ден","RM","₨","$","₮","MT","$","₨","ƒ","$","C$","₦","kr","﷼","₨","B/.","Gs","S/.","₱","zł","﷼","lei","₽","£","﷼","Дин.","₨","$","$","S","R","₨","kr","CHF","$","£","NT$","฿","TT$","₺","$","₴","£","$","$U","лв","Bs","₫","﷼","Z$");
		$curr_index= array_search($curr,$currs,true);
	return $symbol[$curr_index];
		}

?>
