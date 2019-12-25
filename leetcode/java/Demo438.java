package leetcode.java;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class Demo438
{
    public static void main(String[] args)
    {
        System.out.println(findAnagrams("adfdfa", "fda"));;
    }

    public static List<Integer> findAnagrams(String s, String p)
    {
        String sub;
        char[] pChars = p.toCharArray();
        List<Integer> result = new ArrayList<>();
        Arrays.sort(pChars);
        String pSort = String.valueOf(pChars);
        for (int i = 0; i <= s.length() - p.length(); i++) {
            sub = s.substring(i, i + p.length());
            if (!sub.contentEquals(p)) {
                Arrays.sort(sub.toCharArray());
                System.out.println("sub:" + sub);
                System.out.println("pSort:" + pSort);
                if (pSort.contentEquals(String.valueOf(sub))) {
                    result.add(i);
                }
            }
        }
        return result;
    }
}
