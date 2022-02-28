<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $crate->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantity') }}
            {{ Form::text('quantity', $crate->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costprice') }}
            {{ Form::text('costprice', $crate->costprice, ['class' => 'form-control' . ($errors->has('costprice') ? ' is-invalid' : ''), 'placeholder' => 'Costprice']) }}
            {!! $errors->first('costprice', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sellingprice') }}
            {{ Form::text('sellingprice', $crate->sellingprice, ['class' => 'form-control' . ($errors->has('sellingprice') ? ' is-invalid' : ''), 'placeholder' => 'Sellingprice']) }}
            {!! $errors->first('sellingprice', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>