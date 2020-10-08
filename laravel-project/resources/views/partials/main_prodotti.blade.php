<main>
    <div class="container">
        <h2>Le lunghe</h2>
        <div class="cards">
            
            @foreach ($lunghe as $card)
            <div class="card">
                <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                </div>
            @endforeach
        </div>
        <h2>Le corte</h2>
        <div class="cards">
            @foreach ($corte as $card)
            <div class="card">
                <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                </div>
            @endforeach
        </div>
        <h2>Le cortissime</h2>
        <div class="cards">
            @foreach ($cortissime as $card)
            <div class="card">
                <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                </div>
            @endforeach
        </div>
        
    </div>
</main>