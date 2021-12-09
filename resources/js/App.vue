<template>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="collapse navbar-collapse">
        <div class="navbar-nav">
          <router-link :to="{name:'room'}" class="nav-item nav-link">
            Room List
          </router-link>
          <router-link :to="{name:'room.create'}" class="nav-item nav-link">
            Create Room
          </router-link>
        </div>
      </div>
    </nav>

    <router-view ></router-view>
  </div>
</template>

<script>
export default {}
</script>
