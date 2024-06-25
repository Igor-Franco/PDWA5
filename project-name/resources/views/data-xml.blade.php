<?xml version="1.0" encoding="UTF-8"?>
<data>
    @foreach ($registros as $item)
        <item>
            <name>{{ $item->name }}</name>
            <platform>{{ $item->platform }}</platform>
            <genre>{{ $item->genre }}</genre>
            <year>{{ $item->year }}</year>
            <developer>{{ $item->developer }}</developer>
        </item>
    @endforeach
</data>
