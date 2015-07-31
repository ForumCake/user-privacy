<?php
namespace Cake\UserPrivacy;

class Install_FileHealthCheck extends \Cake\Install_FileHealthCheckBase
{
    
    public function getFileHashes()
    {
        return array(
        	'library/Cake/UserPrivacy/addon-Cake_UserPrivacy.xml' => 'ee540424fd2eaa7aa93ae954976e2598',
        	'library/Cake/UserPrivacy/Install/Controller.php' => 'f26ef5548a88c7a29c6bc325df31fe6c',
        	'library/Cake/UserPrivacy/Install/Data.php' => '22fa46818401d7d43afd334b98f9b083',
        	'library/Cake/UserPrivacy/Proxy.php' => 'a635a200fb5ca9549a5fb8a5eb238c10',
        	'library/Cake/UserPrivacy/Trait/DataWriter.php' => 'b68e114807eda7ff29b8441e7218e6ed',
        	'library/Cake/UserPrivacy/Trait/Model.php' => '784ec8694c799ca59a5911ba88d28ca2',
        );
    }
}