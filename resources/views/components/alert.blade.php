{{-- Nhận dữ liệu truyền từ component --}}
{{-- type: success hoặc warning --}}
{{-- title: tiêu đề của thông báo --}}
@props([
    'type' => 'success',
    'title' => 'Thông báo'
])

{{-- Khung hiển thị thông báo --}}
<div
    style="
        padding:10px;
        border-radius:8px;
        margin-bottom:10px;

        /* Nếu success thì nền xanh, ngược lại nền vàng */
        background: {{ $type == 'success' ? '#ECFDF5' : '#FEF3C7' }};

        /* Nếu success thì chữ xanh, ngược lại chữ vàng đậm */
        color: {{ $type == 'success' ? '#065F46' : '#92400E' }};
    "
>

    {{-- Tiêu đề thông báo --}}
    <strong>{{ $title }}:</strong>

    {{-- Nội dung nằm giữa thẻ <x-alert> --}}
    {{ $slot }}

</div>