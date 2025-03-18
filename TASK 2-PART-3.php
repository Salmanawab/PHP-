<?php
echo "<pre>";
echo "<h1>TASK 3-PART-1</h1>";
echo "<h2>Loops</h2>";
$marks = ( 50);

if ($marks >= 90 && $marks <= 100) {
    echo "You Got Excellent Grade: A+<br>";
} elseif ($marks >= 80 && $marks <= 89) {
    echo "You Got Very Good Grade: A<br>";
} elseif ($marks >= 70 && $marks <= 79) {
    echo "You Got Good Grade: B<br>";
} elseif ($marks >= 60 && $marks <= 69) {
    echo "You Got Satisfactory Grade: C<br>";
} else {
    echo "Grade: FAIL<br>";
}

echo "<h1>TASK 3-PART-2</h1>";

$paragraph = "The sun rises every morning, bringing light and warmth to the world. It is a symbol of hope and new beginnings. People wake up early to enjoy the beauty of the sunrise, feeling refreshed and energized. The sun's rays touch everything, from the tallest mountains to the smallest flowers. It provides energy for plants to grow, which in turn provides food for animals and humans. Without the sun, life on Earth would not exist. The sun also plays a vital role in the water cycle, evaporating water from oceans and lakes to form clouds. These clouds eventually bring rain, which is essential for all living things. The sun is not just a source of light; it is a source of life. Many cultures around the world worship the sun as a god or a powerful force. In ancient times, people built monuments to track the sun's movement, such as Stonehenge in England. Today, scientists study the sun to understand its effects on our planet and the solar system. The sun is a star, and like all stars, it has a lifespan. It has been shining for billions of years and will continue to do so for billions more. However, one day, it will exhaust its fuel and change, but that day is far in the future. For now, we can enjoy the sun's warmth and light, appreciating its importance in our daily lives. Whether it's a sunny day at the beach or a bright morning in the countryside, the sun makes everything more beautiful. It reminds us that no matter how dark the night, a new day will always come. The sun is a constant in our lives, a reminder of the cycles of nature and the passage of time. It connects us to the universe and to each other, as we all share the same sun. Let us cherish the sun and all that it gives us, for it is truly a gift.";

// Count total words
$words = str_word_count($paragraph, 1);
$totalWords = count($words);
echo "<b>Total number of words:</b>$totalWords<br>";

// Find most repeated word
$wordCounts = array_count_values($words);
arsort($wordCounts);
$mostRepeatedWord = array_key_first($wordCounts);
echo "<b>Most repeated word:</b> $mostRepeatedWord<br>";

// Display first and last word
$firstWord = $words[0];
$lastWord = end($words);
echo "<b>First word:</b> $firstWord<br>";
echo "<b>Last word:</b> $lastWord<br>";
?>