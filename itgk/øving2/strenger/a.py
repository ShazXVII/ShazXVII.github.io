string1 = str(input("Skriv inn matvare 1\n"))
string2 = str(input("Skriv inn matvare 2\n"))

if string1.lower() == string2.lower():
    print("Det er samme matvare")
elif string1.lower() != string2.lower():
    print("Dette er to forskjellige matvarer")
