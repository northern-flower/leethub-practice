class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        
        // start creating HashMap with the ids
        // 'p' -> 1
        // 'w' -> 1
        // when exists key of 
        
        // need to save substrings somewhere
        // create array of substrings (then compare which one )
        // or save a number
        
        
        // create hashmap of the caracters?
        $map = new HashMap();
        
        $current_substring = '';
        
        $current_best_substring_length = 0;
        
        for ($i=0; $i<strlen($s); $i++) {
            if ($map->get($s[$i]) == false) {
                $map->put($s[$i], 0);
                $current_substring .= $s[$i];
            }
            else {
                if (strlen($current_substring) > $current_best_substring_length)
                    $current_best_substring_length = strlen($current_substring);
                $current_substring = $s[$i];
            }
        }
        
    }
}
