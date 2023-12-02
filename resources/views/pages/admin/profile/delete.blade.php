<div class="modal fade" id="deletedata{{ $profile->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data kamar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('profile.destroy', $profile->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <p>Anda Yakin akan menghapus data {{ $profile->name }}?</p>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
          <button type="submit" class="btn btn-primary">Hapus</button>
        </form>

        </div>
      </div>
    </div>
  </div>