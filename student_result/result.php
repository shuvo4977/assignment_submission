<?php
function calculateResult($marks) {
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            return "Mark range is invalid.";
        }
    }

    foreach ($marks as $mark) {
        if ($mark < 33) {
            return "The student has failed.";
        }
    }

    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = 'A';
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = 'B';
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = 'C';
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
    }

    return "Total Marks: $totalMarks\nAverage Marks: $averageMarks\nGrade: $grade";
}

$marks = [45, 60, 70, 80, 77];

echo calculateResult($marks);
?>
