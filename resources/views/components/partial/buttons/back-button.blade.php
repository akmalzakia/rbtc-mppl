<a
  {{ $attributes->merge(['class' => 'flex flex-row space-x-2 items-center justify-between text-blue-600 group','href' => '']) }}
  >

  <span class="flex-shrink-0 p-1 border border-blue-600 group-hover:bg-blue-600 group-hover:border-0 group-hover:text-white rounded-full transition">
    <i data-feather="arrow-left"></i>
  </span>

  <span class="text-lg font-medium">
    Back {{ empty($back) ? '' : 'to ' . $back}}
  </span>

</a>
