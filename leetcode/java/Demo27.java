package leetcode.java;

public class Demo27
{
    public static void main(String[] args)
    {
        int[] nums = {1, 1, 2, 2, 5};
        System.out.println(removeElement(nums, 1));
    }

    /**
     * 单指针 空间O(1) 时间O(n)
     *
     * @param nums 输入
     * @param val  删除变量
     * @return 长度
     */
    private static int removeElement(int[] nums, int val)
    {
        if (nums == null || nums.length == 0) {
            return 0;
        }
        int length = 0;
        for (int i = 0; i < nums.length; i++) {
            if (val != nums[i]) {
                nums[length] = nums[i];
                length++;
            }
        }
        return length;
    }

    /**
     * 双指针 空间O(1) 时间O(n)
     */
    private static int removeElement2(int[] nums, int val)
    {
        int i = 0;
        int n = nums.length;
        while (i < n) {
            if (nums[i] == val) {
                nums[i] = nums[n - 1];
                n--;
            } else {
                i++;
            }
        }
        return i;
    }
}