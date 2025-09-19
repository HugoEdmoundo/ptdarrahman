<!-- Custom Cursor -->
<div class="cursor-dot"></div>
<div class="cursor-outline"></div>

<style>
    .cursor-dot {
        width: 8px;
        height: 8px;
        background-color: #1E8449;
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9999;
        transform: translate(-50%, -50%);
        transition: transform 0.1s ease;
    }

    .cursor-outline {
        width: 40px;
        height: 40px;
        border: 2px solid #1E8449;
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9998;
        transform: translate(-50%, -50%);
        transition: all 0.2s ease-out;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');
        
        // Pastikan kursor hanya dijalankan di client side
        if (cursorDot && cursorOutline) {
            document.addEventListener('mousemove', function(e) {
                cursorDot.style.left = e.clientX + 'px';
                cursorDot.style.top = e.clientY + 'px';
                
                cursorOutline.style.left = e.clientX + 'px';
                cursorOutline.style.top = e.clientY + 'px';
            });
            
            // Interactive elements effect
            const interactiveElements = document.querySelectorAll('a, button, .hover-lift, .jurusan-card, .kurikulum-card');
            
            interactiveElements.forEach(element => {
                element.addEventListener('mouseenter', () => {
                    cursorDot.style.transform = 'translate(-50%, -50%) scale(1.5)';
                    cursorOutline.style.transform = 'translate(-50%, -50%) scale(1.2)';
                    cursorOutline.style.borderWidth = '1px';
                });
                
                element.addEventListener('mouseleave', () => {
                    cursorDot.style.transform = 'translate(-50%, -50%) scale(1)';
                    cursorOutline.style.transform = 'translate(-50%, -50%) scale(1)';
                    cursorOutline.style.borderWidth = '2px';
                });
            });
        }
    });
</script>