public class ListNode
{
    int val;

    ListNode next;

    public ListNode(int val)
    {
        this.val = val;
    }

    public static ListNode getInstanceByArray(int[] ints)
    {
        ListNode head = null, current = null;
        for (int i : ints) {
            if (null == head) {
                head = new ListNode(i);
                current = head;
            } else {
                current.next = new ListNode(i);
                current = current.next;
            }
        }
        return head;
    }

    /**
     * 格式化输出链表
     * @param list
     */
    public static void printR(ListNode list)
    {
        while (list != null) {
            System.out.print(list.val);
            list = list.next;
        }
        System.out.println();
    }
}
