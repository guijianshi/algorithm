package leetcode.java;

public class Demo2
{
	public static void main(String[] args)
	{
		new Demo2().test();
	}

	public void test()
	{
		int[] a = {1, 4, 6, 7, 8};
		int[] b = {2, 5, 1, 5, 7, 9};
		ListNode l1 = buildListNode(a);
		ListNode l2 = buildListNode(b);
		ListNode result = addTwoNumbers(l1, l2);
		printListNode(result);

	}

	/**
	 * 打印链表
	 *
	 * @param result
	 */
	public void printListNode(ListNode result)
	{
		while (result != null) {
			System.out.println(result.val);
			result = result.next;
		}
	}

	/**
	 * 构建链表
	 *
	 * @param data
	 * @return
	 */
	public ListNode buildListNode(int[] data)
	{
		ListNode result = null;
		ListNode temp = null;
		for (int i = 0; i < data.length; i++) {
			ListNode node = new ListNode(data[i]);
			if (null == temp) {
				temp = node;
				result = temp;
			} else {
				temp.next = node;
				temp = node;
			}
		}
		return result;
	}

	/**
	 * 两数相加
	 *
	 * @param l1
	 * @param l2
	 * @return
	 */
	public ListNode addTwoNumbers(ListNode l1, ListNode l2)
	{
		ListNode temp = null;
		ListNode result = null;
		int i = 0;
		while (null != l1 || null != l2 || 0 != i) {
			int sum = (null != l1 ? l1.val : 0) + (null != l2 ? l2.val : 0) + i;
			i = sum / 10;
			ListNode node = new ListNode(sum % 10);
			if (null == temp) {
				temp = node;
				result = temp;
			} else {
				temp.next = node;
				temp = temp.next;
			}
			l1 = null == l1 ? null : l1.next;
			l2 = null == l2 ? null : l2.next;
		}
		return result;
	}
}

class ListNode
{
	int val;
	ListNode next;

	ListNode(int x)
	{
		val = x;
	}
}
