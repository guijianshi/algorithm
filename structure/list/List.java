package structure.list;

/**
 * Created by IDEA.
 * User: mc
 * Date: 19/4/17
 * Time: 上午9:26
 */
public interface List
{
    public int getSize();

    public boolean isEmpty();

    public boolean contains(Object e);

    public int indexOf(Object e);

    public void insert(int i, Object e) throws OutOfBoundaryException;

    public boolean insertBefore(Object o, Object e);

    public boolean insertAfter(Object o, Object e);

    public Object remove(int i) throws OutOfBoundaryException;

    public boolean remove(Object e);

    public Object replace(int i, Object e) throws OutOfBoundaryException;

    public Object get(int i) throws OutOfBoundaryException;
}
