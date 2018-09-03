import math
radius = 5.4
height = 7.9
print("Har en sirkel med radius", radius, "som er grunnflate i en sylinder med høyde", height)
print("Omkrets av sirkelen:", math.tau * radius)  #tau er det samme som 2 pi
print("Areal av sirkelen:", math.pi * radius**2)
print("Areal av sylinderen:", math.tau * radius * height + 2 * math.pi * radius ** 2)
