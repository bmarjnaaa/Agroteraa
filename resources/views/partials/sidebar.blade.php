<aside
  :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
  class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5 duration-300 ease-linear dark:border-gray-800 dark:bg-black lg:static lg:translate-x-0"
  @click.outside="sidebarToggle = false"
>
  <!-- SIDEBAR HEADER -->
  <div
    :class="sidebarToggle ? 'justify-center' : 'justify-between'"
    class="sidebar-header flex items-center gap-2 pb-7 pt-8"
  >
    <a href="{{ route('dashboard') }}">
       <div class="flex items-center gap-2">
              <img src="{{ asset('aset/logo2.png') }}" alt="Logo AGROTERA dengan simbol pertanian hijau dan coklat" class="w-13 h-10 sm:w-13 sm:h-10">
              <span class="text-base sm:text-lg lg:text-xl font-bold text-black font-inter">AGROTERA</span>
            </div>
      
    </a>
  </div>
  <!-- /SIDEBAR HEADER -->

  <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
    <!-- Sidebar Menu -->
    <nav>
      <!-- Menu Group -->
      <div>
        <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
          <span
            class="menu-group-title"
            :class="sidebarToggle ? 'lg:hidden' : ''"
          >
            Menu
          </span>
        </h3>

        <ul class="mb-6 flex flex-col gap-4">

          <!-- Contoh 1: Menu item sederhana (tanpa dropdown) -->
          <li>
            <a
              href="{{ route('dashboard') }}"
              class="menu-item group menu-item-active"
            >
              <svg
                class="menu-item-icon-active"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V8.99998C3.25 10.2426 4.25736 11.25 5.5 11.25H9C10.2426 11.25 11.25 10.2426 11.25 8.99998V5.5C11.25 4.25736 10.2426 3.25 9 3.25H5.5Z"
                  fill=""
                />
              </svg>

              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Dashboard
              </span>
            </a>
          </li>
          <!-- /Contoh 1 -->

          <!-- Contoh 2: Menu dengan dropdown (misal: Master Data) -->
          <li x-data="{ open: false }">
            <button
              type="button"
              @click="open = !open"
              class="menu-item group w-full text-left"
            >
              <svg
                class="menu-item-icon-inactive"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.5 3.25H18.5C19.7426 3.25 20.75 4.25736 20.75 5.5V18.5C20.75 19.7426 19.7426 20.75 18.5 20.75H5.5C4.25736 20.75 3.25 19.7426 3.25 18.5V5.5C3.25 4.25736 4.25736 3.25 5.5 3.25Z"
                  fill=""
                />
              </svg>

              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Master Data
              </span>

              <svg
                class="menu-item-arrow absolute right-2.5 top-1/2 -translate-y-1/2 stroke-current"
                :class="[open ? 'menu-item-arrow-active' : 'menu-item-arrow-inactive', sidebarToggle ? 'lg:hidden' : '' ]"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585"
                  stroke=""
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </button>

            <div
              class="translate transform overflow-hidden"
              :class="open ? 'block' : 'hidden'"
            >
              <ul class="menu-dropdown mt-2 flex flex-col gap-1 pl-9">
                <li>
                  <a
                    href="#"
                    class="menu-dropdown-item group menu-dropdown-item-inactive"
                  >
                    Data User
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="menu-dropdown-item group menu-dropdown-item-inactive"
                  >
                    Data Laporan
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <!-- /Contoh 2 -->

          <!-- Tambah menu lain di bawah sini kalau sudah ada fitur -->
        </ul>
      </div>
    </nav>
    <!-- /Sidebar Menu -->
  </div>
</aside>
