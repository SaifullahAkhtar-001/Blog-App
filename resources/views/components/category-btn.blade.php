@props(['category'])
<div class="space-x-2">
    <a href="/?category={{$category->slug}}"
       class="px-3 py-1 border border-purple-500 rounded-full text-purple-500 text-xs uppercase font-semibold"
       style="font-size: 10px">{{$category->name}}</a>
</div>
