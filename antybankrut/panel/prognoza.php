
<link  rel="stylesheet" href="templates/blu/style.css" />

<?php
    include("db_connect.php");
    include("subheader.php");

    

    $smarty->display($ust['templates'].'/subheader.tpl');
    $smarty->display($ust['templates'].'/top.tpl');?>
<style type="text/css">
.wyniki{
    width: 65%;
	margin: 5px auto;
    border: 3px solid green;
    padding: 10px;
	text-align:center;
	float:right;
}
.wskazniki{
	width: 30%;
	padding: 10px;
	float:left;
}
.wskazniki p{
	font-size:16px;
}
.wyniki p{
	font-size:18px;
}
.wyniki h3{
	font-size:18px;
}
#odpowiedz{
	background-color:#FFFF33;
	padding:2% 0 2%;
}
#odpowiedz h2{
	font-size:24px;
}
#odpowiedz p{
	font-size:24px;
}
@media all and (max-width : 768px) {
	.wyniki{
	width:70%;
	margin:0 35px auto;
	}

}
@media all and (max-width : 768px) {
	.wyniki{
	width:70%;
	margin:0 35px auto;
	}
}
</style>
<?php
phpinfo();
if($_SESSION['user_nick']=="")
{ 
   $nick=$_POST['nick'];
}
else
{
  $nick=$_SESSION['user_nick'];
}
     
    $UZAO =($_GET['ZAP']/$_GET['AO'])*100;
    $UKOM =($_GET['KW']+$_GET['ZD']-$_GET['AT'])/$_GET['AO'];
    $NKON =($_GET['ZAP']+$_GET['NKT'])/2-($_GET['KW']+$_GET['ZD']-$_GET['AT']);
        //zm pomocnicza srednia
        $SRA=($_GET['AO_1']+$_GET['AO'])/2;
        
    $PRMA =($_GET['PN']/$SRA)*100;
    $WFIB =$_GET['WFB']/1000;
    $SZSP=($_GET['PN']-$_GET['PN_1'])/$_GET['PN_1'];
    $SZZA=($_GET['ZO']-$_GET['ZO_1'])/$_GET['ZO_1']; 

$AO_1 =$_GET['AO_1'];
$AO =$_GET['AO'];
$AT =$_GET['AT'];
$ZAP =$_GET['ZAP'];
$NKT=$_GET['NKT'];
$KW=$_GET['KW'];
$ZD=$_GET['ZD'];
$PN_1=$_GET['PN_1'];
$ZO_1=$_GET['ZO_1']; 
$ZO=$_GET['ZO']; 
$WFB=$_GET['WFB']; 




        
$wartosci_zmiennych_uzyszkodnika = array
										(
											"UZAO" => $UZAO,
											"UKOM" => $UKOM,
											"NKON" => $NKON,
											"PRMA" => $PRMA,
											"WFIB" => $WFIB,
											"SZSP" => $SZSP,
											"SZZA" => $SZZA,
										);
// **************** zapis danych do bazy *****************************

//if($_SESSION['logadm']=="adm")
//{
//$up="INSERT INTO `".$pre."dane` `//dane_data`=NOW(),`dane_AO1`='".htmlspecialchars($UZAO)."'";

$up="
INSERT INTO `ban_dane` (`dane_data`, `dane_user`, `AO_1`, `AO`, `AT`, `ZAP`, `NKT`, `KW`, `ZD`, `PN_1`, `PN`, `ZO_1`, `ZO`, `WFB`, `UZAO`, `UKOM`, `NKON`, `PRMA`, `WFIB`, `SZSP`, `SZZA`, `DANE_PR`) VALUES (NOW(), '$nick', '$AO_1', '$AO', '$AT', '$ZAP', '$NKT', '$KW', '$ZD', '$PN_1', '$PN', '$ZO_1', '$ZO', '$WFB', '$UZAO', '$UKOM', '$NKON', '$PRMA', '$WFIB', '$SZSP', '$SZZA', '$DANE_PR')";

db_query($up);

//}
// ****************   koniec  zapisu danych do bazy *****************************

//*******************odczyt ustawień z bazy ****************************

$Query='SELECT * FROM `ban_ustawienia`';
$result = db_query($Query) or die(db_error());
while ($row = db_fetch($result)) 
{
    $wag1=$row['ust_wag1'];
    $wag2=$row['ust_wag2'];
    $wag3=$row['ust_wag3'];    
    $wag4=$row['ust_wag4'];
    $wag5=$row['ust_wag5'];
    $granica=$row['ust_granica'];
}


//*******************odczyt ustawień z bazy ****************************



echo '<div class="wskazniki"><pre>';
// ************** wyswietlenie wartosci wskaznikow *************
    echo '<h1> WYNIKI PROGNOZ:</h1>';  
echo '<h3> OBLICZONE WSKAŹNIKI:</h3>';    
        echo '<p><b> UZAO</b>='.$UZAO;
        echo '<br><b> UKOM</b>='.$UKOM;
        echo '<br><b> NKON</b>='.$NKON;
        echo '<br><b> PRMA</b>='.$PRMA;
        echo '<br><b> WFIB</b>='.$WFIB;
        echo '<br><b> SZSP</b>='.$SZSP;
        echo '<br><b> SZZA</b>='.$SZZA;


echo '<h3> ZASTOSOWANE USTAWIENIA:</h3>';
        echo'<p><b> Waga dla modelu LIN</b> = '.$wag1;
        echo'<br><b> Waga dla modelu MLP3</b> = '.$wag2;
        echo'<br><b> Waga dla modelu MLP4</b> = '.$wag3;
        echo'<br><b> Waga dla modelu RBF</b> = '.$wag4;
        echo'<br><b> Waga dla modelu BBN</b> = '.$wag5;
      echo'<br><b> Wartość granicy</b> = '.$granica;
	  		'</p>';
echo '</pre></div>';
  


//ponieważ wartości parametrów należy podac po pliku wykonywalnym odzielone spacją musimy zmienić tablicę na ciąg znaków oddzielony znakiem spacji;

$parametry = implode(' ', $wartosci_zmiennych_uzyszkodnika);




//tak wygląda wywolanie skompilowanego programu z parametrami:

 $polecenie = 'upload/kodl.out '.$parametry;

echo '<br />';

    
 $polecenie1 = 'upload/kodm3.out '.$parametry;

echo '<br />';
    
     $polecenie2 = 'upload/kodm4.out '.$parametry;


     $polecenie3 = 'upload/kod_rbf.out '.$parametry;

echo '<br />';


// uruchomimy sobie buforowanie wyników do przechwycenia całego wyniku działania polecenia
ob_start();

system( $polecenie );

$wynik = ob_get_contents();
    ob_end_clean();
  
    ob_start();    
system( $polecenie1 );
$wynik1 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
system( $polecenie2 );

$wynik2 = ob_get_contents();
    ob_end_clean();
    
        ob_start();
system( $polecenie3 );

$wynik3 = ob_get_contents();
    

//zwolnienie bufora


ob_end_clean();

//*******************dodanie prognozy bbn ***************

 include("../upload/bbn.php");
//**************************wyswietlanie koncowego wyniku systemu**********





$wynik5=(($wynik-1)*$wag1+($wynik1-1)*$wag2+($wynik2-1)*$wag3+($wynik3-1)*$wag4+($wynik4-1)*$wag5);
//echo 'wartość wyniku końcowego= '.$wynik5;

//**************************koniec wyswietlania koncowego wyniku systemu**********

//***************** WYSWIETLANIE WYNIKÓW ********

echo '<div class="wyniki"><h3>Wynik prognozy LIN: </h3>';
if ($wynik==1){echo '<p><strong> <font color="red">BANKRUT</font>  </strong> </p>';}
if ($wynik==2){echo '<p><strong> <font color="green">NIE-BANKRUT </font>  </strong> </p>';}
    
        echo '<h3>Wynik prognozy MLP3: </h3>';
if ($wynik1==1){echo '<p><strong> <font color="red">BANKRUT</font>  </strong> </p>';}
if ($wynik1==2){echo '<p><strong> <font color="green">NIE-BANKRUT </font>  </strong> </p>';}

        echo '<h3>Wynik prognozy MLP4: </h3>';
if ($wynik2==1){echo '<p><strong> <font color="red">BANKRUT</font>  </strong> </p>';}
if ($wynik2==2){echo '<p><strong> <font color="green">NIE-BANKRUT </font>  </strong> </p>';}
    
 
        echo '<h3>Wynik prognozy RBF: </h3>';
if ($wynik3==1){echo '<p><strong> <font color="red">BANKRUT</font>  </strong> </p>';}
if ($wynik3==2){echo '<p><strong> <font color="green">NIE-BANKRUT </font>  </strong> </p>';}
 echo '<h3>Wynik prognozy BBN: </h3>';
if ($wynik4==0){echo '<p><strong> <font color="black">BRAK Prognozy </font>  </strong> </p>';}
if ($wynik4==1){echo '<p><strong> <font color="red">BANKRUT</font>  </strong> </p>';}
if ($wynik4==2){echo '<p><strong> <font color="green">NIE-BANKRUT </font>  </strong> </p>';}

        echo '<div id="odpowiedz"><h2>Końcowa odpowiedź systemu to: </h2>';
if ($wynik5<$granica){echo '<p><strong> <font color="red">BANKRUT</font>  </strong> </p>';}
if ($wynik5>=$granica){echo '<p><strong> <font color="green">NIE-BANKRUT </font>  </strong> </p>';}
echo '</div>';

echo '</div>';
// wynik4 BBN

    $smarty->display($ust['templates'].'/footer.tpl');
?>
     </body>

    </html>