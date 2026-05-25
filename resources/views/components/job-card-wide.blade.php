@props(["job"])
<x-panel class="gap-x-6">
	<div>
		<x-employer-logo/>
	</div>

	<div class="flex-1 flex flex-col">
		<div class="self-start text-sm text-gray-500">{{ $job->employer->name  }}</div>
		<h3 class="font-bold text-xl mt-3 group-hover:text-blue-800  transition-colors">{{$job->title}}</h3>
		<p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
	</div>

	<div class="">
		@foreach ($job->tags as $tag)
			<x-tag size="small" :$tag/>
		@endforeach
	</div>
</x-panel>