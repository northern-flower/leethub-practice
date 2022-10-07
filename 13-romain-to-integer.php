class Solution {

    /**
     * @param String $s
     * @return Integer
     */
     function romanToInt($s) {
        $sum = 0;
        
        $i = strlen($s)-1;
        
        $ar = str_split($s);
        
        while ($i>=0) {
            
            switch ($ar[$i]){
            case 'M':
                if ($ar[$i-1] == 'C') {
                    $sum += 900;
                    $i--;
                }
                else {
                    $sum += 1000;
                }
                echo 'sum = '.$sum;
                break;
            case 'D':
                if ($ar[$i-1] == 'C') {
                    $sum += 400;
                    $i--;
                }
                else {
                    $sum += 500;
                }
                echo 'sum = '.$sum;
                break;
            case 'C':
                if ($ar[$i-1] == 'X') {
                    $sum += 90;
                    $i--;
                }
                else {
                    $sum += 100;
                }
                echo 'sum = '.$sum;
                break;
            case 'L':
                if ($ar[$i-1] == 'X') {
                    $sum += 40;
                    $i--;
                }
                else {
                    $sum += 50;
                }
                echo 'sum = '.$sum;
                break;
            case 'X':
                if ($ar[$i-1] == 'I') {
                    $sum += 9;
                    $i--;
                }
                else {
                    $sum += 10;
                }
                echo 'sum = '.$sum;
                break;
            case 'V':
                if ($ar[$i-1] == 'I') {
                    $sum += 4;
                    $i--;
                }
                else {
                    $sum += 5;
                }
                echo 'sum = '.$sum;
                break;
            case 'I':
                $sum += 1;
                echo 'sum = '.$sum;
                break;
            }
            
            $i--;
        }
         return $sum;
     }
    
}
