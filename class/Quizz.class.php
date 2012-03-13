<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Quizz 
{
    /**
     * Array(
     *  [0] => Array(
     *             ['question'] => string,
     *             ['choix'] => array(string,string...),
     *             ['points'] => array(int, int, int)
     *  [1] => ...
     * @var questions 
     */
    protected $questions = array();
    
    /**
     * Array( 
     *      'titre' => string,
     *      'image' => string,
     *      'description'=> string,
     *      'score' => array('min'=>int,'max'=>int);
     * )
     * @var $resultats 
     */
    protected $resultats = array();
    
    public function __construct($questions, $resultats=NULL)
    {
        $this->questions = $questions;
        $this->resultats = $resultats;
    }
    
    public function getQuestions()
    {
        return $this->questions;
    }
    
    public function getResultat($score)
    {
        foreach($resultats as $res)
        {
            if(($score > $res['score']['min'] && $score <= $res['score']['max']) || $score == 10) 
            { 
                return $res;
            }
        }
    }
    
    public function countQuestions()
    {
        return count($this->questions);
    }
    
    
    
    
    
    
    
}

?>
