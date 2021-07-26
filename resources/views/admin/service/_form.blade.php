
    <div class="card-body">
                       
                  <div class="form-group">
                    <label for="exampleInputEmail1">إسم الخدمة </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="إسم البلد" value="{{ old('name', $service->name ) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">إسم الخدمة بالإنجليزية</label>
                    <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name"  placeholder="إسم البلد بالإنجليزية" value="{{ old('english_name', $service->english_name) }}">
                     @error('english_name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                   <div class="form-group">
                        <label for="status">النوع</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="status-local" value="local" @if(old('status'  , $service->type) == 'local') checked @endif>
                                <label class="form-check-label" for="status-local">
                                   محلي 
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input"  type="radio" name="type" id="status-international" value="international" @if(old('status'  , $service->international) == 'international') checked @endif >
                                <label class="form-check-label" for="status-international">
                                  دولي
                                </label>
                            </div>
                                @error('type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                    </div> 
                    <div class="form-group">
                        <label for="status">الحالة</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-active" value="active" @if(old('status'  , $service->status) == 'active') checked @endif>
                                <label class="form-check-label" for="status-active">
                                    فعال
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" @if(old('status'  , $service->status) == 'draft') checked @endif >
                                <label class="form-check-label" for="status-draft">
                                    غير مفعل
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="hidden" @if(old('status'  , $service->status) == 'hidden') checked @endif >
                                <label class="form-check-label" for="status-hidden">
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
          <button type="submit" class="btn btn-primary">{{$button}}</button>
         <a href="{{route('service.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>