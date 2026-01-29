<h1>Danh sách sản phẩm</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
    </tr>
    @foreach ($products as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ number_format($item->price) }} VNĐ</td>
        <td>{{ $item->quantity }}</td>
    </tr>
    @endforeach
</table>