<?php
    require 'server/fb-php-sdk/facebook.php';

    $app_id = '230589470458758';
    $app_secret = 'ace894623603496b396ffe1678247b00';
    $app_namespace = 'hesham-puzzle';
    $app_url = 'https://apps.facebook.com/' . $app_namespace . '/';
    $scope = 'email,publish_actions';

    // Init the Facebook SDK
    $facebook = new Facebook(array(
         'appId'  => $app_id,
         'secret' => $app_secret,
));

// Get the current user
$user = $facebook->getUser();

// If the user has not installed the app, redirect them to the Login Dialog
if (!$user) {
        $loginUrl = $facebook->getLoginUrl(array(
        'scope' => $scope,
        'redirect_uri' => $app_url,
        ));

        print('<script> top.location.href=\'' . $loginUrl . '\'</script>');
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Hesham's Application</title>

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

  </head>

  <body>
      <h1>Hello Hesham First FB Application :D </h1>
      <h2>This should be a puzzle game and some bla bla bla...</h2>

      
  </body>
</html>
