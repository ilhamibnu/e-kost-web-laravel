
<div class="modal fade" id="edit{{$pemilik->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Validate Pemilik</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <form action="{{ route('data-pemilik.update', $pemilik->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')    
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name" value="{{ $pemilik->name }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" value="{{ $pemilik->username }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{ $pemilik->email }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{-- <label for="">Level</label> --}}
                                <input value="{{ $pemilik->role }}" type="hidden" name="level" class="form-control" required>
                            </div>
                        </div>  
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <select   class="form-control" class="form-control  form-select" name="statusUser" id="OptionLevel">
                                    <option>---Status---</option>
                                    @if($pemilik->statusUser == 'valid')
                                    <option selected value="valid">Valid</option>
                                    <option value="unvalid">Unvalid</option>
                                    <option value="pending">Pending</option>
                                    @elseif($pemilik->statusUser == 'unvalid')
                                    <option value="valid">Valid</option>
                                    <option selected value="unvalid">Unvalid</option>
                                    <option value="pending">Pending</option>
                                    @else
                                    <option value="valid">Valid</option>
                                    <option value="unvalid">Unvalid</option>
                                    <option selected value="pending">Pending</option>
                                    @endif
                                </select>
                            </div>
                        </div>         

                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        <button class="btn btn-primary" type="submit" class="btn btn-primary">Save changes</button>
                    </form>
        </div>
      </div>
    </div>
  </div>