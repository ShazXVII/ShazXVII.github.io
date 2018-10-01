antDager = input("Hvor mange dager er det til du skal reise?\n")
if int(antDager)>=14:
    yesNo = input("Du kan få minipris: 199,- (Kan ikke endres / refunderes)\n" + "Er dette ønskelig? (J/N)\n")
    if yesNo == str("J") or yesNo == str("j"):
        print("Takk for pengene, god reise!")
    elif yesNo == str("N") or yesNo == str("n"):
        print("Da tilbyr vi fullpris: 440,-")
elif int(antDager)<=13:
    print("For sent for minipris; fullpris 440,-")
