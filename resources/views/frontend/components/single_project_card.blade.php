<a href="{{ route("singleProject", ['slug' => Str::slug($project->title), 'id' => $project->id]) }}">
    <div class="bg-white">
        <div class="overflow-hidden">
            <img class="w-100 project-image" style="object-fit: cover; height: 350px" src="{{ '/storage/'.$project->thumbnail }}" alt="">
        </div>
        <div class="text-center p-3">
            <strong class="fs-4 m-0 text-black">{{ $project->title }}</strong>
            <p class="m-0">{{ $project->location }}</p>
        </div>
    </div>
</a>