{{-- Component Input dùng lại cho nhiều form --}}

@props([

    // Tên của input
    'name',

    // Nhãn hiển thị
    'label'=>null,

    // Kiểu input
    'type'=>'text',

    // Giá trị mặc định
    'value'=>''

])

{{-- Hiển thị label --}}
<label
style="display:block;margin:8px 0 4px">

{{ $label ?? ucfirst($name) }}

</label>

{{-- Ô nhập liệu --}}
<input

type="{{ $type }}"

name="{{ $name }}"

value="{{ old($name,$value) }}"

style="
width:100%;
padding:8px;
border:1px solid #ccc;
border-radius:6px;
">

{{-- Nếu Validate lỗi sẽ hiện tại đây --}}
@error($name)

<div style="color:red">

{{ $message }}

</div>

@enderror