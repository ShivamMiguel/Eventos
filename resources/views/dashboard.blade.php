@extends ('layouts.main')

@section ('title', 'dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
<h1>Meus eventos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count(events)==0)

    @else
        <p>voce ainda não tem evento <a href="/events/create">Criar evento</a></p>
    @endif

</div>



@endsection

