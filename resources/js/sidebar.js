const sidebar = document.getElementById('sidebar');
    const closeSidebar = document.getElementById('closeSidebar');

    closeSidebar.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });

    // Optional: If you want to toggle sidebar open on small screens with a button
    const openSidebar = document.createElement('button');
    openSidebar.innerHTML = `
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>`;
    openSidebar.classList.add('lg:hidden', 'fixed', 'top-20', 'left-0', 'p-2', 'bg-amber-600', 'text-white', 'rounded-full' , 'hover:scale-110');

    openSidebar.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });

    document.body.appendChild(openSidebar);
