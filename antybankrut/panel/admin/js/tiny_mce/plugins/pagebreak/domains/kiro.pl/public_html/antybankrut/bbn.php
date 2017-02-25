<?php



$wynik4=0;

// TUTAJ EDYTUJEMY REGUŁY****************************************************

//reguła1
if (
        $SZSP>=-0.439
&&      $SZSP<0.122
&&      $SZZA>=-0.092
&&      $SZZA<0.135
&&      $NKON>=-2.520
&&      $NKON<-0.744
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła2
if (
        $SZSP>=0.122
&&      $SZSP<0.683
&&      $SZZA>=-0.092
&&      $SZZA<0.135
&&      $NKON>=-2.520
&&      $NKON<-0.744
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła3
if (
        $SZSP>=-1.000
&&      $SZSP<-0.439
&&      $SZZA>=-1.000
&&      $SZZA<-0.773
&&      $NKON>=-0.744
&&      $NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła4
if (
        $SZSP>=-0.439
&&      $SZSP<0.122
&&      $SZZA>=-1.000
&&      $SZZA<-0.773
&&      $NKON>=-0.744
&&      $NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
    
}
    else {
  echo "nie znaleziono: $zm<br />";
}
//reguła5
if (
        $SZSP>=-0.439
&&      $SZSP<0.122
&&      $SZZA>=-0.773
&&      $SZZA<-0.546
&&      $NKON>=-0.744
&&      $NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła6
if (
        $SZSP>=-1.000
&&      $SZSP<-0.439
&&      $SZZA>=-0.546
&&      $SZZA<-0.319
&&      $NKON>=-0.744
&&      $NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła7
if (
        $SZSP>=-1.000
&&      $SZSP<-0.439
&&      $SZZA>=-0.319
&&      $SZZA<-0.092
&&      $NKON>=-0.744
&&      $NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła8
if (
        $SZSP>=0.122
&&      $SZSP<0.683
&&      $SZZA>=-0.092
&&      $SZZA<0.135
&&      $NKON>=-0.744
&&      $NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła9
if (
        $SZSP>=0.683
&&      $SZSP<1.244
&&      $SZZA>=-0.092
&&      $SZZA<0.135
&&      $NKON>=-0.744
&&      $NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła10
if (
        $SZSP>=4.049
&&      $SZSP<=4.610
&&      $SZZA>=-0.092
&&      $SZZA<0.135
&&      $NKON>=-0.744
&&      $NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła11
if (
        $SZSP>=-0.439
&&      $SZSP<0.122
&&      $SZZA>=0.135
&&      $SZZA<0.362
&&      $NKON>=-0.744
&&      $NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła12
if (
        $SZSP>=0.122
&&      $SZSP<0.683
&&      $SZZA>=0.135
&&      $SZZA<0.362
&&      $NKON>=-0.744
&&      $NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
    
}
//reguła13
if (
     SZSP >= 1.244
&& SZSP < 1.805
&& SZZA >= 0.135
&& SZZA < 0.362
&& NKON >= -0.744
&& NKON < 1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
  }

//reguła14
if (
   JEZELI SZSP >= -1.000
ORAZ SZSP < -0.439
ORAZ SZZA >= 0.362
ORAZ SZZA < 0.589
ORAZ NKON >= -0.744
ORAZ NKON < 1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
}

//reguła15
if (
   JEZELI SZSP >= -0.439
ORAZ SZSP < 0.122
ORAZ SZZA >= 0.362
ORAZ SZZA < 0.589
ORAZ NKON >= -0.744
ORAZ NKON < 1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
}
//reguła16
if (
   JEZELI SZSP >= 0.122
ORAZ SZSP < 0.683
ORAZ SZZA >= 1.043
ORAZ SZZA <= 1.270
ORAZ NKON >= -0.744
ORAZ NKON < 1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
}
//reguła17
if (
  JEZELI SZSP >= -1.000
ORAZ SZSP < -0.439
ORAZ SZZA >= -1.000
ORAZ SZZA < -0.773
ORAZ NKON >= 1.032
ORAZ NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
}
//reguła18
if (
   JEZELI SZSP >= -1.000
ORAZ SZSP < -0.439
ORAZ SZZA >= -0.546
ORAZ SZZA < -0.319
ORAZ NKON >= 1.032
ORAZ NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
}
//reguła19
if (
JEZELI SZSP >= -0.439
ORAZ SZSP < 0.122
ORAZ SZZA >= -0.546
ORAZ SZZA < -0.319
ORAZ NKON >= 1.032
ORAZ NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
}
//reguła20
if (
 JEZELI SZSP >= -0.439
ORAZ SZSP < 0.122
ORAZ SZZA >= -0.319
ORAZ SZZA < -0.092
ORAZ NKON >= 1.032
ORAZ NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
}
//reguła21
if (
JEZELI SZSP >= -0.439
ORAZ SZSP < 0.122
ORAZ SZZA >= -0.092
ORAZ SZZA < 0.135
ORAZ NKON >= 1.032
ORAZ NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
}
//reguła22
if (
  JEZELI SZSP >= -0.439
ORAZ SZSP < 0.122
ORAZ SZZA >= 0.135
ORAZ SZZA < 0.362
ORAZ NKON >= 1.032
ORAZ NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
}
//reguła23
if (
JEZELI SZSP >= 0.122
ORAZ SZSP < 0.683
ORAZ SZZA >= 0.135
ORAZ SZZA < 0.362
ORAZ NKON >= 1.032
ORAZ NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
}
//reguła24
if (
  JEZELI SZSP >= -0.439
ORAZ SZSP < 0.122
ORAZ SZZA >= 0.362
ORAZ SZZA < 0.589
ORAZ NKON >= 1.032
ORAZ NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
}
//reguła25
if (
   JEZELI SZSP >= 0.122
ORAZ SZSP < 0.683
ORAZ SZZA >= 1.043
ORAZ SZZA <= 1.270
ORAZ NKON >= 1.032
ORAZ NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
}
//reguła26
if (
   JEZELI SZSP >= -1.000
ORAZ SZSP < -0.439
ORAZ SZZA >= -1.000
ORAZ SZZA < -0.773
ORAZ NKON >= 2.808
ORAZ NKON < 4.584
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
}
//reguła27
if (
   JEZELI SZSP >= -0.439
ORAZ SZSP < 0.122
ORAZ SZZA >= -0.773
ORAZ SZZA < -0.546
ORAZ NKON >= 4.584
ORAZ NKON < 6.360
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
}
//reguła28
if (
 JEZELI SZSP >= -0.439
ORAZ SZSP < 0.122
ORAZ SZZA >= -0.319
ORAZ SZZA < -0.092
ORAZ NKON >= 8.136
ORAZ NKON < 9.912
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
}
//reguła29
if (
JEZELI SZSP >= -0.439
ORAZ SZSP < 0.122
ORAZ SZZA >= -0.092
ORAZ SZZA < 0.135
ORAZ NKON >= 8.136
ORAZ NKON < 9.912
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
}
//reguła30
if (
JEZELI SZSP >= -0.439
ORAZ SZSP < 0.122
ORAZ SZZA >= -1.000
ORAZ SZZA < -0.773
ORAZ NKON >= 13.464
ORAZ NKON <= 15.240
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
    echo "wynik=".$wynik4."<br />";
}
//reguła31
if (
 JEZELI SZSP >= -0.439
ORAZ SZSP < 0.422
ORAZ SZZA >= -0.001
ORAZ SZZA < 0.773
ORAZ NKON >= -2031.808
ORAZ NKON < 18.584
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
    echo "wynik=".$wynik4."<br />";
}

//KONIEC EDYCJI REGUŁ
?>