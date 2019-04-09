@extends('layouts.app')

@section('content')
  <!---->
   <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="Tasks">
    <a class="dropdown-item" href="/1">Finances</a>
    <a class="dropdown-item" href="/2">Démarch Administratives</a>
    <a class="dropdown-item" href="/3">Divers</a>
  </div>
</div>
<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card card-new-task">
                <div class="card-header">Nouvelle tache</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" name="title" type="text" maxlength="255" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" autocomplete="off" />
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button id="conex2" type="submit" class="btn">créer</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Mes taches</div>

                <div class="card-body">
                   <table class="table table-striped">
                       @foreach ($tasks as $task)
                           <tr>
                               <td>
                                   @if ($task->is_complete)
                                       <s>{{ $task->title }}</s>
                                   @else
                                       {{ $task->title }}
                                   @endif
                               </td>
                               <td class="text-right">
                                   @if (! $task->is_complete)
                                       <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                           @csrf
                                           @method('PATCH')
                                           <button id="conex2"type="submit" class="btn">Complete</button>

                                       </form>
                                   @endif
                               </td>
                           </tr>
                       @endforeach
                   </table>

                    <!-- $tasks->links() -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
