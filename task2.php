<!-- Create a PHP webpage that accepts an array of words and groups all anagrams into sub-arrays. The grouping should be case-insensitive.
Input Data:
Input: A string of words separated by commas.
Example: eat, tea, Tan, Ate, nat, bat
Output Expected:
A grouped array of anagrams.
Example:
Input:
eat, tea, Tan, Ate, nat, bat
Output:
[
  ["eat","tea","Ate"],
  ["Tan","nat"],
  ["bat"]
]
Acceptance Criteria:
Anagrams must be grouped together regardless of case (e.g., "Tan" and "nat" are considered the same group).
Output should maintain words in the same case as entered.
Non-anagram words should appear as their own group.
Input validation: handle empty or single-word cases gracefully -->
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $wordsInput = $_POST['words'];
        $wordsArray = array_map('trim', explode(',', $wordsInput));
        
        if(empty($wordsInput)){
            echo "Error: Input cannot be empty.";
            exit;
        }
        
        if(count($wordsArray) == 1){
            echo "Output: [[" . $wordsArray[0] . "]]";
            exit;
        }

        $anagrams = [];
        
        foreach($wordsArray as $word){
            $key = str_split($word);
            sort($key);
            $key = implode('', $key);
            $anagrams[$key][] = $word;
        }
        
        $result = array_values($anagrams);
        
        echo "Grouped anagrams: [";
        foreach($result as $group){
            echo "[" . implode(", ", array_map(function($w) { return '"' . $w . '"'; }, $group)) . "], ";
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
        <label for="words">Enter words (comma-separated):</label>
        <input type="text" id="words" name="words" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>