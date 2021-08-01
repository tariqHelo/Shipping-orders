
    <div class="card-body">
                       
                  <div class="form-group">
                    <label for="exampleInputEmail1"> رقم المخالفة  </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="violation_number"  placeholder=" رقم المخالفة" value="{{ old('violation_number' , $violation->violation_number) }}">
                      @error('violation_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">تاريخ المخالفة</label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"  placeholder="تاريخ المخالفة" value="{{ old('date',$violation->date ) }}">
                     @error('date')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">نوع المخالفة</label>
                    <input type="string" class="form-control @error('type') is-invalid @enderror" name="type"  placeholder="نوع المخالفة" value="{{ old('type',$violation->type ) }}">
                      @error('type')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">المدينة</label>
                    <input type="string" class="form-control @error('city') is-invalid @enderror" name="city"  placeholder="المدينة" value="{{ old('city',$violation->city ) }}">
                     @error('city')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> الشارع </label>
                    <input type="string" class="form-control @error('street') is-invalid @enderror" name="street"  placeholder="الشارع" value="{{ old('street',$violation->street ) }}">
                      @error('street')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">صورة المخالفة</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"  placeholder="صورة المخالفة">
                     @error('image')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">قابلة للدفع  </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="able"  placeholder="قابلة للدفع" value="{{ old('able',$violation->able ) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">قيمة المخالفة</label>
                    <input type="string" class="form-control @error('value') is-invalid @enderror" name="value"  placeholder="قيمة المخالفة" value="{{ old('value',$violation->value ) }}">
                     @error('value')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                   <label>إختيار مركبة </label>
                    <select class="select2 @error('car_id') is-invalid @enderror"  name="car_id"  data-placeholder="إختيار" style="width: 100%;">
                        @foreach($cars as $id => $car)
                            <option value="{{ $id }}" {{ in_array($id, old('car_id', [])) ? 'selected' : '' }}>{{ $car }}</option>
                        @endforeach
                      </select>
                       @error('car_id')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                    <div class="form-group">
                        <label for="status">حالة المخالفة</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-paid" value="paid" @if(old('status' ,$violation->value) == 'paid') checked @endif>
                                <label class="form-check-label" for="status-paid">
                                    مدفوعة
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-unpaid" value="unpaid" @if(old('status',$violation->value) == 'unpaid') checked @endif >
                                <label class="form-check-label" for="status-unpaid">
                                    غير مدفوعة
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-canceled" value="canceled" @if(old('status',$violation->value) == 'canceled') checked @endif >
                                <label class="form-check-label" for="status-canceled">
                                    ملغية
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
          <button type="submit" class="btn btn-primary">{{ $button }}</button>
         <a href="{{route('violation.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>