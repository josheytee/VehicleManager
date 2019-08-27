<div class="card card-default">
  <!-- <div class="card-header">
      <a :href="route">{{$owner->name}}</a>
      <span class="badge"></span>
    </div>-->
  <img src="{{$owner->photo}}" class="card-img-top" />

  <div class="card-body">
    <table class="table">
      <tr>
        <th>Name:</th>
        <td>
          <a href="{{route('owner.show',$owner)}}">{{$owner->name}}</a>
        </td>
      </tr>
      <!-- <tr>
          <th>Date of Birth:</th>
          <td>{{$owner->dob}}</td>
        </tr>-->
      <tr>
        <th>No of Vehicles:</th>
        <td>{{collect($owner->vehicles)->count()}}</td>
      </tr>

      <tr>
        <th>Gender:</th>
        <td>{{$owner->gender}}</td>
      </tr>
      <!-- <tr>
          <th>Address:</th>
          <td>{{$owner->address}}</td>
        </tr>
        <tr>
          <th>
            <abbr title="Local Government Area">LGA:</abbr>
          </th>
          <td>{{$owner->lga}}</td>
        </tr>
        <tr>
          <th>State:</th>
          <td>{{$owner->state}}</td>
        </tr>-->
    </table>
  </div>
</div>