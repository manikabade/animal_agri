<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="item_name">Item Name</label>
            {!! Form::text('item_name',$data['row']->item_name??null,[
                'class'=> $errors->has('item_name')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Item Name',
               ]) !!}
            @error('item_name')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="rupees">Rupees</label>
            {!! Form::text('rupees',$data['row']->rupees??null,[
                'class'=> $errors->has('rupees')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Rupees',
               ]) !!}
            @error('rupees')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="quantity">Quantity</label>
            {!! Form::text('quantity',$data['row']->quantity??null,[
                'class'=> $errors->has('quantity')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Quantity',
               ]) !!}
            @error('quantity')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    {{-- <div class="col-md-12">
        <div class="form-group">
            <label for="description">Description</label>
            {!! Form::textarea('description',$data['row']->description??null,[
                  'class'=> $errors->has('description')?'form-control is-invalid':'form-control',
                  'placeholder'=>'Description',
                  'id' => 'summernote'
                  ]) !!}
            @error('description')
            <span class="help-block invalid-feedback">
                     <strong> {{ $message }} </strong>
                    </span>
            @enderror
        </div>
    </div> --}}
    <div class="col-sm-6">
        <div class="form-group">
            <label for="description">DESCRIPTION</label>
            {!! Form::textarea('description',$data['row']->description??null,[
                'class'=> $errors->has('description')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Description',
               ]) !!}
            @error('description')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="">Status</label>
            <div class="form-check">

                {!! Form::select('status',['1' => 'Active', '0' => 'InActive'], $data['row']->status ??null,[
                         'class'=> $errors->has('status')?'form-control is-invalid':'form-control',

                                                    ]) !!}
{{--                <input class="form-check-input @error('status')is-invalid @enderror"--}}
{{--                       {{ old('status', $doctor->status ?? '')? "checked": "" }}--}}
{{--                       type="checkbox" name="status">--}}
                @error('status')
                <span class="error invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <div class="form-group">
                <label for="main_photo">Image</label>
                {!! Form::file('main_photo',[
                    'class'=> $errors->has('main_photo')?'form-control is-invalid':'form-control',
                        'placeholder'=>'Enter Image',
                   ]) !!}
                @error('main_photo')
                <span class="error invalid-feedback">
                   {{ $message }}
                </span>
                @enderror
            </div>
        </div>

        @if($edit =="1")
            <div class="col-sm-3">
                <div class="form-group">
                    @if(isset($data['row']->image))
                        <img  style="height: 150px;" src="{{asset('/images/item/'.$data['row']->image)}}" alt="{{$data['row']->title}}">
                    @else
                        <img src="" alt="">
                    @endif
                </div>
            </div>

        @endif
    </div>
</div>




<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit Item</button>
</div>
