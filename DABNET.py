import os
import shutil
x = 0
#def PREDAB():
#    shutil.rmtree('/home')

#    shutil.move('dabmoji.jpg', '/home')
while x<200:
    x += 1
    shutil.copyfile("DAB.txt","DAB_" + str(x) + ".txt")
