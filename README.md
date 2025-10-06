Task 1:
Create a PHP webpage that accepts an array from the user and rearranges it so that all negative numbers are moved to the end while maintaining their original order.
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
Must run correctly on a PHP 7.4+ environment

Task 2:
Create a PHP webpage that accepts an array of words and groups all anagrams into sub-arrays. The grouping should be case-insensitive.
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
Input validation: handle empty or single-word cases gracefully.
