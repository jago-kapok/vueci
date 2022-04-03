<template>
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
        </ul>
        <div class="d-flex">
          <a href="#" class="nav-link">
            <span class="nav-icon me-2">
              <i class="fas fa-info-circle"></i>&nbsp;&nbsp;Bantuan
            </span>
          </a>
          <a href="" class="nav-link text-danger">
            <span class="nav-icon me-2">
              <i class="fas fa-arrow-right"></i>&nbsp;&nbsp;Keluar
            </span>
          </a>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'Navbar',
  props: {
    msg: String
  }
}
</script>

<style scoped>
  .navbar-light {
    top: 0;
    width: 100%;
    padding: 0.5rem;
    background-color: #FFFFFF;
    transition: left .2s;
    box-shadow: 0 3px 5px rgb(0 0 0 / 2%), 0 0 2px rgb(0 0 0 / 5%), 0 1px 4px rgb(0 0 0 / 8%);
  }
  span {
    font-size: 0.9rem;
    font-weight: bold;
  }
</style>
