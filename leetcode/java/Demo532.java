import java.util.*;

public class Demo532
{
    public static void main(String[] args)
    {
        int[] nums = {1,2,3,4,5};
        System.out.println(findPairs(nums, 2));
    }

    /**
     * 外部循环,内部折半查找
     */
    private static int findPairs(int[] nums, int k)
    {
        int result = 0;
        if (k < 0) {
            return result;
        }
        Arrays.sort(nums);
        int temp = 0;
        for (int i = 1; i < nums.length; i++) {
            int r = i - 1, l = 0;
            while (l <= r) {
                int min = (l + r) / 2;
                int abs = nums[i] - nums[min];
                if (abs == k) {
                    if (result == 0 || temp != nums[i]) {
                        result++;
                        temp = nums[i];
                    }
                    break;
                } else if (abs > k) {
                    l = min + 1;
                } else {
                    r = min - 1;
                }
            }
        }
        return result;
    }
}
