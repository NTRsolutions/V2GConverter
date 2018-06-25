V2GConverter
=====
**V2GConverter** is a video to Gif converter with ffmpeg
## Prerequisites
* PHP 5.6 and above
* apache2 server

## Installation
Clone this repository into your /var/www folder (or your favorite working folder)
```
git clone https://github.com/sldevand/V2GConverter.git
cd V2GConverter
mkdir out
mkdir upload
sudo chmod -R 777 out
sudo chmod -R 777 upload
sudo chmod -R +x scripts/vid2gif-sample
```
Install bootstrap
```
npm install
```

### For apache2 users
By default, php is set with 20 max file uploads and 2MB max filesize.
<br>
In order to modifiy these settings, you have to modify php.ini this way :

##### Edit /etc/php/7.0/apache2/php.ini to change these values
```
upload_max_filesize = 256M
max_file_uploads = 70
```
##### Restart apache2 server
```
sudo service apache2 restart
```

## Usage
http://localhost/V2GConverter/

* Click on browse button.
* You can select one video file.
* Set the gif file name.
* Set the start, duration and fps
* Click on upload button.
* You have the result inside the browser.
* You can copy your gif from the browser (right click -> save picture as...).
