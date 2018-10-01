x=0
y=0

antStud = int(input("Hvor mange studenter?\n"))
antEmner = int(input("Hvor mange emner?\n"))
for x in range(antStud):
    for y in range(antEmner):
        print("Stud " + str(x+1) + " elsker emne " + str(y+1) + "\n")
