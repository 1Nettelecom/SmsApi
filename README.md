# netsms


To get the latest version of Netsms simply require it in your `composer.json` file.

~~~
"kubpro/netsms" : "dev-master" or composer require kubpro/netsms "dev-master"
~~~


You'll then need to run `composer install` to download it and have the autoloader updated.

-------------------



You can use the following examples after adding require_once `'vendor / autoload.php'` to your php file

-------------------


~~~php
use Kubpro\Send;


$api_key   = 'Buraya APIKEY inizi Yazın';
$numbers   = 'Numaralarınızı buaraya yazın. Virgülle ayrılmış'; //905050416585,05050469875,5623584235
$message   = 'Mesajınızı yazın';
$sender_id = 'Gönderen kimliği (Başlıq)';


$send_array = array(
    'api_key' => $api_key,
    'to' => $numbers,
    'message'=> $message,
    'sender_id' => $sender_id,
    //'speed' => true, //Eğer hızı sms göndermek istiyorsanız yorum satırı kaldırıp 'speed' => true yapın. Speed api 1 smslikdir.
);

$send = new Send($send_array);

$result = $send->request();

print_r($result);

~~~

-------------------


~~~php
use Kubpro\Balance;

$api_key   = 'Buraya APIKEY inizi Yazın';


$balance_array = array(
    'api_key' => $api_key,

);

$balance = new Balance($balance_array);

$result = $balance->request();

print_r($result);
~~~
-------------------


~~~php
use Kubpro\Reports;

$api_key = 'Buraya APIKEY inizi Yazın';
$bulk_id = 'Rapor almak için size dönen BulkId değerini girin';

$reports_array = array(
    'api_key' => $api_key,
    'BulkId' => $bulk_id

);

$report = new Reports($reports_array);

$result = $report->request();

print_r($result);
~~~
