<?php
/*print "Bitte geben Sie das Wetter ein";
$Wettereingabe = trim(fgets(STDIN));
if($Wettereingabe== "Sonne")
	{print "Nehmen Sie ihre Badehose mit";
	print "\nMieten Sie ein Cabrio\n";
	}
if($Wettereingabe== "Regen")
	{print "Nehmen Sie ihren Regenschirm mit";
	print "\nNehmen Sie ihren Regenmantel mit\n";
	}	
	/////////////////////////////////////////////////
if($Wettereingabe== "Sonne")
	{print "Nehmen Sie ihre Badehose mit";
	print "\nMieten Sie ein Cabrio\n";
	}
else 
	{print "Die Sonne schein nicht\n";
		if ($Wettereingabe== "Schnee")
			{print "Wintermütze aufsetzen\n";
			print "Handschuhe anziehen";
			}
	}
//////////////////////////////////////////////////
*/
print "Was für ein Wochentag ist heute?\t";
$tag = trim(fgets(STDIN));
print "Was für ein Datum ist heute?\t";
$datum = trim(fgets(STDIN));

if($datum == 13)
	{print "Vorsicht ";
	 if($tag == "Freitag")
		{print "Schnell nach Hause";
		} 
	 else 
		{print "Die wilde 13, aber kein Freitag";
		}	
	} 
else 
	{print "Alles OK";
	}
	



?>