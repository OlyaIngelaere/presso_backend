@extends('layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Add New Answer - Capsule</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('answerCapsules.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('answerCapsules.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="inputAnswer" class="form-label"><strong>Question & Answer:</strong></label>
            <select
                name="answerId"
                class="form-control @error('answer') is-invalid @enderror"
                id="inputAnswer">
                <?php foreach ($answers as $answer): ?>
                    <option value="<?= $answer->id ?>" >
                        <?= $answer->question->question ?> --- <?= $answer->answer ?>
                    </option>
                <?php endforeach; ?>
            </select>
            @error('answer')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputCapsule" class="form-label"><strong>Capsule:</strong></label>
            <select 
                name="capsuleId"
                class="form-control @error('capsule') is-invalid @enderror"
                id="inputCapsule">
                <?php foreach ($capsules as $capsule): ?>
                    <option value="<?= $capsule->id ?>" >
                        <?= $capsule->name ?>
                    </option>
                <?php endforeach; ?>
            </select>
            @error('capsule')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
     
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>
  </div>
</div>
@endsection