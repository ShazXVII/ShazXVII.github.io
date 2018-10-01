pos = input("Posisjon: ")

bokstav = pos[0]
oddetallbokstaver = ["a","c","e","g"]
partallbokstaver = ["b","d","f","h"]

tall = int(pos[1])

if bokstav in oddetallbokstaver:
    if tall%2==0:
        print("hvit")
    elif tall%2!=0:
        print("svart")
if bokstav in partallbokstaver:
    if tall%2==0:
        print("svart")
    elif tall%2!=0:
        print("hvit")
