    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    
    <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">إسم المدينة </label>
                          <input type="string" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">إسم المدينة بالإنجليزية</label>
                          <input type="string" class="form-control" name="english_name" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('name') }}">
                        </div>
                      
                      <div class="form-group">
                        <label for="status">الحالة</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-active" value="active" @if(old('status') == 'active') checked @endif>
                                <label class="form-check-label" for="status-active">
                                    فعال
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" @if(old('status') == 'draft') checked @endif >
                                <label class="form-check-label" for="status-draft">
                                    غير مفعل
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="hidden" @if(old('status') == 'hidden') checked @endif >
                                <label class="form-check-label" for="status-draft">
                                    مخفي
                                </label>
                            </div>
                             @error('status')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                       
                    </div>
      </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>