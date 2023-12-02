

<div class="modal fade" id="editkost{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Validate Kost</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <form action="{{ route('datakost.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')    
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                               
                                <input type="hidden" value="{{ $item->id }}" name="user_id" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" name="foto" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Kost</label>
                                <input type="text" name="nama_kost" value="{{ $item->nama_kost }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">alamat</label>
                                <input type="text" name="alamat" value="{{ $item->alamat }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="text" name="deskripsi" value="{{ $item->deskripsi }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <select   class="form-control" class="form-control  form-select" name="status" id="OptionLevel">
                                    <option>---Status---</option>
                                    @if($item->status == 1)
                                    <option selected value="1">Valid</option>
                                    <option value="2">Unvalid</option>
                                    <option value="3">Pending</option>
                                    @elseif($item->status == 2)
                                    <option value="1">Valid</option>
                                    <option selected value="2">Unvalid</option>
                                    <option value="3">Pending</option>
                                    @else
                                    <option value="1">Valid</option>
                                    <option value="2">Unvalid</option>
                                    <option selected value="3">Pending</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                        {{-- <button >Save changes</button> --}}
                        
                        
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        <button class="btn btn-primary" type="submit" class="btn btn-primary">Save changes</button>
                    </form>
        </div>
      </div>
    </div>
  </div>