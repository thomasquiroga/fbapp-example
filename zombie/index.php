<?php

require_once('../class/Quizz.class.php');

//Fb authorization 
require_once("../class/facebook.php");

$config = array();
$config['appId'] = '171554456297299';
$config['secret'] = 'eb95e8709883b28402916c646bb506aa';
$config['fileUpload'] = false; // optional

$facebook = new Facebook($config);

// Get User ID
$user = $facebook->getUser();


if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

// This call will always work since we are fetching public data.
$naitik = $facebook->api('/thomas.quiroga');


include("questions.php");
$quizz = new Quizz($questions);


include_once("../include/header.php");
?>


          <!-- Pub -->
          <div class="row">
              <div class="span12">
                  
    <?php if ($user): ?>
      <a href="<?php echo $logoutUrl; ?>">Logout</a>
    <?php else: ?>
      <div>
        Login using OAuth 2.0 handled by the PHP SDK:
        <a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
      </div>
    <?php endif ?>

    <h3>PHP Session</h3>
    <pre><?php print_r($_SESSION); ?></pre>

    <?php if ($user): ?>
      <h3>You</h3>
      <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

      <h3>Your User Object (/me)</h3>
      <pre><?php print_r($user_profile); ?></pre>
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>

    <h3>Public profile of thomas.quiroga</h3>
    <img src="https://graph.facebook.com/thomas.quiroga/picture">
    <?php echo $naitik['name']; ?>
                  
              </div>
          </div>  

          <div class="row">
              <div class="span12">
                  
                  <hr/>
                  <div class="simplecontent">
                  <h1 class="text-center <?php echo $config['fontstyle'] ?>"><?php echo $config['title'] ?></h1>
                  <br/>
                  <p class="normalfont"><?php echo $config['description'] ?></p>
                  <br/>
                  
                  <form class="form-vertical" id="quizzform">
                      
                      
                      
                      
                      <?php $i = 1; ?>
                      <?php foreach($quizz->getQuestions() as $q): ?>
                      <p class="question"><span class="question-number"><?php echo $i; ?> </span> <?php echo $q['question']; ?></p>
                      <p>
                          <?php for($j = 0; $j < count($q['choix']); $j++): ?>
                            <label class="radio"><input type="radio" name="question<?php echo $i; ?>" value="<?php echo $q['points'][$j]; ?>" /><?php echo $q['choix'][$j]; ?></label>
                          <?php endfor; ?>
                      </p>
                      <hr/>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                      
                      
                      
                      <p>
                          <input type="submit" class="btn btn-success submit" value="Valider" />
                      </p>
                      
                  </form>
                      
                  </div>
              </div>
          </div>  

<?php include_once("../include/footer.php"); ?>
