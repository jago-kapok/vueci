<script>
import SidebarLink from './SidebarLink'
import { collapsed, toggleSidebar, sidebarWidth } from './state'

export default {
  props: {},
  components: { SidebarLink },
  setup() {
    return { collapsed, toggleSidebar, sidebarWidth }
  }
}
</script>

<template>
  <div class="sidebar" :style="{ width: sidebarWidth }">
    <h3>
      <span v-if="collapsed">
        <div><i class="fa fa-file-alt"></i></div>
      </span>
      <span v-else><b>SIPP DOKLING</b></span>
    </h3>

    <span class="sidebar-title" v-if="!collapsed">MAIN</span>
    <SidebarLink to="/admin" icon="fas fa-home">Beranda</SidebarLink>
    <SidebarLink to="/admin/company" icon="fas fa-building">Data Perusahaan</SidebarLink>
    <SidebarLink to="/admin/report" icon="fas fa-copy">Laporan Lingkungan</SidebarLink>
    <SidebarLink to="/admin/verification" icon="fas fa-check-square">Verifikasi Laporan</SidebarLink>
    <SidebarLink to="/admin/print" icon="fas fa-print">Cetak Tanda Terima</SidebarLink>

   <span class="sidebar-title" v-if="!collapsed">PENGATURAN</span>
    <SidebarLink to="/admin/users" icon="fas fa-users">Manajemen User</SidebarLink>

    <span
      class="collapse-icon"
      :class="{ 'rotate-180': collapsed }"
      @click="toggleSidebar"
    >
      <i class="fas fa-angle-double-left" />
    </span>
  </div>
</template>

<style>
:root {
  --sidebar-bg-color: #3aa25d;
  --sidebar-item-hover: #38a169;
  --sidebar-item-active: #276749;
}
</style>

<style scoped>
.sidebar {
  color: white;
  background-color: var(--sidebar-bg-color);

  float: left;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  bottom: 0;
  padding: 0.5em;

  transition: 0.3s ease;

  display: flex;
  flex-direction: column;
}

.collapse-icon {
  position: absolute;
  bottom: 0;
  padding: 0.75em;

  color: rgba(255, 255, 255, 0.7);

  transition: 0.2s linear;
}

.rotate-180 {
  transform: rotate(180deg);
  transition: 0.2s linear;
}

.sidebar-title {
  text-align: left;
  margin-top: 1rem;
  color: #c5c5c5;
  font-size: 12px;
  font-weight: bold;
}
</style>
