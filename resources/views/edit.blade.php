<x-layout>
    <div class="card w-100">
        <div class="card-header w-100">
            <h5 class="card-title">Editing Note</h5>
        </div>
        <div class="card-body text-justify">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <x-atoms.alert-danger :text="$error" />
                @endforeach
            @endif
            <form action="{{route('notes.update', $note)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Title</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$note->name}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description">{{$note->description}}</textarea>
                </div>
                <div class="mb-3">
                    <x-atoms.button-submit text="Submit" />
                </div>
            </form>
        </div>
        <div class="card-footer">
            <x-atoms.button-link
                :link="route('notes.show', $note)"
                text="Back"
            /> 
        </div>
    </div>
</x-layout>