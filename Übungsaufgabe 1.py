Fahrzeug1 = {"Marke": "Renault", "Modell": "Clio", "Baujahr": 2013, "Preis": 6000}
Fahrzeug2 = {"Marke": "VW", "Modell": "Golf", "Baujahr": 2011, "Preis": 5000}
Fahrzeug3 = {"Marke": "Porsche", "Modell": "Panamera", "Baujahr": 2014, "Preis": 25000}

Maximalpreis = eval(input("Geben Sie den Maximalpreis ein, den Sie zahlen möchten: "))

if Maximalpreis >= 25000:
    print ("Diese Fahrzeuge befinden sich in ihrem Preissegment: ","\n", Fahrzeug1, "\n", Fahrzeug2, "\n", Fahrzeug3) 

elif Maximalpreis >= 6000:
    print ("Diese Fahrzeuge befinden sich in ihrem Preissegment: ","\n", Fahrzeug1, "\n",Fahrzeug2) 
    
elif Maximalpreis >= 5000:
    print ("Diese Fahrzeuge befinden sich in ihrem Preissegment: ","\n", Fahrzeug2)

else:
    print ("In diesem Preissegment können wir ihnen kein Fahrzeug anbieten")
    



