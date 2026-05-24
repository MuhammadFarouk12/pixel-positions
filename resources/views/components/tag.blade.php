@props(["size" => "base"])
@php
$classes = "bg-white/10 rounded-xl hover:bg-white/25 transition-colors";
	if($size === "base"){
	$classes .= " py-1 px-5 text-sm";
	} else if($size === "small"){
		$classes .= " py-1 px-2 text-2xs";
	}
@endphp
<a href="#" class="{{ $classes }}">{{ $slot }}</a>