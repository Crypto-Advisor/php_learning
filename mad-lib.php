<?php

    function generateStory($singular_noun, $verb, $color, $distance_unit){
        $story = "The ${singular_noun}s are lovely, $color, and deep.
        \nBut I have promises to keep,
        \nAnd ${distance_unit}s to go before I $verb,
        \nAnd ${distance_unit}s to go before I $verb.\n";

        return $story;

    }

    echo generateStory("cat", "run", "red", "mile");
    echo generateStory("dog", "walk", "green", "km");
    echo generateStory("bull", "talk", "blue", "cm");