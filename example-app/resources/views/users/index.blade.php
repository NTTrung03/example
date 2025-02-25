<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>User List</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        <select class="role-select" data-user-id="{{ $user->id }}">
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                    </td>
                    <td>
                        <button class="update-role-btn" data-user-id="{{ $user->id }}">Update Role</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('.update-role-btn').click(function() {
                var userId = $(this).data('user-id'); // Lấy user ID từ button
                var role = $('.role-select[data-user-id="' + userId + '"]')
            .val(); // Lấy giá trị role được chọn
                var token = $('meta[name="csrf-token"]').attr('content'); // Lấy CSRF token từ meta tag

                $.ajax({
                    url: '/users/' + userId + '/update-role', // API endpoint để update role
                    type: 'POST', // Gửi request dạng POST
                    data: {
                        _token: token, // CSRF token để Laravel xác thực request
                        role: role // Gửi role mới của user
                    },
                    success: function(response) {
                        alert('Cập nhật role thành công'); // Hiển thị thông báo nếu thành công
                    },
                    error: function(response) {
                        alert('Cập nhật role thất bại'); // Hiển thị thông báo nếu thất bại
                    }
                });
            });
        });
    </script>
</body>

</html>
