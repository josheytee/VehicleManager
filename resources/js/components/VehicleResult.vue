<template>
  <div class="card card-default">
    <img :src="image" class="card-img-top" />

    <div class="card-body">
      <h5 class="card-title">
        <a :href="route">{{result.name}}</a>
      </h5>
      <h6 class="card-subtitle mb-2 text-muted">owned by: {{result.owner.name}}</h6>
      <div>model: {{result.model}}</div>
      <div>color: {{result.color}}</div>
      <div>plate: {{result.plate}}</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "VehicleResult",
  props: ["result", "route"],
  computed: {
    image: function() {
      return this.$props.result.image.indexOf(".") != -1
        ? this.$props.result.image
        : "img/car.jpg";
    }
  },
  mounted() {
    console.log(this.image);
  }
};
</script>
