<?php

require_once('class/Quizz.class.php');

//Fb authorization 
//...
include("include/questions.php");
$quizz = new Quizz($questions);


include_once("include/header.php");
?>


          <!-- Pub -->
          <div class="row">
              <div class="span12">
                  plop
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

<?php include_once("include/footer.php"); ?>
