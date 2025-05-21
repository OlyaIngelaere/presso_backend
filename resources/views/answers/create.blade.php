@extends('layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Add New Answer</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('answers.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('answers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="inputQuestion" class="form-label"><strong>Question:</strong></label>
            <select 
                name="questionId"
                class="form-control @error('question') is-invalid @enderror"
                id="inputQuestion">
                <?php foreach ($questions as $question): ?>
                    <option value="<?= $question->id ?>" >
                        <?= $question->question ?>
                    </option>
                <?php endforeach; ?>
            </select>
            @error('question')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Answer:</strong></label>
            <input
                type="text"
                name="answer"
                class="form-control @error('answer') is-invalid @enderror"
                id="inputName"
                placeholder="answer">
            @error('answer')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
     
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>

  </div>
</div>
@endsection