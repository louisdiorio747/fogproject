<?php
/**
 * Access Control plugin
 *
 * PHP version 5
 *
 * @category AccessControlAssociation
 * @package  FOGProject
 * @author   Fernando Gietz <fernando.gietz@gmail.com>
 * @license  http://opensource.org/licenses/gpl-3.0 GPLv3
 * @link     https://fogproject.org
 */
/**
 * Access Control plugin
 *
 * @category AccessControlAssociation
 * @package  FOGProject
 * @author   Fernando Gietz <fernando.gietz@gmail.com>
 * @license  http://opensource.org/licenses/gpl-3.0 GPLv3
 * @link     https://fogproject.org
 */
class AccessControlAssociation extends FOGController
{
    protected $databaseTable = 'roleUserAssoc';
    protected $databaseFields = array(
        'id' => 'ruaID',
        'name' => 'ruaName',
        'roleID' => 'ruaRoleID',
        'userID' => 'ruaUserID',
    );
    protected $databaseFieldsRequired = array(
        'roleID',
        'userID',
    );
}
