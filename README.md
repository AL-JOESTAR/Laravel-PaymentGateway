composer require midtrans/midtrans-php

Buat env :
MIDTRANS_MERCHANT_ID=
MIDTRANS_CLIENT_KEY=
MIDTRANS_SERVER_KEY=

isi sesuai key dan id di midtrans

buat file midtrans.php di folder config, lalu isi :
'merchant_id' => env('MIDTRANS_MERCHANT_ID'),
'client_key' => env('MIDTRANS_CLIENT_KEY'),
'server_key' => env('MIDTRANS_SERVER_KEY'),

untuk callback after payment

- install ngrok -> arahkan ke port nginx laravel sail
- ngrok http 80
- copy link ngrok ke midtrans url configuration

### Reference
https://youtube.com/playlist?list=PLBs-bxLCgCx8RnTNzu2QYvzQMuskmID1A&si=uMziMVnjWBu6fHf1