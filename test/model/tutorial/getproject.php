#!/usr/bin/env php
<?php
include dirname(dirname(dirname(__FILE__))) . '/lib/init.php';
include dirname(dirname(dirname(__FILE__))) . '/class/tutorial.class.php';
su('admin');

/**

title=测试 tutorialModel->getProject();
cid=1
pid=1

*/

$tutorial = new tutorialTest();

r($tutorial->getProjectTest()) && p('type') && e('project'); //测试是否能拿到数据
