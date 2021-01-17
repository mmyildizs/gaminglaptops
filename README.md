İsim-Soyadı: Mirhat Metin YILDIZ

OkulNo: 170201017

Bölüm: Bilgisayar Mühendisliği

Üniversite-Fakülte: Kocaeli Üniversitesi-Mühendislik

Ders: İnternet Programcılığı - Uğur YILDIZ

# gaminglaptops 

Bu link kopyalanmalı. Packagistten dosya yüklenmeli.

Packagist dosyası: mmyildizs/gaminglaptops şekilde olmalıdır zaten linkimi kopyalayıp packagistten submitten bu şekilde çıkacaktır.

Ya da packagist browserden mmyildizs/gaminglaptops bulunmalıdır.(hata olmazsa).

# gaminglaptops Modülü

Modellers kısmında laptop markaları,modelleri ve laptop özellikleri bulunmaktadır.

Markalars kısmında marka adları ve model adedi bulunmaktadır.

Buradaki amaç  Modellers kısmında bir laptop eklediğimizde Markalars'ta modeladedini güncellemesidir(oto olarak güncelliyor).

Ancak eğer Modellers kısmından bir model eklediğinizde marka adı Markalars 'ta yoksa Markalars'ta marka adı eklenmelidir(modeladedine değer girmeye gerek yok.çünkü kendiliğinden güncelleniyor)

# Kurulum

Repo linki : https://github.com/mmyildizs/gaminglaptops.git

Packagist : mmyildizs/gaminglaptops

1-) ssh -i .vagrant/machines/weborgun/virtualbox/private_key vagrant@weborgun bağlanmalıdır.

2-) cd /var/www/advanced/ yazıp açılmalıdır.

3-) composer require --prefer-dist  mmyildizs/gaminglaptops "dev-main" şekilde yazılmalıdır.

4-) Vendor altında mmyildizs modülü oluşacaktır. (Ek olarak mirhatmetinyildiz ve mmyildiz klasörleri de oluşuyor nedendir bilmiyorum ama bunlar gereksiz)

5-) Ancak bir sorun var birden fazla gaminglaptops oluştuğu için main.php'deki modules hata verecektir.

Bu yüzden bu hatayı düzeltmek için:

Aşağıdaki Önlem1 ' deki gibi gaminglaptops klasörü kopyalanmalı.

![Önlem1](https://user-images.githubusercontent.com/49499843/104840132-8d315c00-58d6-11eb-9f9c-1d42e55946c1.jpg)

Aşağıdaki Önlem2 ' deki gibi mmyildizs'e yapıştırılmalı.

![Önlem2](https://user-images.githubusercontent.com/49499843/104840180-d08bca80-58d6-11eb-97b1-0a2f81aa4416.jpg)

Aşağıdaki Önlem3 ' teki gibi arta kalan gaminglaptops klasörü silinmeli.

![Önlem3](https://user-images.githubusercontent.com/49499843/104840184-d7b2d880-58d6-11eb-8e73-ede143174a5d.jpg)


6-) backend>config> kısmından main.php içinde modules şu şekilde olmalı:

'modules' => [
        'gaminglaptops' => [
            'class' => 'vendor\mmyildizs\gaminglaptops\Module',
        ],
    ],
    
http://advanced/backend/web/index.php?r=gaminglaptops/modellers

http://advanced/backend/web/index.php?r=gaminglaptops/markalars

linklerinin gösterip göstermediği kontrol edilmelidir.

# Sonuç:







