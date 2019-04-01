package leetcode.java;

/**
 * Created by IDEA.
 * User: mc
 * Date: 19/4/1
 * Time: 下午5:03
 */
public class Demo7
{
	public static void main(String[] args)
	{
		System.out.println(reverse(123));
	}

	public static int reverse(int x)
	{
		int rev = 0;
		while (x != 0) {
			int pop = x % 10;
			x /= 10;
			if (rev > Integer.MAX_VALUE / 10 || (rev == Integer.MAX_VALUE / 10 && pop > 7)) {
				return 0;
			}
			if (rev < Integer.MIN_VALUE / 10 || (rev == Integer.MIN_VALUE / 10 && pop < -8)) {
				return 0;
			}
			rev = rev * 10 + pop;
		}
		return rev;
	}
}
