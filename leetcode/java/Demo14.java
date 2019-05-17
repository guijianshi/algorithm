public class Demo14
{
    public static void main(String[] args)
    {
        String[] strs = {"flower","flow","flight"};
        System.out.println(longestCommonPrefix(strs));
    }

    /**
     * @// TODO: 2019/5/17  
     * @param strs
     * @return
     */
    private static String longestCommonPrefix(String[] strs)
    {
        if (0 == strs.length) {
            return "";
        }
        String s = "";
        int minLength = strs[0].length();
        for (String str : strs) {
            minLength = Math.min(minLength, str.length());
        }
        int commonPrefixLength = 0;
        outterLoop:for (int i = 1; i < minLength; i++) {
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
