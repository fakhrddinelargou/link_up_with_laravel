<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Main Content -->

<!-- Headline and Meta Text -->
<div class="text-center mb-8">
<h1 class="text-[#111318] dark:text-white tracking-light text-[32px] font-bold leading-tight pb-2">Welcome Back</h1>
<p class="text-[#616f89] dark:text-slate-400 text-sm font-normal leading-normal">Please enter your details to sign in to your account.</p>
</div>
<!-- Login Form -->
<form  class="space-y-6">
<!-- Email Field -->
<div class="flex flex-col w-full">
<label class="flex flex-col w-full">
<p class="text-[#111318] dark:text-slate-200 text-base font-medium leading-normal pb-2">Email Address</p>
<input required class="form-input flex w-full min-w-0 resize-none overflow-hidden rounded-lg text-[#111318] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary border border-[#dbdfe6] dark:border-slate-700 bg-white dark:bg-slate-800 focus:border-primary h-14 placeholder:text-[#616f89] dark:placeholder:text-slate-500 p-[15px] text-base font-normal leading-normal" placeholder="Enter your email" type="email"/>
</label>
</div>
<!-- Password Field -->
<div class="flex flex-col w-full">
<div class="flex items-center justify-between pb-2">
<p class="text-[#111318] dark:text-slate-200 text-base font-medium leading-normal">Password</p>
<a class="text-primary text-sm font-medium hover:underline" href="{{ route('password.request') }}">Forgot password?</a>
</div>
<label class="flex flex-col w-full">
<div class="flex w-full items-stretch rounded-lg group">
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg rounded-r-none border-r-0 text-[#111318] dark:text-white focus:outline-0 focus:ring-0 border border-[#dbdfe6] dark:border-slate-700 bg-white dark:bg-slate-800 focus:border-primary h-14 placeholder:text-[#616f89] dark:placeholder:text-slate-500 p-[15px] text-base font-normal leading-normal" placeholder="Enter your password" type="password"/>
<div class="text-[#616f89] dark:text-slate-400 flex border border-[#dbdfe6] dark:border-slate-700 bg-white dark:bg-slate-800 items-center justify-center pr-[15px] rounded-r-lg border-l-0 cursor-pointer hover:text-primary transition-colors">
<span class="material-symbols-outlined">visibility</span>
</div>
</div>
</label>
</div>
<!-- Remember Me (Extra component for completeness) -->
<div class="flex items-center gap-2">
<input class="w-4 h-4 text-primary border-[#dbdfe6] dark:border-slate-700 rounded focus:ring-primary dark:bg-slate-800" id="remember" type="checkbox"/>
<label class="text-sm text-[#616f89] dark:text-slate-400 font-normal" for="remember">Keep me logged in</label>
</div>
<!-- Submit Button -->
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 px-4 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all active:scale-[0.98]" type="submit">
<span class="truncate">Login</span>
</button>
</form>
<!-- Bottom Text -->
<div class="mt-8 text-center">
<p class="text-[#616f89] dark:text-slate-400 text-sm">
                    Don't have an account? 
                    <a class="text-primary font-bold hover:underline" href="{{ route('register') }}">Register</a>
</p>
</div>

</x-guest-layout>