package leetcode.java;

import java.util.LinkedList;

public class Demo3
{
	public static void main(String[] args)
	{
		new Demo3().test();
	}

	public void test()
	{
		String s = "asdfghdsdsa";
		System.out.println(lengthOfLongestSubstring(s));
	}

	/**
	 * 最长子串长度
	 *
	 * @param s
	 * @return
	 */
	public int lengthOfLongestSubstring(String s)
	{
		int maxLen = 0; //最大长度
		int currentLen = 0; //当前长度
		char[] arr = s.toCharArray();
		LinkedList<Character> temp = new LinkedList<>();

		for (int i = 0; i < arr.length; i++) {
			if (!temp.contains(arr[i])) {
				temp.add(arr[i]);
				currentLen = temp.size();
				if (currentLen > maxLen) {
					maxLen = currentLen;
				}
			} else {
				int first = temp.indexOf(arr[i]);
				for (; first >= 0; first--) {
					temp.remove(first);
				}

				temp.add(arr[i]);
			}
		}
		return maxLen;
	}
}
