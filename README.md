# gaminglaptops

Bu link kopyalanmalı. Packagistten dosyayı yüklenmeli.

Packagist dosyası: mmyildizs/gaminglaptops şekilde olmalıdır zaten linkimi kopyalayıp packagistten submitten bu şekilde çıkacaktır.

Ya da browserden mmyildizs/gaminglaptops bulunmalıdır.(hata olmazsa).

Repo linki : https://github.com/mmyildizs/gaminglaptops.git

Packagist : mmyildizs/gaminglaptops

ssh -i .vagrant/machines/weborgun/virtualbox/private_key vagrant@weborgun bağlanmalıdır.

cd /var/www/advanced/ yazıp açılmalıdır.

composer require --prefer-dist  mmyildizs/gaminglaptops "dev-main" şekilde yazılmalıdır.

Vendor altında mmyildizs modülü oluşacaktır. (Ek olarak mirhatmetinyildiz ve mmyildiz klasörleri de oluşuyor nedendir bilmiyorum ama bunlar gereksiz)

Ancak bir sorun var birden fazla gaminglaptops oluştuğu için main.php'deki modules hata verecektir.

Bu yüzden bu hatayı düzeltmek için:








