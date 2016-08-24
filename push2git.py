import os
import time
location = "cd shazxvii.github.io"
add = "git add *"
note = input("please enter what you committed: ")
commit = "git commit -m" + "'" + note + "'"
push = "git push -u origin master"
usr = "ShazXVII"
pwd = "Bananasplit99"
os.system(note)
time.sleep(5)
os.system(location)
time.sleep(5)
os.system(add)
time.sleep(5)
os.system(commit)
time.sleep(5)
os.system(push)
time.sleep(15)
