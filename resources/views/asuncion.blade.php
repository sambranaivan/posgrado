@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="col-md-10">
            <div class="card">
              

            <iframe src="{{asset('doc/Documento sin título.pdf')}}" width="100%" height="500px">
                </iframe>
            </div>{{-- end card --}}


    </div>{{-- end col --}}
</div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
