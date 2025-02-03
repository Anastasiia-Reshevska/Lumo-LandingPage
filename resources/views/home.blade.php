@extends ('layouts.app')

@section ('title', 'Lumo')

@section ('header')
    @include ('components.header.index') 
@endsection

@section ('content')
    @include ('components.hero.index') 
    @include ('components.winterfest-promo.index') 
@endsection

