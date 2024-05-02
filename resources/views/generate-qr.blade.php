<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel QR By Amit rajbhar</title>
</head>

<body class="antialiased">
    @php
        $anchor = 'https://best-tarot.com';
    @endphp
    <div>
        
        {{-- {!! QrCode::generate($anchor) !!} --}}
        {{-- {!! QrCode::size(150)->color(75, 0, 130)->generate($anchor) !!} --}}
        {{-- {!! QrCode::color(75, 0, 130)->generate($anchor) !!} --}}
        {{-- {!! QrCode::size(200)->color(255, 0, 0)->generate($anchor) !!} --}}
        {{-- {!! QrCode::size(200)->backgroundColor(255, 0, 0)->generate($anchor) !!} --}}
        {{-- {!! QrCode::size(200)->eyeColor(0, 255, 255, 255, 0, 0, 0)->generate($anchor) !!} --}}
        {{-- {!! QrCode::size(200)->style('dot')->generate($anchor) !!} --}}
        {{-- {!! QrCode::size(200)->style('square')->generate($anchor) !!} --}}
        {{-- {!! QrCode::size(200)->style('round')->generate($anchor) !!} --}}
        {{-- {!! QrCode::size(200)->eye('circle')->generate($anchor) !!} --}}
        {{-- {!! QrCode::size(200)->eye('circle')->generate($anchor) !!} --}}
        {{-- {!! QrCode::size(200)->errorCorrection('H')->generate($anchor) !!} --}}
        {!! QrCode::size(200)->errorCorrection('H')->generate($anchor) !!}
    </div>
</body>

</html>