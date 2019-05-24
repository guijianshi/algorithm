package leetcode.java;

/**
 * Created by IDEA.
 * User: mc
 * Date: 19/4/2
 * Time: 上午9:39
 */
public class Demo9
{
	public static void main(String[] args)
	{
		System.out.println(isPalindrome(232));
		System.out.println(isPalindrome(121));
		System.out.println(isPalindrome(123));
		System.out.println(isPalindrome(0));
		System.out.println(isPalindrome(10));
	}

	public static boolean isPalindrome(int x)
	{
		if (x < 0 || x % 10 == 0) {
			return false;
		}
		int revertedNumber = 0;
		while (revertedNumber < x) {
			revertedNumber = revertedNumber * 10 + x % 10;
			x /= 10;
		}
		return revertedNumber == x || revertedNumber / 10 == x;
	}
}
