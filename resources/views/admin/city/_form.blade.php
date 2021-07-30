
    <div class="card-body">
                       
                  <div class="form-group">
                    <label for="exampleInputEmail1">إسم المدينة </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="إسم البلد" value="{{ old('name') }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">إسم المدينة بالإنجليزية</label>
                    <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name"  placeholder="إسم البلد بالإنجليزية" value="{{ old('name') }}">
                     @error('english_name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                   {{-- <div class="form-group">
                      <label>إضافة منطقة </label>
                      <select class="select2 @error('areas') is-invalid @enderror"  name="areas[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                        @foreach($areas as $id => $areas)
                            <option value="{{ $id }}" {{ in_array($id, old('areas', [])) ? 'selected' : '' }}>{{ $areas }}</option>
                        @endforeach
                      </select>
                       @error('areas')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                   </div>  --}}
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
         <a href="{{route('violation.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>