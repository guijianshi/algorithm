public class Demo19
{
    public static void main(String[] args)
    {
        ListNode node1 = new ListNode(1);
        ListNode node2 = new ListNode(2);
        ListNode node3 = new ListNode(3);
        ListNode node4 = new ListNode(4);
        ListNode node5 = new ListNode(5);
        node1.next = node2;
        node2.next = node3;
        node3.next = node4;
        node4.next = node5;
        ListNode node = removeNthFromEnd(node1, 1);
        while (node != null) {
            System.out.println(node.getVal());
            node = node.next;
        }
    }

    /**
     * 移除元素 正数长度,然后将倒数改成正数个数,最后移除
     * @param head 单向链表
     * @param n 移除位置倒数
     * @return 结果
     */
    private static ListNode removeNthFromEnd(ListNode head, int n)
    {
        int length = 0;
        ListNode currentNode = head;
        while (currentNode != null) {
            length++;
            currentNode = currentNode.next;
        }
        if (n == length) {
            return head.next;
        }
        n = length - n;
        currentNode = head;
        while (n > 1) {
            currentNode = currentNode.next;
            n--;
        }
        currentNode.next = currentNode.next.next;
        return head;
    }
}

class ListNode
{
    private int val;
    ListNode next;

    ListNode(int x)
    {
        val = x;
    }

    public int getVal()
    {
        return val;
    }

    public void setVal(int val)
    {
        this.val = val;
    }
}
