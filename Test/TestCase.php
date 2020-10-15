<?php 

namespace Test;

use MyGreeter\Client;

include_once "../Bootstrap.php";

//当然也可以改成phpunit来运行测试
$ClientTest = new ClientTest;
$ClientTest->testInstance(Client::class);
$ClientTest->testGreetingMsg("2019-10-20 03:12:09","Good afternoon");
$ClientTest->testGreetingMsg("2019-10-20 11:12:09","Good evening");
$ClientTest->testGreetingMsg("2019-10-20 16:12:09","Good morning");
$ClientTest->testGreetingMsg("2019-10-20 05:12:09","Good morning");