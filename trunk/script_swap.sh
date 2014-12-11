df -h 
dd if=/dev/zero of=/swapfile bs=1M count=1024
mkswap /swapfile
chmod 600 /swapfile
mkswap /swapfile
swapon /swapfile
echo 'echo "/swapfile  none  swap  defaults  0  0" >> /etc/fstab' | sudo sh
free -m