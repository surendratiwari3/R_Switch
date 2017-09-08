# R_Switch

Steps for Installation

Setting up the web directory
1.  clone the R_Switch to /var/www/html
2.  chown -R www-data:www-data /var/www/html/R_Switch/protected/runtime
3.  chown -R www-data:www-data /var/www/html/R_Switch/assets/
4.  chmod -Rf 777 /var/www/html/R_Switch/assets/
5.  cd /var/www/html
6.  wget https://github.com/yiisoft/yii/releases/download/1.1.19/yii-1.1.19.5790cb.tar.gz
7   mv yii-1.1.19 yii

Setting up the database
