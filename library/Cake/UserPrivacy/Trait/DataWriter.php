<?php
namespace Cake\UserPrivacy;

trait Trait_DataWriter
{
    use \Cake\Trait_Core;

    /**
     * Verifies the user privacy group names.
     *
     * @param array|string $userPrivacyGroupNames Array or comma-delimited list
     *
     * @return boolean
     */
    protected function _verifyUserPrivacyGroupNames(&$userPrivacyGroupNames)
    {
        if (!is_array($userPrivacyGroupNames)) {
            if ($userPrivacyGroupNames === '') {
                return true;
            }
            $userPrivacyGroupNames = preg_split('#,\s*#', $userPrivacyGroupNames);
        }

        if (!$userPrivacyGroupNames) {
            $userPrivacyGroupNames = '';
            return true;
        }

        $userPrivacyGroupNames = array_unique($userPrivacyGroupNames);
        sort($userPrivacyGroupNames, SORT_ASC);
        $userPrivacyGroupNames = implode(',', $userPrivacyGroupNames);

        return true;
    }

    /**
     * Verifies that the criteria is valid and formats is correctly.
     * Expected input format: [] with children: [rule] => name, [data] => info
     *
     * @param array|string $criteria Criteria array or serialize string; see
     * above for format. Modified by ref.
     *
     * @return boolean
     */
    protected function _verifyCriteria(&$criteria, \XenForo_DataWriter $dw, $fieldName, array $fieldData)
    {
        $criteriaFiltered = \XenForo_Helper_Criteria::prepareCriteriaForSave($criteria);
        $criteria = serialize($criteriaFiltered);

        if (!$criteriaFiltered && !empty($fieldData['required'])) {
            $this->error(new \XenForo_Phrase('please_select_criteria_that_must_be_met'), 'user_criteria');
            return false;
        } else {
            return true;
        }
    }

    /**
     * Verifies the user privacy options.
     *
     * @param array|string $userPrivacyOptions Array or comma-delimited list
     *
     * @return boolean
     */
    protected function _verifyUserPrivacyOptions(&$userPrivacyOptions)
    {
        if (!is_array($userPrivacyOptions)) {
            if ($userPrivacyOptions === '') {
                return true;
            }
            $userPrivacyOptions = preg_split('#,\s*#', $userPrivacyOptions);
        }

        if (!$userPrivacyOptions) {
            $userPrivacyOptions = '';
            return true;
        }

        $userPrivacyOptions = array_unique($userPrivacyOptions);
        sort($userPrivacyOptions, SORT_ASC);
        $userPrivacyOptions = implode(',', $userPrivacyOptions);

        return true;
    }

    /**
     * Verifies the user group IDs.
     *
     * @param array|string $userGroupIds Array or comma-delimited list
     *
     * @return boolean
     */
    protected function _verifyUserGroupIds(&$userGroupIds)
    {
        if (!is_array($userGroupIds)) {
            $userGroupIds = preg_split('#,\s*#', $userGroupIds);
        }

        $userGroupIds = array_map('intval', $userGroupIds);
        $userGroupIds = array_unique($userGroupIds);
        sort($userGroupIds, SORT_NUMERIC);
        $userGroupIds = implode(',', $userGroupIds);

        return true;
    }
}