f0 = 0
f1 = 1
f = 1
k = int(input("k"))
kList = [f0]
#print(f0)
#print(f1)
#print(f)
while len(kList)<k-2:
    f0 = f1
    f1 = f
    f = f0 + f1
#   print(f)
    kList.append(f)
print(f)
