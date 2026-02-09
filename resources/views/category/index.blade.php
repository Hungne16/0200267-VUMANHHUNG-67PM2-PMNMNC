<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Danh mục</title>
    </head>
<body>
    <h1>Quản lý Danh mục</h1>
    
    <a href="{{ route('categories.create') }}">Thêm mới danh mục</a>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Mô tả</th>
                <th>Danh mục cha</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listCate as $cate)
            <tr>
                <td>{{ $cate->id }}</td>
                <td>{{ $cate->name }}</td>
                <td>{{ $cate->description }}</td>
                
                <td>
                    {{ $cate->parent ? $cate->parent->name : '---' }}
                </td>

                <td>
                    {{ $cate->is_active ? 'Hiển thị' : 'Ẩn' }}
                </td>

                <td>
                    <a href="{{ route('categories.edit', $cate->id) }}">Sửa</a>
                    
                    <form action="{{ route('categories.destroy', $cate->id) }}" method="POST" 
                          style="display:inline;" onsubmit="return confirm('Xóa thật không?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>