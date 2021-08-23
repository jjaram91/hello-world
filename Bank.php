<?php
$kontostand = 1000;
print "Willkommen bei der Bank Hamburg. Was möchten Sie tun?.\n";

while ($weiter != "nein")
{
		print "Wenn Sie einzahlen wollen drücken Sie die 1\n";
		print "Für Auszahlungen eine 2\n"; 
		print "Und für Überweisungen eine 3\n";
		$antwort = trim(fgets(STDIN));
		if ($antwort==1) {
			print "Jetzt kommt eine Einzahlung\n";
			print "Wieviel möchten Sie einzahlen?\n";
			$geldbetrag = trim(fgets(STDIN));
			$kontostand = $kontostand + $geldbetrag;
			print "Ihr neuer Kontostand beträgt\t $kontostand\n";
		}
		else {
			  if ($antwort==2)	
				{print "Jetzt kommt eine Auszahlung\n";
				 print "Wie viel wollen Sie ausgezahlt bekommen?\n";
				 $geldbetrag = trim(fgets(STDIN));
				 if ($geldbetrag <= $kontostand)
					{
					 
					 $kontostand = $kontostand - $geldbetrag;
					 print "Ihr neuer Kontostand beträgt\t $kontostand\n";
					}
				else {print "Ihr Kontoguthaben reicht nicht aus.\n";
					  print "Ihr Kontostand beträgt $kontostand\n";
					 }		
				}
				else {if ($antwort==3)
						 {print "Jetzt kommt eine Überweisung\n";
						 }
					  else print "Sie haben eine falsche Zahl eingegeben";
					 }
					   
			 }
		print "Möchten Sie noch etwas tun?\n";
		$weiter = trim(fgets(STDIN));
}		
?>