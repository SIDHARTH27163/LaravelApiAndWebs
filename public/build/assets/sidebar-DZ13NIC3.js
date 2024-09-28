const t=document.getElementById("sidebar"),n=document.getElementById("closeSidebar");n.addEventListener("click",()=>{t.classList.toggle("-translate-x-full")});const e=document.createElement("button");e.innerHTML=`
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>`;e.classList.add("lg:hidden","fixed","top-20","left-0","p-2","bg-amber-600","text-white","rounded-full","hover:scale-110");e.addEventListener("click",()=>{t.classList.toggle("-translate-x-full")});document.body.appendChild(e);
