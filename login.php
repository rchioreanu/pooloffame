<?php
require __DIR__ . '/vendor/autoload.php';

session_start();
$provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => '6ff40f6ae0761e1c6f95596a166a29bccfe09d806ea92c207715e8e692b002a8',
    'clientSecret'            => 'd6dfae4f4c3397ded08b97db372b58c3dbd47efb982e5fecdd7272d99eacd844',
    'redirectUri'             => 'http://localhost:8080/pooloffame/login.php',
    'urlAuthorize'            => 'https://api.intra.42.fr/oauth/authorize',
    'urlAccessToken'          => 'https://api.intra.42.fr/oauth/token',
    'urlResourceOwnerDetails' => 'https://api.intra.42.fr/v2/me'
]);

// If we don't have an authorization code then get one
if (!isset($_GET['code'])) {

    // Fetch the authorization URL from the provider; this returns the
    // urlAuthorize option and generates and applies any necessary parameters
    // (e.g. state).
    $authorizationUrl = $provider->getAuthorizationUrl();

    // Get the state generated for you and store it to the session.
    $_SESSION['oauth2state'] = $provider->getState();

    // Redirect the user to the authorization URL.
    header('Location: ' . $authorizationUrl);
    exit;

    // Check given state against previously stored one to mitigate CSRF attack
} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

    unset($_SESSION['oauth2state']);
    exit('Invalid state');

} else {

    try {

        // Try to get an access token using the authorization code grant.
        $accessToken = $provider->getAccessToken('authorization_code', [
            'code'          =>  $_GET['code'],
            'client_id'     =>  '6ff40f6ae0761e1c6f95596a166a29bccfe09d806ea92c207715e8e692b002a8',
            'client_secret' =>  'd6dfae4f4c3397ded08b97db372b58c3dbd47efb982e5fecdd7272d99eacd844',
            'grant_type'    =>  'authorization_code'
        ]);

        // We have an access token, which we may use in authenticated
        // requests against the service provider's API.
        //echo $accessToken->getToken() . "<br />";
        //echo $accessToken->getRefreshToken() . "<br />";
        //echo $accessToken->getExpires() . "<br />";
        //echo ($accessToken->hasExpired() ? 'expired' : 'not expired') . "<br />";

        // Using the access token, we may look up details about the
        // resource owner.
        $resourceOwner = $provider->getResourceOwner($accessToken);

        //var_export($resourceOwner->toArray());

        $_SESSION['status'] = TRUE;
        $_SESSION['displayname'] = $resourceOwner->toArray()['displayname'];
        $_SESSION['image_url'] = $resourceOwner->toArray()['image_url'];
        $_SESSION['login'] = $resourceOwner->toArray()['login'];
        echo "
        <script>
            window.location.replace('.');
        </script>
        ";

    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {

        // Failed to get the access token or user details.
        exit($e->getMessage());

    }
}
?>
