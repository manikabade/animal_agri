<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label for="username">Username</label>
            {!! Form::text('username',$data['row']->username??null,[
                'class'=> $errors->has('username')?'form-control is-invalid':'form-control',
                    'placeholder'=>'Enter Username',
               ]) !!}
            @error('username')
            <span class="error invalid-feedback">
                   {{ $message }}
                </span>
            @enderror
        </div>
    </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="password">Password</label>
                    {!! Form::text('password',$data['row']->password??null,[
                        'class'=> $errors->has('password')?'form-control is-invalid':'form-control',
                            'placeholder'=>'Enter Password',
                       ]) !!}
                    @error('password')
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
{{--                       {{ old('status', $reg->status ?? '')? "checked": "" }}--}}
{{--                       type="checkbox" name="status">--}}
                @error('status')
                <span class="error invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
            </div>
        </div>
    </div>

    </div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit Login</button>
</div>
