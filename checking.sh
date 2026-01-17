#!/bin/bash
echo 'Building Zip File and Saving to /var/www/'
zip "/var/www/pharmabag_VERSION_"$(date "+%Y.%m.%d-%H.%M.%S").zip -r .
git clone https://github.com/KTBsomen/pharmabag.git
cd pharmabag
mv * ../ --force
cd ..
rm -r pharmabag
echo "Done !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!"
