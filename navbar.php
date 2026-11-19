<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false" class="sticky top-0 z-50 flex items-center justify-between border-b border-slate-300 bg-white/90 backdrop-blur-md px-6 py-4" aria-label="penguin ui menu">
    <a href="index.php" class="text-2xl font-bold text-slate-900 flex items-center gap-2">
        <span class="bg-black text-white px-2.5 py-1 rounded-lg text-lg">W03</span>
        <span>MyPortfolio</span>
    </a>

    <ul class="hidden items-center gap-6 sm:flex">
        <li>
            <a href="index.php" class="font-medium transition <?php echo $currentPage == 'index.php' ? 'text-black font-bold underline underline-offset-8 decoration-2' : 'text-slate-600 hover:text-black'; ?>">
                หน้าปก (Home)
            </a>
        </li>
        <li>
            <a href="bio.php" class="font-medium transition <?php echo $currentPage == 'bio.php' ? 'text-black font-bold underline underline-offset-8 decoration-2' : 'text-slate-600 hover:text-black'; ?>">
                ไบโอ (Bio)
            </a>
        </li>
        <li>
            <a href="assignment.php" class="font-medium transition <?php echo $currentPage == 'assignment.php' ? 'text-black font-bold underline underline-offset-8 decoration-2' : 'text-slate-600 hover:text-black'; ?>">
                Assignment
            </a>
        </li>
        <li>
            <a href="form.php" class="font-medium transition <?php echo $currentPage == 'form.php' ? 'text-black font-bold underline underline-offset-8 decoration-2' : 'text-slate-600 hover:text-black'; ?>">
                แบบฟอร์ม (Form)
            </a>
        </li>
    </ul>

    <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen" type="button" class="flex text-slate-600 sm:hidden" aria-label="mobile menu">
        <svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>

    <ul x-cloak x-show="mobileMenuIsOpen" x-transition class="fixed max-h-svh overflow-y-auto inset-x-0 top-16 z-10 flex flex-col border-b border-slate-300 bg-white px-6 pb-6 pt-4 sm:hidden shadow-lg">
        <li class="py-2"><a href="index.php" class="w-full text-lg font-medium text-slate-800">หน้าปก (Home)</a></li>
        <li class="py-2"><a href="bio.php" class="w-full text-lg font-medium text-slate-800">ไบโอ (Bio)</a></li>
        <li class="py-2"><a href="assignment.php" class="w-full text-lg font-medium text-slate-800">Assignment</a></li>
        <li class="py-2"><a href="form.php" class="w-full text-lg font-medium text-slate-800">แบบฟอร์ม (Form)</a></li>
    </ul>
</nav>