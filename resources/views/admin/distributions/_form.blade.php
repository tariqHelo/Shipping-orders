
    <div class="card-body">
                  <div class="form-group">
                    <label> الإسم </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="نوع المركبة" value="{{ old('name' ,  $distribution->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>إختيار المركبة </label>
                      <select class="form-control select2" name="car_id"  required>
                        <option value=""></option>
                         @foreach($cars as $id => $car)
                           <option value="{{$id}}">{{ $car }}</option>
                         @endforeach
                          @error('car_id')
                          <p class="text-danger">{{ $message }}</p>
                          @enderror
                      </select>
                  </div>
                  <div class="form-group">
                    <label>التاريخ </label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"  placeholder=" موديل" value="{{ old('date' , $distribution->date) }}">
                     @error('date')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                    {{-- <div class="form-group">
                        <label for="status">الحالة</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-active" value="Working" @if(old('status'  , $car->status) == 'Working') checked @endif>
                                <label class="form-check-label" for="status-active">
                                    تعمل 
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="Damaged" @if(old('status'  , $car->status) == 'Damaged') checked @endif >
                                <label class="form-check-label" for="status-draft">
                                     تالفة
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="Garage" @if(old('status'  , $car->status) == 'Garage') checked @endif >
                                <label class="form-check-label" for="status-draft">
                                    في الكراج
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="Discontinued" @if(old('status'  , $car->status) == 'Discontinued') checked @endif >
                                <label class="form-check-label" for="status-draft">
                                     متوقفة
                                </label>
                            </div>
                                @error('status')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                    </div> --}}
      </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">{{$button}}</button>
         <a href="{{route('distribution.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>