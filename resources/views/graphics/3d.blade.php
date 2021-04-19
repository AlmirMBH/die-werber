@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Visualize your project months ahead of its deadline</p>
                <p class="text-base custom-black-paragraph">You want to organize an event or manufacture a product but you are not sure if that is a good idea? Why would you not see your event before you even organized it or your product before you started producing it? We can convert your ideas into reality and let you take a look at the most intricate details of your event or product.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/graphics-3d.png')}}" alt="3d graphics"/>
                </div>
            </div>
        </div>
    </section>
@endsection
