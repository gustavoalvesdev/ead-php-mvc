
    <script src="<?= BASE_URL ?>assets/js/jquery.js"></script>
    <script>
        
        let alturaTela = 0;
        let posY = 0;
        let altura = 0;

        setInterval(() => {
            alturaTela = $(document).height();
            posY = $('.curso_left').offset().top;
            altura = alturaTela - posY;
            
            $('.curso_left, .curso_right').css('height', altura + 'px');
        }, 100);
    </script>
</body>
</html>