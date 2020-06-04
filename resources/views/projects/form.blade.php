@csrf
<div>
    <label class="label" for="title">Title</label>
    <div class="control mt-2 mb-8">
        <input type="text"
               class="input w-full shadow h-10 rounded-lg px-3"
               name="title"
               placeholder="My next awesome project"
               value="{{ $project->title }}" required>
    </div>
</div>

<div class="field">
    <label class="label" for="description">Description</label>
    <div class="control mt-2 mb-4">
        <textarea class="w-full shadow h-10 rounded-lg px-3 py-4 border border-muted-light align-text-top"
                  name="description"
                  placeholder="Description"
                  style="min-height: 200px;" required>{{ $project->description }}</textarea>
    </div>
</div>

<div class="field">
    <div class="control">
        <button type="submit" class="button is-link">{{ $buttonText }}</button>
        <a href="{{ $project->path() }}" class="no-underline text-grey hover:underline ml-2">Cancel</a>
    </div>
</div>

@if($errors->any())
    <div class="field mt-6">
            @foreach($errors->all() as $error)
            <li class="text-red text-sm">{{$error}}</li>
            @endforeach
    </div>
@endif

