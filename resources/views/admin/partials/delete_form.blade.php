<form class="d-inline" action="{{ route('admin.projects.destroy', $project) }}" method="POST"
    onsubmit="return confirm('Sei sicuro di voler definitivamente eliminare questo progetto? Tutti i dati di \'{{ $project->name }}\' verranno persi.')">
    @csrf
    @method('DELETE')

    <button title="Elimina" class="btn btn-danger" type="submit">
        <i class="fa-solid fa-trash"></i>
    </button>
</form>
