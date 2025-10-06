<!-- Create a PHP webpage that accepts an array from the user and rearranges it 
so that all negative numbers are moved to the end while maintaining their original order.
Input Data:
Input 1: Length of the array (integer).
Input 2: Array elements (comma-separated values).
Output Expected:
Rearranged array with negatives at the end, but preserving the order of other elements.
Example:
Input: [20, 70, -40, 30, -10]
Output: [20, 70, 30, -40, -10]
Acceptance Criteria:
The program must correctly separate positive/zero and negative numbers.
Original order of positive/zero numbers must remain unchanged.
Original order of negative numbers must remain unchanged.
Input validation should handle empty or invalid entries gracefully.
Must run correctly on a PHP 7.4+ environment -->

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $Length = $_POST['length'];
        $elements = $_POST['elements'];
        $array = array_map('trim',explode(',', $elements));
        if(count($array) != $Length){
            echo "Error: The number of elements does not match the specified length.";
        } else {
            $positives = [];
            $negatives = [];
            foreach($array as $num){
                if(is_numeric($num)){
                    if($num < 0){
                        $negatives[] = $num;
                    } else {
                        $positives[] = $num;
                    }
                } else {
                    echo "Error: Invalid input. Please enter only numeric values.";
                    exit;
                }
            }
            $result = array_merge($positives, $negatives);
            echo "Rearranged array: [" . implode(", ", $result) . "]";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="length">Length of the array:</label>
        <input type="number" id="length" name="length" required><br><br>
        <label for="elements">Array elements (comma-separated):</label>
        <input type="text" id="elements" name="elements" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>