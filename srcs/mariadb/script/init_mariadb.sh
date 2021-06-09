echo "CREATE DATABASE $WP_DB_NAME;" | mysql -u root                     
echo "GRANT ALL ON $WP_DB_NAME.* TO '$WP_DB_USER'@'$WP_DB_HOST' IDENTIFIED BY '$WP_DB_PASSWORD' WITH GRANT OPTION;" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root

echo "$WP_DB_NAME" 
echo "$WP_DB_PASSWORD"

bash
