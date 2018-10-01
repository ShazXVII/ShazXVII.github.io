antForsøk = int(0)
rSvar = str("mø")

forsøk = str(input("Hva sier kua\n"))
while forsøk!=rSvar:
    print("Det var feil prøv igjen:")
    antForsøk+=1
    forsøk = str(input("Hva sier kua\n"))

print("Korrekt. Du brukte "+str(antForsøk) + " forsøk")
