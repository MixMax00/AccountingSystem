
<td style="{{ $data->isChild() ? 'padding-left:30px;' : null }}">

    @if($data->isChild())
      <span><i class="fas fa-angle-right"></i></span>
    @endif

    {{ $data->head_name }}
</td>
<td>{{ $data->code }}</td>
<td>{{ $data->type }}</td>
<td>{{ $data->payable }}</td>
<td>{{ $data->details }}</td>
<td>
    <a href="{{ route('admin.head.edit', ['id'=>$data->id]) }}" class="btn btn-info">Edit</a>
</td>

<x-heads :datas="$data->children"/>


