<!DOCTYPE html>
<html>
<head>
    <title>إضافة كتاب</title>
</head>
<body>
<h1>إضافة كتاب جديد</h1>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="عنوان الكتاب" required><br><br>
    <input type="text" name="author" placeholder="اسم المؤلف" required><br><br>
    <input type="number" name="year_published" placeholder="سنة النشر" required><br><br>
    <button type="submit">حفظ الكتاب</button>
</form>
<br>
<a href="{{ route('books.index') }}">العودة للقائمة</a>
</body>
</html>
