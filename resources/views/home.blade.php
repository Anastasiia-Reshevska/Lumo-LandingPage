@extends ('layouts.app')

@section ('title', 'Lumo')

@section ('header')
    @include ('components.header.index')
@endsection

@section ('content')
    @include ('components.hero.index')
    @include ('components.winterfest-promo.index')
    @include ('components.advantages-textile.index')
    @include ('components.discount.index')
    @include ('components.collection-preview.index')
    @include ('components.venue-intro.index')
    @include ('components.booking-form.index')
    @include ('components.footer.index')
@endsection
