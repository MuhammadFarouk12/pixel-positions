@props(["width" => 90, "employer"])
<img src="{{ Storage::url($employer->logo) }}" alt="test" class="rounded-xl" width="{{ $width }}">