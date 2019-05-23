public class Demo21
{
    public static void main(String[] args)
    {
        int[] nums1 = {1,2,4};
        int[] nums2 = {1,2,3};
        ListNode list1 = ListNode.getInstanceByArray(nums1);
        ListNode list2 = ListNode.getInstanceByArray(nums2);
        ListNode mergeList = mergeTwoLists(list1, list2);
        ListNode.printR(mergeList);
    }

    private static ListNode mergeTwoLists(ListNode l1, ListNode l2)
    {
        ListNode listNode = null, current = null;
        while (true) {
            if (null == l1 || null == l2) {
                if (null == listNode) {
                    listNode = null == l1 ? l2 : l1;
                } else {
                    current.next = null == l1 ? l2 : l1;
                }
                return listNode;
            }
            int temp;
            if (l1.val > l2.val) {
                temp = l2.val;
                l2 = l2.next;
            } else {
                temp = l1.val;
                l1 = l1.next;
            }
            if (null == listNode) {
                listNode = new ListNode(temp);
                current = listNode;
            } else {
                current.next = new ListNode(temp);
                current = current.next;
            }
        }
    }
}
