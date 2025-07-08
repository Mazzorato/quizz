<?php

$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.VIctor Hugo\n2.Emile Zola\n3. Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n"
];

$reponses = [1, 2, 3, 1, 3];
$score = 0;
$nombreQuestions = count($questions);

echo "###################################################\n";
echo "######## Qui veux gagner des millions ?! ##########\n";
echo "###################################################\n";


for ($i = 0; $i < $nombreQuestions; $i++) {
echo "###################################################\n";
echo "Score : $score\n";
echo "###################################################\n";

echo "Question " . ($i + 1) . ":\n";
echo $questions[$i];

$reponsesUser = trim(fgets(STDIN));

echo "Suspennnnnnnnce !\n";

if ($reponsesUser == $reponses[$i]){
    echo "Bien joué !\n";
    $score += 10;
    echo "Le score augmente de 10\n";
} else {
    echo "NON ! \n";
    echo "Le score n'augmente pas :(\n";
 }
}

echo "###################################################\n";
echo "Score final :  $score\n";
echo "###################################################\n";

