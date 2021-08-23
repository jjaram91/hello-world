while True:
	zahl = eval(input("Welche Zahl soll verdoppelt werden?"))
	print("Doppelter Wert: ", zahl * 2)
	weiter = input ("Möchten Sie fortfahren? (ja/nein)")
	if weiter != "ja":
            break