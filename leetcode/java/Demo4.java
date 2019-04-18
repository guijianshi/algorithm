package leetcode.java;


public class Demo4
{
	public static void main(String[] args)
	{
		new Demo4().test();
	}

	public void test()
	{
		int[] nums1 = {1, 2};
		int[] nums2 = {3, 4};
		System.out.println(findMedianSortedArrays(nums1, nums2));
	}

	public double findMedianSortedArrays(int[] nums1, int[] nums2)
	{
		int m = 0;
		int n = 0;
		int i = 0;
		int length = nums1.length + nums2.length;
		boolean flag = false;
		if (0 == length % 2) {

		} else {
			flag = true;
		}
		length = length / 2 + 1;
		int[] temp = new int[length];
		while (m < nums1.length || n < nums2.length) {
			if (n >= nums2.length || (m < nums1.length && nums1[m] < nums2[n])) {
				temp[i] = nums1[m];
				m++;
			} else {
				temp[i] = nums2[n];
				n++;
			}
			i++;
			if (i == length) {
				break;
			}
		}
		if (flag) {
			return temp[length - 1];
		} else {
			return ((double) temp[length - 1] + (double) temp[length - 2]) / 2;
		}
	}
}
