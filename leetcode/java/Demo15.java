import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class Demo15
{
    public static void main(String[] args)
    {
        int[] nums = {-1, 0, 1, 2, -1, -4};
        List<List<Integer>> lists = threeSum2(nums);
        for (List<Integer> list : lists) {
            System.out.printf("%d %d %d \r\n", list.get(0), list.get(1), list.get(2));
        }
    }

    /**
     * 暴力破解
     * 复杂度太高,超时 n^3
     * @param nums 输入
     * @return
     */
    private static List<List<Integer>> threeSum(int[] nums)
    {
        List<List<Integer>> result = new ArrayList<>();
        if (nums.length < 3) {
            return result;
        }
        if (nums.length == 3) {
            if (nums[0] + nums[1] + nums[2] == 0) {
                Integer[] item = {nums[0], nums[1], nums[2]};
                result.add(Arrays.asList(item));
            }
            return result;
        }
        Arrays.sort(nums);
        Integer[] current = new Integer[3];
        for (int i = 0; i < nums.length - 2; i++) {
            if (current[0] !=  null && nums[i] == current[0]) {
                continue;
            }
            current[0] = nums[i];
            if (nums[i] > 0) {
                break;
            }
            if (nums[i] + nums[i + 1] > 0) {
                break;
            }
            for (int j = i + 1; j < nums.length - 1; j++) {
                if (current[1] !=  null && nums[j] == current[1]) {
                    continue;
                }
                current[1] = nums[j];
                if (nums[i] + nums[j] + nums[j + 1] > 0) {
                    break;
                }
                for (int k = j + 1; k < nums.length; k++) {
                    int temp = nums[i] + nums[j] + nums[k];
                    if (0 == temp) {
                        Integer[] item = {nums[i], nums[j], nums[k]};
                        result.add(Arrays.asList(item));
                        break;
                    }
                    if (temp > 0) {
                        break;
                    }
                }
            }
        }
        return result;
    }

    /**
     * 前后双指针 复杂度降低
     * @param nums
     * @return
     */
    private static List<List<Integer>> threeSum2(int[] nums)
    {
        List<List<Integer>> result = new ArrayList<>();
        Arrays.sort(nums);
        for (int i = 0; i < nums.length; i++) {
            if (i == 0 || nums[i] > nums[i - 1]) {
                int l = i + 1;
                int r = nums.length - 1;
                while (l < r) {
                    int s = nums[i] + nums[l] + nums[r];
                    if (0 == s) {
                        Integer[] item = {nums[i], nums[l], nums[r]};
                        result.add(Arrays.asList(item));
                        l++;
                        r--;
                        while (l < r && nums[l] == nums[l-1]) {
                            l++;
                        }
                        while (r > l && nums[r] == nums[r+1]) {
                            r--;
                        }

                    } else if (s > 0) {
                        r--;
                    } else {
                        l++;
                    }
                }
            }
        }
        return result;
    }
}
