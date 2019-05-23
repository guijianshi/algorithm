import java.util.Stack;

public class Demo20
{
    public static void main(String[] args)
    {
        System.out.println(isValid("{}"));
        System.out.println(isValid("()[]{}"));
        System.out.println(isValid("([)]"));
        System.out.println(isValid("]"));
    }

    private static boolean isValid(String s)
    {
        char[] chars = s.toCharArray();
        Stack<Character> stack = new Stack<>();
        for (char c1 : chars) {
            if ('(' == c1 || '{' == c1 || '[' == c1) {
                stack.push(c1);
            } else {
                if (stack.empty()) {
                    return false;
                }
                Character c2 = stack.pop();
                if ((c2 == '(' && c1 == ')') || (c2 == '[' && c1 == ']') || (c2 == '{' && c1 == '}')) {

                } else {
                    return false;
                }
            }
        }
        return stack.empty();
    }
}
