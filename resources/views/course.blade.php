@include('partials.header')


    <style>

        @php
            $i = 1;
        @endphp
        @foreach ($course->course_outline as $outline)
        .outline .components .comp:nth-child({{$i}})::after {
            background-color: {{$outline['color']}}
        }
        .outline .components .comp:nth-child({{$i}}) .top {
            background-color: {{$outline['color']}}
        }
        .outline .components .comp:nth-child({{$i}}) .base {
            border: 1px solid {{$outline['color']}}
        }
            @php
                $i++
            @endphp

        @endforeach
{}
    </style>
    <div class="pagestart">

        <div class="content">

            <div class="header">{{$course->title}}</div>

            <p>{{$course->description}}</p>

            <a href="{{route('interest-form')}}?course={{$course->id}}" class="cta-button">Start Learning</a>

        </div>

        <div class="image"><img src="/img/{{$course->image}}" alt=""></div>

    </div>

    <div class="outline">

        <div class="top">
            <div class="vert-line"></div>
            <div class="heading">Course Outline</div>
        </div>

        <div class="components">

            @foreach ($course->course_outline as $outline)
            {{-- {{print_r($outline)}} --}}
            <div class="comp">
                <div class="top">
                    <div class="head">{{$outline['outline_title']}}</div>
                </div>

                <div class="base">
                    {!!$outline['description']!!}
                </div>
            </div>
            @endforeach

        </div>

    </div>

    @include('partials.footer')

</body>
</html>
