echo "Installing modules .."
sleep 5
pkg update && pkg upgrade;pkg install python2 wget curl;pkg install unzip;pkg install php;chmod +x *
