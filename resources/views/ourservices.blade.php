@extends('layouts.myapp')

@section('content')
    <div style="text-align: center">
        <form action="/addOurServices" method="POST" style="width: 90%; display: inline-block; border: 1px solid #ccc; padding: 5px;">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="Цена">
                <textarea id="" cols="30" rows="4" class="form-control" name="description" placeholder="Описание услуги"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Добавить" class="btn btn-primary py-3 px-5">
            </div>
        </form>
    </div>


    <br><br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Дата создания</th>
            <th scope="col">Описание</th>
            <th scope="col">Цена</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ourservices as $ourservice)
            <tr>

                <td>
                    <div>{{ $ourservice->created_at }}</div>
                </td>
                <!-- Task Name -->
                <td>
                    <div>{{ $ourservice->description }}</div>
                </td>

                <td>
                    <div>{{ $ourservice->price }}</div>
                </td>
                <td>
                    <form action="/ourservice/{{ $ourservice->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button>Удалить услугу</button>
                    </form>
                </td>
            </tr>
        @endforeach



        </tbody>
    </table>
@endsection
