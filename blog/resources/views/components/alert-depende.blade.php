<div {{ $attributes->merge(['class' => $class_default  .  $class ]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'Info Alert!' }}</span>
    {{ $slot }}
</div>
