	@props(["job"])
	<div class="flex-col text-center bg-white/5 px-8 py-5 rounded-lg border border-transparent hover:border-blue-800 group transition">
	<div class="self-start text-sm">{{ $job->employer->name  }}</div>

	<div class="py-8">
		<h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors">{{$job->title}}</h3>
		<p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }}</p>
	</div>

	<div class="flex justify-between items-center mt-auto">
		<div class="">
			@foreach ($job->tags as $tag)
				<x-tag size="small" :$tag/>
			@endforeach
		</div>
		<x-employer-logo :width="42"/>
	</div>

</div>