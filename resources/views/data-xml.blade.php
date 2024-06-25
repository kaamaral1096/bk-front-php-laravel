<?xml version="1.0" encoding="UTF-8"?>
<data>
@foreach($registros as $item)
    <item>
        <modelo>{{ $item->modelo }}</modelo>
        <eixos>{{ $item->eixos }}</eixos>
        <dataFabricacao>{{ $item->dataFabricacao }}</dataFabricacao>
        <passageiros>{{ $item->passageiros }}</passageiros>
        <cor>{{ $item->cor }}</cor>
    </item>
@endforeach
</data>