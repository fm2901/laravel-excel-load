@extends('layouts.excel')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Загрузка excel</h3>
                <form class="form-upload" method="POST" action="{{url('/excelUpload')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="file" id="file" name="ex_file">
                        <p class="help-block"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default">Отмена</button>
                        <button type="submit" class="btn btn-primary" id="upload_f">Загрузить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
