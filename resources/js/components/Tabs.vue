<template>
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li @click="showTab(tab)" class="tab col s3" v-for="(tab,index) in tabs" v-bind:key="index">
          <a href="#test1">{{tab.name}}</a>
        </li>
      </ul>
    </div>
    <div>
      <slot></slot>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      tabs: []
    };
  },
  created() {
    this.tabs = this.$children;
  },
  methods: {
    showTab(currentTab) {
      this.tabs.forEach(item => {
        item.name == currentTab.name
          ? (item.isActive = true)
          : (item.isActive = false);
      });
    }
  }
};
</script>