<!DOCTYPE html>
<html>
<head>
    <title>تعديل كتاب</title>
</head>
<body>
<h1>تعديل بيانات الكتاب</h1>
<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $book->title }}" required><br><br>
    <input type="text" name="author" value="{{ $book->author }}" required><br><br>
    <input type="number" name="year_published" value="{{ $book->year_published }}" required><br><br>

    <button type="submit">تحديث البيانات</button>
</form>
<br>
<a href="{{ route('books.index') }}">إلغاء</a>
</body>
</html>
