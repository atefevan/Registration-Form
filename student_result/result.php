<?php

function getResult($marks) {
    $total = 0;
    $grade = '';
    $subjectCount = count($marks);

    // Validate input array 
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.\n";
            return;
        }
        if ($mark < 33) {
            echo "Grade : F\n"; 
            return;
        }
        $total += $mark;
    }
    
    // Get Avarage Mark
    $avgMark = $total / $subjectCount;
    
    // Set Grade
    switch (true) {
        case ($avgMark >= 80 && $avgMark <= 100):
            $grade = "A+";
            break;
        case ($avgMark >= 70 && $avgMark < 80):
            $grade = "A";
            break;
        case ($avgMark >= 60 && $avgMark < 70):
            $grade = "A-";
            break;
        case ($avgMark >= 50 && $avgMark < 60):
            $grade = "B";
            break;
        case ($avgMark >= 40 && $avgMark < 50):
            $grade = "C";
            break;
        case ($avgMark >= 33 && $avgMark < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }
    
    echo "Total Marks: $total\n";
    echo "Average Marks: $avgMark\n";
    echo "Grade: $grade\n";
}

    $marks = [45, 50, 67, 40, 34];
    getResult($marks);
?>
