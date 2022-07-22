<div>
    {{-- <h1>MASTER BLADE (Signup)</h1> --}}

    <!-- User Signup Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Signup<span></span></p>
                <h1 class="text-center mb-5">We Welcome You As New User</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                 <!--       <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>   -->

                 @if($error)
                     <p class="alert alert-danger my-2">{{ $error }}</p> 
                 @endif
                        <form wire:submit.prevent='submit'>
                            <div class="row g-3">
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" wire:model='name' placeholder="Username">
                                        @error('username') <span class="error">{{ $message }}</span> @enderror
                                        <label for="subject">Username</label>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="subject" wire:model='email' placeholder="Email">
                                        @error('email') <span class="error">{{ $message }}</span> @enderror
                                        <label for="subject">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="subject" wire:model='password' placeholder="Password">
                                        @error('password') <span class="error">{{ $message }}</span> @enderror
                                        <label for="subject">Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="subject" wire:model='cpassword' placeholder="Confirm Password">
                                        @error('cpassword') <span class="error">{{ $message }}</span> @enderror
                                        <label for="subject">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary w-100 py-3"  type="submit">Signup</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- User Signup End-->
</div>
