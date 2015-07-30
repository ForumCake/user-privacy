<?php
namespace Cake\UserPrivacy;

trait Trait_Model
{
    use \Cake\Trait_Core;

    public function getUserPrivacyOptions($selected = array())
    {
        $privacyOptions = array(
            array(
                'label' => new \XenForo_Phrase('view_your_details_on_your_profile_page'),
                'selected' => in_array('allow_view_profile', $selected),
                'value' => 'allow_view_profile'
            ),
            array(
                'label' => new \XenForo_Phrase('post_messages_on_your_profile_page'),
                'selected' => in_array('allow_post_profile', $selected),
                'value' => 'allow_post_profile'
            ),
            array(
                'label' => new \XenForo_Phrase('start_conversations_with_you'),
                'selected' => in_array('allow_send_personal_conversation', $selected),
                'value' => 'allow_send_personal_conversation'
            ),
            array(
                'label' => new \XenForo_Phrase('view_your_identities'),
                'selected' => in_array('allow_view_identities', $selected),
                'value' => 'allow_view_identities'
            ),
            array(
                'label' => new \XenForo_Phrase('receive_your_news_feed'),
                'selected' => in_array('allow_receive_news_feed', $selected),
                'value' => 'allow_receive_news_feed'
            )
        );

        return $privacyOptions;
    }
}