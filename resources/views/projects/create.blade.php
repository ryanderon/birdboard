@extends('layouts.app')

@section('content')
    <div class="lg:w-1/2 lg:mx-auto bg-white p-6 md:py-12 md:px-16 rounded shadow">
        <h1 class="text-3xl font-normal mb-8 text-center">
            Let's start something new
        </h1>

        <form method="POST"
              action="/projects"
        >
            @include('projects.form', ['project' => new App\Project, 'buttonText' => 'Create Project'])
        </form>
    </div>
{{--            @csrf--}}
{{--            <h1 class="text-3xl font-normal mb-8 text-center">Create a Project</h1>--}}

{{--            <div>--}}
{{--                <label class="label" for="title">Title</label>--}}

{{--                <div class="control mt-2 mb-8">--}}
{{--                    <input type="text" class="input w-full shadow h-10 rounded-lg px-3" name="title" placeholder="Title">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="field">--}}
{{--                <label class="label" for="description">Description</label>--}}
{{--                <div class="control mt-2 mb-4">--}}
{{--                    <textarea class="w-full shadow h-10 rounded-lg px-3 py-4 border border-muted-light align-text-top"--}}
{{--                           name="description"--}}
{{--                              placeholder="Description" style="min-height: 200px;"></textarea>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="field">--}}
{{--                <div class="control">--}}
{{--                    <button type="submit" class="button is-link">Create Project</button>--}}
{{--                    <a href="/projects" class="no-underline text-grey hover:underline ml-2">Cancel</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}

@endsection
