<?php
function fordperfect(){
    $galactic = [
        'Le Guide du voyageur galactique (1979, traduction française 1982).',
        'Le Dernier Restaurant avant la fin du monde (1980, traduction française 1982).,
        La Vie, l\'Univers et le Reste (1982, traduction française 1983).',
        'Salut, et encore merci pour le poisson (1984, traduction française 1994).',
        'Globalement inoffensive (1992, traduction française 1994).',
    ];
    for($i=0 ; $i < count($galactic) ; $i++)
    {
        
        echo ($galactic[$i] . "<br>");
        //count c'est pour une limite que s'adapte au tableau
    }
    
}

fordperfect();

?>

