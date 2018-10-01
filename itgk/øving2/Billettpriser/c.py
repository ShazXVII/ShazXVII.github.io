pris = 0
def sjekkAlder():
    pris = 440
    alder = input("Hvor gammel er du?\n")
    if int(alder) <=16:
        pris = pris*0.5
        print("Da er prisen " + str(int(pris)) + ",-")
    elif int(alder) >=60:
        pris = pris*0.75
        print("Da er prisen " + str(int(pris)) + ",-")
    elif int(alder) >=18 and int(alder) <=59:
        milStud = input("Er du student eller uniformert militær? (J/N)\n")
        if milStud == str("J") or milStud == str("j"):
            pris = pris*0.75
            print("Da er prisen " + str(int(pris)) + ",-")
        elif milStud == str("N") or milStud == str("n"):
            pris = pris
            print("Da er prisen " + str(int(pris)) + ",-")
    else:
        pris = 440
        print("Da er prisen " + str(int(pris)) + ",-")



antDager = input("Hvor mange dager er det til du skal reise?\n")

if int(antDager)>=14:
    yesNo = input("Du kan få minipris: 199,- (Kan ikke endres / refunderes)\n" + "Er dette ønskelig? (J/N)\n")
    if yesNo == str("J") or yesNo == str("j"):
        pris = 199
        print("Takk for pengene, god reise!")
    elif yesNo == str("N") or yesNo == str("n"):
        pris= 440
        sjekkAlder()
elif int(antDager)<=13:
    print("For sent for minipris")
    pris = 440
    sjekkAlder()
