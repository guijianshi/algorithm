package leetcode.java;

import java.util.Arrays;

/**
 * Created by IDEA.
 * User: mc
 * Date: 19/4/10
 * Time: 上午10:41
 */
public class Demo11
{
	public static void main(String[] args)
	{
		int[] ints = {1, 8, 6, 2, 5, 4, 8, 3, 7};
		System.out.println(new Demo11().maxArea2(ints));
	}

	public int maxArea(int[] height)
	{
		int maxArea = 0;
		for (int i = 0; i < height.length - 1; i++) {
			for (int j = i + 1; j < height.length; j++) {
				maxArea = Math.max(maxArea, Math.min(height[i], height[j]) * (j - i));
			}
		}
		return maxArea;
	}

	public int maxArea2(int[] height)
	{
		int maxArea = 0, l = 0, r = height.length - 1;
		while (l < r) {
			maxArea = Math.max(maxArea, Math.min(height[r], height[l]) * (r - l));
			if (height[l] < height[r]) {
				l++;
			} else {
				r--;
			}
		}
		return maxArea;
	}
}
