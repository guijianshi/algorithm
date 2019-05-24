public class Demo14
{
    public static void main(String[] args)
    {
        String[] strs = {"f","f","f"};
        System.out.println(longestCommonPrefix(strs));
    }

    /**
     * @param strs 字符数组
     * @return
     */
    private static String longestCommonPrefix(String[] strs)
    {
        if (0 == strs.length) {
            return "";
        } else if (1 == strs.length) {
            return strs[0];
        }
        String s = "";
        int minLength = strs[0].length();
        for (String str : strs) {
            minLength = Math.min(minLength, str.length());
        }
        int commonPrefixLength = 0;
        outterLoop:for (int i = 1; i < minLength + 1; i++) {
            s = strs[0].substring(0, i);
            for (String str : strs) {
                if (!str.startsWith(s)) {
                    break outterLoop;
                }
            }
            commonPrefixLength++;
        }
        return s.substring(0, commonPrefixLength);
    }
}
