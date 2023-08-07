<?php 

namespace Models;

use Core\Model;

class Aluno extends Model
{
    
    private $info;

    public function isLogged()
    {
        //  Sessão do aluno logado
        return isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno']);
    }

    public function fazerLogin($email, $senha)
    {
        $sql = "SELECT * FROM alunos WHERE email = :email AND senha = :senha LIMIT 1";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $row = $sql->fetch();

            $_SESSION['lgaluno'] = $row['id'];

            return true;
        }

        return false;
        
    }

    public function setAluno($id)
    {
        $sql = "SELECT * FROM alunos WHERE id = :id LIMIT 1";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', addslashes($id));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $this->info = $sql->fetch();
        }
    }

    public function getNome()
    {
        return $this->info['nome'];
    }

    public function getId()
    {
        return $this->info['id'];
    }

    public function isInscrito($idCurso)
    {
        $sql = "SELECT * FROM aluno_curso WHERE id_aluno = :id_aluno AND id_curso = :id_curso";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_aluno', addslashes($this->info['id']));
        $sql->bindValue(':id_curso', addslashes($idCurso));
        $sql->execute();

        return $sql->rowCount() > 0;
    }

}
