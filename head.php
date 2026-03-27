<!-- CDNs (Restored for layout stability) -->
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="assets/css/aos.css">

<script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    primary: '#1B1D57',
                    secondary: '#F07D00',
                    surface: {
                        container: {
                            low: '#F8FAFC',
                            lowest: '#FFFFFF'
                        }
                    }
                },
                fontFamily: {
                    headline: ['Plus Jakarta Sans', 'sans-serif'],
                    body: ['Inter', 'sans-serif']
                }
            }
        }
    }
</script>

<style>
    .news-card-overlay {
        background: linear-gradient(to top, rgba(27, 29, 87, 0.9) 0%, rgba(27, 29, 87, 0.4) 50%, transparent 100%);
    }
    
    /* Flip Card Effect */
    .flip-card {
        background-color: transparent;
        height: 480px;
        perspective: 1000px;
    }
    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        transform-style: preserve-3d;
    }
    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }
    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 12px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
    }
    .flip-card-front {
        background-color: white;
        z-index: 2;
    }
    .flip-card-back {
        background-color: #1B1D57;
        color: white;
        transform: rotateY(180deg);
        z-index: 1;
        justify-content: center;
        border: 4px solid #F07D00;
        position: relative;
    }
    .back-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(100%, -50%) scale(8);
        opacity: 0;
        transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) 0.2s;
        pointer-events: none;
        color: white;
        z-index: 0;
    }
    .flip-card:hover .back-icon {
        transform: translate(-50%, -50%) scale(8);
        opacity: 0.1;
    }
    .flip-card-back > * {
        position: relative;
        z-index: 1;
    }

    /* WhatsApp Floating Button */
    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        text-decoration: none !important;
    }
    .whatsapp-float:hover {
        transform: scale(1.1);
        background-color: #128c7e;
        box-shadow: 0 6px 20px rgba(0,0,0,0.4);
    }
    .whatsapp-float i {
        margin: 0;
    }
    
    /* Pulse Animation */
    .pulse-whatsapp {
        animation: pulse-green 2s infinite;
    }
    @keyframes pulse-green {
        0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
        70% { transform: scale(1); box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
        100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
    }
</style>
<link rel="manifest" href="manifest.json">
<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('./sw.js')
        .then(reg => console.log('Service Worker registered', reg))
        .catch(err => console.error('Service Worker registration failed', err));
    });
  }
</script>
