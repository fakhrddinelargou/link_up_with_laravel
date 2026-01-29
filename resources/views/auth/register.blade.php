
<x-guest-layout>
    @if ($errors->any())
    <div style="color:red; margin-bottom:10px">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<!-- Registration Content -->
        <!-- Profile Header Section -->
        <div class="flex flex-col items-center gap-4">
            <div class="relative group">
                <div id='profileImage' class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-32 w-32 bg-gray-100 border-2 border-dashed border-[#dbdfe6] dark:border-gray-600 flex items-center justify-center overflow-hidden" data-alt="User profile avatar placeholder showing a grey circle" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDPhcIMvPiKeFm1MxzxhlNbpl52TFm1vLB583ZwrEqF2L3v2wfjXu91huhwPRiID_pSwz5YiRw7wAVgZLuIgJe-bS_5Dz6wffd5i6IXkmPpZGcx0igi1RYpWj3Lpr-IkVH0qPmI-2h1B9-toKL_1BZhxh_WhmFf0NvG2HwZqLO2Losk7CRD4v-mP32H9i1yNXtUok1ZX69FiVGS8TKykXFReXYPH1peDbUzms2eA6w6aB9ryruS5f9Juvk_5eeou1c3II7lbQ5r_cYz");'>
                    </div>
                    <div class="absolute inset-0 bg-black/20 rounded-full opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center pointer-events-none">
                        <span class="material-symbols-outlined text-white text-3xl">photo_camera</span>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-[#111318] dark:text-white text-[24px] font-bold leading-tight tracking-[-0.015em] text-center">Créer votre compte</h1>
                    <p class="text-[#616f89] dark:text-gray-400 text-base font-normal leading-normal text-center mt-1">Rejoignez notre communauté de professionnels</p>
                </div>
        
            </div>
            <!-- Registration Form -->
                <form method="POST" class="flex flex-col gap-5 pt-3" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
            <label class='m-auto flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-6 bg-[#f0f2f4] dark:bg-gray-800 text-[#111318] dark:text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors' for="upload">
                <input type="file" id='upload' name='image' accept="image/jpeg,image/png" class='hidden'>
                Upload Image
            </label>
    <!-- Username Field with Loading State -->
    <div class="flex flex-col gap-2">
        <label class="flex flex-col w-full">
            <p class="text-[#111318] dark:text-white text-sm font-semibold leading-normal pb-1">Username (Requis)</p>
            <div class="flex w-full items-stretch rounded-lg group">
                <input required name='username' class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg rounded-r-none border-r-0 text-[#111318] dark:text-white focus:outline-0 focus:ring-0 border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary h-14 placeholder:text-[#616f89] p-[15px] text-base font-normal leading-normal transition-colors" type="text" value="alex_designer"/>
                <div class="text-[#616f89] flex border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 items-center justify-center pr-[15px] rounded-r-lg border-l-0">
                </div>
            </div>
        </label>
        <p class="text-[#616f89] dark:text-gray-400 text-xs font-normal leading-normal italic">Vérification de la disponibilité...</p>
    </div>
    <!-- Row: First Name & Last Name -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <label class="flex flex-col">
            <p class="text-[#111318] dark:text-white text-sm font-semibold leading-normal pb-1">Prénom</p>
            <input required name='firstname' class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-lg text-[#111318] dark:text-white focus:outline-0 focus:ring-0 border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary h-14 placeholder:text-[#616f89] p-[15px] text-base font-normal leading-normal transition-colors" placeholder="Ex: Jean"/>
        </label>
        <label class="flex flex-col">
            <p class="text-[#111318] dark:text-white text-sm font-semibold leading-normal pb-1">Nom</p>
            <input required name='lastname' class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-lg text-[#111318] dark:text-white focus:outline-0 focus:ring-0 border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary h-14 placeholder:text-[#616f89] p-[15px] text-base font-normal leading-normal transition-colors" placeholder="Ex: Dupont"/>
        </label>
    </div>
    <!-- Email Field with Success State -->
    <div class="flex flex-col gap-2">
        <label class="flex flex-col w-full">
            <p class="text-[#111318] dark:text-white text-sm font-semibold leading-normal pb-1">Email</p>
            <div class="flex w-full items-stretch rounded-lg">
                <input required name='email' class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg rounded-r-none border-r-0 text-[#111318] dark:text-white focus:outline-0 focus:ring-0 border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary h-14 placeholder:text-[#616f89] p-[15px] text-base font-normal leading-normal transition-colors" type="email" value="alex.designer@company.com"/>
                <div class="text-green-500 flex border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 items-center justify-center pr-[15px] rounded-r-lg border-l-0">
                    <span class="material-symbols-outlined text-xl">check_circle</span>
                </div>
            </div>
        </label>
    </div>
    <!-- Password Field -->
    <div class="flex flex-col gap-2">
<label class="flex flex-col w-full">
<p class="text-[#111318] dark:text-white text-sm font-semibold leading-normal pb-1">Mot de passe</p>
<input required   name="password" class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-lg text-[#111318] dark:text-white focus:outline-0 focus:ring-0 border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary h-14 placeholder:text-[#616f89] p-[15px] text-base font-normal leading-normal transition-colors" placeholder="••••••••" type="password"/>
</label>
<p class="text-[#616f89] dark:text-gray-400 text-xs font-normal leading-normal italic">8 caractères minimum avec chiffres et symboles.</p>
</div>
<!-- Bio Field -->
<label class="flex flex-col">
    <p class="text-[#111318] dark:text-white text-sm font-semibold leading-normal pb-1">Bio <span class="text-xs font-normal text-[#616f89]">(Optionnel)</span></p>
    <textarea  name='bio' class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-lg text-[#111318] dark:text-white focus:outline-0 focus:ring-0 border border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 focus:border-primary min-h-[100px] placeholder:text-[#616f89] p-[15px] text-base font-normal leading-normal transition-colors" placeholder="Dites-nous en plus sur vous..."></textarea>
</label>
<!-- Submit Button -->
<button  class="w-full flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 px-4 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-blue-700 transition-colors shadow-md mt-4" type="submit">
    <span class="truncate">S'inscrire</span>
</button>
<!-- Switch to Login -->
<div class="flex items-center justify-center gap-2 mt-4">
    <span class="text-[#616f89] text-sm">Déjà un compte ?</span>
    <a class="text-primary font-bold text-sm hover:underline" href="{{ route('login') }}">Se connecter</a>
</div>
</form>
</x-guest-layout>

        <script>

    const uploadImage = document.getElementById('upload');
    const profileImage = document.getElementById('profileImage');
          console.log(uploadImage);

          uploadImage.addEventListener('input' , (e)=>{
            let image = e.target.value;
            const file = uploadImage.files[0];
            console.log(file , 'what');
            
            const img = URL.createObjectURL(file);
            console.log(img);
            
            let img_box = new Image();

            img_box.src = img;

            profileImage.appendChild(img_box);
           
           

          })

          

        </script>
