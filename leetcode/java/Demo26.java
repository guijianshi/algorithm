package leetcode.java;

public class Demo26
{
    public static void main(String[] args)
    {
        int[] nums = {1, 1, 2, 2, 5};
        System.out.println(removeDuplicates(nums));
    }

    private static int removeDuplicates(int[] nums)
    {
        if (nums == null || nums.length == 0) {
            return 0;
        }
        int length = 1;
        int temp = nums[0];
        for (int i = 1; i < nums.length; i++) {
            if (temp != nums[i]) {
                nums[length] = nums[i];
                temp = nums[i];
                length++;
            }
        }
        return length;
    }
}
