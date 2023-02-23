@foreach ($datas as $data)
    <tr>
        <x-head :data="$data" />
    </tr>
@endforeach
