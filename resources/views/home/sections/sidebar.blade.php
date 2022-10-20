<nav class="sidebar">
    <!-- close sidebar menu -->
    <div class="dismiss">
      <i class="fas fa-arrow-right"></i>
    </div>

    <div class="logo">
      <h3>
        <a href="{{ route('home.pages.index') }}"
          >لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a
        >
      </h3>
    </div>

    <ul class="list-unstyled menu-elements">
      <li class="active">
        <a  href="{{ route('home.pages.index') }}"
          ><i class="fas fa-home"></i> خانه</a
        >
      </li>
      <li>
        <a  href="{{ route('home.pages.services') }}"
          ><i class="fas fa-briefcase"></i> خدمات بازرگانی</a
        >
      </li>
      <li>
        <a  href="{{ route('product') }}"
          ><i class="fas fa-tags"></i> محصولات</a
        >
      </li>
      <li>
        <a  href="{{ route('home.pages.blog') }}"
          ><i class="fas fa-pencil-alt"></i> وبلاگ</a
        >
      </li>
      <li>
        <a  href="{{ route('home.pages.contact-us') }}"
          ><i class="fas fa-envelope"></i> تماس با ما</a
        >
      </li>
      <li>
        <a  href="{{ route('home.pages.about-us') }}"
          ><i class="fas fa-address-card"></i> درباره ما</a
        >
      </li>
      <li>
        <a  href="{{ route('home.pages.collab') }}"
          ><i class="fas fa-user-friends"></i> همکاری با ما</a
        >
      </li>
      {{-- <li>
        <a
          href="#otherSections"
          data-toggle="collapse"
          aria-expanded="false"
          class="dropdown-toggle"
          role="button"
          aria-controls="otherSections"
        >
          بخش های دیگر
        </a>
        <ul class="collapse list-unstyled p-0" id="otherSections">
          <li>
            <a class="scroll-link" href="#section-3"> درباره ما</a>
          </li>
          <li>
            <a class="scroll-link" href="#section-4"> همکاری با ما</a>
          </li>
        </ul>
      </li> --}}
    </ul>

    <div class="to-top">
      <a class="btn btn-primary btn-customized-3" href="#" role="button">
        <i class="fas fa-arrow-up"></i> به بالا
      </a>
    </div>

    <div class="dark-light-buttons">
      <a
        class="btn btn-primary btn-customized-4 btn-customized-dark"
        href="#"
        role="button"
        >Dark</a
      >
      <a
        class="btn btn-primary btn-customized-4 btn-customized-light"
        href="#"
        role="button"
        >Light</a
      >
    </div>
  </nav>
