<?php
$questions = [

['question' => 'What is 2 + 2?', 'correct' => 

'4'],

['question' => 'What is the capital of France?', 'correct' => 'Paris'],

['question' => 'Who wrote "Hamlet"?',

'correct' => 'Shakespeare'],

];
//Ans giving section
$answers=[];
foreach($questions as $index=>$quiz)
{
    echo ($index+1)." . ".$quiz['question']."\n";
    $answers[]=trim(readline("Give your Answer: "));

}
//Mark evalution
function  evaluateQuiz(array $questions,array $answers):int
{
$mark=0;
foreach($questions as $index=>$quiz)
if($answers[$index]===$quiz['correct'])
{
    $mark++;
}
return $mark;
}

//feedback section 
$score=evaluateQuiz($questions,$answers);
echo "\nYou scored $score out of".count($questions)."\n";

if($score===count($questions))
{
    echo "Excellent job!";
}
else if($score>1)
{
    echo"Good effort!\n";
}
else{
    "Better luck next time!\n";
}
