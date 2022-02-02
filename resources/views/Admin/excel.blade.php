<table>
    <thead>
    <tr>
        <th style="width: 30%;">Id</th>
        <th>Nombre</th>
        <th>DNI</th>
        <th>Agencia</th>
        <th>Grupo</th>
    </tr>
    </thead>
    <tbody>
        @foreach($Users as $key => $value)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->dni}}</td>
                <td>{{$value->agency}}</td>
                <td>{{getSerarhName($value->group)}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
