<div class="row">

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
                <label for="main_video">Video</label>
                {!! Form::file('main_video',[
                    'class'=> $errors->has('main_video')?'form-control is-invalid':'form-control',
                        'placeholder'=>'Enter Video',
                   ]) !!}
                @error('main_video')
                <span class="error invalid-feedback">
                   {{ $message }}
                </span>
                @enderror
            </div>
        </div>

        @if($edit =="1")
            <div class="col-sm-3">
                <div class="form-group">
                    @if(isset($data['row']->video))
                        <video  style="height: 150px;" src="{{asset('/videos/video/'.$data['row']->video)}}" alt="{{$data['row']->title}}">
                    @else
                        <img src="" alt="">
                    @endif
                </div>
            </div>

        @endif
    </div>
</div>




<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit Video</button>
</div>
