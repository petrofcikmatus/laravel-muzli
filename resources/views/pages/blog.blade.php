@extends('master')

@section('title', 'Blog')

@section('class', 'blog')

@section('content')
    <section class="content container">
        <h1 class="shadow">Big words</h1>

        <h2 class="shadow">
            You need a blog regardless of whether you have something to say.<br>
            Welcome to the Internet.
        </h2>

        <div class="post-list">
            <article class="post">
                <h1 class="post-title">Croissant gummies jelly-o</h1>

                <p>Apple pie jujubes danish apple pie brownie. Sugar plum bonbon apple pie gummies sweet roll cake marshmallow. Cotton candy sweet roll lollipop lollipop sugar plum. Brownie sesame snaps chupa chups sweet danish brownie sugar plum apple pie.</p>

                <p>Jelly beans cake croissant fruitcake powder pastry cookie dragée dessert. Candy tiramisu biscuit bear claw lollipop marshmallow sesame snaps. Marshmallow gummies tootsie roll cotton candy sweet bonbon jelly. Sweet roll wafer oat cake sweet roll dragée oat cake tootsie roll.</p>

                <p>Croissant gummies jelly-o. Sweet muffin gingerbread lemon drops jelly-o. Powder powder gummies dragée chocolate liquorice.</p>

            </article>

            <article class="post">
                <h1 class="post-title">Sweet muffin gingerbread</h1>

                <p>Croissant bonbon pie cupcake macaroon carrot cake chocolate bar. Toffee chocolate dragée liquorice chupa chups. Sesame snaps brownie sweet ice cream.</p>

                <p>Bear claw sesame snaps cookie powder macaroon bonbon sesame snaps cotton candy croissant. Gingerbread pastry lemon drops chocolate cake. Gummies liquorice biscuit pie topping. Candy gummies halvah sweet marzipan chocolate bar tootsie roll.</p>

                <p>Halvah candy canes jelly-o lollipop tart. Oat cake wafer dessert. Ice cream cotton candy tiramisu tiramisu toffee gummi bears gummi bears macaroon danish. Marshmallow chocolate jelly beans soufflé jelly-o caramels liquorice tootsie roll gummies.</p>
            </article>

            <a href="#" class="btn btn-yellow load-older">Older articles</a>
        </div>
    </section>
@stop