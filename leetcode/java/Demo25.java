public class Demo25
{
    public static void main(String[] args)
    {
        int[] nums = {1,2,3,4,5};
        ListNode list = ListNode.getInstanceByArray(nums);
        ListNode.printR(reverseKGroup(list, 3));
    }

    private static ListNode reverseKGroup(ListNode head, int k)
    {
        int length = 0;
        ListNode tempLength = head;
        while (null != tempLength) {
            length++;
            tempLength = tempLength.next;
        }
        ListNode cur = head;
        for (int i = 0; i < length / k; i++) {
            for (int j = 0; j < k - 1; j++) {
                ListNode temp = cur.next;
                cur.next = temp.next;
                temp.next = cur;
                cur = cur.next;
            }
        }
        return null;
    }
}
