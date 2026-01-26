<h1>Đây là trang chủ</h1>
<table border="1" cellspacing="0">
    @for ($i = 0; $i < $n; $i++)
        <tr>
            @for ($j = 0; $j < $n; $j++)
                <td width="30" height="30" style="background: {{ ($i + $j) % 2 == 0 ? 'white' : 'black' }}"></td>
            @endfor
        </tr>
    @endfor
</table>