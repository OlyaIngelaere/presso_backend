@extends('layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Show Answer - Capsule</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('answerCapsules.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Question:</strong> <br/>
                {{ $answerCapsule->answer->question->question }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Answer:</strong> <br/>
                {{ $answerCapsule->answer->answer }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Capsule:</strong> <br/>
                {{ $answerCapsule->capsule->name }}
            </div>
        </div>
    </div>

  </div>
</div>
@endsection