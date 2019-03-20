@if(auth()->id() == 1 && auth()->check())
  <div class="text-center admin-top">
    <div class="bg-warning text-white" >
      <div class="columns is-centered is-vcentered mr-auto" >
        <div class="column is-narrow" >
          <b >ADMIN</b >
        </div >
        <div class="column is-narrow" >
          <a href="/admin/dashboard" class="text-white" >Control Panel</a >
        </div >
        <div class="column is-narrow" >
          <a href="/admin/users" class="text-white" >Users</a >
        </div >
        <div class="column is-narrow" >
          <a href="/admin/projects" class="text-white" >Projects</a >
        </div >
      </div >
    </div >
  </div >
@endif