<h1>Seus Cursos</h1>

<div class="cursowrapper">

    <?php foreach($cursos as $curso): ?>
    
        <div class="cursoitem">
            <img src="<?= BASE_URL ?>assets/cursos/<?= $curso['imagem'] ?>" /><br /><br />

            <h4><?= $curso['nome'] ?></h4>

            <p><?php echo $curso['descricao']; ?></p>

            <a href="<?= BASE_URL ?>cursos/acessar/<?= $curso['id_curso'] ?>" class="link_curso">ACESSAR CURSO</a>
        </div>
        <!-- cursoitem -->
      
    <?php endforeach; ?>
</div>