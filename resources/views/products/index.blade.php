all products
<ul>
@php
$name = str_replace(' ', '-', strtolower('Vector Q Series Power Converter'));
@endphp
	<li><a href="{{ route('products.show', ['name'=>$name]) }}">Single product</a></li>
</ul>