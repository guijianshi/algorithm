package leetcode.java;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by IDEA.
 * User: mc
 * Date: 19/4/1
 * Time: 上午9:45
 */
public class Demo6
{
	public static void main(String[] args)
	{
		System.out.println(convert("LEETCODEISHIRING", 3));
	}

	public static String convert(String s, int numRows)
	{
		if (numRows == 1) {
			return s;
		}
		List<StringBuilder> rows = new ArrayList<>();
		for (int i = 0; i < Math.min(numRows, s.length()); i++) {
			rows.add(new StringBuilder());
		}
		int curRow = 0;
		boolean isDown = false;

		for (char c : s.toCharArray()) {
			rows.get(curRow).append(c);
			if (curRow == 0 || curRow == numRows - 1) {
				isDown = !isDown;
			}
			curRow += isDown ? 1 : -1;
		}

		StringBuilder result = new StringBuilder();
		for (StringBuilder row : rows) {
			result.append(row);
		}
		return result.toString();
	}
}
