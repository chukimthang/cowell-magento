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
+ sudo ifup enp0s8
+ sudo systemctl restart httpd
- Chú ý là mỗi khi khởi động lại máy có thể ta phải thực hiện lại thao tác này
-Truy cập vào địa chỉ
- Frontend
192.168.33.10
- Backend:
“http://192.168.33.10/admin_8gcdhp/”
user: admin
pass: admin123
-Nếu backend không load:
-Ssh vào server
+ cd /var/www/html
+ php bin/magento setup:static-content:deploy
+ php bin/magento indexer:reindexrm –rf var/cache

2. Module Hello World
- 1 số lệnh linux cơ bản cần dùng: 
+ pwd: Hiện thư mục hiện tại. VD: Home/vagrant
+ dir: Hiện thư mục
+ ls: Hiện tất cả file và thư mục chứa trong đó
- cd magento/magento/html/var 
- Chạy vagrant ssh 
- cd /var/www/html 
- Kiểm trạng thái module: sudo bin/magento module:status
- Enable module: sudo bin/magento module:enable Robin_Bai1

3. Layout, Block, Template 
- Đặt tên view theo định dang: module_controller_action.xml. VD: bai1_hello_world.xml 
- Xóa file trong thư mục generation: sudo rm -rf var/generation/* (khi bị báo lỗi trong contruct của world)

4. Những lệnh cơ bản trong magento thường dùng
+ bin/magento setup:upgrade (1)
+ bin/magento setup:di:compile (2)
+ bin/magento indexer:reindex (3)
+ bin/magento setup:static-content:deploy (4)
- Nếu lệnh (2) có lỗi thì thực hiện những lệnh sau
+ rm -rf var/generation/
+ rm -rf var/cache/*
