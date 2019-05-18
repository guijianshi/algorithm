import java.util.Arrays;

public class Demo16
{
    public static void main(String[] args)
    {
        int[] nums = {1, 2, 3, 4};
        int target = 1;
        System.out.println(threeSumClosest(nums, target));
    }

    private static int threeSumClosest(int[] nums, int target)
    {
        Arrays.sort(nums);
        int temp = nums[0] + nums[1] + nums[2];
        for (int i = 0; i < nums.length - 2; i++) {
            int l = i + 1, r = nums.length - 1;
            while (l < r) {
                int threeSum = nums[i] + nums[l] + nums[r];
                if (Math.abs(threeSum - target) < Math.abs(temp - target)) {
                    temp = threeSum;
                }
                if (threeSum > target) {
                    r--;
                } else if (threeSum < target) {
                    l++;
                } else {
                    temp = target;
                    return temp;
                }
            }
        }
        return temp;
    }
}
