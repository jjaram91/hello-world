<?php
$zahl=1;
$zahl=99; #Typ: ganze Zahl
$preis= 21.99; #Typ: Kommazahl, float
$vorname="Angela";
$land="Deutschland";
print "Bitte geben Sie zwei Zahlen ein";

//Summe Abstand Produkt Quotient
$eingabe1=fgets (STDIN);
$zahl1=trim($eingabe1);
$eingabe2=fgets (STDIN);
$zahl2=trim($eingabe2);
$differenz=$zahl1-$zahl2;
if ( $differenz >= 0);
{$abstand=$differenz;};
else{$abstand=$differenz;};
$summe=$zahl1 + $zahl2;
$abstand=$zahl1 - $zahl2;
$produkt=$zahl1 * $zahl2;
$quotient=$zahl1 / $zahl2;
print "$zahl1";
print "\n$zahl2";
print "\nDie Summe von\t\t$zahl1 und $zahl2 ist $summe";
print "\nDer Abstand von\t\t$zahl1 und $zahl2 ist $abstand";
print "\nDas Produkt von\t\t$zahl1 und $zahl2 ist $produkt";
print "\nDer Quotient von\t$zahl1 und $zahl2 ist $quotient";
?>