<template>
  <div class="col-md-4 my-2">
    <div v-if="type=='owner'">
      <owner-result :result="result" :route="route"></owner-result>
    </div>
    <div v-else>
      <vehicle-result :result="result" :route="route"></vehicle-result>
    </div>
  </div>
</template>

<script>
import OwnerResult from "./OwnerResult.vue";
import VehicleResult from "./VehicleResult.vue";
export default {
  name: "result",
  props: ["result", "type", "route"],
  components: {
    "vehicle-result": VehicleResult,
    "owner-result": OwnerResult
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
