@extends ('layout')

@section ('content')    

    <section class="ban-training container">
        {{-- Title --}}
        <div>
            <h1>Training</h1>
        </div>
        <div class="row equal-height ban-training-content">
            {{-- Training Navigation  --}}
            <div class="col m3 s12 ban-training-nav">
                <h5>Training Navigation</h5>

                <ul class="ban-training-section">
                    <li>Section 1</li>
                    <ul class="ban-training-lesson">
                        <a href="/training/1"><li>Lesson 1</li></a>
                        <a href="/training/2"><li>Lesson 2</li></a>
                        <a href="/training/3"><li>Lesson 3</li></a>
                        <a href="/training/4"><li>Lesson 4</li></a>
                    </ul>
                    <li>Section 2</li>
                    <ul class="ban-training-lesson">
                        <a href="/training/5"><li>Lesson 1</li></a>
                        <a href="/training/6"><li>Lesson 2</li></a>
                    </ul>
                </ul>

            </div>

            {{-- Training Area  --}}
            <div class="col m9 s12">
                {{-- Training Content --}}
                <h5>Lesson Example</h5>

                <iframe src="https://player.vimeo.com/video/116009930" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                {{-- Use when individual lessons have been created --}}
                {{-- @yield ('lesson-content')  --}}

                <div class="right-align">
                    <button class="btn">Next</button>
                </div>
            </div>
        </div>
    </section>
    
@endsection
