package leetcode.java;

import java.util.HashMap;

public class Demo1
{
    public static void main(String[] args)
    {
        int[] a = {3, 2, 3};
        Demo1 demo1 = new Demo1();
        demo1.twoSum(a, 6);

    }

    /**
     * 暴力破解
     *
     * @param nums
     * @param target
     * @return
     */
    public int[] twoSum(int[] nums, int target)
    {
        int[] res = new int[2];
        for (int i = 0; i < nums.length - 1; i++) {
            for (int j = i + 1; j < nums.length; j++) {
                if (nums[i] + nums[j] == target) {
                    res[0] = i;
                    res[1] = j;
                    break;
                }
            }
        }
        return res;
    }


    /**
     * 利用哈希表
     *
     * @param nums
     * @param target
     * @return
     */
    public int[] twoSum2(int[] nums, int target)
    {
        int[] a = new int[2];
        HashMap<Integer, Integer> map = new HashMap<>();
        for (int i = 0; i < nums.length; i++) {
            if (map.containsKey(nums[i])) {
                a[0] = map.get(nums[i]);
                a[1] = i + 1;
            }

            map.put(nums[i], i++);
        }
        return a;
    }
}
