<?php

//ustawiamy zmienną  gdy nie bedzie spelniony zaden warunek
$wynik4 = 0;

// TUTAJ EDYTUJEMY REGUŁY****************************************************

//reguła1
if (
        $$SZSP>=-0.439
&&      $$SZSP<0.122
&&      $$SZZA>=-0.092
&&      $$SZZA<0.135
&&      $$NKON>=-2.520
&&      $$NKON<-0.744
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
    
}
//reguła2
if (
        $$SZSP>=0.122
&&      $$SZSP<0.683
&&      $$SZZA>=-0.092
&&      $$SZZA<0.135
&&      $$NKON>=-2.520
&&      $$NKON<-0.744
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
    
}
//reguła3
if (
        $$SZSP>=-1.000
&&      $$SZSP<-0.439
&&      $$SZZA>=-1.000
&&      $$SZZA<-0.773
&&      $$NKON>=-0.744
&&      $$NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
    
}
//reguła4
if (
        $$SZSP>=-0.439
&&      $$SZSP<0.122
&&      $$SZZA>=-1.000
&&      $$SZZA<-0.773
&&      $$NKON>=-0.744
&&      $$NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
    
}
    

//reguła5
if (
        $$SZSP>=-0.439
&&      $$SZSP<0.122
&&      $$SZZA>=-0.773
&&      $$SZZA<-0.546
&&      $$NKON>=-0.744
&&      $$NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
    
}
//reguła6
if (
        $$SZSP>=-1.000
&&      $$SZSP<-0.439
&&      $$SZZA>=-0.546
&&      $$SZZA<-0.319
&&      $$NKON>=-0.744
&&      $$NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
    
}
//reguła7
if (
        $$SZSP>=-1.000
&&      $$SZSP<-0.439
&&      $$SZZA>=-0.319
&&      $$SZZA<-0.092
&&      $$NKON>=-0.744
&&      $$NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
    
}
//reguła8
if (
        $$SZSP>=0.122
&&      $$SZSP<0.683
&&      $$SZZA>=-0.092
&&      $$SZZA<0.135
&&      $$NKON>=-0.744
&&      $$NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
    
}
//reguła9
if (
        $$SZSP>=0.683
&&      $$SZSP<1.244
&&      $$SZZA>=-0.092
&&      $$SZZA<0.135
&&      $$NKON>=-0.744
&&      $$NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
    
}
//reguła10
if (
        $$SZSP>=4.049
&&      $$SZSP<=4.610
&&      $$SZZA>=-0.092
&&      $$SZZA<0.135
&&      $$NKON>=-0.744
&&      $$NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
    
}
//reguła11
if (
        $$SZSP>=-0.439
&&      $$SZSP<0.122
&&      $$SZZA>=0.135
&&      $$SZZA<0.362
&&      $$NKON>=-0.744
&&      $$NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
    
}
//reguła12
if (
        $$SZSP>=0.122
&&      $$SZSP<0.683
&&      $$SZZA>=0.135
&&      $$SZZA<0.362
&&      $$NKON>=-0.744
&&      $$NKON<1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
    
}
//reguła13
if (
     $SZSP >= 1.244
&& $SZSP < 1.805
&& $SZZA >= 0.135
&& $SZZA < 0.362
&& $NKON >= -0.744
&& $NKON < 1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
  }

//reguła14
if (
     $SZSP >= -1.000
&& $SZSP < -0.439
&& $SZZA >= 0.362
&& $SZZA < 0.589
&& $NKON >= -0.744
&& $NKON < 1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
}

//reguła15
if (
     $SZSP >= -0.439
&& $SZSP < 0.122
&& $SZZA >= 0.362
&& $SZZA < 0.589
&& $NKON >= -0.744
&& $NKON < 1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
}
//reguła16
if (
     $SZSP >= 0.122
&& $SZSP < 0.683
&& $SZZA >= 1.043
&& $SZZA <= 1.270
&& $NKON >= -0.744
&& $NKON < 1.032
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
}
//reguła17
if (
    $SZSP >= -1.000
&& $SZSP < -0.439
&& $SZZA >= -1.000
&& $SZZA < -0.773
&& $NKON >= 1.032
&& $NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
}
//reguła18
if (
     $SZSP >= -1.000
&& $SZSP < -0.439
&& $SZZA >= -0.546
&& $SZZA < -0.319
&& $NKON >= 1.032
&& $NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
}
//reguła19
if (
  $SZSP >= -0.439
&& $SZSP < 0.122
&& $SZZA >= -0.546
&& $SZZA < -0.319
&& $NKON >= 1.032
&& $NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
}
//reguła20
if (
   $SZSP >= -0.439
&& $SZSP < 0.122
&& $SZZA >= -0.319
&& $SZZA < -0.092
&& $NKON >= 1.032
&& $NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
}
//reguła21
if (
  $SZSP >= -0.439
&& $SZSP < 0.122
&& $SZZA >= -0.092
&& $SZZA < 0.135
&& $NKON >= 1.032
&& $NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
}
//reguła22
if (
    $SZSP >= -0.439
&& $SZSP < 0.122
&& $SZZA >= 0.135
&& $SZZA < 0.362
&& $NKON >= 1.032
&& $NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
}
//reguła23
if (
  $SZSP >= 0.122
&& $SZSP < 0.683
&& $SZZA >= 0.135
&& $SZZA < 0.362
&& $NKON >= 1.032
&& $NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
}
//reguła24
if (
    $SZSP >= -0.439
&& $SZSP < 0.122
&& $SZZA >= 0.362
&& $SZZA < 0.589
&& $NKON >= 1.032
&& $NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
}
//reguła25
if (
     $SZSP >= 0.122
&& $SZSP < 0.683
&& $SZZA >= 1.043
&& $SZZA <= 1.270
&& $NKON >= 1.032
&& $NKON < 2.808
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
}
//reguła26
if (
     $SZSP >= -1.000
&& $SZSP < -0.439
&& $SZZA >= -1.000
&& $SZZA < -0.773
&& $NKON >= 2.808
&& $NKON < 4.584
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
}
//reguła27
if (
     $SZSP >= -0.439
&& $SZSP < 0.122
&& $SZZA >= -0.773
&& $SZZA < -0.546
&& $NKON >= 4.584
&& $NKON < 6.360
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
}
//reguła28
if (
   $SZSP >= -0.439
&& $SZSP < 0.122
&& $SZZA >= -0.319
&& $SZZA < -0.092
&& $NKON >= 8.136
&& $NKON < 9.912
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
}
//reguła29
if (
  $SZSP >= -0.439
&& $SZSP < 0.122
&& $SZZA >= -0.092
&& $SZZA < 0.135
&& $NKON >= 8.136
&& $NKON < 9.912
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
}
//reguła30
if (
  $SZSP >= -0.439
&& $SZSP < 0.122
&& $SZZA >= -1.000
&& $SZZA < -0.773
&& $NKON >= 13.464
&& $NKON <= 15.240
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=1;
 
}
//reguła31
if (
   $SZSP >= -0.439
&& $SZSP < 0.422
&& $SZZA >= -0.001
&& $SZZA < 0.773
&& $NKON >= -2031.808
&& $NKON < 18.584
    ){
    //bankrut 1
    //nie bankrut 2
    $wynik4=2;
 
}

//KONIEC EDYCJI REGUŁ
?>