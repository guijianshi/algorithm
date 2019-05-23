public class Demo24
{
    public static void main(String[] args)
    {
        int[] nums = {1,2,3,4};
        ListNode head = ListNode.getInstanceByArray(nums);
        ListNode.printR(swapPairs(head));
    }

    private static ListNode swapPairs(ListNode head)
    {
        if(head == null || head.next == null) {
            return head;
        }
        ListNode next = head.next;
        ListNode temp = next.next;
        next.next = head;
        head.next = swapPairs(temp);
        return next;
    }
}
