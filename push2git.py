import os
import time
location = "cd shazxvii.github.io"
add = "git add *"
commit = "git commit -m 'automated push'"
push = "git push -u origin master"


os.system(add)
os.system(commit)
time.sleep(1)
os.system(push)
