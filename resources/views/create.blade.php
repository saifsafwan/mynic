<x-layout>
    <div class="card w-100">
        <div class="card-header w-100">
            <h5 class="card-title">Create New Note</h5>
        </div>
        <div class="card-body text-justify">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <x-atoms.alert-danger :text="$error" />
                @endforeach
            @endif
            <form action="{{route('notes.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Title</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <x-atoms.button-submit text="Submit" />
                </div>
            </form>
        </div>
        <div class="card-footer">
            <x-atoms.button-link
                :link="route('notes.index')"
                text="Back"
            /> 
        </div>
    </div>
</x-layout>