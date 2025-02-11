<?php
class myTest
{
    public function __construct()
    {
         global $tester;
         $this->objectModel = $tester->loadModel('my');
    }

    /**
     * Function getProducts test by my
     *
     * @param  string $type
     * @access public
     * @return object
     */
    public function getProductsTest($type)
    {
        $objects = $this->objectModel->getProducts($type);

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    /**
     * Function getDoingProjects test by my
     *
     * @access public
     * @return object
     */
    public function getDoingProjectsTest()
    {
        $objects = $this->objectModel->getDoingProjects();

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    /**
     * Function getOverview test by my
     *
     * @access public
     * @return object
     */
    public function getOverviewTest()
    {
        $objects = $this->objectModel->getOverview();

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    /**
     * Function getContribute test by my
     *
     * @access public
     * @return object
     */
    public function getContributeTest()
    {
        $objects = $this->objectModel->getContribute();

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    /**
     * Function getActions test by my
     *
     * @access public
     * @return array
     */
    public function getActionsTest()
    {
        $objects = $this->objectModel->getActions();

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    /**
     * Function getAssignedByMe test by my
     *
     * @param string $account
     * @param int    $limit
     * @param int    $pager
     * @param string $orderBy
     * @param int    $projectID
     * @param string $objectType
     * @access public
     * @return int
     */
    public function getAssignedByMeTest($account, $limit, $pager, $orderBy, $projectID, $objectType)
    {
        global $tester;
        $recTotal = 0;
        $recPerPage = 20;
        $pageID = 0;
        $tester->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        $actionID = $tester->loadModel('action')->create('task', 6, 'assigned', '', '', 'admin', '');
        $actionID = $tester->loadModel('action')->create('bug', 6, 'assigned', '', '', 'admin', '');
        $actionID = $tester->loadModel('action')->create('story', 5, 'assigned', '', '', 'admin', '');
        $objects = $this->objectModel->getAssignedByMe($account, $limit, $pager, $orderBy, $projectID, $objectType);

        if(dao::isError()) return dao::getError();

        return count($objects);
    }

}
