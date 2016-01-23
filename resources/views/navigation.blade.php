<div id="navigation">

    {{-- navigation code --}}

    <ul>
        <li><a href="{{URL::to('/')}}">{{trans('messages.home')}}</a></li>
        <li><a href="{{URL::to('/about')}}">{{trans('messages.about')}}</a></li>
        <li><a href="{{URL::to('/my_works')}}">{{trans('messages.my_works')}}</a></li>
        <li><a href="{{URL::to('/request')}}">{{trans('messages.request')}}</a></li>
        <li><a href="{{URL::to('/contact')}}">{{trans('messages.contact')}}</a></li>
    </ul>
</div>