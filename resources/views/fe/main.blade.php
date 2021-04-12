<main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">
        @yield('main_sponser')
      </div>
    </section><!-- End Cliens Section -->

    @yield('aboutus');

    @yield('whyussection')

    @yield('skillsection')

    @yield('servicesection')

    @include('fe/ctasection')

    @yield('portfolio')

    @yield('teamsection')

    @yield('price')

    @include('fe/frequentlyquestion')

    @include('fe/contact')

  </main><!-- End #main -->