# Cara Install

# Install Depedencies
$ composer install

# Ubah DB_CONNECTION, DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD sesuai dengan settingan yang sudah disiapkan

# Setelah itu, reset cache dengan mengetikkan
$ php artisan config:cache

# Terakhir jalankan aplikasi dengan mengetik
$ php artisan serve

# catatan
# 1. Model terdapat pada App\Models\Payments\Main
# 2. Controller terdapat pada App\Http\Controllers\MainController
# 3. Job Antrian terdapat pada App\Http\Jobs\DestroyPaymentJob
# 4. Broadcasting terdapat pada App\Http\Events\DestroyPaymentEvent
# 5. Validasi Data terdapat pada App\Http\Request\Payments dengan nama StoreMain sebagai validasi data saat inputan, dan DestroyMain sebagai validasi data saat dihapus
# 6. Factory terdapat pada Database\Factories\Payment\MainFactory
# 7. Seeder terdapat pada Database\Seeders\PaymentSeeder
# 8. Unit Test terdapat pada Tests\Feature\Payment\MainTest sebagai test API Endpoint dan Validasi Data, serta Tests\Feature\Payments\QueueTest sebagai test Antrian dan Job Antrian
# 9. Tampilannya saya menggunakan Nuxt JS untuk memaksimalkan Laravel sebagai Pure API dan untuk memaksimalkan penggunaan antrian, link github saya sertakan juga pada isian google form untuk Nuxt JS ini (sudah terdapat juga cara installnya)