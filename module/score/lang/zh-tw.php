<?php
$lang->score->common       = '我的積分';
$lang->score->record       = '積分記錄';
$lang->score->current      = '當前積分';
$lang->score->level        = '等級積分';
$lang->score->reset        = '重置';
$lang->score->tips         = '昨天增加了積分：<strong>%d</strong><br/>總積分：<strong>%d</strong>';
$lang->score->resetTips    = '重置積分執行時間可能會比較長，<br/><strong>請不要關閉窗口。</strong>';
$lang->score->resetStart   = '開始重置';
$lang->score->resetLoading = '正在重置中，已處理：';
$lang->score->resetFinish  = '重置完成';

$lang->score->id      = '編號';
$lang->score->userID  = '用戶ID';
$lang->score->account = '用戶';
$lang->score->module  = '模組';
$lang->score->method  = '動作';
$lang->score->before  = '之前';
$lang->score->score   = '分值';
$lang->score->after   = '之後';
$lang->score->time    = '時間';
$lang->score->desc    = '描述';
$lang->score->noLimit = '不限制';
$lang->score->times   = '次數';
$lang->score->hour    = '時間間隔';

$lang->score->modules['task']        = '任務';
$lang->score->modules['tutorial']    = '新手教程';
$lang->score->modules['user']        = '用戶';
$lang->score->modules['ajax']        = '其它';
$lang->score->modules['doc']         = '文檔';
$lang->score->modules['todo']        = '待辦';
$lang->score->modules['story']       = $lang->productSRCommon;
$lang->score->modules['bug']         = 'Bug';
$lang->score->modules['testcase']    = '用例';
$lang->score->modules['testtask']    = '測試單';
$lang->score->modules['build']       = 'Build';
$lang->score->modules['project']     = '項目';
$lang->score->modules['productplan'] = '計劃';
$lang->score->modules['release']     = '發佈';
$lang->score->modules['block']       = '區塊';
$lang->score->modules['search']      = '搜索';

$lang->score->methods['task']['create']              = '創建任務';
$lang->score->methods['task']['close']               = '關閉任務';
$lang->score->methods['task']['finish']              = '完成任務';
$lang->score->methods['tutorial']['finish']          = '學習完成';
$lang->score->methods['user']['login']               = '登錄';
$lang->score->methods['user']['changePassword']      = '修改密碼';
$lang->score->methods['user']['editProfile']         = '修改個人資料';
$lang->score->methods['ajax']['selectTheme']         = '切換主題';
$lang->score->methods['ajax']['selectLang']          = '切換語言';
$lang->score->methods['ajax']['showSearchMenu']      = '搜索高級用法';
$lang->score->methods['ajax']['customMenu']          = '自定義菜單';
$lang->score->methods['ajax']['dragSelected']        = '列表頁面拖動選中';
$lang->score->methods['ajax']['lastNext']            = '快捷鍵翻頁';
$lang->score->methods['ajax']['switchToDataTable']   = '使用高級表格';
$lang->score->methods['ajax']['submitPage']          = '修改分頁數量';
$lang->score->methods['ajax']['quickJump']           = '使用快速跳轉';
$lang->score->methods['ajax']['batchCreate']         = '首次使用批量添加';
$lang->score->methods['ajax']['batchEdit']           = '首次使用批量編輯';
$lang->score->methods['ajax']['batchOther']          = '其它批量操作';
$lang->score->methods['doc']['create']               = '創建文檔';
$lang->score->methods['todo']['create']              = '創建待辦';
$lang->score->methods['story']['create']             = "創建{$lang->productSRCommon}";
$lang->score->methods['story']['close']              = "{$lang->productSRCommon}關閉";
$lang->score->methods['bug']['create']               = '創建Bug';
$lang->score->methods['bug']['confirmBug']           = '確認Bug';
$lang->score->methods['bug']['createFormCase']       = '從用例創建';
$lang->score->methods['bug']['resolve']              = '解決Bug';
$lang->score->methods['bug']['saveTplModal']         = '保存模板';
$lang->score->methods['testtask']['runCase']         = '執行用例';
$lang->score->methods['testcase']['create']          = '創建用例';
$lang->score->methods['build']['create']             = '創建版本';
$lang->score->methods['project']['create']           = '創建項目';
$lang->score->methods['project']['close']            = '項目完成';
$lang->score->methods['productplan']['create']       = '創建計劃';
$lang->score->methods['release']['create']           = '創建發佈';
$lang->score->methods['block']['set']                = '區塊自定義設置';
$lang->score->methods['search']['saveQuery']         = '保存搜索條件';
$lang->score->methods['search']['saveQueryAdvanced'] = '使用高級搜索';

$lang->score->extended['user']['changePassword'] = '密碼強度為中，額外獲得##strength,1##個積分；為強，額外獲得##strength,2##個積分。';
$lang->score->extended['project']['close']       = '項目經理增加##manager,close##個積分，項目成員增加##member,close##個積分。按期或者提前完成，項目經理額外增加##manager,onTime##個積分，項目成員額外增加##member,onTime##個積分。';
$lang->score->extended['bug']['resolve']         = 'Bug解決後，額外增加嚴重程度積分：s1 + ##severity,1##, s2 + ##severity,2##, s3 + ##severity,3##。';
$lang->score->extended['bug']['confirmBug']      = 'Bug確認後，額外增加嚴重程度積分：s1 + ##severity,1##, s2 + ##severity,2##, s3 + ##severity,3##。';
$lang->score->extended['task']['finish']         = '額外增加工時積分 round(工時 / 10 * 預計 / 消耗) + 優先順序積分(p1 ##pri,1##, p2 ##pri,2##)。';
$lang->score->extended['story']['close']         = "{$lang->productSRCommon}的創建者額外增加##createID##分";
