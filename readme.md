1.Cài đặt môi trường
- Cài đặt vagrant, virtual box, git bash
- Tải box cho vagrant:
https://drive.google.com/drive/folders/0B0FaF8lT_nC7ZFE4YkJDd2JyWTA
- Unzip file magento.zip, html.zip
- Sử dụng gitbash cd vào thư mục chứa file centos7.box
- Chạy lệnh: vagrant box add magento2 centos7.box
- Chạy tiếp lệnh: vagrant up
- Sau khi đã add box, và chạy máy ảo thành công ta ssh tới máy ảo bằng lệnh:
vagrant ssh
- Kiểm tra tình trạng mạng trên máy ảo ( ifconfig ) , nếu chưa thấy cổng enp0s8 thì
ta phải bật cổng này lên và khởi động lại apache:
sudo ifup enp0s8
sudo systemctl restart httpd
Chú ý là mỗi khi khởi động lại máy có thể ta phải thực hiện lại thao tác này
-Truy cập vào địa chỉ
- Frontend
192.168.33.10
- Backend:
“http://192.168.33.10/admin_8gcdhp/”
user: admin
pass: admin123
-Nếu backend không load:
-Ssh vào server
cd /var/www/html
php bin/magento setup:static-content:deploy
php bin/magento indexer:reindexrm –rf var/cache
Nếu không kết nối được hay có bất kỳ vấn đề gì vui lòng inbox đến room Magento learning
để có người support kịp thời.
