
    <style>

        .pentagon-container {
            position: relative;
            width: 260px;
            height: 250px;
            overflow: visible;
            margin-top: 5rem;
            transition: 1.5s;
        }
        .pentagon-container:hover .pentagon-btn {
            transform:scaleX(1.2)scaleY(1.1);
        }
        
        .pentagon-btn .text {
            opacity: 0;
        }

        .pentagon-btn {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            border: none;
            color: #666;
            z-index: 1;
            transition: transform 1.3s;
            background: transparent;
            outline: none !important;
            box-shadow: none !important;
            transform: scaleY(0.9);
        }

        .pentagon-btn .text {
            position: absolute;
            z-index: 3;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            line-height: 1.3;
            color: #666;
            transition: all 0.5s ease 2.5s;
            top: 45%;
            display: block; /* Changed from 'none' to 'block' to ensure text is visible */
        }

        /* SVG Border Animation */
        .pentagon-container .border-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 2;
            transform: scaleX(0.98) scaleY(1.1);
            top: -1px;
        }

        .pentagon-btn.active {
            transform: scaleX(1.2)scaleY(1.1);
        }

        .pentagon-container .border-path {
            fill: none;
            stroke: #BEBEBE;
            stroke-width: 15px;
            stroke-dasharray: 200;
            stroke-dashoffset: 200;
            transition: stroke-dashoffset 0.5s ease, stroke 0.5s ease;
        }

        .pentagon-btn.active .segment-1 {
            stroke: #FF5252;
            stroke-dashoffset: 0;
            transition-delay: 0.5s;
        }
        .pentagon-btn.active .segment-2 {
            stroke: #FFE564;
            stroke-dashoffset: 0;
            transition-delay: 1s;
        }
        .pentagon-btn.active .segment-3 {
            stroke: #B4B3B3;
            stroke-dashoffset: 0;
            transition-delay: 1.5s;
        }
        .pentagon-btn.active .segment-4 {
            stroke: #51B8CA;
            stroke-dashoffset: 0;
            transition-delay: 2s;
        }
        .pentagon-btn.active .segment-5 {
            stroke: #88CE00;
            stroke-dashoffset: 0;
            transition-delay: 2.5s;
        }

        .pentagon-btn .icon img {
            width: 27px;
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            top: 50%;
        }

        .pentagon-btn.active .icon img {
            filter: brightness(0) invert(1) !important;
        }

        .icons-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 3;
        }

        .pentagon-container .icon {
            position: absolute;
            font-size: 22px;
            color: #999;
            transform: scale(0.5);
            transition: all 0.4s ease;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 60px;
            font-size: 19px;
        }

        .pentagon-container .icon-1 { top: -21px; left: 50%; transform: translateX(-50%) !important; }
        .pentagon-container .icon-2 { top: 40%; right: -10px; transform: translateY(-50%) !important; }
        .pentagon-container .icon-3 { bottom: -15px; right: 20px; }
        .pentagon-container .icon-4 { bottom: -15px; left: 20px; }
        .pentagon-container .icon-5 { top: 40%; left: -10px; transform: translateY(-50%) !important; }

        .pentagon-btn.active .icon-1 { background: #FF5252; transition-delay: 0.5s; }
        .pentagon-btn.active .icon-2 { background: #FFE564; transition-delay: 1s; }
        .pentagon-btn.active .icon-3 { background: #B4B3B3; transition-delay: 1.5s; }
        .pentagon-btn.active .icon-4 { background: #51B8CA; transition-delay: 2s; }
        .pentagon-btn.active .icon-5 { background: #88CE00; transition-delay: 2.5s; }

        .pentagon-btn.active .icon-1 img {  transition-delay: 0.5s; }
        .pentagon-btn.active .icon-2 img {  transition-delay: 1s; }
        .pentagon-btn.active .icon-3 img {  transition-delay: 1.5s; }
        .pentagon-btn.active .icon-4 img {  transition-delay: 2s; }
        .pentagon-btn.active .icon-5 img {  transition-delay: 2.5s; }

        .pentagon-btn:before {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            background: #ececec;
            transition: 0.1s;
            top: 48%;
            transform: translate(-50%, -50%) scaleY(1.066) scaleX(0.967);
            left: 50%;
            clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%);
        }

        .pentagon-btn:after {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            background-image: url(https://94dfd9d8685d.ngrok-free.app/wordpress_projects/mfel/assets/images/taphere.png);
            transition: 0.5s;
            top: 48%;
            transform: translate(-50%, -50%) scaleY(0.99) scaleX(0.86);
            left: 50%;
            clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%);
            background-size: 100% 110%;
            z-index: 2;
        }

        .pentagon-btn.complete:after {
            background-image: url(https://94dfd9d8685d.ngrok-free.app/wordpress_projects/mfel/assets/images/startbutton.png);
            transition: 0.5s;
        }

        .pentagon-btn .icon {
            background: #ececec;
            opacity: 1;
            transform: scale(1);
        }

        .pentagon-btn.active .text {
            color: white;
            transform: scale(1.3) !important;
            transition-delay: 0.2s;
        }
    </style>
    <div class="pentagon-container">
        <button class="pentagon-btn" id="visualizeBtn">
            <div class="text">Tap Here<br><span style="font-size:14px;">Click to visualize</span></div>
            <svg class="border-animation" viewBox="0 0 250 230">
                <path class="border-path segment-1" d="M125,0 L240,88"></path>
                <path class="border-path segment-2" d="M240,88 L200,220"></path>
                <path class="border-path segment-3" d="M200,220 L50,220"></path>
                <path class="border-path segment-4" d="M50,220 L10,88"></path>
                <path class="border-path segment-5" d="M10,88 L125,0"></path>
            </svg>
            <div class="icons-container">
                <div class="icon icon-1"><img src="<?php echo SITE_URL; ?>assets/images/fire-button-icon.png" alt=""></div>
                <div class="icon icon-2"><img src="<?php echo SITE_URL; ?>assets/images/earth-button-icon.png" alt=""></div>
                <div class="icon icon-3"><img src="<?php echo SITE_URL; ?>assets/images/metal-button-icon.png" alt=""></div>
                <div class="icon icon-4"><img src="<?php echo SITE_URL; ?>assets/images/water-button-icon.png" alt=""></div>
                <div class="icon icon-5"><img src="<?php echo SITE_URL; ?>assets/images/wood-button-icon.png" alt=""></div>
            </div>
        </button>
    </div>

    <script>
        const btn = document.getElementById('visualizeBtn');

        btn.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent any default behavior
            console.log('Button clicked'); // Debug: Confirm click is registered

            // Toggle the active class
            btn.classList.toggle('active');
            console.log('Active class:', btn.classList.contains('active')); // Debug: Check if active class is added

            // Update button text
            const text = btn.querySelector('.text');
            if (btn.classList.contains('active')) {
                text.innerHTML = 'Start<br>Visualizing';
            } else {
                text.innerHTML = 'Tap Here<br><span style="font-size:14px;">Click to visualize</span>';
            }

            // Redirect after 2 seconds to allow animations to complete
            setTimeout(() => {
                console.log('Redirecting...'); // Debug: Confirm redirect trigger
                // window.location.href = '<?php echo SITE_URL; ?>pages/self_vs_edit.php'; // Replace with actual URL for testing
            }, 4000); // 2000ms = 2 seconds
           
            if (btn.classList.contains('active')) {
                setTimeout(() => {
                    btn.classList.add('complete');
                }, 3000);
            }
            else{
                    btn.classList.remove('complete');
            }

            
        });
    </script>