<?php
$config->dev->group['index']          = 'my';
$config->dev->group['my']             = 'my';
$config->dev->group['todo']           = 'my';
$config->dev->group['program']        = 'program';
$config->dev->group['product']        = 'product';
$config->dev->group['story']          = 'product';
$config->dev->group['storyspec']      = 'product';
$config->dev->group['storystage']     = 'product';
$config->dev->group['branch']         = 'product';
$config->dev->group['productplan']    = 'product';
$config->dev->group['release']        = 'product';
$config->dev->group['project']        = 'project';
$config->dev->group['projectproduct'] = 'project';
$config->dev->group['projectstory']   = 'project';
$config->dev->group['execution']      = 'execution';
$config->dev->group['task']           = 'execution';
$config->dev->group['taskestimate']   = 'execution';
$config->dev->group['team']           = 'execution';
$config->dev->group['build']          = 'execution';
$config->dev->group['burn']           = 'execution';
$config->dev->group['qa']             = 'qa';
$config->dev->group['bug']            = 'qa';
$config->dev->group['case']           = 'qa';
$config->dev->group['testcase']       = 'qa';
$config->dev->group['casestep']       = 'qa';
$config->dev->group['testtask']       = 'qa';
$config->dev->group['testreport']     = 'qa';
$config->dev->group['testsuite']      = 'qa';
$config->dev->group['caselib']        = 'qa';
$config->dev->group['testresult']     = 'qa';
$config->dev->group['testrun']        = 'qa';
$config->dev->group['suitecase']      = 'qa';
$config->dev->group['doc']            = 'doc';
$config->dev->group['doccontent']     = 'doc';
$config->dev->group['doclib']         = 'doc';
$config->dev->group['report']         = 'report';
$config->dev->group['datatable']      = 'report';
$config->dev->group['company']        = 'company';
$config->dev->group['dept']           = 'company';
$config->dev->group['group']          = 'company';
$config->dev->group['grouppriv']      = 'company';
$config->dev->group['user']           = 'company';
$config->dev->group['usercontact']    = 'company';
$config->dev->group['usergroup']      = 'company';
$config->dev->group['userquery']      = 'company';
$config->dev->group['usertpl']        = 'company';
$config->dev->group['userview']       = 'company';
$config->dev->group['admin']          = 'admin';
$config->dev->group['extension']      = 'admin';
$config->dev->group['lang']           = 'admin';
$config->dev->group['convert']        = 'admin';
$config->dev->group['action']         = 'admin';
$config->dev->group['history']        = 'admin';
$config->dev->group['mail']           = 'admin';
$config->dev->group['backup']         = 'admin';
$config->dev->group['cron']           = 'admin';
$config->dev->group['dev']            = 'admin';
$config->dev->group['custom']         = 'admin';
$config->dev->group['score']          = 'admin';
$config->dev->group['config']         = 'admin';
$config->dev->group['svn']            = 'repo';
$config->dev->group['git']            = 'repo';
$config->dev->group['ci']             = 'repo';
$config->dev->group['compile']        = 'repo';
$config->dev->group['jenkins']        = 'repo';
$config->dev->group['job']            = 'repo';
$config->dev->group['api']            = 'api';
$config->dev->group['entry']          = 'api';
$config->dev->group['log']            = 'api';
$config->dev->group['install']        = 'system';
$config->dev->group['upgrade']        = 'system';
$config->dev->group['sso']            = 'system';
$config->dev->group['search']         = 'system';
$config->dev->group['block']          = 'system';
$config->dev->group['file']           = 'system';
$config->dev->group['tree']           = 'system';
$config->dev->group['module']         = 'system';
$config->dev->group['tutorial']       = 'system';
$config->dev->group['message']        = 'message';
$config->dev->group['mail']           = 'message';
$config->dev->group['webhook']        = 'message';
$config->dev->group['notify']         = 'message';
$config->dev->group['repo']           = 'repo';
$config->dev->group['repofiles']      = 'repo';
$config->dev->group['repohistory']    = 'repo';
$config->dev->group['repobranch']     = 'repo';
$config->dev->group['searchindex']    = 'search';
$config->dev->group['searchdict']     = 'search';

$config->dev->tableMap['storyspec']      = 'story';
$config->dev->tableMap['storystage']     = 'story';
$config->dev->tableMap['burn']           = 'task';
$config->dev->tableMap['projectproduct'] = 'project';
$config->dev->tableMap['projectstory']   = 'story';
$config->dev->tableMap['taskestimate']   = 'task';
$config->dev->tableMap['team']           = 'execution';
$config->dev->tableMap['case']           = 'testcase';
$config->dev->tableMap['casestep']       = 'testcase';
$config->dev->tableMap['testresult']     = 'testtask';
$config->dev->tableMap['testrun']        = 'testtask';
$config->dev->tableMap['doccontent']     = 'doc';
$config->dev->tableMap['doclib']         = 'doc';
$config->dev->tableMap['grouppriv']      = 'group';
$config->dev->tableMap['usercontact']    = 'user-contacts';
$config->dev->tableMap['usergroup']      = 'user';
$config->dev->tableMap['userquery']      = 'search';
$config->dev->tableMap['usertpl']        = 'user-tpl';
$config->dev->tableMap['history']        = 'action-history';
$config->dev->tableMap['lang']           = 'custom';
$config->dev->tableMap['config']         = 'custom';
$config->dev->tableMap['module']         = 'tree';
$config->dev->tableMap['suitecase']      = 'testcase';
$config->dev->tableMap['repofiles']      = 'repo';
$config->dev->tableMap['repohistory']    = 'repo';
$config->dev->tableMap['repobranch']     = 'repo';
$config->dev->tableMap['searchindex']    = 'search';

$config->dev->postParams['story']['create']['product']       = 'int';
$config->dev->postParams['story']['create']['title']         = 'string';
$config->dev->postParams['story']['create']['module']        = 'int';
$config->dev->postParams['story']['create']['plan']          = 'int';
$config->dev->postParams['story']['create']['source']        = 'string';
$config->dev->postParams['story']['create']['sourceNote']    = 'string';
$config->dev->postParams['story']['create']['reviewedBy']    = 'string';
$config->dev->postParams['story']['create']['needNotReview'] = 'string';
$config->dev->postParams['story']['create']['pri']           = 'string';
$config->dev->postParams['story']['create']['estimate']      = 'date';
$config->dev->postParams['story']['create']['spec']          = 'string';
$config->dev->postParams['story']['create']['verify']        = 'string';
$config->dev->postParams['story']['create']['color']         = 'string';
$config->dev->postParams['story']['create']['mailto']        = 'string';
$config->dev->postParams['story']['create']['keywords']      = 'string';

$config->dev->postParams['bug']['create']['product']     = 'int';
$config->dev->postParams['bug']['create']['title']       = 'string';
$config->dev->postParams['bug']['create']['openedBuild'] = 'int|trunk';
$config->dev->postParams['bug']['create']['branch']      = 'int';
$config->dev->postParams['bug']['create']['module']      = 'int';
$config->dev->postParams['bug']['create']['execution']   = 'int';
$config->dev->postParams['bug']['create']['assignedTo']  = 'string';
$config->dev->postParams['bug']['create']['deadline']    = 'date';
$config->dev->postParams['bug']['create']['type']        = 'string';
$config->dev->postParams['bug']['create']['os']          = 'string';
$config->dev->postParams['bug']['create']['browser']     = 'string';
$config->dev->postParams['bug']['create']['color']       = 'string';
$config->dev->postParams['bug']['create']['severity']    = 'int';
$config->dev->postParams['bug']['create']['pri']         = 'int';
$config->dev->postParams['bug']['create']['steps']       = 'string';
$config->dev->postParams['bug']['create']['mailto']      = 'string';
$config->dev->postParams['bug']['create']['keywords']    = 'string';

$config->dev->postParams['task']['create']['execution']  = 'int';
$config->dev->postParams['task']['create']['type']       = 'string';
$config->dev->postParams['task']['create']['name']       = 'string';
$config->dev->postParams['task']['create']['module']     = 'int';
$config->dev->postParams['task']['create']['assignedTo'] = 'string';
$config->dev->postParams['task']['create']['story']      = 'int';
$config->dev->postParams['task']['create']['pri']        = 'int';
$config->dev->postParams['task']['create']['color']      = 'string';
$config->dev->postParams['task']['create']['desc']       = 'string';
$config->dev->postParams['task']['create']['mailto']     = 'string';

$config->dev->postParams['testcase']['create']['product']      = 'int';
$config->dev->postParams['testcase']['create']['title']        = 'string';
$config->dev->postParams['testcase']['create']['type']         = 'string';
$config->dev->postParams['testcase']['create']['module']       = 'int';
$config->dev->postParams['testcase']['create']['story']        = 'int';
$config->dev->postParams['testcase']['create']['stage']        = 'string';
$config->dev->postParams['testcase']['create']['pri']          = 'int';
$config->dev->postParams['testcase']['create']['color']        = 'string';
$config->dev->postParams['testcase']['create']['precondition'] = 'string';
$config->dev->postParams['testcase']['create']['steps']        = 'string';
$config->dev->postParams['testcase']['create']['expect']       = 'string';
$config->dev->postParams['testcase']['create']['mailto']       = 'string';
$config->dev->postParams['testcase']['create']['keywords']     = 'string';
