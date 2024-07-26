<style>
    #scroll-up-button {
        position: fixed;
        bottom: 5%;
        right: 3%;
        z-index: 30;
        width: 70px;
        height: 70px;
        background-color: #0d5cee;
        border-radius: 50%;
        border: 10px solid rgb(255, 255, 255);
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.5s ease;
        opacity: 0;
        transform: translateY(-95vh);
    }

    #scroll-up-button:hover {
        background-color: #0f2239;
    }

    /* Arrow up icon */
    #scroll-up-button-link > img {
        width: 1rem;
    }
</style>

<div id="scroll-up-button">
    <a href="#" id="scroll-up-button-link">
        <image src="assets/img/icon/arrow-up.png" id="up-arrow-icon" alt="Up Arrow"></image>
    </a>
</div>

<script>
    const scrollButton = document.getElementById('scroll-up-button');

    function toggleScrollButton() {
        if (window.scrollY > 200) {
            scrollButton.style.opacity = '1';
            scrollButton.style.transform = 'translateY(0)';
        } else {
            scrollButton.style.opacity = '0';
            scrollButton.style.transform = 'translateY(-100vh)';
        }
    }

    window.addEventListener('scroll', toggleScrollButton);

    scrollButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>