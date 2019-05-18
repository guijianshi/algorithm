import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class Demo18
{
    public static void main(String[] args)
    {
        int[] nums = {0, 0, 0, 0};
        int target = 0;
        List<List<Integer>> list = fourSum(nums, target);
        list.forEach(item -> System.out.printf(
                "%d %d %d %d \r\n",
                item.get(0),
                item.get(1),
                item.get(2),
                item.get(3)
        ));
    }

    private static List<List<Integer>> fourSum(int[] nums, int target)
    {
        List<List<Integer>> list = new ArrayList<>();
        if (nums.length < 4) {
            return list;
        }
        Arrays.sort(nums);
        for (int i = 0; i < nums.length - 3; i++) {
            if (i > 0 && nums[i] == nums[i - 1]) {
                continue;
            }
            int newTarget = target - nums[i];
            for (int j = i + 1; j < nums.length; j++) {
                if (j == i + 1 || nums[j] > nums[j - 1]) {
                    int l = j + 1, r = nums.length - 1;
                    while (l < r) {
                        int sum = nums[j] + nums[l] + nums[r];
                        if (sum == newTarget) {
                            Integer[] item = {nums[i], nums[j], nums[l], nums[r]};
                            list.add(Arrays.asList(item));
                            l++;
                            r--;
                            while (l < r && nums[l] == nums[l - 1]) {
                                l++;
                            }
                            while (l < r && nums[r] == nums[r + 1]) {
                                r--;
                            }
                        } else if (sum > newTarget) {
                            r--;
                        } else {
                            l++;
                        }
                    }
                }
            }
        }
        return list;
    }
}
