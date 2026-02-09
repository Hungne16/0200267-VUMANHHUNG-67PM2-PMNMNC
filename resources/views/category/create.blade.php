<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    
    <label>Tên danh mục:</label>
    <input type="text" name="name" required>
    
    <label>Danh mục cha:</label>
    <select name="parent_id">
        <option value="">-- Không có (Là cha luôn) --</option>
        @foreach($htmlParent as $cate)
            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
        @endforeach
    </select>

    <label>Trạng thái:</label>
    <select name="is_active">
        <option value="1">Hiển thị</option>
        <option value="0">Ẩn</option>
    </select>

    <button type="submit">Thêm mới</button>
</form>