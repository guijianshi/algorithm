import java.util.ArrayList;
import java.util.List;

public class Demo17
{
    public static void main(String[] args)
    {
        List<String> list = letterCombinations("23");
        list.forEach(System.out::println);
        list = letterCombinations("234");
        list.forEach(System.out::println);

    }

    private static List<String> letterCombinations(String digits)
    {
        List<String> list = new ArrayList<>();
        String[] s = new String[digits.length()];
        if (0 == s.length) {
            return list;
        }
        for (int i = 0; i < digits.length(); i++) {
            switch (digits.charAt(i)) {
                case '2':
                    s[i] = "abc";
                    break;
                case '3':
                    s[i] = "def";
                    break;
                case '4':
                    s[i] = "ghi";
                    break;
                case '5':
                    s[i] = "jkl";
                    break;
                case '6':
                    s[i] = "mno";
                    break;
                case '7':
                    s[i] = "pqrs";
                    break;
                case '8':
                    s[i] = "tuv";
                    break;
                case '9':
                    s[i] = "wxyz";
                    break;
            }
        }
        return getStringWithFor(list, s, 0, "");
    }

    /**
     * 递归方式构造字符串
     * @param list 字符串列表
     * @param s 源字符串数组
     * @param i 层级offset数
     * @param temp 上层字符串临时变量
     * @return 字符串列表
     */
    private static List<String> getStringWithFor(List<String> list, String[]s, int i, String temp)
    {
        if (i < s.length - 1) {
            for (int j = 0; j < s[i].length(); j++) {
                list = getStringWithFor(list, s, i + 1, temp + s[i].charAt(j));
            }
        } else {
            for (int j = 0; j < s[i].length(); j++) {
                list.add(temp + s[i].charAt(j));
            }
        }
        return list;
    }
}
