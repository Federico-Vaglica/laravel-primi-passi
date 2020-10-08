<main>
    <div class="container">
        <h2>le lunghe</h2>
        <div class="cards">
            
            @foreach ($lunghe as $card)
            <div class="card">
                <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                </div>
            @endforeach
        </div>
        <h2>le corte</h2>
        <div class="cards">
            @foreach ($corte as $card)
            <div class="card">
                <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                </div>
            @endforeach
        </div>
        <h2>le cortissime</h2>
        <div class="cards">
            @foreach ($cortissime as $card)
            <div class="card">
                <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                </div>
            @endforeach
        </div>
        
    </div>
</main>