@push('title', 'Cek Khodam ;()')

<div class="flex justify-center items-center w-full min-h-screen">
    <div
        class="h-[25rem] w-[22rem] md:w-96 bg-green-800 rounded-lg bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-0 shadow-2xl shadow-green-500 flex flex-col">
        <p class="text-4xl text-white p-2 text-center font-outfit">Cek Khodam</p>

        @if (!$result)
            <form wire:loading.remove wire:target='cekKodam' wire:submit.prevent='cekKodam'
                class="px-5 flex flex-col gap-2 pt-24">
                <input id="input_name" wire:model='nama' type="text" placeholder="Ketikan nama kamu.."
                    class="input bg-transparent input-bordered w-full" autocomplete="off"/>
                <button id="btn_sbmt" wire:submit='cekKodam'
                    class="btn bg-green-500 hover:bg-green-600 text-white w-full">Cek Khodam</button>
            </form>
        @endif
        <div wire:loading wire:target='cekKodam' class="ml-24 flex gap-2 pt-16">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="200"
                height="200" style="shape-rendering: auto; display: block;"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g>
                    <g transform="translate(50 50)">
                        <g transform="scale(0.8)">
                            <g transform="translate(-50 -50)">
                                <g>
                                    <animateTransform keyTimes="0;0.33;0.66;1" values="-20 -20;20 -20;0 20;-20 -20"
                                        dur="1s" repeatCount="indefinite" type="translate"
                                        attributeName="transform"></animateTransform>
                                    <path
                                        d="M44.19 26.158c-4.817 0-9.345 1.876-12.751 5.282c-3.406 3.406-5.282 7.934-5.282 12.751 c0 4.817 1.876 9.345 5.282 12.751c3.406 3.406 7.934 5.282 12.751 5.282s9.345-1.876 12.751-5.282 c3.406-3.406 5.282-7.934 5.282-12.751c0-4.817-1.876-9.345-5.282-12.751C53.536 28.033 49.007 26.158 44.19 26.158z"
                                        fill="#46dff0"></path>
                                    <path
                                        d="M78.712 72.492L67.593 61.373l-3.475-3.475c1.621-2.352 2.779-4.926 3.475-7.596c1.044-4.008 1.044-8.23 0-12.238 c-1.048-4.022-3.146-7.827-6.297-10.979C56.572 22.362 50.381 20 44.19 20C38 20 31.809 22.362 27.085 27.085 c-9.447 9.447-9.447 24.763 0 34.21C31.809 66.019 38 68.381 44.19 68.381c4.798 0 9.593-1.425 13.708-4.262l9.695 9.695 l4.899 4.899C73.351 79.571 74.476 80 75.602 80s2.251-0.429 3.11-1.288C80.429 76.994 80.429 74.209 78.712 72.492z M56.942 56.942 c-3.406 3.406-7.934 5.282-12.751 5.282s-9.345-1.876-12.751-5.282c-3.406-3.406-5.282-7.934-5.282-12.751 c0-4.817 1.876-9.345 5.282-12.751c3.406-3.406 7.934-5.282 12.751-5.282c4.817 0 9.345 1.876 12.751 5.282 c3.406 3.406 5.282 7.934 5.282 12.751C62.223 49.007 60.347 53.536 56.942 56.942z"
                                        fill="#e90c59"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g></g>
                </g><!-- [ldio] generated by https://loading.io -->
            </svg>
        </div>
        @if ($result)
            <div class="px-5 flex flex-col items-center gap-2 pt-20">
                <p class="text-white font-outfit text-bold text-2xl">Khodam mu adalah</p>
                <p class="text-green-500 font-outfit text-bold text-5xl">{{ $result }}</p>
                <button wire:click='reload'
                    class="btn bg-green-500 hover:bg-green-600 text-white shadow-lg shadow-black mt-2">Cek lagi</button>
            </div>
        @endif
        <p class="text-center text-white font-sans text-bold pt-2">Made by Kepodev</p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.getElementById('input_name');
            var btn = document.getElementById('btn_sbmt');

            function toggleButton() {
                btn.disabled = input.value.trim() === '';
            }

            toggleButton();

            input.addEventListener('input', toggleButton);
        });
    </script>
</div>