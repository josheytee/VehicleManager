<template>
  <div class="card card-default">
    <!-- <div class="card-header">
      <a :href="route">{{result.name}}</a>
      <span class="badge"></span>
    </div>-->
    <img :src="result.photo" class="card-img-top" />

    <div class="card-body">
      <table class="table">
        <tr>
          <th>Name:</th>
          <td>
            <a :href="route">{{result.name}}</a>
          </td>
        </tr>
        <!-- <tr>
          <th>Date of Birth:</th>
          <td>{{result.dob}}</td>
        </tr>-->
        <tr>
          <th>No of Vehicles:</th>
          <td>{{result.vehicles.length}}</td>
        </tr>

        <tr>
          <th>Gender:</th>
          <td>{{result.gender}}</td>
        </tr>
        <!-- <tr>
          <th>Address:</th>
          <td>{{result.address}}</td>
        </tr>
        <tr>
          <th>
            <abbr title="Local Government Area">LGA:</abbr>
          </th>
          <td>{{result.lga}}</td>
        </tr>
        <tr>
          <th>State:</th>
          <td>{{result.state}}</td>
        </tr>-->
      </table>
    </div>
  </div>
</template>

<script>
export default {
  props: ["result", "route"],
  mounted() {
    console.log(this.$props.result.vehicles);
  },
  computed: {
    gender: function() {
      return this.$props.result.gender == "M" ? "Male" : "Female";
    },
    photo: function() {
      return this.$props.result.image.indexOf(".") != -1
        ? this.$props.result.image
        : "img/user.png";
    }
  }
};
</script>
