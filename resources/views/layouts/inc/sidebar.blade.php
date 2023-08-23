<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo"><a href="#" class="simple-text logo-normal">
      Invoice System
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}  ">
        <a class="nav-link" href="./dashboard.html">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('items') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('items') }}">
          <i class="material-icons">person</i>
          <p>Items</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('add-item') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('add-item') }}">
          <i class="material-icons">person</i>
          <p>Add Item</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./tables.html">
          <i class="material-icons">content_paste</i>
          <p>Table List</p>
        </a>
      </li>
    </ul>
  </div>
</div>