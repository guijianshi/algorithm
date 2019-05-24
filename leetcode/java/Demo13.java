public class Demo13
{
    public static void main(String[] args)
    {
        System.out.println(romanToInt("LVIII"));
        System.out.println(romanToInt("MCMXCIV"));
    }

    private static int romanToInt(String str)
    {
        String[] values = {"M","CM","D","CD","C","XC","L","XL","X","IX","V","IV","I"};
        int[] reps = {1000,900,500,400,100,90,50,40,10,9,5,4,1};

        int num = 0;
        for (int i = 0; i < values.length; i++) {
            while (str.startsWith(values[i])) {
                num += reps[i];
                str = str.substring(values[i].length());
            }
        }
        return num;
    }
}
