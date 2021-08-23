<?php
print "Der Strom wird angeschaltet";
$stromAn=1;
while($stromAn)
	{
	print "rot\n";
	print "gelb\n";
	print "grün\n";
	print "Haben wir immer noch Strom?";
	$antwort = trim(fgets(STDIN));
		if($antwort == "nein")
		$stromAn = 0;
	}	
	
print "Stromausfall";	
?>