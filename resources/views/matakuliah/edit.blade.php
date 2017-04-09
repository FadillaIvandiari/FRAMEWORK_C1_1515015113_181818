@extends('master')
@section('container')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('Matakuliah')}}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Matakuliah</strong>
	</div>
	{!! Form::model($Matakuliah,['url'=>'Matakuliah/edit/'.$Matakuliah->id,'class'=>'form-horizontal']) !!}
	@include('Matakuliah.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop