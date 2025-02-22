# **UltraPOS** 🛒💳

UltraPOS adalah solusi **Point of Sale (POS) modern** yang dirancang untuk berbagai jenis usaha, seperti:
✅ Minimarket\
✅ Kantin\
✅ Restoran\
✅ Toko retail

Sistem ini membantu bisnis dalam **mengelola transaksi, stok barang, laporan penjualan, dan metode pembayaran** dengan mudah dan cepat.

## **🛠️ Instalasi**

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan UltraPOS di server Anda.

### \*\*1. Salin File Konfigurasi \*\***`.env`**

Jika file **`.env`** belum ada, buat salinannya dari **`.env.example`**:

```sh
cp .env.example .env
```

### **2. Install Dependensi dengan Composer**

```sh
composer install --no-dev --optimize-autoloader
```

### **3. Generate Application Key**

```sh
php artisan key:generate
```

### **4. Jalankan Migrasi dan Seeder**

```sh
php artisan migrate --seed
```

> **⚠️ Peringatan:** Perintah ini akan menghapus semua tabel di database sebelum menjalankan migrasi ulang!

---

🎉 **Setelah langkah-langkah ini, UltraPOS siap digunakan!**\
Jika mengalami kendala, silakan laporkan melalui [Issues](https://github.com/username/repo/issues). 🚀

