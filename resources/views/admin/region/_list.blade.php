<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Name</th>
        <th>Slag</th>
    </tr>
    </thead>

    <tbody>
    @foreach($regions as $region)
        <tr>
            <td>{{$region->id}}</td>
            <td><a href="{{route('admin.region.show', $region)}}">{{$region->name}}</a></td>
            <td>{{$region->slag}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
