<!-- Small Modal -->
<div class="modal fade" id="small{{ $tagger->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Edit </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.service.update', $tagger->id ) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameSmall" class="form-label">Title</label>
                            <input type="text" value="{{ $tagger->title }}" id="nameSmall" name="title" class="form-control  @error('name') is-invalid @enderror" placeholder="Enter Name" />
                            @error('title')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="basic-default-message">{{ __(' Description ') }}</label>
                            <textarea  id="body" name="body" class="form-control">{{ $tagger->body }}</textarea>
                        </div>
                    </div>
                    <div class="row g-2 text-center">
                        <div class="col mb-0">
                            <input type="submit" class="btn btn-primary" id="emailSmall" value="Update" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>