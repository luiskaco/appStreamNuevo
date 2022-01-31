<style>


/* INICIO FOOTER */
             footer{
                position: fixed;
                width: 100%;
                bottom: 120px;
            }


        .container-footer{
            display: flex;
            position: absolute;
            width: 100%;
            height: 120px;
            display: flex;
            justify-content: end;

        }


             .container-image-financiera{
                width: 70%;
                display: flex;
                justify-content: end;
                align-items: end;
             }

             .container-image-financiera img{
                background-repeat: no-repeat;
                background-size: contain;
                width: 170px;
                height: 65px;
            }


             /* FIN FOOTER */


    @media   (max-width:1024px){
        footer, .container-footer{
            position: unset;
        }
    }



    @media   (max-width:550px){
        .container-image-financiera {
            width: 100%;
        }

        .container-image-financiera svg{
            width: 50%;
            height: auto;
        }
    }






</style>

<footer>
<div class="container-footer">
    <div class="container-image-financiera">

        <svg width="310" height="158" viewBox="0 0 310 158" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M310 0C310 0 232.162 65.2575 0 158H310V0Z" fill="#CA005D"/>
            <path d="M240.184 91.3734C238.769 91.2771 237.362 91.0847 235.973 90.7976C235.973 90.7976 238.69 92.2051 238.755 92.5762C238.486 93.5157 238.119 94.4248 237.66 95.2888C237.66 95.2888 239.605 93.3183 240.235 92.8321C240.806 92.5241 241.473 92.4418 242.103 92.6018C244.884 93.0036 247.723 92.5245 250.215 91.2327C252.854 89.9531 252.867 89.6332 252.867 89.6332C251.191 88.7456 249.26 88.4565 247.395 88.8143C244.884 89.3042 242.462 90.1669 240.21 91.3734" fill="#910048"/>
            <path d="M173.162 134.878C171.701 134.793 170.252 134.566 168.836 134.2C169.857 134.808 170.842 135.474 171.784 136.196C171.751 137.297 171.578 138.389 171.269 139.446C171.269 139.446 172.969 137.143 173.626 136.439C174.038 136.017 175.042 136.12 175.531 136.196C178.961 136.77 182.48 135.994 185.343 134.034C188.279 131.961 188.24 131.564 188.24 131.564C186.154 130.355 183.685 129.971 181.326 130.49C177.154 131.296 173.832 134.699 173.162 134.878Z" fill="#910048"/>
            <path d="M268.525 90.6567C267.559 90.7975 262.576 88.9933 262.576 88.9933C263.9 90.0073 265.164 91.0968 266.362 92.2562C266.645 92.7424 265.074 96.7474 265.074 96.7474C265.074 96.7474 267.855 93.8044 268.937 92.9087C269.568 92.3841 270.972 92.6912 271.641 92.9087C276.368 94.2959 281.453 93.786 285.805 91.4885C290.26 89.0829 290.273 88.5071 290.273 88.5071C287.547 86.4729 284.15 85.532 280.758 85.8712C274.783 86.319 269.568 90.5288 268.589 90.6695" fill="#FFA300"/>
            <path d="M150.822 127.521C149.856 127.79 145.941 126.241 145.941 126.241C147.323 127.019 148.641 127.905 149.882 128.89C150.023 129.274 147.474 132.908 147.474 132.908C147.474 132.908 150.049 130.758 151.053 129.926C152.407 129.196 153.95 128.884 155.483 129.031C156.771 129.159 161.921 129.888 168.514 125.576C172.815 122.748 172.776 122.236 172.776 122.236C169.75 120.762 166.294 120.408 163.028 121.238C157.054 122.518 151.787 127.278 150.822 127.547" fill="#FFA300"/>
            <path d="M192.825 124.45C191.815 124.153 190.859 123.699 189.992 123.106C190.75 123.736 191.456 124.425 192.103 125.167C191.561 125.96 190.94 126.698 190.249 127.367C190.249 127.367 192.026 126.344 192.76 125.947C193.675 125.671 194.652 125.671 195.567 125.947C198.336 126.755 201.307 126.518 203.911 125.282C206.847 124.002 206.886 123.721 206.886 123.721C205.206 122.484 203.137 121.885 201.053 122.032C197.267 122.147 193.507 124.463 192.889 124.514" fill="#FFA300"/>
            <path d="M173.639 112.448C172.644 112.895 171.563 113.122 170.471 113.113C166.299 113.113 162.745 110.887 162.745 105.257C162.745 99.6265 166.479 97.2849 170.664 97.3105C171.691 97.3094 172.713 97.4471 173.703 97.72V100.279C172.733 99.872 171.691 99.6631 170.638 99.6649C167.703 99.6649 165.604 101.124 165.578 105.129C165.552 109.134 167.831 110.592 170.613 110.605C171.659 110.627 172.699 110.431 173.664 110.029L173.639 112.448Z" fill="white"/>
            <path d="M184.468 107.573C184.468 110.861 182.523 113.139 179.575 113.126C176.626 113.113 174.733 110.823 174.746 107.521C174.759 104.22 176.716 101.994 179.626 102.006C182.536 102.019 184.493 104.22 184.468 107.573ZM177.424 107.573C177.424 109.837 178.403 110.963 179.652 110.976C180.901 110.989 181.802 109.952 181.815 107.598C181.828 105.244 180.837 104.22 179.562 104.22C178.287 104.22 177.437 105.218 177.424 107.573Z" fill="white"/>
            <path d="M199.945 112.896H197.46V106.191C197.46 104.796 196.919 104.284 195.786 104.271C195.142 104.271 194.164 104.54 194.164 105.052C194.18 105.35 194.18 105.649 194.164 105.948V112.883H191.678V106.178C191.678 104.77 191.125 104.271 190.159 104.259C189.193 104.246 188.485 104.476 188.485 105.244V112.921H186V102.685C188.189 102.685 188.884 102.211 190.507 102.211C190.969 102.167 191.436 102.217 191.879 102.357C192.322 102.498 192.731 102.727 193.082 103.03C194.043 102.468 195.148 102.192 196.262 102.237C198.413 102.237 199.842 103.222 199.842 105.973L199.945 112.896Z" fill="white"/>
            <path d="M201.748 117.822C201.748 115.467 201.851 113.804 201.864 110.874V102.467C203.409 102.467 204.439 102.109 205.881 102.122C208.624 102.122 210.89 104.092 210.877 107.752C210.864 111.411 208.418 113.19 206.152 113.177C205.492 113.225 204.836 113.054 204.285 112.691V117.809L201.748 117.822ZM205.701 104.22C204.864 104.22 204.413 104.578 204.413 104.937V110.324C204.413 110.707 204.993 111.04 205.701 111.04C207.285 111.04 208.199 110.029 208.212 107.688C208.225 105.346 207.323 104.233 205.74 104.22" fill="white"/>
            <path d="M217.65 106.05V105.615C217.65 104.77 217.058 104.246 216.002 104.246C214.865 104.236 213.739 104.477 212.706 104.949V102.646C213.836 102.301 215.013 102.128 216.195 102.134C218.642 102.134 220.148 103.145 220.135 105.602C220.135 107.342 220.058 108.839 220.045 110.503C220.045 111.373 220.045 112.332 220.148 112.895C218.346 112.895 217.367 113.177 215.835 113.164C213.259 113.164 211.972 111.949 211.972 109.901C211.972 107.854 213.71 106.063 217.676 106.063L217.65 106.05ZM217.676 107.905C215.616 107.905 214.56 108.583 214.547 109.773C214.551 109.971 214.597 110.166 214.681 110.345C214.766 110.524 214.887 110.683 215.038 110.812C215.188 110.941 215.365 111.037 215.555 111.094C215.746 111.151 215.946 111.168 216.144 111.142C217.045 111.142 217.431 110.899 217.573 110.592C217.656 109.699 217.691 108.802 217.676 107.905Z" fill="white"/>
            <path d="M222.054 112.998V102.505H224.398V103.503C224.704 103.075 225.116 102.732 225.594 102.508C226.072 102.284 226.6 102.186 227.127 102.224C227.511 102.227 227.895 102.262 228.273 102.326V104.885C227.72 104.671 227.129 104.571 226.535 104.591C225.518 104.591 224.616 104.988 224.565 105.871C224.565 107.637 224.501 110.362 224.488 113.023L222.054 112.998Z" fill="white"/>
            <path d="M231.84 102.544H234.892V104.694H231.84C231.84 106.92 231.84 108.443 231.84 110.08C231.84 110.861 232.304 111.181 233.128 111.181C233.741 111.213 234.352 111.075 234.892 110.784V112.972C234.117 113.236 233.303 113.366 232.484 113.356C230.668 113.356 229.342 112.512 229.355 110.567V100.625L231.866 99.1531L231.84 102.544Z" fill="white"/>
            <path d="M241.845 106.152V105.756C241.845 104.898 241.266 104.374 240.21 104.374C239.072 104.364 237.947 104.605 236.913 105.077V102.774C238.049 102.433 239.23 102.265 240.416 102.275C242.849 102.275 244.356 103.273 244.356 105.743C244.356 107.47 244.266 108.967 244.266 110.631C244.255 111.434 244.289 112.237 244.369 113.036C242.566 113.036 241.588 113.305 240.055 113.292C237.48 113.292 236.192 112.013 236.192 110.029C236.192 108.046 237.931 106.191 241.897 106.191L241.845 106.152ZM241.897 108.033C239.849 108.033 238.78 108.711 238.78 109.901C238.786 110.099 238.833 110.293 238.919 110.472C239.004 110.65 239.125 110.809 239.275 110.939C239.425 111.069 239.6 111.166 239.79 111.226C239.979 111.285 240.179 111.305 240.377 111.283C241.279 111.283 241.665 111.04 241.794 110.72C241.891 109.828 241.925 108.93 241.897 108.033Z" fill="white"/>
            <path d="M260.155 113.164H257.67V106.459C257.67 105.065 257.142 104.553 256.009 104.553C255.352 104.553 254.387 104.809 254.387 105.321C254.403 105.623 254.403 105.926 254.387 106.229V113.151H251.902V106.447C251.902 105.039 251.348 104.54 250.369 104.54C249.391 104.54 248.708 104.758 248.695 105.512V113.19H246.21V102.953C248.399 102.953 249.107 102.467 250.73 102.467C251.192 102.428 251.658 102.48 252.1 102.621C252.542 102.761 252.951 102.987 253.305 103.286C254.267 102.723 255.371 102.448 256.486 102.493C258.623 102.493 260.065 103.478 260.052 106.229L260.155 113.164Z" fill="white"/>
            <path d="M271.448 107.944C271.448 111.245 269.516 113.522 266.555 113.51C263.593 113.497 261.713 111.194 261.726 107.905C261.739 104.617 263.696 102.365 266.606 102.377C269.516 102.39 271.474 104.604 271.448 107.944ZM264.417 107.944C264.417 110.221 265.396 111.347 266.632 111.347C267.868 111.347 268.783 110.324 268.795 107.969C268.808 105.615 267.817 104.604 266.542 104.591C265.267 104.578 264.417 105.589 264.417 107.944Z" fill="white"/>
            <path d="M276.637 102.429C277.464 102.413 278.289 102.521 279.084 102.749V105.077C278.27 104.726 277.395 104.539 276.508 104.527C275.646 104.527 275.105 104.885 275.105 105.423C275.105 107.035 279.522 106.894 279.509 110.132C279.509 111.885 278.221 113.561 275.285 113.548C274.358 113.553 273.435 113.428 272.542 113.177V110.976C273.374 111.25 274.242 111.396 275.118 111.411C276.315 111.411 276.92 110.976 276.933 110.272C276.933 108.507 272.491 108.75 272.504 105.679C272.504 103.67 274.049 102.416 276.573 102.429" fill="white"/>
            <path d="M215.436 131.782V119.792H221.706V121.238C220.625 121.161 219.131 121.136 217.328 121.123C217.174 121.123 217.084 121.238 217.084 121.417C217.084 122.121 217.084 123.401 217.084 124.847H221.217V126.254H217.071V131.769L215.436 131.782Z" fill="white"/>
            <path d="M225.016 121.097C225.023 121.295 224.971 121.49 224.866 121.658C224.76 121.825 224.607 121.957 224.425 122.037C224.243 122.117 224.041 122.14 223.846 122.105C223.65 122.069 223.47 121.976 223.328 121.837C223.187 121.698 223.091 121.52 223.052 121.327C223.014 121.133 223.035 120.932 223.112 120.75C223.19 120.568 223.321 120.414 223.488 120.307C223.655 120.2 223.851 120.146 224.05 120.151C224.177 120.145 224.304 120.166 224.423 120.212C224.541 120.257 224.649 120.326 224.74 120.415C224.831 120.504 224.902 120.611 224.949 120.728C224.997 120.845 225.019 120.971 225.016 121.097ZM224.874 123.593C224.874 126.075 224.771 129.261 224.771 131.82H223.239V123.58L224.874 123.593Z" fill="white"/>
            <path d="M227.797 125.589V131.833H226.303V123.785C228.042 123.785 228.273 123.375 229.921 123.375C230.312 123.325 230.709 123.364 231.082 123.491C231.455 123.617 231.794 123.827 232.073 124.104C232.351 124.38 232.562 124.717 232.689 125.088C232.817 125.458 232.856 125.853 232.806 126.241V131.859H231.286V126.51C231.286 125.231 230.681 124.77 229.522 124.757C228.363 124.744 227.81 125.154 227.797 125.589Z" fill="white"/>
            <path d="M238.703 126.51V126.088C238.703 125.192 238.162 124.719 237.119 124.706C236.279 124.711 235.449 124.894 234.686 125.243V123.836C235.511 123.537 236.383 123.385 237.261 123.388C239.102 123.388 240.223 124.156 240.223 126.037C240.223 127.457 240.158 128.736 240.145 130.08C240.145 130.784 240.145 131.359 240.145 131.833C238.858 131.833 238.021 132.063 236.939 132.05C234.995 132.05 233.99 131.04 234.003 129.491C234.016 127.943 235.445 126.574 238.703 126.51ZM238.703 127.687C236.63 127.687 235.729 128.276 235.729 129.44C235.727 129.624 235.765 129.807 235.841 129.975C235.916 130.143 236.028 130.293 236.167 130.415C236.307 130.536 236.471 130.626 236.648 130.679C236.826 130.732 237.013 130.746 237.197 130.72C238.137 130.72 238.484 130.502 238.6 130.131C238.692 129.32 238.727 128.503 238.703 127.687Z" fill="white"/>
            <path d="M243.249 125.653V131.91H241.755V123.874C243.493 123.874 243.725 123.452 245.373 123.452C245.764 123.402 246.161 123.441 246.534 123.567C246.907 123.694 247.246 123.903 247.525 124.18C247.803 124.457 248.014 124.794 248.141 125.164C248.268 125.535 248.308 125.93 248.258 126.318V131.935H246.725V126.574C246.725 125.294 246.133 124.834 244.961 124.821C243.789 124.808 243.249 125.218 243.249 125.653Z" fill="white"/>
            <path d="M253.73 130.848C254.162 130.844 254.593 130.802 255.018 130.72V131.999C254.566 132.107 254.104 132.163 253.64 132.166C251.065 132.166 249.455 130.681 249.468 127.764C249.419 127.196 249.495 126.623 249.692 126.087C249.889 125.551 250.202 125.065 250.608 124.661C251.014 124.258 251.503 123.947 252.043 123.752C252.582 123.556 253.158 123.48 253.73 123.529C254.192 123.533 254.653 123.575 255.108 123.657V125.103C254.659 124.956 254.189 124.887 253.717 124.898C252.198 124.898 251.245 125.742 251.232 127.892C251.219 130.042 252.159 130.835 253.73 130.848Z" fill="white"/>
            <path d="M258.314 121.238C258.321 121.368 258.301 121.498 258.255 121.619C258.208 121.74 258.136 121.851 258.044 121.942C257.952 122.034 257.841 122.106 257.719 122.152C257.596 122.198 257.466 122.218 257.335 122.211C257.079 122.211 256.834 122.11 256.652 121.93C256.471 121.75 256.37 121.506 256.37 121.251C256.37 120.996 256.471 120.752 256.652 120.572C256.834 120.392 257.079 120.291 257.335 120.291C257.463 120.286 257.591 120.307 257.71 120.352C257.829 120.398 257.938 120.467 258.03 120.555C258.121 120.644 258.194 120.75 258.243 120.868C258.292 120.985 258.316 121.111 258.314 121.238ZM258.172 123.733C258.172 126.216 258.082 129.402 258.069 131.974H256.55V123.733H258.172Z" fill="white"/>
            <path d="M260.928 127.777C260.928 127.866 260.928 128.071 260.928 128.135C260.893 128.498 260.936 128.863 261.055 129.208C261.173 129.552 261.365 129.868 261.616 130.133C261.867 130.398 262.172 130.607 262.511 130.746C262.85 130.885 263.214 130.95 263.58 130.937C264.214 130.958 264.845 130.849 265.435 130.617V131.897C264.803 132.103 264.142 132.203 263.477 132.191C260.992 132.191 259.267 130.797 259.28 127.726C259.218 127.186 259.272 126.64 259.438 126.123C259.604 125.605 259.879 125.129 260.244 124.725C260.609 124.321 261.056 123.999 261.556 123.78C262.055 123.56 262.596 123.448 263.143 123.452C265.28 123.452 266.143 124.911 266.143 126.779C266.138 127.104 266.113 127.429 266.066 127.751L260.928 127.777ZM264.16 126.497C264.456 126.497 264.572 126.356 264.572 126.075C264.572 125.307 264.096 124.795 263.091 124.795C262.6 124.776 262.12 124.942 261.748 125.26C261.375 125.578 261.137 126.025 261.082 126.51L264.16 126.497Z" fill="white"/>
            <path d="M267.508 132.012V123.772H268.976V124.603C269.221 124.252 269.551 123.967 269.936 123.774C270.32 123.582 270.747 123.489 271.178 123.503C271.481 123.494 271.785 123.529 272.079 123.605V125.218C271.688 125.092 271.279 125.031 270.868 125.038C269.903 125.038 269.104 125.384 269.066 126.203C269.066 127.649 269.066 129.811 269.066 131.999L267.508 132.012Z" fill="white"/>
            <path d="M277.255 126.676V126.254C277.255 125.358 276.702 124.885 275.671 124.872C274.827 124.877 273.993 125.06 273.225 125.41V124.002C274.05 123.701 274.922 123.55 275.8 123.554C277.654 123.554 278.775 124.322 278.762 126.203C278.762 127.623 278.762 128.903 278.762 130.246C278.731 130.83 278.731 131.415 278.762 131.999C277.474 131.999 276.624 132.23 275.555 132.217C273.598 132.217 272.594 131.206 272.607 129.658C272.62 128.109 273.946 126.74 277.255 126.676ZM277.255 127.854C275.182 127.854 274.281 128.442 274.281 129.607C274.279 129.792 274.317 129.976 274.394 130.145C274.47 130.314 274.583 130.465 274.723 130.587C274.864 130.708 275.03 130.798 275.209 130.85C275.389 130.902 275.577 130.914 275.761 130.886C276.689 130.886 277.049 130.669 277.165 130.298C277.24 129.485 277.266 128.669 277.242 127.854H277.255Z" fill="white"/>
            </svg>

    </div>
</div>
</footer>

