<x-layout>
    <div class="card w-100">
        <div class="card-header text-right">
            <x-atoms.button-link :link="route('notes.edit', $note)" text="Edit" />
            
            <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                    Delete
                </button>
            </form>
        </div>
        <div class="card-body w-100">
          <h5 class="card-title">{{$note->name}}</h5>
          <p class="card-text text-justify">{{$note->description}}</p>
        </div>
        <div class="card-footer">
            <x-atoms.button-link
                :link="route('notes.index')"
                text="Back"
            /> 
        </div>
    </div>
</x-layout>