i = 0
antBokstaver = int(42)
adj = input("Du har " + str(antBokstaver) + " bokstaver til rådighet. Beskriv deg selv med et adjektiv? ")
while antBokstaver > 0:
    print("Hah, du", adj + "!? Jeg er mye", adj + "ere!")
    antBokstaver = int(antBokstaver - len(adj))
    adj = input("Du har " + str(antBokstaver) + " bokstaver til rådighet. Beskriv deg selv med et adjektiv? ")
    i += 1  # øker i med 1

print("Takk for nå")
