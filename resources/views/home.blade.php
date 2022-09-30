<x-app-layout>
    <x-slot name="header"></x-slot>
            <h1>Cookapp</h1>
            <a href='/dishes/create'>create</a>
            <div class='dishes'>
                @foreach ($dishes as $dish)
                    <div class='dish'>
                        <h2 class='title'>
                            <a href="/dishes/{{ $dish->id}}">{{ $dish->title }}</a>
                        </h2>
                    </div>
                    <a href="">{{ $dish->category->name }}</a>
                @endforeach
            </div>
            <div class='paginate'>
                {{ $dishes->links() }}
            </div>
</x-app-layout>