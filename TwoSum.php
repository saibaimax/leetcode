/*
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
You may assume that each input would have exactly one solution, and you may not use the same element twice.
You can return the answer in any order.
*/



class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
     
    function twoSum($nums, $target) {
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                $targetItem = $nums[$i] + $nums[$j];
                if ($targetItem == $target) {
                    return array($i, $j);
                }
            }
        }
        return array(0,0);
    }
}