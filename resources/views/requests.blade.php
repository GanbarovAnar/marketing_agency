@extends('layouts.myapp')

@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Дата создания</th>
            <th scope="col">Имя</th>
            <th scope="col">Email</th>
            <th scope="col">Телефон</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Сообщение</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tasks as $task)
            <tr>

                <td>
                    <div>{{ $task->created_at }}</div>
                </td>
                <!-- Task Name -->
                <td>
                    <div>{{ $task->name }}</div>
                </td>

                <td>
                    <div>{{ $task->email }}</div>
                </td>

                <td>
                    <div>{{ $task->phone }}</div>
                </td>

                <td>
                    <div>{{ $task->subject }}</div>
                </td>

                <td>
                    <div>{{ $task->message }}</div>
                </td>

                <td>
                    <form action="/look_task/{{ $task->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <button>Пометить как просмотренное</button>
                    </form>
                </td>
            </tr>
        @endforeach



        </tbody>
    </table>
@endsection
