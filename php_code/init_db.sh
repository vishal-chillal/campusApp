#Author Saurabh Kukade
# Script to init database and not generic one, mostly hard-coded.
# Feel free to make it more generic but just add documentation.

echo "creating mysql user name root on localhost"
echo "mysql -u root -p -h localhost"
mysql -u root -p -h localhost
echo "running php file for dropping database"
php -f creation_of_dbtable.php
echo "showing databases and selecting campus1 as default"
mysql -u root -p -e 'show databases;'
mysql -u root -p -e 'use campus1; show tables'

