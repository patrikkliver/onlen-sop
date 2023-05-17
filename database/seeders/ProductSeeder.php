<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $storagedevice = [
            [
                'name' => 'Hard Disk Drive (HDD) 1 TB',
                'price' => 500000,
                'stock' => 50,
                'description' => 'Hard Disk Drive (HDD) dengan kapasitas penyimpanan 1 TB',
                'category_id' => 1
            ],
            [
                'name' => 'Solid State Drive (SSD) 512 GB',
                'price' => 750000,
                'stock' => 30,
                'description' => 'Solid State Drive (SSD) dengan kapasitas penyimpanan 512 GB',
                'category_id' => 1
            ],
            [
                'name' => 'USB Flash Drive 64 GB',
                'price' => 100000,
                'stock' => 100,
                'description' => 'USB Flash Drive dengan kapasitas penyimpanan 64 GB',
                'category_id' => 1
            ],
            [
                'name' => 'Memory Card 128 GB',
                'price' => 200000,
                'stock' => 80,
                'description' => 'Memory Card dengan kapasitas penyimpanan 128 GB',
                'category_id' => 1
            ],
            [
                'name' => 'External Hard Drive 2 TB',
                'price' => 1200000,
                'stock' => 40,
                'description' => 'External Hard Drive dengan kapasitas penyimpanan 2 TB',
                'category_id' => 1
            ]
        ];

        foreach ($storagedevice as $storage) {
            Product::create($storage);
        }

        $audiodevices = [
            [
                'name' => 'Headphone Sennheiser HD 599',
                'price' => 2500000,
                'stock' => 10,
                'description' => 'Headphone premium dari Sennheiser dengan suara jernih dan bass yang kuat',
                'category_id' => 2
            ],
            [
                'name' => 'Speaker Logitech Z623',
                'price' => 1500000,
                'stock' => 20,
                'description' => 'Speaker dengan kualitas suara yang luar biasa dan dilengkapi dengan subwoofer',
                'category_id' => 2
            ],
            [
                'name' => 'Earphone Sony WF-1000XM4',
                'price' => 3000000,
                'stock' => 5,
                'description' => 'Earphone wireless dengan kualitas suara yang sangat baik dan dilengkapi dengan noise-cancelling',
                'category_id' => 2
            ],
            [
                'name' => 'Soundbar Samsung HW-Q800A',
                'price' => 8000000,
                'stock' => 3,
                'description' => 'Soundbar premium dari Samsung dengan kualitas suara yang luar biasa dan dilengkapi dengan Dolby Atmos',
                'category_id' => 2
            ],
            [
                'name' => 'Mikrofon Blue Yeti X',
                'price' => 3000000,
                'stock' => 8,
                'description' => 'Mikrofon kualitas studio dengan suara yang jernih dan dilengkapi dengan fitur LED ring',
                'category_id' => 2
            ],
            [
                'name' => 'Logitech G Pro X Gaming Headset',
                'price' => 1999000,
                'stock' => 8,
                'description' => 'Logitech G Pro X Gaming Headset adalah headphone gaming yang dilengkapi dengan mikrofon yang dapat dilepas. Headphone ini juga memiliki kualitas suara yang baik, serta fitur-fitur seperti kontrol volume dan pemutaran suara yang mudah diakses.',
                'category_id' => 2
            ],
            [
                'name' => 'Bose QuietComfort Earbuds',
                'price' => 4399000,
                'stock' => 8,
                'description' => 'Bose QuietComfort Earbuds adalah earbuds nirkabel yang dilengkapi dengan teknologi noise-cancellation canggih dan suara berkualitas tinggi. Earbuds ini juga dilengkapi dengan fitur-fitur seperti pengaturan kontrol suara dan desain tahan air.',
                'category_id' => 2
            ],
            [
                'name' => 'Earphone Sony MDR-EX150AP',
                'price' => 300000,
                'stock' => 30,
                'description' => 'Earphone in-ear dengan suara yang detail dan fitur remote untuk kontrol musik',
                'category_id' => 2
            ],
            [
                'name' => 'Headphone Sennheiser HD 206',
                'price' => 400000,
                'stock' => 25,
                'description' => 'Headphone over-ear dengan kualitas suara yang jernih dan nyaman digunakan',
                'category_id' => 2
            ],
            [
                'name' => 'Soundbar Samsung HW-T450',
                'price' => 2500000,
                'stock' => 5,
                'description' => 'Soundbar dengan suara yang jernih dan teknologi Bluetooth untuk menghubungkan dengan perangkat lain',
                'category_id' => 2
            ],
            [
                'name' => 'Bluetooth Speaker JBL Flip 5',
                'price' => 1500000,
                'stock' => 10,
                'description' => 'Bluetooth speaker dengan suara bass yang kuat dan baterai tahan lama',
                'category_id' => 2
            ],
            [
                'name' => 'Microphone Shure SM58',
                'price' => 2000000,
                'stock' => 8,
                'description' => 'Microphone dengan suara yang jernih dan dapat digunakan untuk keperluan live music ataupun recording',
                'category_id' => 2
            ]
        ];

        foreach ($audiodevices as $audio) {
            Product::create($audio);
        }

        $tablets = [
            [
                'name' => 'ASUS ROG Strix G15',
                'price' => 34999000,
                'stock' => 2,
                'description' => 'ASUS ROG Strix G15 adalah laptop gaming terbaru dari ASUS yang dilengkapi dengan layar IPS 15.6 inci, chipset AMD Ryzen 9 5900HX, dan kartu grafis NVIDIA GeForce RTX 3070. Laptop ini juga dilengkapi dengan fitur-fitur seperti RAM 16GB dan penyimpanan SSD 1TB.',
                'category_id' => 3
            ],
            [
                'name' => 'iPad Air (2022) - 128GB, Wi-Fi Only',
                'price' => 12500000,
                'stock' => 100,
                'description' => 'iPad Air 2022 hadir dengan layar Liquid Retina 10,9 inci, chip A14 Bionic, Touch ID yang terintegrasi pada tombol atas, kamera utama 12MP, kamera depan 7MP, dan speaker stereo.',
                'category_id' => 3
            ],
            [
                'name' => 'Samsung Galaxy Tab S7 FE - 64GB, Wi-Fi Only',
                'price' => 8500000,
                'stock' => 75,
                'description' => 'Samsung Galaxy Tab S7 FE dilengkapi dengan layar WQXGA 12,4 inci, chipset Snapdragon 750G, RAM 4GB, penyimpanan internal 64GB, baterai 10.090 mAh, dan dukungan S-Pen.',
                'category_id' => 3
            ],
            [
                'name' => 'Lenovo Tab P11 Pro - 128GB, Wi-Fi Only',
                'price' => 9000000,
                'stock' => 50,
                'description' => 'Lenovo Tab P11 Pro memiliki layar OLED 11,5 inci, chipset Snapdragon 730G, RAM 6GB, penyimpanan internal 128GB, baterai 8.600 mAh, dan dukungan stylus yang disebut Precision Pen 2.',
                'category_id' => 3
            ],
            [
                'name' => 'Apple iPad (2021)',
                'stock' => 5,
                'price' => 6699000,
                'description' => 'Apple iPad (2021) adalah tablet terbaru dari Apple yang dilengkapi dengan layar Retina 10.2 inci, chipset A13 Bionic, dan penyimpanan 64GB. Tablet ini juga dilengkapi dengan fitur-fitur seperti kamera 8 MP dan pengisian daya cepat.',
                'category_id' => 3
            ],
            [
                'name' => 'Samsung Galaxy Tab S7+',
                'stock' => 3,
                'price' => 11999000,
                'description' => 'Samsung Galaxy Tab S7+ adalah tablet yang dilengkapi dengan layar Super AMOLED dan S Pen. Tablet ini juga memiliki performa yang baik berkat prosesor Snapdragon 865+ dan RAM 8 GB. Cocok digunakan untuk produktivitas dan hiburan.',
                'category_id' => 3
            ],
            [
                'name' => 'iPad Mini (2021)',
                'price' => 11499000,
                'stock' => 100,
                'description' => 'iPad Mini (2021) hadir dengan layar Retina 8,3 inci, chip A15 Bionic, Touch ID yang terintegrasi pada tombol atas, kamera utama 12MP, kamera depan 7MP, dan dukungan jaringan seluler.',
                'category_id' => 3
            ],
            [
                'name' => 'Lenovo Tab M10 HD',
                'price' => 2799000,
                'stock' => 200,
                'description' => 'Lenovo Tab M10 HD memiliki layar IPS 10,1 inci, chipset MediaTek Helio P22T, RAM 2GB, penyimpanan internal 32GB, baterai 5.000 mAh, dan speaker stereo.',
                'category_id' => 3
            ]
        ];

        foreach ($tablets as $tablet) {
            Product::create($tablet);
        }

        $laptops = [
            [
                'name' => 'ASUS ROG Zephyrus G14',
                'price' => 23999000,
                'stock' => 50,
                'description' => 'ASUS ROG Zephyrus G14 hadir dengan layar 14 inci, AMD Ryzen 9 4900HS, NVIDIA GeForce RTX 2060, RAM 16GB, penyimpanan internal 1TB SSD, dan baterai 76Whr.',
                'category_id' => 4
            ],
            [
                'name' => 'Dell XPS 13',
                'price' => 25999000,
                'stock' => 100,
                'description' => 'Dell XPS 13 memiliki layar 13,4 inci, Intel Core i7-1165G7, Intel Iris Xe Graphics, RAM 16GB, penyimpanan internal 512GB SSD, dan baterai 52Whr.',
                'category_id' => 4
            ],
            [
                'name' => 'Lenovo ThinkPad X1 Carbon Gen 9',
                'price' => 28999000,
                'stock' => 75,
                'description' => 'Lenovo ThinkPad X1 Carbon Gen 9 dilengkapi dengan layar 14 inci, Intel Core i7-1165G7, Intel Iris Xe Graphics, RAM 16GB, penyimpanan internal 1TB SSD, dan baterai 57Whr.',
                'category_id' => 4
            ],
            [
                'name' => 'HP Spectre x360',
                'price' => 23999000,
                'stock' => 150,
                'description' => 'HP Spectre x360 memiliki layar 13,3 inci, Intel Core i7-1165G7, Intel Iris Xe Graphics, RAM 16GB, penyimpanan internal 1TB SSD, dan baterai 72Whr.',
                'category_id' => 4
            ],
            [
                'name' => 'Apple MacBook Air M1',
                'price' => 15999000,
                'stock' => 200,
                'description' => 'Apple MacBook Air M1 hadir dengan layar Retina 13,3 inci, Apple M1 chip dengan CPU 8-core, GPU 7-core, RAM 8GB, penyimpanan internal 256GB SSD, dan baterai 49,9Whr.',
                'category_id' => 4
            ],
            [
                'name' => 'Acer Predator Helios 300',
                'price' => 24999000,
                'stock' => 80,
                'description' => 'Acer Predator Helios 300 memiliki layar 15,6 inci, Intel Core i7-10750H, NVIDIA GeForce RTX 3060, RAM 16GB, penyimpanan internal 1TB SSD, dan baterai 59Whr.',
                'category_id' => 4
            ],
            [
                'name' => 'MSI GS66 Stealth',
                'price' => 31999000,
                'stock' => 60,
                'description' => 'MSI GS66 Stealth hadir dengan layar 15,6 inci, Intel Core i7-10870H, NVIDIA GeForce RTX 3070, RAM 16GB, penyimpanan internal 1TB SSD, dan baterai 99,9Whr.',
                'category_id' => 4
            ]
        ];
    
        foreach ($laptops as $laptop) {
            Product::create($laptop);
        }

        $smartphones = [
            [
                'name' => 'Samsung Galaxy S21 Ultra',
                'price' => 18000000,
                'stock' => 100,
                'description' => 'Samsung Galaxy S21 Ultra is the company\'s flagship smartphone for 2021, with top-of-the-line specs and features.',
                'category_id' => 5
            ],
            [
                'name' => 'iPhone 13 Pro Max',
                'price' => 22000000,
                'stock' => 50,
                'description' => 'Apple\'s latest flagship smartphone, with a large OLED display, improved cameras, and 5G connectivity.',
                'category_id' => 5
            ],
            [
                'name' => 'OnePlus 9 Pro',
                'price' => 13000000,
                'stock' => 75,
                'description' => 'OnePlus 9 Pro is a powerful Android smartphone with a 120Hz display, Snapdragon 888 processor, and Hasselblad cameras.',
                'category_id' => 5
            ],
            [
                'name' => 'Xiaomi Mi 11',
                'price' => 10000000,
                'stock' => 120,
                'description' => 'Xiaomi Mi 11 is a flagship smartphone with a 6.81-inch AMOLED display, Snapdragon 888 processor, and a 108MP camera.',
                'category_id' => 5
            ],
            [
                'name' => 'Google Pixel 6 Pro',
                'price' => 17000000,
                'stock' => 40,
                'description' => 'Google Pixel 6 Pro is the latest smartphone from Google, with a large 6.7-inch OLED display, Tensor chip, and improved cameras.',
                'category_id' => 5
            ],
            [
                'name' => 'Samsung Galaxy Z Flip3',
                'stock' => 3,
                'price' => 14999000,
                'description' => 'Samsung Galaxy Z Flip3 adalah ponsel lipat terbaru dari Samsung yang dilengkapi dengan layar AMOLED 6.7 inci dan chipset Snapdragon 888. Ponsel ini juga dilengkapi dengan kamera ganda 12 MP, sensor sidik jari di samping, dan daya tahan baterai yang lebih baik.',
                'category_id' => 5
            ],
            [
                'name' => 'Samsung Galaxy Z Flip3 5G',
                'price' => 15000000,
                'stock' => 90,
                'description' => 'Samsung Galaxy Z Flip3 5G is a foldable smartphone with a 6.7-inch AMOLED display, Snapdragon 888 processor, and 5G connectivity.',
                'category_id' => 5
            ],
            [
                'name' => 'Sony Xperia 1 III',
                'price' => 18000000,
                'stock' => 60,
                'description' => 'Sony Xperia 1 III is a high-end Android smartphone with a 6.5-inch 4K OLED display, Snapdragon 888 processor, and triple camera system.',
                'category_id' => 5
            ],
            [
                'name' => 'Asus ROG Phone 5',
                'price' => 13000000,
                'stock' => 80,
                'description' => 'Asus ROG Phone 5 is a gaming smartphone with a 6.78-inch AMOLED display, Snapdragon 888 processor, and dual front-facing speakers.',
                'category_id' => 5
            ],
        ];

        foreach ($smartphones as $smartphone) {
            Product::create($smartphone);
        }

        $mouses = [
            [
                'name' => 'Logitech M185',
                'price' => 200000,
                'stock' => 23,
                'description' => 'Mouse nirkabel dengan sensor optik yang handal dan koneksi USB nano receiver.',
                'category_id' => 6
            ],
            [
                'name' => 'Razer DeathAdder Elite',
                'price' => 1500000,
                'stock' => 45,
                'description' => 'Mouse gaming dengan sensor optik 16.000 DPI dan 7 tombol programable.',
                'category_id' => 6
            ],
            [
                'name' => 'Microsoft Basic Optical Mouse',
                'price' => 150000,
                'stock' => 32,
                'description' => 'Mouse kabel dengan desain ergonomis untuk kenyamanan penggunaan.',
                'category_id' => 6
            ],
            [
                'name' => 'HP X500',
                'price' => 100000,
                'stock' => 16,
                'description' => 'Mouse kabel dengan sensor optik dan desain ergonomis.',
                'category_id' => 6
            ],
            [
                'name' => 'Apple Magic Mouse 2',
                'price' => 2000000,
                'stock' => 73,
                'description' => 'Mouse nirkabel dengan teknologi multi-touch dan kemampuan mengisi daya baterai secara internal.',
                'category_id' => 6
            ],
            [
                'name' => 'Logitech MX Master 3',
                'price' => 1399000,
                'stock' => 6,
                'description' => 'Logitech MX Master 3 adalah mouse nirkabel yang dilengkapi dengan sensor Darkfield dan roda scroll magnetik. Mouse ini juga dilengkapi dengan fitur-fitur seperti kontrol geser untuk mengatur kecerahan dan pengaturan tombol yang dapat disesuaikan.',
                'category_id' => 6
            ],
            [
                'name' => 'Logitech G502 HERO',
                'price' => 1200000,
                'Stock' => 10,
                'Description' => 'Mouse gaming dengan sensor optik HERO 25K yang dapat menghasilkan resolusi hingga 25.000 DPI. Dilengkapi dengan 11 tombol yang dapat diprogram dan kabel USB tipe C yang dapat dilepas-pasang.',
                'category_id' => 6
            ],
            [
                'name' => 'Razer DeathAdder V2',
                'price' => 1500000,
                'Stock' => 5,
                'Description' => 'Mouse gaming yang memiliki sensor optik Focus+ 20K dengan resolusi maksimum 20.000 DPI. Terdapat 8 tombol yang dapat diprogram dan dilengkapi dengan kabel USB tipe C yang dapat dilepas-pasang.',
                'category_id' => 6
            ],
            [
                'name' => 'SteelSeries Rival 600',
                'price' => 1700000,
                'Stock' => 8,
                'Description' => 'Mouse gaming dengan sensor optik TrueMove3+ 12.000 CPI yang dapat diatur menjadi 3 level resolusi. Terdapat 7 tombol yang dapat diprogram dan dilengkapi dengan lampu RGB yang dapat disesuaikan.',
                'category_id' => 6
            ],
            [
                'name' => 'Corsair Dark Core RGB/SE',
                'price' => 1800000,
                'Stock' => 6,
                'Description' => 'Mouse gaming nirkabel dengan sensor optik PMW3367 yang dapat menghasilkan resolusi hingga 16.000 DPI. Dilengkapi dengan 9 tombol yang dapat diprogram, lampu RGB yang dapat disesuaikan, dan dapat diisi ulang melalui kabel USB atau stasiun pengisian nirkabel.',
                'category_id' => 6
            ],
            [
                'name' => 'HyperX Pulsefire Surge',
                'price' => 1000000,
                'Stock' => 12,
                'Description' => 'Mouse gaming dengan sensor optik Pixart 3389 yang dapat menghasilkan resolusi hingga 16.000 DPI. Terdapat 6 tombol yang dapat diprogram dan dilengkapi dengan lampu RGB yang dapat disesuaikan.',
                'category_id' => 6
            ],
            [
                'name' => 'ASUS ROG Gladius II',
                'price' => 2000000,
                'Stock' => 4,
                'Description' => 'Mouse gaming dengan sensor optik Pixart PMW3360 yang dapat menghasilkan resolusi hingga 12.000 DPI. Terdapat 6 tombol yang dapat diprogram dan dilengkapi dengan lampu RGB yang dapat disesuaikan serta dilengkapi dengan tombol swap yang dapat diganti-ganti.',
                'category_id' => 6
            ],
            [
                'name' => 'Cooler Master MM710',
                'price' => 900000,
                'Stock' => 9,
                'Description' => 'Mouse gaming dengan sensor optik Pixart 3389 yang dapat menghasilkan resolusi hingga 16.000 DPI. Dilengkapi dengan lampu RGB yang dapat disesuaikan, kabel USB yang ringan dan fleksibel, serta desain ultra ringan dan ergonomis untuk kenyamanan pengguna.',
                'category_id' => 6
            ]
        ];

        foreach ($mouses as $mouse) {
            Product::create($mouse);
        }

        $cameras = [
            [
                'name' => 'Canon EOS R5',
                'price' => 80000000,
                'stock' => 3,
                'description' => 'Kamera mirrorless full-frame dengan sensor CMOS 45 megapiksel dan sistem autofokus Dual Pixel CMOS AF II. Dilengkapi dengan kemampuan merekam video 8K dan 4K, serta stabilisasi gambar 5-axis.',
                'category_id' => 7
            ],
            [
                'name' => 'Sony Alpha A7R IV',
                'price' => 68000000,
                'stock' => 5,
                'description' => 'Kamera mirrorless full-frame dengan sensor CMOS 61 megapiksel dan sistem autofokus 567 titik. Dilengkapi dengan kemampuan merekam video 4K, serta stabilisasi gambar 5-axis.',
                'category_id' => 7
            ],
            [
                'name' => 'Nikon Z7 II',
                'price' => 70000000,
                'stock' => 2,
                'description' => 'Kamera mirrorless full-frame dengan sensor CMOS 45.7 megapiksel dan sistem autofokus Hybrid AF. Dilengkapi dengan kemampuan merekam video 4K, serta stabilisasi gambar 5-axis.',
                'category_id' => 7
            ],
            [
                'name' => 'Fujifilm X-T4',
                'price' => 28000000,
                'stock' => 8,
                'description' => 'Kamera mirrorless dengan sensor APS-C 26.1 megapiksel dan sistem autofokus hybrid. Dilengkapi dengan kemampuan merekam video 4K, serta stabilisasi gambar 5-axis.',
                'category_id' => 7
            ],
            [
                'name' => 'Panasonic Lumix GH5',
                'price' => 33000000,
                'stock' => 4,
                'description' => 'Kamera mirrorless dengan sensor Micro Four Thirds 20.3 megapiksel dan sistem autofokus DFD. Dilengkapi dengan kemampuan merekam video 4K, serta stabilisasi gambar 5-axis.',
                'category_id' => 7
            ],
            [
                'name' => 'Sony Alpha A6600',
                'price' => 28000000,
                'stock' => 6,
                'description' => 'Kamera mirrorless dengan sensor APS-C 24.2 megapiksel dan sistem autofokus 425 titik. Dilengkapi dengan kemampuan merekam video 4K, serta stabilisasi gambar 5-axis.',
                'category_id' => 7
            ],
            [
                'name' => 'Canon EOS 90D',
                'price' => 22000000,
                'stock' => 10,
                'description' => 'Kamera DSLR dengan sensor APS-C 32.5 megapiksel dan sistem autofokus Dual Pixel CMOS AF. Dilengkapi dengan kemampuan merekam video 4K, serta dilengkapi dengan layar LCD yang dapat diputar.',
                'category_id' => 7
            ],
            [
                'name' => 'Olympus OM-D E-M1 Mark III',
                'price' => 36000000,
                'stock' => 3,
                'description' => 'Kamera mirrorless dengan sensor Micro Four Thirds 20.4 megapiksel dan sistem autofokus 121 titik. Dilengkapi dengan kemampuan merekam video 4K, serta stabilisasi gambar 5-axis.',
                'category_id' => 7
            ],
            [
                'name' => 'Leica Q2 Monochrom',
                'price' => 130000000,
                'stock' => 1,
                'description' => 'Kamera kompak full-frame dengan sensor CMOS 47.3 megapiksel dan lensa Summilux 28mm f/1.7. Dilengkapi dengan kemampuan merekam video 4K, serta layar LCD sentuh 3 inci.',
                'category_id' => 7
            ],
            [
                'name' => 'Pentax K-1 Mark II',
                'price' => 55000000,
                'stock' => 2,
                'description' => 'Kamera DSLR full-frame dengan sensor CMOS 36.4 megapiksel dan sistem autofokus SAFOX 12. Dilengkapi dengan kemampuan merekam video full HD, serta stabilisasi gambar 5-axis.',
                'category_id' => 7
            ],
            [
                'name' => 'Hasselblad X1D II 50C',
                'price' => 220000000,
                'stock' => 1,
                'description' => 'Kamera mirrorless medium format dengan sensor CMOS 50 megapiksel dan lensa XCD 45mm f/3.5. Dilengkapi dengan kemampuan merekam video full HD, serta layar LCD sentuh 3.6 inci.',
                'category_id' => 7
            ],
            [
                'name' => 'Sony Cyber-shot RX100 VII',
                'price' => 22000000,
                'stock' => 7,
                'description' => 'Kamera kompak dengan sensor 1 inci 20.1 megapiksel dan lensa Zeiss Vario-Sonnar T* 24-200mm f/2.8-4.5. Dilengkapi dengan kemampuan merekam video 4K, serta layar LCD sentuh 3 inci.',
                'category_id' => 7
            ],
        ];

        foreach ($cameras as $camera) {
            Product::create($camera);
        }

        $gameconsole = [
            [
                'name' => 'Sony PlayStation 5',
                'price' => 8499000,
                'stock' => 200,
                'description' => 'Sony PlayStation 5 adalah konsol game terbaru dari Sony yang dilengkapi dengan teknologi grafis ray-tracing dan SSD cepat. Konsol game ini juga dilengkapi dengan fitur-fitur seperti kontroler DualSense dan akses ke layanan game streaming.',
                'category_id' => 8
            ],
            [
                'name' => 'Xbox Series X',
                'price' => 9499000,
                'stock' => 150,
                'description' => 'Xbox Series X adalah konsol game terbaru dari Microsoft, dengan spesifikasi yang sangat kuat dan desain yang elegan. Konsol ini dilengkapi dengan prosesor AMD Zen 2 dan kartu grafis AMD Radeon RDNA 2 yang memberikan kualitas grafis yang sangat tinggi. Xbox Series X juga dilengkapi dengan kontroler Xbox Wireless Controller yang dapat dihubungkan ke konsol melalui Bluetooth, sehingga Anda dapat memainkan game Anda dengan lebih mudah dan nyaman.',
                'category_id' => 8
            ],
            [
                'name' => 'Nintendo Switch',
                'price' => 4999000,
                'stock' => 300,
                'description' => 'Nintendo Switch adalah konsol game hybrid yang inovatif dari Nintendo. Konsol ini dapat digunakan sebagai konsol game stasioner atau sebagai konsol game portabel yang dapat dibawa ke mana saja. Dilengkapi dengan kontroler Joy-Con yang dapat dilepas dan dipasang kembali, Nintendo Switch menawarkan banyak opsi untuk bermain game. Konsol ini juga memiliki banyak game eksklusif Nintendo yang tidak dapat ditemukan di platform game lainnya.',
                'category_id' => 8
            ]
        ];

        foreach ($gameconsole as $game) {
            Product::create($game);
        }

        $wearables = [
            [
                'name' => 'Apple Watch Series 7',
                'price' => 8500000,
                'stock' => 15,
                'description' => 'Apple Watch Series 7 adalah smartwatch terbaru dari Apple yang dilengkapi dengan fitur-fitur seperti deteksi jatuh, pengukur oksigen darah, dan berbagai fitur kesehatan lainnya. Selain itu, Apple Watch Series 7 juga memiliki desain yang lebih besar dan layar yang lebih cerah.',
                'category_id' => 9
            ],
            [
                'name' => 'Fitbit Charge 5',
                'price' => 2500000,
                'stock' => 22,
                'description' => 'Fitbit Charge 5 adalah wearable fitness tracker yang dapat melacak aktivitas harian, detak jantung, kualitas tidur, dan pengukuran stres. Selain itu, Fitbit Charge 5 juga dilengkapi dengan fitur notifikasi dari smartphone dan pengontrol musik.',
                'category_id' => 9
            ],
            [
                'name' => 'Samsung Galaxy Watch 4',
                'price' => 5000000,
                'stock' => 25,
                'description' => 'Samsung Galaxy Watch 4 adalah smartwatch terbaru dari Samsung yang dilengkapi dengan fitur seperti deteksi jatuh, pengukur oksigen darah, dan berbagai fitur kesehatan lainnya. Selain itu, Samsung Galaxy Watch 4 juga memiliki fitur notifikasi dari smartphone, kontrol musik, dan tampilan layar yang lebih cerah.',
                'category_id' => 9
            ],
            [
                'name' => 'Garmin Venu 2',
                'price' => 6000000,
                'stock' => 13,
                'description' => 'Garmin Venu 2 adalah smartwatch yang dilengkapi dengan fitur-fitur seperti pemantauan kesehatan, pengukuran detak jantung, dan GPS. Selain itu, Garmin Venu 2 juga dilengkapi dengan fitur notifikasi dari smartphone dan pengontrol musik.',
                'category_id' => 9
            ],
            [
                'name' => 'Xiaomi Mi Band 6',
                'price' => 700000,
                'stock' => 34,
                'description' => 'Xiaomi Mi Band 6 adalah wearable fitness tracker yang dapat melacak aktivitas harian, detak jantung, kualitas tidur, dan pengukuran stres. Selain itu, Xiaomi Mi Band 6 juga dilengkapi dengan fitur notifikasi dari smartphone dan pengontrol musik. Harga yang terjangkau membuat Xiaomi Mi Band 6 menjadi pilihan populer di kalangan pengguna wearable.',
                'category_id' => 9
            ],
        ];

        foreach ($wearables as $wearable) {
            Product::create($wearable);
        }
    }
}
