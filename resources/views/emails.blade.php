@extends('layouts.myapp')

@section('content')



    <div class="text_center" style="text-align: center">
        <span>В этом разделе можно разослать подписчикам интересную информацию.</span>
        <form action="#" class="margin_r_l_auto col-lg-8 mt-4" method="post" style="border:1px solid #c1c1c1; border-radius: .25rem; padding:2px;display: inline-block">
            <div class="input-group ">
                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Заголовок" >
            </div>

            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Текст" ></textarea>
            </div>
            <div class="text_right" style="margin-right: 5px; margin-bottom: 5px;">
                <input class="btn btn-primary" type="submit" value="Отправить всем" style="width: 40%;" disabled>
            </div>

        </form>
    </div>

    <br><br><br>


    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Дата подписки</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($emails as $email)
            <tr>
                <td>
                    <div>{{ $email->created_at }}</div>
                </td>
                <!-- Task Name -->
                <td>
                    <div>{{ $email->email }}</div>
                </td>

            </tr>
        @endforeach



        </tbody>
    </table>
@endsection
