<?php
/**
 * The control file of search module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     search
 * @version     $Id: control.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        http://www.zentao.net
 */
class search extends control
{
    /**
     * Build search form.
     *
     * @param  string  $module
     * @param  array   $searchFields
     * @param  array   $fieldParams
     * @param  string  $actionURL
     * @param  int     $queryID
     * @access public
     * @return void
     */
    public function buildForm($module = '', $searchFields = '', $fieldParams = '', $actionURL = '', $queryID = 0)
    {
        $module       = empty($module) ? $this->session->searchParams['module'] : $module;
        $searchParams = $module . 'searchParams';
        $queryID      = (empty($module) and empty($queryID)) ? $_SESSION[$searchParams]['queryID'] : $queryID;
        $searchFields = empty($searchFields) ? json_decode($_SESSION[$searchParams]['searchFields'], true) : $searchFields;
        $fieldParams  = empty($fieldParams) ?  json_decode($_SESSION[$searchParams]['fieldParams'], true)  : $fieldParams;
        $actionURL    = empty($actionURL) ?    $_SESSION[$searchParams]['actionURL'] : $actionURL;
        $style        = isset($_SESSION[$searchParams]['style']) ? $_SESSION[$searchParams]['style'] : '';
        $onMenuBar    = isset($_SESSION[$searchParams]['onMenuBar']) ? $_SESSION[$searchParams]['onMenuBar'] : '';

        $_SESSION['searchParams']['module'] = $module;
        $this->search->initSession($module, $searchFields, $fieldParams);

        $this->view->module       = $module;
        $this->view->groupItems   = $this->config->search->groupItems;
        $this->view->searchFields = $searchFields;
        $this->view->actionURL    = $actionURL;
        $this->view->fieldParams  = $this->search->setDefaultParams($searchFields, $fieldParams);
        $this->view->queries      = $this->search->getQueryPairs($module);
        $this->view->queryID      = $queryID;
        $this->view->style        = empty($style) ? 'full' : $style;
        $this->view->onMenuBar    = empty($onMenuBar) ? 'no' : $onMenuBar;
        $this->display();
    }

    /**
     * Build query
     *
     * @access public
     * @return void
     */
    public function buildQuery()
    {
        $this->search->buildQuery();
        die(js::locate($this->post->actionURL, 'parent'));
    }

    /**
     * Save search query.
     *
     * @param  string  $module
     * @param  string  $onMenuBar
     * @access public
     * @return void
     */
    public function saveQuery($module, $onMenuBar = 'no')
    {
        if($_POST)
        {
            $queryID = $this->search->saveQuery();
            if(!$queryID) die(js::error(dao::getError()));

            $data     = fixer::input('post')->get();
            $shortcut = empty($data->onMenuBar) ? 0 : 1;
            die(js::closeModal('parent.parent', '', "function(){parent.parent.loadQueries($queryID, $shortcut, '{$data->title}')}"));
        }
        $this->view->module    = $module;
        $this->view->onMenuBar = $onMenuBar;
        $this->display();
    }

    /**
     * Delete current search query.
     *
     * @param  int    $queryID
     * @access public
     * @return void
     */
    public function deleteQuery($queryID)
    {
        $this->search->deleteQuery($queryID);
        if(dao::isError()) die(js::error(dao::getError()));
        die('success');
    }

    /**
     * Ajax get search query.
     *
     * @param  string $module
     * @param  int    $queryID
     * @access public
     * @return void
     */
    public function ajaxGetQuery($module = '', $queryID = 0)
    {
        $query   = $queryID ? $queryID : '';
        $module  = empty($module) ? $this->session->searchParams['module'] : $module;
        $queries = $this->search->getQueryPairs($module);

        $html = '';
        foreach($queries as $queryID => $queryName)
        {
            if(empty($queryID)) continue;
            $html .= '<li>' . html::a("javascript:executeQuery({$queryID})", $queryName . (common::hasPriv('search', 'deleteQuery') ? '<i class="icon icon-close"></i>' : ''), '', "class='label user-query' data-query-id='$queryID'") . '</li>';
        }
        die($html);
    }

    /**
     * Ajax remove from menu.
     *
     * @param  int    $queryID
     * @access public
     * @return void
     */
    public function ajaxRemoveMenu($queryID)
    {
        $this->dao->update(TABLE_USERQUERY)->set('shortcut')->eq(0)->where('id')->eq($queryID)->exec();
    }

    /**
     * Build All index.
     *
     * @param  string  $type
     * @param  int     $lastID
     * @access public
     * @return void
     */
    public function buildIndex($type = '', $lastID = 0)
    {
        if(helper::isAjaxRequest())
        {
            $result = $this->search->buildAllIndex($type, $lastID);
            if(dao::isError()) $this->send(array('result' => 'fail', 'message' => dao::getError()));
            if(isset($result['finished']) and $result['finished'])
            {
                $this->send(array('result' => 'finished', 'message' => $this->lang->search->buildSuccessfully));
            }
            else
            {
                $this->send(array('result' => 'unfinished', 'message' => sprintf($this->lang->search->buildResult, zget($this->lang->searchObjects, ($result['type'] == 'case' ? 'testcase' : $result['type']), $result['type']), $result['count']),'next' => inlink('buildIndex', "type={$result['type']}&lastID={$result['lastID']}") ));
            }
        }

        $this->lang->search->menu = $this->lang->admin->menu;
        $this->lang->menugroup->search = 'system';

        $this->view->title = $this->lang->search->buildIndex;
        $this->display();
    }

    /**
     * Global search results home page.
     *
     * @param  int $recTotal
     * @param  int $pageID
     * @access public
     * @return void
     */
    public function index($recTotal = 0, $pageID = 1)
    {
        $this->lang->admin->menu->search = "{$this->lang->search->common}|search|index";

        if(empty($words)) $words = $this->get->words;
        if(empty($words)) $words = $this->post->words;
        if(empty($words) and ($recTotal != 0 or $pageID != 1)) $words = $this->session->searchIngWord;
        $words = strip_tags(strtolower($words));

        if(empty($type)) $type = $this->get->type;
        if(empty($type)) $type = $this->post->type;
        if(empty($type) and ($recTotal != 0 or $pageID != 1)) $type = $this->session->searchIngType;
        $type = (empty($type) or $type[0] == 'all') ? 'all' : $type;

        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $this->config->search->recPerPage, $pageID);

        /* Set session. */
        $uri  = inlink('index', "recTotal=$recTotal&pageID=$pageID");
        $uri .= strpos($uri, '?') === false ? '?' : '&';
        $uri .= 'words=' . $words;
        $this->session->set('bugList',         $uri);
        $this->session->set('buildList',       $uri);
        $this->session->set('caseList',        $uri);
        $this->session->set('docList',         $uri);
        $this->session->set('productList',     $uri);
        $this->session->set('productPlanList', $uri);
        $this->session->set('executionList',   $uri);
        $this->session->set('releaseList',     $uri);
        $this->session->set('storyList',       $uri);
        $this->session->set('taskList',        $uri);
        $this->session->set('testtaskList',    $uri);
        $this->session->set('todoList',        $uri);
        $this->session->set('effortList',      $uri);
        $this->session->set('reportList',      $uri);
        $this->session->set('testsuiteList',   $uri);
        $this->session->set('issueList',       $uri);
        $this->session->set('riskList',        $uri);
        $this->session->set('searchIngWord',   $words);
        $this->session->set('searchIngType',   $type);

        $begin = time();
        $this->view->results = $this->search->getList($words, $pager, $type);

        if(strpos($this->server->http_referer, 'search') === false)
        {
            $this->session->set('referer', $this->server->http_referer);
        }

        $this->view->consumed = time() - $begin;
        $this->view->title    = $this->lang->search->index;
        $this->view->type     = $type;
        $this->view->pager    = $pager;
        $this->view->words    = $words;
        $this->view->referer  = $this->session->referer;

        $this->display();
    }
}
