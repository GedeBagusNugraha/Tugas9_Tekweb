<script src="https://cdn.tailwindcss.com"></script>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="text-sm">
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                    </div>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log in</button>
            </div>
        </form>

        <p class="mt-5 text-center text-sm text-gray-500">Don't have an account?
            <a href="{{route('signuppage')}}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign up</a>
        </p>

        <div class="grid grid-cols-5 grid-rows-1 gap-4 mt-5">
            <div class="col-span-2 flex items-center justify-center"><svg class="stroke-gray-400 stroke-2 h-5 w-full"><line x1="0" y1="10px" x2="200px" y2="10px"/></svg></div>
            <div class="col-start-3 flex items-center justify-center">or</div>
            <div class="col-span-2 col-start-4 flex items-center justify-center"><svg class="stroke-gray-400 stroke-2 h-5 w-full"><line x1="0" y1="10px" x2="200px" y2="10px"/></svg></div>
        </div>

        <div class="mt-5">
            <button type="submit" class="flex justify-center items-center w-full rounded-md bg-white px-3 py-3 text-sm font-semibold leading-6 text-black shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 border border-black">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_22)">
                  <mask id="mask0_1_22" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="5" width="9" height="14">
                    <path d="M0.755829 5.20001H8.60802V18.8H0.755829V5.20001Z" fill="white"/>
                  </mask>
                  <g mask="url(#mask0_1_22)">
                    <mask id="mask1_1_22" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                      <path d="M22.9629 9.90897H12.2513V14.35H18.417C17.8422 17.1714 15.4387 18.7911 12.2513 18.7911C8.48917 18.7911 5.45855 15.7607 5.45855 11.9988C5.45855 8.23703 8.48917 5.20665 12.2513 5.20665C13.8711 5.20665 15.3342 5.7814 16.4837 6.72184L19.8278 3.37803C17.79 1.60159 15.1774 0.504402 12.2513 0.504402C5.87655 0.504402 0.755859 5.62465 0.755859 11.9988C0.755859 18.3731 5.87655 23.4933 12.2513 23.4933C17.999 23.4933 23.2242 19.3135 23.2242 11.9988C23.2242 11.3197 23.1197 10.5882 22.9629 9.90897Z" fill="white"/>
                    </mask>
                    <g mask="url(#mask1_1_22)">
                      <path d="M-0.289154 18.7911V5.20665L8.59366 11.9988L-0.289154 18.7911Z" fill="#FBBC05"/>
                    </g>
                  </g>
                </g>
                <mask id="mask2_1_22" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="12">
                  <path d="M0.755829 0.495987H23.2241V12H0.755829V0.495987Z" fill="white"/>
                </mask>
                <g mask="url(#mask2_1_22)">
                  <mask id="mask3_1_22" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                    <path d="M22.9629 9.90894H12.2513V14.35H18.417C17.8422 17.1714 15.4387 18.7911 12.2513 18.7911C8.48917 18.7911 5.45855 15.7607 5.45855 11.9988C5.45855 8.237 8.48917 5.20663 12.2513 5.20663C13.8711 5.20663 15.3342 5.78138 16.4837 6.72182L19.8278 3.378C17.79 1.60157 15.1774 0.504379 12.2513 0.504379C5.87649 0.504379 0.755798 5.62463 0.755798 11.9988C0.755798 18.3731 5.87649 23.4933 12.2513 23.4933C17.9989 23.4933 23.2241 19.3135 23.2241 11.9988C23.2241 11.3196 23.1196 10.5881 22.9629 9.90894Z" fill="white"/>
                  </mask>
                  <g mask="url(#mask3_1_22)">
                    <path d="M-0.289154 5.20662L8.59366 11.9988L12.2513 8.81175L24.7917 6.77406V-0.540627H-0.289154V5.20662Z" fill="#EA4335"/>
                  </g>
                </g>
                <mask id="mask4_1_22" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                  <path d="M0.755829 0.495987H23.2241V23.4933H0.755829V0.495987Z" fill="white"/>
                </mask>
                <g mask="url(#mask4_1_22)">
                  <mask id="mask5_1_22" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                    <path d="M22.9629 9.90894H12.2513V14.35H18.417C17.8422 17.1714 15.4387 18.7911 12.2513 18.7911C8.48917 18.7911 5.45855 15.7607 5.45855 11.9988C5.45855 8.237 8.48917 5.20663 12.2513 5.20663C13.8711 5.20663 15.3342 5.78138 16.4837 6.72182L19.8277 3.378C17.7899 1.60157 15.1774 0.504379 12.2513 0.504379C5.87649 0.504379 0.755798 5.62463 0.755798 11.9988C0.755798 18.3731 5.87649 23.4933 12.2513 23.4933C17.999 23.4933 23.2242 19.3135 23.2242 11.9988C23.2242 11.3197 23.1197 10.5882 22.9629 9.90894Z" fill="white"/>
                  </mask>
                  <g mask="url(#mask5_1_22)">
                    <path d="M-0.289154 18.7911L15.3864 6.77406L19.5143 7.29656L24.7917 -0.540627V24.5383H-0.289154V18.7911Z" fill="#34A853"/>
                  </g>
                </g>
                <mask id="mask6_1_22" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="6" y="5" width="18" height="19">
                  <path d="M6.49594 5.20001H23.2241V23.4933H6.49594V5.20001Z" fill="white"/>
                </mask>
                <g mask="url(#mask6_1_22)">
                  <mask id="mask7_1_22" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                    <path d="M22.9629 9.90897H12.2512V14.35H18.417C17.8422 17.1714 15.4386 18.7911 12.2512 18.7911C8.48911 18.7911 5.45849 15.7607 5.45849 11.9988C5.45849 8.23703 8.48911 5.20665 12.2512 5.20665C13.871 5.20665 15.3341 5.7814 16.4836 6.72184L19.8277 3.37803C17.7899 1.60159 15.1774 0.504402 12.2512 0.504402C5.87649 0.504402 0.755798 5.62465 0.755798 11.9988C0.755798 18.3731 5.87649 23.4933 12.2512 23.4933C17.9989 23.4933 23.2241 19.3135 23.2241 11.9988C23.2241 11.3197 23.1196 10.5882 22.9629 9.90897Z" fill="white"/>
                  </mask>
                  <g mask="url(#mask7_1_22)">
                    <path d="M24.7917 24.5383L8.5936 11.9988L6.50354 10.4315L24.7917 5.20665V24.5383Z" fill="#4285F4"/>
                  </g>
                </g>
              </svg>
              <span class="ml-2">Continue With Google</span>
            </button>
          </div>
          

    </div>
</div>