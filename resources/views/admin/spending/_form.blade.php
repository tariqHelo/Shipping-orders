
    <div class="card-body">
                       
                  <div class="form-group">
                    <label for="exampleInputEmail1">إسم الفاتورة </label>
                    <input type="string" class="form-control @error('bill') is-invalid @enderror" name="bill"  placeholder="إسم الفاتورة" value="{{ old('name' , $spending->bill) }}">
                      @error('bill')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">رقم الفاتورة</label>
                    <input type="string" class="form-control @error('bill_number') is-invalid @enderror" name="bill_number"  placeholder="رقم الفاتورة" value="{{ old('bill_number' , $spending->bill_number) }}">
                     @error('bill_number')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>
      </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">{{$button}}</button>
         <a href="{{route('spending.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
        </div>