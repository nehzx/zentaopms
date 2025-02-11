#!/usr/bin/env php
<?php
include dirname(dirname(dirname(__FILE__))) . '/lib/init.php';
include dirname(dirname(dirname(__FILE__))) . '/class/weekly.class.php';
su('admin');

/**

title=测试 weeklyModel->save();
cid=1
pid=1

保存项目为已挂起、日期不为空的数据 >> 11,41
保存项目为已挂起、日期为空的数据 >> 12,41
保存项目为已关闭、日期不为空的数据 >> 13,42
保存项目为已关闭、日期为空的数据 >> 14,42
保存项目为未开始、日期不为空的数据 >> 15,43
保存项目为未开始、日期为空的数据 >> 16,43
保存项目为进行中、日期不为空的数据 >> 17,45
保存项目为进行中、日期为空的数据 >> 18,45

*/
$productID = array('41', '42', '43', '45');
$date      = array('2022-04-29', '');

$weekly = new weeklyTest();
r($weekly->saveTest($productID[0], $date[0])) && p('id,project') && e('11,41'); //保存项目为已挂起、日期不为空的数据
r($weekly->saveTest($productID[0], $date[1])) && p('id,project') && e('12,41'); //保存项目为已挂起、日期为空的数据
r($weekly->saveTest($productID[1], $date[0])) && p('id,project') && e('13,42'); //保存项目为已关闭、日期不为空的数据
r($weekly->saveTest($productID[1], $date[1])) && p('id,project') && e('14,42'); //保存项目为已关闭、日期为空的数据
r($weekly->saveTest($productID[2], $date[0])) && p('id,project') && e('15,43'); //保存项目为未开始、日期不为空的数据
r($weekly->saveTest($productID[2], $date[1])) && p('id,project') && e('16,43'); //保存项目为未开始、日期为空的数据
r($weekly->saveTest($productID[3], $date[0])) && p('id,project') && e('17,45'); //保存项目为进行中、日期不为空的数据
r($weekly->saveTest($productID[3], $date[1])) && p('id,project') && e('18,45'); //保存项目为进行中、日期为空的数据

system("./ztest init");