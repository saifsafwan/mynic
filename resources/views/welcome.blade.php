<x-layout>
    @foreach ($notes as $note)
        <x-card
            :title="$note->name"    
            :description="$note->description"  
            :link="route('notes.show', $note->id)"  
        />
    @endforeach
</x-layout>