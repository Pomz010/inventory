<x-header />

<div class="flex flex-col h-full w-max mx-auto justify-center items-center gap-y-6">
    <div class="grid justify-items-center gap-y-2">
        <span><img class="rounded-full h-24" src="/img/logo.png" alt="Company logo."></span>
        <h1>IT Asset Monitoring</h1>
    </div>

    <div class="w-full">
        <form action="/" method="POST" class="flex flex-col gap-4">
            @csrf
            <div class="flex flex-col">
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" class="border-slate-800 border rounded-3xl px-3 py-1" name="loginUsername" >
            </div>
           
            <div class="flex flex-col">
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" class="border-slate-800 border rounded-3xl px-3 py-1" name="loginPassword">
            </div>
            
            <div class="flex justify-between gap-x-8">
                <div>
                    <input type="checkbox" id="rememberMe" name="rememberMe">
                    <label for="rememberMe">Remember me</label>
                </div>
                <span><a href="">Forgot password?</a></span>
            </div>

            <button type="submit" class="bg-slate-950 text-white rounded-3xl px-3 py-1">Submit</button>
        </form>
    </div>
</div>

<x-footer />