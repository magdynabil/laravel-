<tr>
    <th scope="row">{{$news->id}}</th>
    <td>{{$news->title}}</td>
    <td>{{$news->add_by()->first()->name}}</td>
    <td>{{$news->description}}</td>
    <td>{{$news->content}}</td>
    <td>{{$news->status}}</td>
    <td>{{!empty($news->deleted_at)?'deleted':'published'}}</td>
    <td>
        <input name="id[]" type="checkbox"   value="{{$news->id}}" >

    </td>
</tr>
