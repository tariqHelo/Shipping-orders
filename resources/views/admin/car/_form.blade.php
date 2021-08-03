
    <div class="card-body">
                  <div class="form-group">
                    <label> نوع المركبة </label>
                    <input type="string" class="form-control @error('vehicle_type') is-invalid @enderror" name="vehicle_type"  placeholder="نوع المركبة" value="{{ old('vehicle_type' ,  $car->vehicle_type) }}">
                      @error('vehicle_type')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>موديل </label>
                    <input type="string" class="form-control @error('model') is-invalid @enderror" name="model"  placeholder=" موديل" value="{{ old('model' , $car->model) }}">
                     @error('model')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>رقم الشاصي  </label>
                    <input type="string" class="form-control @error('chassis_number') is-invalid @enderror" name="chassis_number"  placeholder="رقم الشاصي " value="{{ old('chassis_number' ,  $car->chassis_number) }}">
                      @error('chassis_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>فئة المركبة  </label>
                    <input type="string" class="form-control @error('vehicle_class') is-invalid @enderror" name="vehicle_class"  placeholder="فئة المركبة" value="{{ old('vehicle_class' , $car->vehicle_class) }}">
                     @error('vehicle_class')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>رقم المركبة </label>
                    <input type="string" class="form-control @error('vehicle_no') is-invalid @enderror" name="vehicle_no"  placeholder="رقم المركبة" value="{{ old('vehicle_no' ,  $car->vehicle_no) }}">
                      @error('vehicle_no')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label> جهة الترخيص </label>
                    <input type="string" class="form-control @error('licensing_authority') is-invalid @enderror" name="licensing_authority"  placeholder="جهة الترخيص" value="{{ old('licensing_authority' , $car->licensing_authority) }}">
                     @error('licensing_authority')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
                       
                  <div class="form-group">
                    <label>نوع الملكية </label>
                    <input type="string" class="form-control @error('property_type') is-invalid @enderror" name="property_type"  placeholder="نوع الملكية" value="{{ old('property_type' ,  $car->property_type) }}">
                      @error('property_type')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label> الرمز المروري </label>
                    <input type="string" class="form-control @error('traffic_code') is-invalid @enderror" name="traffic_code"  placeholder="الرمز المروري" value="{{ old('traffic_code' , $car->traffic_code) }}">
                     @error('traffic_code')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
                  <div class="form-group">
                    <label>تاريخ التسجيل  </label>
                    <input type="date" class="form-control @error('registration_date') is-invalid @enderror" name="registration_date"  placeholder="تاريخ التسجيل" value="{{ old('registration_date' ,  $car->registration_date) }}">
                      @error('registration_date')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div> 
                  <div class="form-group">
                    <label>تاريخ اتنهاء التسجيل  </label>
                    <input type="date" class="form-control @error('registration_end_date') is-invalid @enderror" name="registration_end_date"  placeholder="تاريخ اتنهاء التسجيل" value="{{ old('registration_end_date' , $car->registration_end_date) }}">
                     @error('registration_end_date')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
             
    
                  <div class="form-group">
                    <label>تاريخ التأمين </label>
                    <input type="date" class="form-control @error('insurance_date') is-invalid @enderror" name="insurance_date"  placeholder="تاريخ التأمين" value="{{ old('insurance_date' ,  $car->insurance_date) }}">
                      @error('insurance_date')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>تاريخ انتهاء التأمين </label>
                    <input type="date" class="form-control @error('insurance_expiry_date') is-invalid @enderror" name="insurance_expiry_date"  placeholder="تاريخ انتهاء التأمين" value="{{ old('insurance_expiry_date' , $car->insurance_expiry_date) }}">
                     @error('insurance_expiry_date')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
                  <div class="form-group">
                    <label>شركة التأمين </label>
                    <input type="string" class="form-control @error('insurance_company') is-invalid @enderror" name="insurance_company"  placeholder="شركة التأمين" value="{{ old('insurance_company' ,  $car->insurance_company) }}">
                      @error('insurance_company')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>صورة الملكية  </label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"  placeholder="صورة الملكية" value="{{ old('image' , $car->image) }}">
                     @error('image')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                      @if($car->image)
                          <img src="{{ asset("/public/uploads/".$car->image) }}" width='100' class='img-thumbnail mt-3' />
                      @endif
                  </div>
                  <div class="form-group">
                    <label>رقم بطاقة سالك </label>
                    <input type="string" class="form-control @error('salik_tag_number') is-invalid @enderror" name="salik_tag_number"  placeholder="رقم بطاقة سالك" value="{{ old('salik_tag_number' ,  $car->salik_tag_number) }}">
                      @error('salik_tag_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label>رقم بطاقة التعرفة المرورية   </label>
                    <input type="string" class="form-control @error('Traffic_toll_card_number') is-invalid @enderror" name="Traffic_toll_card_number"  placeholder="رقم بطاقة التعرفة المرورية" value="{{ old('Traffic_toll_card_number' , $car->Traffic_toll_card_number) }}">
                     @error('Traffic_toll_card_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>  
                  <div class="form-group">
                    <label>رقم بطاقة عابر </label>
                    <input type="string" class="form-control @error('passing_card_number') is-invalid @enderror" name="passing_card_number"  placeholder="رقم بطاقة عابر" value="{{ old('passing_card_number' ,  $car->passing_card_number) }}">
                      @error('passing_card_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                  <div class="form-group">
                        <label>ملاحظات </label>
                        <textarea class="form-control" name="note" rows="3" placeholder="Enter ...">{{ old('note' ,  $car->note) }}</textarea>
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