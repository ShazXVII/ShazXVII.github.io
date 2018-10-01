alder = int(input("Din alder:\n"))
if alder<3:
    print("Billetten er gratis")
elif 3<=alder<=11:
    print("Billettpris: 30kr")
elif 12<=alder<=25:
    print("Billettpris: 50kr")
elif 26<=alder<=66:
    print("Billettpris: 80kr")
elif alder>66:
    print("Billettpris: 40kr")
