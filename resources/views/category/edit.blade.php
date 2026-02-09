<h1>Cập nhật Danh mục: {{ $category->name }}</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT') <div>
        <label>Tên danh mục:</label>
        <input type="text" name="name" value="{{ $category->name }}" required>
    </div>

    <div>
        <label>Mô tả:</label>
        <textarea name="description">{{ $category->description }}</textarea>
    </div>

    <div>
        <label>Danh mục cha:</label>
        <select name="parent_id">
            <option value="">-- Không có (Là danh mục gốc) --</option>
            
            @foreach($htmlParent as $parent)
                @if($parent->id != $category->id)
                    <option value="{{ $parent->id }}" 
                        {{ $category->parent_id == $parent->id ? 'selected' : '' }}>
                        {{ $parent->name }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>

    <div>
        <label>Trạng thái:</label>
        <select name="is_active">
            <option value="1" {{ $category->is_active == 1 ? 'selected' : '' }}>Hiển thị</option>
            <option value="0" {{ $category->is_active == 0 ? 'selected' : '' }}>Ẩn</option>
        </select>
    </div>

    <button type="submit">Cập nhật</button>
</form>