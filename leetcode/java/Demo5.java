package leetcode.java;

public class Demo5
{
    public static void main(String[] args)
    {
        new Demo5().test();
    }


    public void test()
    {
        System.out.println(longestPalindrome("dsdsdsdsds"));
    }

    /**
     * 最长回文字符串
     *
     * @param s 字符串
     * @return 最长回文字符串
     */
    public String longestPalindrome(String s)
    {
        if (null == s || 1 > s.length()) {
            return "";
        }
        int start = 0, end = 0;
        for (int i = 0; i < s.length(); i++) {
            int len1 = expandAroundCenter(s, i, i); // 回文字符奇数个)
            int len2 = expandAroundCenter(s, i, i + 1); // 中间字符偶数个
            int len = Math.max(len1, len2);
            if (len > end - start) {
                start = i - (len - 1) / 2;
                end = i + len / 2;
            }
        }
        return s.substring(start, end + 1);
    }

    /**
     * 由中间向两边扩展
     *
     * @param s     字符串
     * @param left  左边起始
     * @param right 右边起始
     * @return 长度
     */
    private int expandAroundCenter(String s, int left, int right)
    {
        while (left >= 0 && right < s.length() && s.charAt(left) == s.charAt(right)) {
            left--;
            right++;
        }
        return right - left - 1; // 回文字符长度
    }
}
