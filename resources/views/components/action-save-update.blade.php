<div x-data="{ shown: false }"
    x-init="clearTimeout(2000); shown = true; timeout = setTimeout(() => { shown = false }, 2000);"
    x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:leave.opacity.duration.1500ms 
    class="text-sm text-gray-600 mr-3">
    {{ session('message') }}
</div>
