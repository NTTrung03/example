<!DOCTYPE html>
<html>
<head>
    <title>Check Age</title>
</head>
<body>
    <form method="POST" action="{{ route('checkage') }}">
        @csrf
        <button type="submit" name="age" value="18">Đã đủ tuổi</button>
        <button type="submit" name="age" value="17">Chưa đủ tuổi</button>
    </form>
</body>
</html>