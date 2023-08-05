<?php 

namespace Models;

use Core\Model;

class Curso extends Model
{
    public function getCursosDoAluno($id)
    {
        
        $dados = array();
        
        $sql = "SELECT 
                aluno_curso.id_curso,
                cursos.nome,
                cursos.imagem,
                cursos.descricao 
            FROM 
                aluno_curso
            LEFT JOIN 
                cursos 
            ON 
                aluno_curso.id_curso = cursos.id
            WHERE 
                aluno_curso.id_aluno = :id_aluno"
            ;
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id_aluno", addslashes($id));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll();
        }

        return $dados;

    }

}
