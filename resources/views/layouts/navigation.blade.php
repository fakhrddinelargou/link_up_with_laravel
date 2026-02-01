<header class="sticky top-0 z-50 w-full bg-white dark:bg-background-dark border-b border-[#f0f2f4] dark:border-gray-800 shadow-sm">
<div class="max-w-[1440px] mx-auto px-6 h-16 flex items-center justify-between gap-8">
<!-- Far Left: Minimalist Brand Logo -->
<div class="flex items-center gap-3 shrink-0">
<div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined text-[20px]">grid_view</span>
</div>
<h1 class="text-[#111318] dark:text-white text-lg font-bold tracking-tight">MinimalistBrand</h1>
</div>
<!-- Center: Wide Search Input -->
<div class="flex-1 max-w-[640px]">
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-[#616f89] group-focus-within:text-primary transition-colors">search</span>
</div>
<input id='find_user' class="w-full h-11 bg-[#f0f2f4] dark:bg-gray-800 border-none rounded-xl pl-12 pr-4 text-base placeholder:text-[#616f89] focus:ring-2 focus:ring-primary/20 focus:bg-white dark:focus:bg-gray-700 transition-all outline-none" placeholder="Search profile" type="text"/>
<ul id="results"></ul>
</div>
</div>
<!-- Far Right: Profile Action -->
<div class="flex items-center gap-4 shrink-0">
<button class="flex items-center gap-2 px-4 h-10 bg-primary hover:bg-primary/90 text-white text-sm font-semibold rounded-lg transition-colors shadow-sm">
<span class="material-symbols-outlined text-[20px]">person</span>
<span>Profile</span>
</button>
<div class="size-10 rounded-full border border-gray-100 dark:border-gray-700 bg-center bg-cover bg-no-repeat" data-alt="User avatar placeholder with abstract colors" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDI8yen7gNX9kAFZJFmQjLDEmK1TEUoRFY7uNFEcRTdgUmF65lLSbCjCsCwiUw5d762dZhE6U34nohQ8VNrMwjSC12fDBq2IiFy3aqd6xELOOZyIVZKFQcy3ZGxMd27rA-rKzrVoaMT8l-i7SIvMGTm6xA1H1dJn3jf1MIE54DTwquaPYkKHSzReT0CU85UOdLi3Vuset0gLlcHSYCHGhYIfvIKWrwczhdzUdtbdnHwliKY2ObtUDmPOWTM5XSIfIUrocceNYQwkhkb')"></div>
</div>
</div>
</header>

<!-- <script>

   const find_user = document.getElementById('find_user');
    console.log(find_user);
    

    find_user.addEventListener('input',(e)=>{
        username = e.target.value;

        if(username == '')return;



        console.log(username);
        console.log(getUser(username));
        getUser(username);
        
    })


    async function getUser(username){
        console.log(username);
        
        const data  = await fetch(`users/search?query=${username}`);
        const users = await data.json();
        return users;
    }

    
    
</script> -->