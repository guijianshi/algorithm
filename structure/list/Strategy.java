package structure.list;

/**
 * Created by IDEA.
 * User: mc
 * Date: 19/4/17
 * Time: 上午9:37
 */
public interface Strategy
{
    /**
     * 是否相等
     */
    public boolean equal(Object o1, Object o2);

    /**
     * 比较两元素大小
     * o1 > o2 1
     * o1 = 02 0
     * o1 < o2 -1
     */
    public int compare(Object o1, Object o2);
}
