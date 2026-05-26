@props(["job"])
<x-panel class="gap-x-6">
		
			<div>
				<x-employer-logo :employer="$job->employer"/>
			</div>

			<div class="flex-1 flex flex-col">
				<div class="self-start text-sm text-gray-500">{{ $job->employer->name  }}</div>
				<h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors">
					<a href="{{ $job->url }}" class="block" target="_blank">
						{{$job->title}}
					</a>	
				</h3>
				<p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
			</div>

			<div class="">
				@foreach ($job->tags as $tag)
					<x-tag size="small" :$tag/>
				@endforeach
			</div>
</x-panel>