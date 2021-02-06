/*
Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.
Assume the environment does not allow you to store 64-bit integers (signed or unsigned).
*/


class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if ($x == 0) {
            return 0;
        }
        
        $minus = strpos($x, "-");
        $strrev = strrev(abs($x));
        $strrev = abs($strrev);
        if ($strrev >= pow(2, 31) - 1) return 0;
        if ($strrev <= pow(2, 31) * -1) return 0;
         
        if ($minus === false) {
           return $strrev;
        } else {
           return "-" . $strrev;
        }                       
                         
        /*if ($x == 0) {
            return 0;
        }
        $minus = strpos($x, "-");
        $data = [];
        $data = str_split($x);
        $count = count($data) - 1;
        
        if ($minus === false) {
            krsort($data);
            //var_dump($data);
            if ($data[$count] == 0) {
                unset($data[$count]);
            }
            $result = implode($data);
            return $result;
        } else {
            unset($data[0]);
            krsort($data);
             if ($data[$count] == 0) {
                unset($data[$count]);
            }
            $result = implode($data);
            return "-" . $result;
        }
        */
    }
}