#!/usr/bin/env php
<?php
include dirname(dirname(dirname(__FILE__))) . '/lib/init.php';
include dirname(dirname(dirname(__FILE__))) . '/class/tutorial.class.php';
su('admin');

/**

title=测试 tutorialModel->getModulePairs();
cid=1
pid=1

*/

$tutorial = new tutorialTest();

r($tutorial->getModulePairsTest()) && p('1') && e('Test module'); //测试是否能拿到数据
