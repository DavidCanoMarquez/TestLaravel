# Setup
lftp -c "open -u David,3666 ftp://81.221.244.152/USB-FlashDisk-01/; set ssl:verify-certificate no;mirror -R . public_html"
