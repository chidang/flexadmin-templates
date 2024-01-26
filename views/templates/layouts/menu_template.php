<?php
  $resources = $config->prefixes->getRoutePrefixWith('.') . $config->modelNames->snakePlural;
?>

<li class="{{ Request::is('admin/<?php echo $resources; ?>*') ? 'active' : '' }}">
  <x-nav-link :href="route('<?php echo $resources; ?>.index')" :active="Request::is('admin/<?php echo $resources; ?>*')">
    {{ __('Manage <?php echo $config->modelNames->human; ?>') }}
  </x-nav-link>
</li>
