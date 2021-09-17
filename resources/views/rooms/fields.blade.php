<!-- Roomnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roomNumber', 'Roomnumber:') !!}
    {!! Form::text('roomNumber', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Roomname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roomName', 'Roomname:') !!}
    {!! Form::text('roomName', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Yourname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yourName', 'Yourname:') !!}
    {!! Form::text('yourName', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Youraddress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yourAddress', 'Youraddress:') !!}
    {!! Form::text('yourAddress', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date', 'Date:') !!}
    {!! Form::text('Date', null, ['class' => 'form-control','id'=>'Date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush