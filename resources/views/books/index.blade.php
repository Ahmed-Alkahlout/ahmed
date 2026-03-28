<!DOCTYPE html>
<html>
<head>
    <title>قائمة الكتب</title>
</head>
<body>
<h1>قائمة الكتب</h1>
<a href="{{ route('books.create') }}">إضافة كتاب جديد</a>
<hr>
<table border="1">
    <tr>
        <th>العنوان</th>
        <th>المؤلف</th>
        <th>سنة النشر</th>
        <th>العمليات</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year_published }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}">تعديل</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">حذف</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
