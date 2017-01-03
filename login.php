<?php
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
'app_id' => '201789086951728', // Replace {app-id} with your app id
'app_secret' => 'a7913df8bf18a07226964b204e38a727',
'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/fblogin/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';