
    <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> نوع المركبة </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="نوع المركبة" value="{{ old('name' ,  $car->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">موديل </label>
                    <input type="string" class="form-control @error('car_number') is-invalid @enderror" name="car_number"  placeholder=" موديل" value="{{ old('car_number' , $car->car_number) }}">
                     @error('car_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">رقم الشاصي  </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="رقم الشاصي " value="{{ old('name' ,  $car->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">فئة المركبة  </label>
                    <input type="string" class="form-control @error('car_number') is-invalid @enderror" name="car_number"  placeholder="فئة المركبة" value="{{ old('car_number' , $car->car_number) }}">
                     @error('car_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">رقم المركبة </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="رقم المركبة" value="{{ old('name' ,  $car->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> جهة الترخيص </label>
                    <input type="string" class="form-control @error('car_number') is-invalid @enderror" name="car_number"  placeholder="جهة الترخيص" value="{{ old('car_number' , $car->car_number) }}">
                     @error('car_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">نوع الملكية </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="نوع الملكية" value="{{ old('name' ,  $car->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> الرمز المروري </label>
                    <input type="string" class="form-control @error('car_number') is-invalid @enderror" name="car_number"  placeholder="رقم المركبة" value="{{ old('car_number' , $car->car_number) }}">
                     @error('car_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">تاريخ التسجيل  </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="الرمز المروري" value="{{ old('name' ,  $car->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">تاريخ اتنهاء التسجيل  </label>
                    <input type="string" class="form-control @error('car_number') is-invalid @enderror" name="car_number"  placeholder="تاريخ اتنهاء التسجيل" value="{{ old('car_number' , $car->car_number) }}">
                     @error('car_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">تاريخ التأمين </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="تاريخ التأمين" value="{{ old('name' ,  $car->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">تاريخ انتهاء التأمين </label>
                    <input type="string" class="form-control @error('car_number') is-invalid @enderror" name="car_number"  placeholder="تاريخ انتهاء التأمين" value="{{ old('car_number' , $car->car_number) }}">
                     @error('car_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">شركة التأمين </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="شركة التأمين" value="{{ old('name' ,  $car->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">صورة الملكية  </label>
                    <input type="file" class="form-control @error('car_number') is-invalid @enderror" name="car_number"  placeholder="صورة الملكية" value="{{ old('car_number' , $car->car_number) }}">
                     @error('car_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">رقم بطاقة سالك </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="رقم بطاقة سالك" value="{{ old('name' ,  $car->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">رقم بطاقة التعرفة المرورية   </label>
                    <input type="string" class="form-control @error('car_number') is-invalid @enderror" name="car_number"  placeholder="رقم بطاقة التعرفة المرورية" value="{{ old('car_number' , $car->car_number) }}">
                     @error('car_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">رقم بطاقة عابر </label>
                    <input type="string" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="رقم بطاقة عابر" value="{{ old('name' ,  $car->name) }}">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">الملاحظات</label>
                    <input type="string" class="form-control @error('car_number') is-invalid @enderror" name="car_number"  placeholder=" الملاحظات" value="{{ old('car_number' , $car->car_number) }}">
                     @error('car_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div> 
              
                    <div class="form-group">
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
                        
                    </div>
      </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">{{$button}}</button>
         <a href="{{route('car.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>