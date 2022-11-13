@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    User
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-7">
                                <h4 class="subtitle"><i class="fas fa-book"></i> Panel de Usuarios</h4>
                            </div>
                            <div class="col-2" style="text-align: end">
                                <a href="{{ route('user.index') }}" class="btn btn-dark float-right"  data-placement="left">
                                    {{ __('Mostrar todo') }}
                                </a>
                            </div>
                            <div class="col-3">
                                <form method="GET" action="{{ route('users.share') }}">
                                    <div class="input-group mb-3">
                                        <input id="input_id" type="text" class="form-control bg-dark" name="buscarU" placeholder="Buscar" required style="color: white">
                                        <button class="btn btn-outline-light input-group-text" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>       
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-dark">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>

                                            <td style="text-align: end">
                                                <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-dark" href="{{ route('user.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-dark" href="{{ route('user.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-dark"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
