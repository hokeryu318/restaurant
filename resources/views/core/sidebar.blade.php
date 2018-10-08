<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/"><i class="icon-speedometer"></i> Dashboard </a>
      </li>

      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Manage Masters</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.menucategory') }}"><i class="icon-puzzle"></i> Menu Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}"><i class="icon-puzzle"></i> Item Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('items.index') }}"><i class="icon-puzzle"></i> Item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sample/modals"><i class="icon-puzzle"></i> Item Set</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sample/switches"><i class="icon-puzzle"></i> Customization</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('badges.index') }}"><i class="icon-puzzle"></i> Badge</a>
          </li>
        </ul>
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Manage Data</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="/sample/buttons"><i class="icon-puzzle"></i> Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sample/social"><i class="icon-puzzle"></i> Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sample/social"><i class="icon-puzzle"></i> Pay</a>
          </li>
        </ul>
      </li>
      <li class="nav-item nav-dropdown">
        <a class="nav-link" href="{{ route('admin.user') }}"><i class="icon-puzzle"></i> Manage Users</a>
      </li>
    </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
