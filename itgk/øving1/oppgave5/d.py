starttall = float(input("Skriv inn et flyttall\n"))
desimaler = int(input("Hvor mange desimaler er ønskelig?\n"))
sluttall = round(starttall, desimaler)
print("Tallet du skrev er", starttall, "og med", desimaler, "desimaler blir det til", sluttall)
