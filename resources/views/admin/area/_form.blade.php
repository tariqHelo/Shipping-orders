
    <div class="card-body">
                       
                  <div class="form-group">
                    <label for="exampleInputEmail1">إسم المنطقة </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="إسم المنطقة" value="{{ old('name' ,  $area->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">إسم المنطقة بالإنجليزية</label>
                    <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name"  placeholder="إسم المنطقة بالإنجليزية" value="{{ old('name' , $area->english_name) }}">
                     @error('english_name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div> 
                    <div class="form-group">
                        <label for="status">الحالة</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-active" value="active" @if(old('status'  , $area->status) == 'active') checked @endif>
                                <label class="form-check-label" for="status-active">
                                    فعال
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" @if(old('status'  , $area->status) == 'draft') checked @endif >
                                <label class="form-check-label" for="status-draft">
                                    غير مفعل
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="hidden" @if(old('status'  , $area->status) == 'hidden') checked @endif >
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
         <a href="{{route('area.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>