@props(['type' => 'info'])
<!-- info como valor por defecto -->

@php
    switch($type) {
        case 'info':
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
        case 'success':
            $class = 'text-green-800 bg-green-50 dark:bg-gray-800" dark:text-green-400';
            break;
        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
            break;
        case 'danger':
            $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;
        default:
            $class = 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text dark:text-gray-400';
            break;
    }

$class_default = 'p-4 text-sm rounded-lg ';
@endphp

<div {{ $attributes->merge(['class' => $class_default  .  $class ]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'Info Alert!' }}</span>
    {{ $slot }}
</div>
<!-- ternario ?? '' => si no esta por defecto '' -->
