#!/usr/bin/env php
<?php
include dirname(dirname(dirname(__FILE__))) . '/lib/init.php';
include dirname(dirname(dirname(__FILE__))) . '/class/bug.class.php';
su('admin');

/**

title=bugModel->getByAssignedbyme();
cid=1
pid=1

查询产品1 2 3 不存在的产品10001 与模块1821, 1825, 1831 不存在的模块1000001下由我指派的bug >> 0
查询产品1 2 3 不存在的产品10001 与模块1821, 1825下由我指派的bug                           >> 0
查询产品1 2 3 不存在的产品10001 与不存在的模块1000001下由我指派的bug                      >> 0
查询产品1 3与模块1821, 1825, 1831 不存在的模块1000001下由我指派的bug                      >> 0
查询产品1 3与模块1821, 1825下由我指派的bug                                                >> 0
查询产品1 3与模块不存在的模块1000001下由我指派的bug                                       >> 0
查询不存在的产品10001 与模块1821, 1825, 1831 不存在的模块1000001下由我指派的bug           >> 0
查询不存在的产品10001 与模块1821, 1825下由我指派的bug                                     >> 0
查询不存在的产品10001 与不存在的模块1000001下由我指派的bug                                >> 0

*/

$productIDList = array('1,2,3,1000001', '1,3', '1000001');
$moduleIDList  = array('1821,1825,1831,1000001', '1821, 1825', '1000001');

$bug=new bugTest();

r($bug->getByAssignedbymeTest($productIDList[0], $moduleIDList[0])) && p('title') && e('0'); // 查询产品1 2 3 不存在的产品10001 与模块1821, 1825, 1831 不存在的模块1000001下由我指派的bug
r($bug->getByAssignedbymeTest($productIDList[0], $moduleIDList[1])) && p('title') && e('0'); // 查询产品1 2 3 不存在的产品10001 与模块1821, 1825下由我指派的bug
r($bug->getByAssignedbymeTest($productIDList[0], $moduleIDList[2])) && p('title') && e('0'); // 查询产品1 2 3 不存在的产品10001 与不存在的模块1000001下由我指派的bug
r($bug->getByAssignedbymeTest($productIDList[1], $moduleIDList[0])) && p('title') && e('0'); // 查询产品1 3与模块1821, 1825, 1831 不存在的模块1000001下由我指派的bug
r($bug->getByAssignedbymeTest($productIDList[1], $moduleIDList[1])) && p('title') && e('0'); // 查询产品1 3与模块1821, 1825下由我指派的bug
r($bug->getByAssignedbymeTest($productIDList[1], $moduleIDList[2])) && p('title') && e('0'); // 查询产品1 3与模块不存在的模块1000001下由我指派的bug
r($bug->getByAssignedbymeTest($productIDList[2], $moduleIDList[0])) && p('title') && e('0'); // 查询不存在的产品10001 与模块1821, 1825, 1831 不存在的模块1000001下由我指派的bug
r($bug->getByAssignedbymeTest($productIDList[2], $moduleIDList[1])) && p('title') && e('0'); // 查询不存在的产品10001 与模块1821, 1825下由我指派的bug
r($bug->getByAssignedbymeTest($productIDList[2], $moduleIDList[2])) && p('title') && e('0'); // 查询不存在的产品10001 与不存在的模块1000001下由我指派的bug
