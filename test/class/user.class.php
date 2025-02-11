<?php
class userTest
{
    public function __construct()
    {
        global $tester;
        $this->objectModel = $tester->loadModel('user');
    }

    /**
     * Test get user list.
     * 
     * @param  bool $count 
     * @access public
     * @return void
     */
    public function getListTest($count = false)
    {
        $objects = $this->objectModel->getList();
        if(dao::isError())
        {
            $error = dao::getError();
            return $error[0];
        }
        else
        {
            return $count ? count($objects) : $objects;
        }
    }

    /**
     * Test get user information by accounts. 
     * 
     * @param  array  $accounts 
     * @param  bool   $count 
     * @access public
     * @return void
     */
    public function getListByAccountsTest($accounts = array(), $count = false)
    {
        $objects = $this->objectModel->getListByAccounts($accounts);
        if(dao::isError())
        {
            $error = dao::getError();
            return $error[0];
        }
        else
        {
            return $count ? count($objects) : $objects;
        }
    }

    /**
     * Test user get pairs.
     * 
     * @param  string $params 
     * @param  string $usersToAppended 
     * @param  int    $maxCount 
     * @param  array  $accounts 
     * @access public
     * @return void
     */
    public function getPairsTest($params = '', $usersToAppended = '', $maxCount = 0, $accounts = array())
    {
        $objects = $this->objectModel->getPairs($params, $usersToAppended, $maxCount, $accounts);
        if(dao::isError())
        {
            $error = dao::getError();
            return $error[0];
        }
        else
        {
            return $objects;
        }
    }

    /**
     * Test get avatar pairs.
     * 
     * @access public
     * @return void
     */
    public function getAvatarPairsTest()
    {
        $objects = $this->objectModel->getAvatarPairs();
        if(dao::isError())
        {
            $error = dao::getError();
            return $error[0];
        }
        else
        {
            return $objects;
        }
    }

    /**
     * Test get user commiters.
     * 
     * @access public
     * @return void
     */
    public function getCommitersTest()
    {
        $objects = $this->objectModel->getCommiters();
        if(dao::isError())
        {
            $error = dao::getError();
            return $error[0];
        }
        else
        {
            return $objects;
        }
    }

    /**
     * Test get user realname and emails.
     * 
     * @param  array $accounts 
     * @access public
     * @return void
     */
    public function getRealNameAndEmailsTest($accounts)
    {
        $objects = $this->objectModel->getRealNameAndEmails($accounts);
        if(dao::isError())
        {
            $error = dao::getError();
            return $error[0];
        }
        else
        {
            return $objects;
        }
    }

    /**
     * Test get user roles.
     * 
     * @param  array  $accounts 
     * @param  bool   $needRole 
     * @access public
     * @return void
     */
    public function getUserRolesTest($accounts, $needRole = false)
    {
        $objects = $this->objectModel->getUserRoles($accounts, $needRole);
        if(dao::isError())
        {
            $error = dao::getError();
            return $error[0];
        }
        else
        {
            return $objects;
        }
    }

    /**
     * Test get user display infos. 
     * 
     * @param  int    $accounts 
     * @param  int    $deptID 
     * @param  string $type 
     * @access public
     * @return void
     */
    public function getUserDisplayInfosTest($accounts, $deptID = 0, $type = 'inside')
    {
        $objects = $this->objectModel->getUserDisplayInfos($accounts, $deptID, $type);
        if(dao::isError())
        {
            $error = dao::getError();
            return $error[0];
        }
        else
        {
            return $objects;
        }
    }

    /**
     * Test get user by id.
     * 
     * @param  int|string $userID 
     * @param  string     $field 
     * @access public
     * @return void
     */
    public function getByIdTest($userID, $field = 'account')
    {
        $objects = $this->objectModel->getById($userID, $field);
        if(dao::isError())
        {
            $error = dao::getError();
            return $error[0];
        }
        else
        {
            return $objects;
        }
    }

    /**
     * Test get user by query.
     * 
     * @param  string $browseType 
     * @param  string $query 
     * @param  string $orderBy 
     * @access public
     * @return void
     */
    public function getByQueryTest($browseType = 'inside', $query = '', $orderBy = 'id')
    {
        $objects = $this->objectModel->getByQuery($browseType, $query, null, $orderBy);
        if(dao::isError())
        {
            $error = dao::getError();
            return $error[0];
        }
        else
        {
            return $objects;
        }
    }

    /**
     * Test create a user.
     * 
     * @param  array $params 
     * @access public
     * @return void
     */
    public function createUserTest($params = array())
    {
        $_POST  = $params;
        $_POST['verifyPassword'] = 'e79f8fb9726857b212401e42e5b7e18b';

        $userID = $this->objectModel->create();
        unset($_POST);

        if(dao::isError())
        {
            return dao::getError();
        }
        else
        {
            return $this->objectModel->getByID($userID, 'id');
        }
    }

    /**
     * Test batch create users.
     * 
     * @access public
     * @return void
     */
    public function batchCreateUserTest($params = array())
    {
        $_POST  = $params;
        $_POST['verifyPassword'] = 'e79f8fb9726857b212401e42e5b7e18b';

        $userIDList = $this->objectModel->batchCreate();
        unset($_POST);

        if(dao::isError())
        {
            return dao::getError();
        }
        else
        {
            $users = array();
            foreach($userIDList as $userID) $users[] = $this->objectModel->getByID($userID, 'id');

            return $users;
        }
    }

    /**
     * Test edit a user.
     * 
     * @param  int   $userID
     * @param  array $params 
     * @access public
     * @return void
     */
    public function updateUserTest($userID, $params = array())
    {
        $_POST = $params;
        $_POST['verifyPassword'] = 'e79f8fb9726857b212401e42e5b7e18b';

        $this->objectModel->update($userID);
        unset($_POST);

        if(dao::isError())
        {
            return dao::getError();
        }
        else
        {
            return $this->objectModel->getByID($userID, 'id');
        }
    }

    /**
     * Test batch edit users.
     * 
     * @param  array $params 
     * @access public
     * @return void
     */
    public function batchEditUserTest($params = array())
    {
        $_POST = $params;
        $_POST['verifyPassword'] = 'e79f8fb9726857b212401e42e5b7e18b';

        $this->objectModel->batchEdit($params);
        unset($_POST);

        if(dao::isError())
        {
            return dao::getError();
        }
        else
        {
            $users      = array();
            $userIDList = array_keys($params['account']);
            foreach($userIDList as $userID) 
            {
                $user = $this->objectModel->getByID($userID, 'id');
                $users[$user->id] = $user;
            }

            return $users;
        }
    }

    /**
     * Test edit a user password.
     * 
     * @param  int   $userID
     * @param  array $params 
     * @access public
     * @return void
     */
    public function updatePasswordTest($userID, $params = array())
    {
        $_POST = $params;

        $this->objectModel->updatePassword($userID);
        unset($_POST);

        if(dao::isError())
        {
            return dao::getError();
        }
        else
        {
            return $this->objectModel->getByID($userID, 'id');
        }
    }

    /**
     * Reset user password.
     * 
     * @param  array $params 
     * @access public
     * @return void
     */
    public function resetPasswordTest($params = array())
    {
        $_POST = $params;

        $this->objectModel->resetPassword();
        unset($_POST);

        if(dao::isError())
        {
            return dao::getError();
        }
        else
        {
            $account = $params['account'];
            return $this->objectModel->getByID($account, 'account');
        }
    }

    /**
     * Check user password.
     * 
     * @param  array $params 
     * @access public
     * @return void
     */
    public function checkPasswordTest($params = array())
    {
        $_POST = $params;

        $this->objectModel->checkPassword();
        unset($_POST);

        if(dao::isError())
        {
            return dao::getError();
        }
        else
        {
            return '无报错';
        }
    }

    /**
     * Identify user.
     * 
     * @param  string $account
     * @param  string $password
     * @access public
     * @return void
     */
    public function identifyTest($account, $password)
    {
        $_POST = $params;

        $user = $this->objectModel->identify($account, $password);
        unset($_POST);

        return $user;
    }

    /**
     * Test authorize user.
     * 
     * @param  string $account
     * @access public
     * @return void
     */
    public function authorizeTest($account)
    {
        $user = $this->objectModel->authorize($account);

        return $user;
    }

    /**
     * Test login user.
     * 
     * @param  object $user
     * @access public
     * @return void
     */
    public function loginTest($user)
    {
        $user = $this->objectModel->login($user);

        if(dao::isError())
        {
            return dao::getError();
        }
        else
        {
            return $user;
        }
    }

    /**
     * Test get groups by user.
     * 
     * @param  string $account
     * @param  string $password
     * @access public
     * @return void
     */
    public function getGroupsTest($account)
    {
        $groups = $this->objectModel->getGroups($account);

        if(dao::isError())
        {
            return dao::getError();
        }
        else
        {
            return $groups;
        }
    }

    /**
     * Test get groups by visions.
     * 
     * @param  string $visions 
     * @access public
     * @return void
     */
    public function getGroupsByVisionsTest($visions)
    {
        $groups = $this->objectModel->getGroupsByVisions($visions);

        if(dao::isError())
        {
            return dao::getError();
        }
        else
        {
            return $groups;
        }
    }

    /**
     * Test get my objects.
     * 
     * @param  string $account 
     * @param  string $type 
     * @param  string $status 
     * @param  string $orderBy 
     * @access public
     * @return void
     */
    public function getObjectsTest($account, $type, $status, $orderBy)
    {
        $myObjects = $this->objectModel->getObjects($account, $type, $status, $orderBy);

        if(dao::isError()) return dao::getError();
        return $myObjects;
    }

    /**
     * Test get contact list.
     * 
     * @param  string $account 
     * @param  string $params
     * @access public
     * @return void
     */
    public function getContactListsTest($account = '', $params = '')
    {
        $contacts = $this->objectModel->getContactLists($account, $params);

        if(dao::isError()) return dao::getError();
        return $contacts;
    }

    /**
     * Test get list by account method.
     * 
     * @param  string $account 
     * @access public
     * @return void
     */
    public function getListByAccountTest($account)
    {
        return $this->objectModel->getListByAccount($account);
    }

    /**
     * Test get parent stage authed users.
     * 
     * @param  int    $stageID 
     * @access public
     * @return void
     */
    public function getParentStageAuthedUsersTest($stageID)
    {
        return $this->objectModel->getParentStageAuthedUsers($stageID);
    }

    /**
     * Test get contact list by id.
     * 
     * @param  int    $listID 
     * @access public
     * @return void
     */
    public function getContactListByIDTest($listID)
    {
        return $this->objectModel->getContactListByID($listID);
    }

    /**
     * Test get contact user pairs.
     * 
     * @param  array $accountList 
     * @access public
     * @return void
     */
    public function getContactUserPairsTest($accountList)
    {
        return $this->objectModel->getContactUserPairs($accountList);
    }

    /**
     * Test create contact list.
     * 
     * @param  string $listName 
     * @param  array  $userList 
     * @access public
     * @return void
     */
    public function createContactListTest($listName = '', $userList = array())
    {
        $listID = $this->objectModel->createContactList($listName, $userList); 

        if(dao::isError()) return dao::getError();
        return $this->objectModel->getContactListByID($listID);
    }

    /**
     * Test update contact list.
     * 
     * @param  int    $listID 
     * @param  string $listName 
     * @param  array  $userList 
     * @access public
     * @return void
     */
    public function updateContactListTest($listID = 0, $listName = '', $userList = array())
    {
        $this->objectModel->updateContactList($listID, $listName, $userList);

        if(dao::isError()) return dao::getError();
        return $this->objectModel->getContactListByID($listID);
    }

    /**
     * Test delete a contact list.
     * 
     * @param  int    $listID 
     * @access public
     * @return void
     */
    public function deleteContactListTest($listID)
    {
        $this->objectModel->deleteContactList($listID);

        if(dao::isError()) return dao::getError();
        return $this->objectModel->getContactListByID($listID);
    }

    /**
     * Test delete a contact list.
     * 
     * @param  object $user
     * @access public
     * @return void
     */
    public function getDataInJSONTest($user)
    {
        $user = $this->objectModel->getDataInJSON($user);

        if(dao::isError()) return dao::getError();
        return $user;
    }

    /**
     * Test get weak users. 
     * 
     * @access public
     * @return void
     */
    public function getWeakUsersTest()
    {
        $users = $this->objectModel->getWeakUsers();

        if(dao::isError()) return dao::getError();
        return $users;
    }

    /**
     * Test compute password strength. 
     * 
     * @access public
     * @return void
     */
    public function computePasswordStrengthTest($password)
    {
        $strength = $this->objectModel->computePasswordStrength($password);

        if(dao::isError()) return dao::getError();
        return $strength;
    }

    /**
     * Test compute user view.
     * 
     * @param  string $account 
     * @param  bool   $force 
     * @access public
     * @return void
     */
    public function computeUserViewTest($account, $force = false)
    {
        $userview = $this->objectModel->computeUserView($account, $force);

        if(dao::isError()) return dao::getError();
        return $userview;
    }

    /**
     * Test get product members.
     * 
     * @param  string $account 
     * @param  bool   $force 
     * @access public
     * @return void
     */
    public function getProductMembersTest($allProducts)
    {
        $members = $this->objectModel->getProductMembers($allProducts);

        if(dao::isError()) return dao::getError();
        return $members;
    }

    /**
     * Test get product members.
     * 
     * @param  string $account 
     * @param  bool   $force 
     * @access public
     * @return void
     */
    public function grantUserViewTest($account = '', $acls = array(), $projects = '')
    {
        $userView = $this->objectModel->grantUserView($account, $acls, $projects);

        if(dao::isError()) return dao::getError();
        return $userView;
    }

    /**
     * Test update program view.
     * 
     * @param  array  $programIdList 
     * @param  array  $users 
     * @access public
     * @return void
     */
    public function updateProgramViewTest($programIdList = array(), $users = array())
    {
        $this->objectModel->updateProgramView($programIdList, $users);

        if(dao::isError()) return dao::getError();
        return $this->objectModel->grantUserView(current($users));
    }

    /**
     * Test check program priv.
     * 
     * @param  object $program
     * @param  string $account
     * @param  array  $stakeholders
     * @param  array  $whiteList
     * @access public
     * @return void
     */
    public function checkProgramPrivTest($program, $account, $stakeholders, $whiteList)
    {
        return $this->objectModel->checkProgramPriv($program, $account, $stakeholders, $whiteList);
    }

    /**
     * Test check project priv.
     * 
     * @param  object $project
     * @param  string $account
     * @param  array  $stakeholders
     * @param  array  $teams
     * @param  array  $whiteList
     * @access public
     * @return void
     */
    public function checkProjectPrivTest($project, $account, $stakeholders, $teams, $whiteList)
    {
        return $this->objectModel->checkProjectPriv($project, $account, $stakeholders, $teams, $whiteList);
    }
    /**
     * Test check sprint priv.
     * 
     * @param  object $sprint
     * @param  string $account
     * @param  array  $stakeholders
     * @param  array  $teams
     * @param  array  $whiteList
     * @access public
     * @return void
     */
    public function checkSprintPrivTest($sprint, $account, $stakeholders, $teams, $whiteList)
    {
        return $this->objectModel->checkSprintPriv($sprint, $account, $stakeholders, $teams, $whiteList);
    }
    /**
     * Test check product priv.
     * 
     * @param  object $program
     * @param  string $account
     * @param  array  $groups
     * @param  array  $teams
     * @param  array  $stakeholders
     * @param  array  $whiteList
     * @access public
     * @return void
     */
    public function checkProductPrivTest($product, $account, $groups, $teams, $stakeholders, $whiteList)
    {
        return $this->objectModel->checkProductPriv($product, $account, $groups, $teams, $stakeholders, $whiteList);
    }

    /**
     * Test get project authed users.
     * 
     * @param  int    $projectID 
     * @param  array  $stakeholders 
     * @param  array  $teams 
     * @param  array  $whiteList 
     * @access public
     * @return void
     */
    public function getProjectAuthedUsersTest($projectID, $stakeholders, $teams, $whiteList)
    {
        global $tester;
        $project = $tester->loadModel('project')->getByID($projectID);
        return $this->objectModel->getProjectAuthedUsers($project, $stakeholders, $teams, $whiteList);
    }

    /**
     * Test get program authed users.
     * 
     * @param  int    $projectID 
     * @param  array  $stakeholders 
     * @param  array  $whiteList 
     * @access public
     * @return void
     */
    public function getProgramAuthedUsersTest($programID, $stakeholders, $whiteList)
    {
        global $tester;
        $program = $tester->loadModel('program')->getByID($programID);
        return $this->objectModel->getProgramAuthedUsers($program, $stakeholders, $whiteList);
    }

    /**
     * Test get product view list users.
     * 
     * @param  int    $productID 
     * @param  array  $teams 
     * @param  array  $stakeholders 
     * @param  array  $whiteList 
     * @access public
     * @return void
     */
    public function getProductViewListUsersTest($productID, $teams, $stakeholders, $whiteList)
    {
        global $tester;
        $product = $tester->loadModel('product')->getByID($productID);
        return $this->objectModel->getProductViewListUsers($product, $teams, $stakeholders, $whiteList);
    }

    /**
     * Test get product view list users.
     * 
     * @param  int    $productID 
     * @param  string $type
     * @param  string $params
     * @param  array  $usersToAppended
     * @access public
     * @return void
     */
    public function getTeamMemberPairsTest($objectID, $type, $params, $usersToAppended)
    {
        return $this->objectModel->getTeamMemberPairs($objectID, $type, $params, $usersToAppended);
    }

    /**
     * Test save user template.
     * 
     * @param  string $type
     * @access public
     * @return void
     */
    public function saveUserTemplate($type)
    {
        global $tester;
        $this->objectModel->saveUserTemplate($type);

        if(dao::isError()) return dao::getError();
        return $this->objectModel->getUserTemplates($type);
    }

    /**
     * Test get user templates.
     * 
     * @param  string $type
     * @access public
     * @return void
     */
    public function getUserTemplates($type)
    {
        return $this->objectModel->getUserTemplates($type);
    }

    /**
     * Test get person data.
     * 
     * @param  string $account
     * @access public
     * @return void
     */
    public function getPersonalDataTest($account)
    {
        return $this->objectModel->getPersonalData($account);
    }

    /**
     * Test get user details for api.
     * 
     * @param  array $userList
     * @access public
     * @return void
     */
    public function getUserDetailsForAPITest($userList)
    {
        return $this->objectModel->getUserDetailsForAPI($userList);
    }

    /**
     * Test get vision list.
     * 
     * @access public
     * @return void
     */
    public function getVisionListTest()
    {
        return $this->objectModel->getVisionList();
    }

    /**
     * Get users who have authority to create stories.
     *
     * @access public
     * @return array
     */
    public function getCanCreateStoryUsersTest()
    {
        return $this->objectModel->getCanCreateStoryUsers();
    }
}
