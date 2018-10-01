antLoops = int(input("Hvor mange adjektiv vil du gi deg?"))

for i in range(antLoops):
    adj = input("Beskriv deg selv med et adjektiv? ")
    print("Hah, du", adj + "!? Jeg er mye", adj + "ere!")
print("Takk for nå!")
