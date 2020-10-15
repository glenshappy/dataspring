<?php

/*
 * This file is part of the dataspring package.
 *
 * (c) glenshappy  <183599219@qq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test;

use \MyGreeter\Client;

/**
 */
class ClientTest
{
    /**
     * 
     */
    public function testInstance($instanceName)
    {
		$client = new $instanceName;
		if($client instanceof Client){
			echo 'passing',PHP_EOL;
		}else{
			echo 'error:Client expected!',PHP_EOL;
		}
    }
	/**
	 * @param $date 
	 * @param $expected
     */
    public function testGreetingMsg($date,$expected)
    {
        $client = new Client;
		
		$rs = $client->getGreetingMsg($date);
		if($rs!=$expected){
			echo "greeting error!----{$expected} expected!",PHP_EOL;
		}else{
			echo "passing",PHP_EOL;
		}
    }
}


