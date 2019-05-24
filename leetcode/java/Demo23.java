import java.util.*;

public class Demo23
{
    public static void main(String[] args)
    {
        int[] nums1 = {1,4,5};
        int[] nums2 = {1,3,4,};
        int[] nums3 = {2,6,};
        ListNode l1 = ListNode.getInstanceByArray(nums1);
        ListNode l2 = ListNode.getInstanceByArray(nums2);
        ListNode l3 = ListNode.getInstanceByArray(nums3);
        ListNode[] lists = {l1, l2, l3};
        ListNode.printR(mergeKLists(lists));
    }

    public static ListNode mergeKLists(ListNode[] lists)
    {
        List<Integer> integerList = new ArrayList<>();
        for (ListNode list : lists) {
            while (null != list) {
                integerList.add(list.val);
                list = list.next;
            }
        }
        int[] nums = new int[integerList.size()];
        for (int i = 0; i < nums.length; i++) {
            nums[i] = integerList.get(i);
        }
        Arrays.sort(nums);
        return ListNode.getInstanceByArray(nums);
    }
}
