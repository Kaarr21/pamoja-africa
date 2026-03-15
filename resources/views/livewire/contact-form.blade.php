<div>
    @if (session()->has('success'))
        <div class="mb-4 p-4 rounded-lg bg-green-500/20 text-green-200 border border-green-500/50">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-5">
        <div class="hidden">
            <input type="text" wire:model="honeypot_field" tabindex="-1" autocomplete="off" />
        </div>

        <div class="flex flex-col gap-2 text-left">
            <label class="text-slate-200 text-sm font-semibold ml-1">Full Name</label>
            <input wire:model="name" class="w-full rounded-lg bg-background-dark/50 border border-slate-700/50 text-slate-100 h-14 px-4 focus:ring-2 focus:ring-primary focus:border-transparent placeholder:text-slate-500 transition-all" placeholder="Enter your name" type="text" required/>
            @error('name') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
        </div>
        
        <div class="flex flex-col gap-2 text-left">
            <label class="text-slate-200 text-sm font-semibold ml-1">Email Address</label>
            <input wire:model="email" class="w-full rounded-lg bg-background-dark/50 border border-slate-700/50 text-slate-100 h-14 px-4 focus:ring-2 focus:ring-primary focus:border-transparent placeholder:text-slate-500 transition-all" placeholder="email@pamojaafrica.com" type="email" required/>
            @error('email') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
        </div>
        
        <div class="flex flex-col gap-2 text-left">
            <label class="text-slate-200 text-sm font-semibold ml-1">Message</label>
            <textarea wire:model="message" class="w-full rounded-lg bg-background-dark/50 border border-slate-700/50 text-slate-100 min-h-[120px] p-4 focus:ring-2 focus:ring-primary focus:border-transparent placeholder:text-slate-500 transition-all resize-none" placeholder="How can we help you?" required></textarea>
            @error('message') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" class="w-full h-14 bg-gradient-to-r from-primary to-purple-600 text-white font-bold rounded-lg shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-[0.98] transition-all">
            <span wire:loading.remove>Send Message</span>
            <span wire:loading>Sending...</span>
        </button>
    </form>
</div>
