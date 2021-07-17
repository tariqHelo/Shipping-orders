 <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">إسم البلد </label>
                    <input type="string" class="form-control" name="name" id="exampleInputEmail1" placeholder="إسم البلد">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">إسم البلد بالإنجليزية</label>
                    <input type="string" class="form-control" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                  </div>
                   <div class="form-group">
                      <label>إضافة المدينة </label>
                      <select class="select2"  name="cities[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                        @foreach($cities as $id => $cities)
                            <option value="{{ $id }}" {{ in_array($id, old('cities', [])) ? 'selected' : '' }}>{{ $cities }}</option>
                        @endforeach
                      </select>
                   </div>
                    <div class="form-group">
                        <label for="status">الحالة</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-active" value="active">
                                <label class="form-check-label" for="status-active">
                                    فعال
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" >
                                <label class="form-check-label" for="status-draft">
                                    غير مفعل
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" >
                                <label class="form-check-label" for="status-draft">
                                    مخفي
                                </label>
                            </div>
                        </div>
                        {{-- @error('status')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror --}}
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{$button}}</button>
                </div>