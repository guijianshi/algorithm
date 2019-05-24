package structure.list;

/**
 * 线性表数组实现
 * Created by IDEA.
 * User: mc
 * Date: 19/4/17
 * Time: 上午9:40
 */
public class ListArray implements List
{
    private final int LEN = 8;

    private Strategy strategy;

    private int size;

    private Object[] elements;

    public ListArray()
    {
        this(new DefaultStrategy());
    }

    public ListArray(Strategy strategy)
    {
        this.strategy = strategy;
        size = 0;
        elements = new Object[LEN];
    }

    @Override
    public int getSize()
    {
        return size;
    }

    @Override
    public boolean isEmpty()
    {
        return 0 == size;
    }

    @Override
    public boolean contains(Object e)
    {
        for (int i = 0; i < size; i++) {
            if (strategy.equal(elements[i], e)) {
                return true;
            }
        }
        return false;
    }

    @Override
    public int indexOf(Object e)
    {
        for (int i = 0; i < size; i++) {
            if (strategy.equal(elements[i], e)) {
                return i;
            }
        }
        return -1;
    }

    @Override
    public void insert(int i, Object e) throws OutOfBoundaryException
    {
        if (i < 0 || i > size) {
            throw new OutOfBoundaryException("插入越界");
        }
        if (size >= elements.length) {
            expandSpace();
        }
        for (int j = size; j > i; j--) {
            elements[j] = elements[j - 1];
        }
        elements[i] = e;
        size++;
    }

    @Override
    public boolean insertBefore(Object o, Object e)
    {
        int i = indexOf(o);
        if (i < 0) {
            return false;
        }
        insert(i, e);
        return true;
    }

    @Override
    public boolean insertAfter(Object o, Object e)
    {
        int i = indexOf(o);
        if (i < 0) {
            return false;
        }
        insert(i + 1, e);
        return true;
    }

    @Override
    public Object remove(int i) throws OutOfBoundaryException
    {
        if (i < 0 || i > size) {
            throw new OutOfBoundaryException("插入越界");
        }
        Object o = elements[i];
        for (int j = i; j < size - 1; j++) {
            elements[j] = elements[j + 1];
        }
        elements[--size] = null;
        return o;
    }

    @Override
    public boolean remove(Object e)
    {
        int i = indexOf(e);
        if (i < 0) {
            return false;
        }
        remove(i);
        return true;
    }

    @Override
    public Object replace(int i, Object e) throws OutOfBoundaryException
    {
        if (i < 0 || i > size) {
            throw new OutOfBoundaryException("插入越界");
        }
        Object o = elements[i];
        elements[i]= e;
        return o;
    }

    @Override
    public Object get(int i) throws OutOfBoundaryException
    {
        if (i < 0 || i > size) {
            throw new OutOfBoundaryException("插入越界");
        }
        return elements[i];
    }

    /**
     * 线性表扩容
     */
    private void expandSpace()
    {
        Object[] a = new Object[elements.length * 2];
        for (int i = 0; i < elements.length; i++) {
            a[i] = elements[i];
        }
        elements = a;
    }


    private static class DefaultStrategy implements Strategy
    {
        @Override
        public boolean equal(Object o1, Object o2)
        {
            return o1.equals(o2);
        }

        @Override
        public int compare(Object o1, Object o2)
        {
            return o1.toString().compareTo(o2.toString());
        }
    }
}
